<?php

namespace Tests\Feature;

use App\Models\Program;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Validation\ValidationException;

class ProgramControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function test_create_a_program()
    {
        $programData = [
            'nama' => 'Reguler Online',
            'harga' => '800000',
            'jangka_waktu' => 'Bulan',
            'jml_pertemuan' => '3',
            'waktu_pertemuan' => '90',
            'info_1' => '5 Orang/Kelas',
            'na_info_1' => 'y',
            'info_2' => 'Konseling Privat Via Chat dan Zoom',
            'na_info_2' => 'y',
            'info_3' => 'Bonus Modul Cetak',
            'na_info_3' => 'y',
            'style' => 'Normal',
            'label' => 'y',
            'info_label' => 'DISKON 15%',
        ];

        try {
            $response = $this->json('POST', '/api/programs', $programData);

            $response->assertStatus(201)
                ->assertJsonStructure(['data' => []]); // Adjust the expected structure based on your API response

        } catch (ValidationException $e) {
            // If a validation exception occurs, handle it here
            $this->fail('Validation exception occurred: ' . json_encode($e->errors()));
        } catch (\Exception $e) {
            // If any other exception occurs, handle it here
            $this->fail('An exception occurred: ' . $e->getMessage());
        }
    }


    /** @test */
    public function it_returns_all_programs()
    {
        Program::factory()->count(3)->create();

        $response = $this->json('GET', '/api/programs');

        $response->assertStatus(200)
            ->assertJsonStructure(['data' => []]); // Adjust the expected structure based on your API response
    }

    /** @test */
    public function it_returns_single_program()
    {
        $program = Program::factory()->create();

        $response = $this->json('GET', "/api/programs/{$program->id}");

        $response->assertStatus(200)
            ->assertJsonStructure(['data' => []]); // Adjust the expected structure based on your API response
    }



    /** @test */
    public function it_updates_a_program()
    {
        $program = Program::factory()->create();

        $updatedData = [
            'nama' => 'Updated Program',
            'harga' => 200,
            // Add other required fields
        ];

        $response = $this->json('PUT', "/api/programs/{$program->id}", $updatedData);

        $response->assertStatus(200)
            ->assertJsonStructure(['data' => []]); // Adjust the expected structure based on your API response
    }

    /** @test */
    public function test_delete_a_program()
    {
        $program = Program::factory()->create();

        $response = $this->json('DELETE', "/api/programs/{$program->id}");

        $response->assertStatus(200)
            ->assertJson(['message' => 'Program successfully deleted']);
    }
}
