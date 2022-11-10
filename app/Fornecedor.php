<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    // Para Registro via ORM do Laravel ele faz automaticamente deixando tudo no plural
    // Por exemplo "forneceror" porem ele acrescentar apenas o "S" no final
    // E isso daria erro no banco de dados pois as tabelas estariam com nomes errados
    // Então usaremos o metodo protecte $tabele e passaremos o nome da tabela no dbo
    // e usar o tinker do php para teste de registro

    protected $table = 'fornecesdores';
}
