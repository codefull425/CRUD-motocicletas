<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class MotoApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    #[Test]
    public function pode_criar_uma_moto()
    {
        $data = [
            'marca' => 'Yamaha',
            'modelo' => 'MT-09',
            'ano' => 2024,
            'preco' => 49990.00
        ];

        $response = $this->postJson('/api/motos', $data);

        $response->assertStatus(201)
            ->assertJsonFragment(['marca' => 'Yamaha']);
    }

    #[Test]
    public function pode_listar_motos()
    {
        $data = [
            'marca' => 'Yamaha',
            'modelo' => 'MT-03',
            'ano' => 2024,
            'preco' => 49990.00
        ];

        $data2 = [
            'marca' => 'Yamaha',
            'modelo' => 'MT-07',
            'ano' => 2024,
            'preco' => 49990.00
        ];

        $data3 = [
            'marca' => 'Yamaha',
            'modelo' => 'MT-09',
            'ano' => 2024,
            'preco' => 49990.00
        ];

        $this->postJson('/api/motos', $data);
        $this->postJson('/api/motos', $data2);
        $this->postJson('/api/motos', $data3);

        $response = $this->getJson('/api/motos');

        $response->assertStatus(200)
            ->assertJsonCount(3);
    }

    #[Test]
    public function pode_excluir_uma_moto()
    {
        $data = [
            'marca' => 'Yamaha',
            'modelo' => 'MT-03',
            'ano' => 2024,
            'preco' => 49990.00
        ];
        $this->postJson('/api/motos', $data);
        $postResponse = $this->postJson('/api/motos', $data);
        $id = $postResponse->json()['id'];

        $response = $this->deleteJson("/api/motos/{$id}");

        $response->assertStatus(204);
    }
}

