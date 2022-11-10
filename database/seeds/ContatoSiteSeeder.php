<?php

use Illuminate\Database\Seeder;
use App\ContatoSite;

class ContatoSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $contato = new ContatoSite();
        $contato->nome = ('nome');
        $contato->telefone = ('telfone');
        $contato->email = ('email');
        $contato->mensagem = ('mensagem');
        $contato->save();
    }
}
