<?php

namespace Database\Seeders;

use App\Models\Conta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Conta::where('nome', 'Energia')->first()) {
            Conta::create([
               'nome' => 'Energia',
               'valor' => '147.52',
               'vencimento' => '2025-05-01', 
            ]);
        }

        if (!Conta::where('nome', 'Internet')->first()) {
            Conta::create([
                'nome' => 'Internet',
                'valor' => '97.99',
                'vencimento' => '2025-05-10',
            ]);
        };
        
        if (!Conta::where('nome', 'Telefone')->first()) {
            Conta::create([
                'nome' => 'Telefone',
                'valor' => '97.99',
                'vencimento' => '2025-05-15',
            ]);
        };

        if (!Conta::where('nome', 'Agua')->first()) {
            Conta::create([
                'nome' => 'Agua',
                'valor' => '97.99',
                'vencimento' => '2025-05-20',
            ]);
        };

        if (!Conta::where('nome', 'Luz')->first()) {
            Conta::create([
                'nome' => 'Luz',
                'valor' => '97.99',
                'vencimento' => '2025-05-25',
            ]);
        };

        if (!Conta::where('nome', 'Gas')->first()) {
            Conta::create([
                'nome' => 'Gas',
                'valor' => '97.99',
                'vencimento' => '2025-05-30',
            ]);
        };

        if (!Conta::where('nome', 'Aluguel')->first()) {
            Conta::create([
                'nome' => 'Aluguel',
                'valor' => '97.99',
                'vencimento' => '2025-06-05',
            ]);
        };
    }
}
