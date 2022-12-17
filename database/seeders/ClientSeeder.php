<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'name' => 'Rodrigo da Silva',
                'phone' => '68984151312',
                'email' => 'cliente1@gmail.com',
                'password' => Hash::make('cliente123'),
                'cpf' => '12345678999',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pedro Alves dos Santos',
                'phone' => '68999554422',
                'email' => 'cliente2@gmail.com',
                'password' => Hash::make('cliente123'),
                'cpf' => '12345678991',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ronaldo Pedrinho Ribeiro',
                'phone' => '68999774128',
                'email' => 'cliente3@gmail.com',
                'password' => Hash::make('cliente123'),
                'cpf' => '12343648992',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('clients')->insert($clients);
    }
}
