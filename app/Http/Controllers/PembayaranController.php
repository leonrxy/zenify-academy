<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function __construct()
    {
        \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized  = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds        = config('services.midtrans.is3ds');
    }

    public function pay(Request $request){
        try {
            DB::transaction(function() use($request) { 
                $pembayaran = \App\Models\Pembayaran::create([
                    'code'   => 'PEMBAYARAN-' . mt_rand(100000, 999999),
                    'name'   => $request->name,
                    'email'  => $request->email,
                    'amount' => $request->amount,
                    'note'   => $request->note,
                ]);

                if (!$pembayaran) {
                    // Log an error if creating the Pembayaran record fails
                    \Log::error('Failed to create Pembayaran record');
                    throw new \Exception('Failed to create Pembayaran record');
                }
    
                $payload = [
                    'transaction_details' => [
                        'order_id'     => $pembayaran->code,
                        'gross_amount' => $pembayaran->amount,
                    ],
                    'customer_details' => [
                        'first_name' => $pembayaran->name,
                        'email'      => $pembayaran->email,
                    ],
                    'item_details' => [
                        [
                            'id'            => $pembayaran->code,
                            'price'         => $pembayaran->amount,
                            'quantity'      => 1,
                            'name'          => 'Pembayaran to ' . config('app.name'),
                            'brand'         => 'Pembayaran',
                            'category'      => 'Pembayaran',
                            'merchant_name' => config('app.name'),
                        ],
                    ],
                ];
    
                $snapToken = \Midtrans\Snap::getSnapToken($payload);
                $pembayaran->snap_token = $snapToken;
                $pembayaran->save();
    
                $this->response['snap_token'] = $snapToken;
            });
    
            return response()->json([
                'status'     => 'success',
                'snap_token' => $this->response,
            ]);        
        }catch (\Exception $e) {
            // Log the error with detailed information
        \Log::error('Payment Error: ' . $e->getMessage());
        \Log::error('Stack Trace: ' . $e->getTraceAsString());

        // Return an error response
        return response()->json(['error' => 'Payment failed. Please try again.'], 500);
        }
        
    }
}
