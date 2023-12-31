<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Create a new controller instance.
     *
     * @return RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.dashboard');
            } else if (auth()->user()->type == 'instruktur') {
                return redirect()->route('instruktur.dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        } else {
            $user = \App\Models\User::where('email', $input['email'])->first();
            if ($user) {
                // Email is correct, but the password is wrong
                return redirect()->route('login')->with('error', 'Incorrect password. Please try again.');
            } else {
                // Email is incorrect
                return redirect()->route('login')->with('error', 'Email-Address not found.');
            }
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return JsonResponse
     */
    public function apiLogin(Request $request): JsonResponse
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $user = \App\Models\User::where('email', $credentials['email'])->first();

        // if (!$user && !\Illuminate\Support\Facades\Hash::check($credentials['password'], $user->password)) {
        //     // Email is correct, but password is wrong
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Password Salah!',
        //         'data' => null
        //     ], 401);
        // }

        if (auth()->attempt($credentials)) {
            return response()->json([
                'success' => true,
                'message' => 'Login success',
                'data' => auth()->user()
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Email dan Password Salah!',
                'data' => null
            ], 401);
        }
    }
}
