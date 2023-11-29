<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carro>
 */
class CarroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $direcao = ['Hidraulica', 'Eletrica', 'Não tem'];
        $tipo_combustivel = ['Gasolina', 'Alcool', 'Diesel'];  
        $motor = ['1.0', '1.4', '1.6', '1.8', '2.0', '2.2'];
        $fabricante = ['Fiat', 'Toyota', 'Volkswagen', 'Ford', 'Hyundai', 'Chevrolet', 'Audi', 'Honda', 'BMW', 'Renault', 'Mercedes-Benz'];
        $marca = ['palio', 'Gol', 'Uno', 'Onix', 'Civic', 'A3', 'i30', 'Corolla', 'Clio', 'ka', 'Vectra'];
        $cor = ['Prata', 'Preto', 'Branco', 'Vermelho', 'Azul', 'Verde', 'Amarelo', 'Cinza'];
        $alarme = ['Sim', 'Não'];

        return [   
            'marca' => $fabricante[array_rand($fabricante)],
            'modelo' => $marca[array_rand($marca)],
            'ano' => fake('pt_BR')->date('Y'),
            'ano_modelo' => fake('pt_BR')->date('Y'),
            'km' => rand(5000, 200000),
            'tipo_combustivel' => $tipo_combustivel[array_rand($tipo_combustivel)],
            'motor' => $motor[array_rand($motor)],
            'cor' => $cor[array_rand($cor)],
            'tipo_direcao'  => $direcao[array_rand($direcao)],
            'alarme'  => $alarme[array_rand($alarme)],
            'placa'  => '',
            'valor'  => rand(10000, 80000),
            'qntd_portas'  => rand(2, 4) 
        ];
    }
}
