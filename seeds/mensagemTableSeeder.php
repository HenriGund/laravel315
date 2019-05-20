<?php

use Illuminate\Database\Seeder;
use App\Mensagem;


class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'prova de matemática',
            'autor' => 'Henrique',
            'mensagem' => 'geometria e média aritmética'
        ]);

        Mensagem::create([
            'titulo' => 'prova de matemática',
            'autor' => 'Henrique',
            'mensagem' => 'geometria e média aritmética'
        ]);
    }
}
