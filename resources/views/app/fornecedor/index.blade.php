<h3>Fornecedor</h3>

{{-- Comentário dentro do blade para fazer os testes--}}

@php
   /*
    if() {

    }
    elseif() {

    }

    else{

    }
    */

@endphp


@isset($fornecedores) 

    @forelse($fornecedores as $indice => $fornecedores)
        Iteração atual: {{ $loop->iteration }}
    <br>
       Fornecedores: {{$fornecedores ['nome']}}
    <br>
        Status: {{$fornecedores ['status']}}
    <br>
        CNPJ: {{$fornecedores ['cnpj'] ?? ''}}
    <br>
        Telefone: {{$fornecedores ['ddd'] ?? ''}} {{$fornecedores  ['telefone'] ?? ''}}
    <hr>   
    @empty
            Não existem fornecedores cadastrados!!;
    @endforelse
@endisset

        


   <!-- $variavel testada não estiver definida (isset)
   ou
   $variavel testada possuir o valor null
   
   {{-- @isset($fornecedores [0] ['cnpj'])
       CNPJ : {{$fornecedores [0] ['cnpj']}}
       @empty ($fornecedores [0] ['cnpj'])
            - Vazio
        @endempty
    @endisset
    --}}



{{--
Fornecedores: {{$fornecedores [0] ['nome']}}
<br>
Status: {{$fornecedores [0] ['status']}}
<br>
@if(!($fornecedores [0] ['status'] == 'S'))
    Fornecedor inativo
@endif
<br>

@unless($fornecedores [0] ['status'] == 'S')
    Fornecedor inativo
@endunless
<br>
--}}
{{--Sintaxe blade Caso não queira passa isso dentro do php puro--}}


{{--
@if(count($fornecedores) > 0 && count($fornecedores) <10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(couunt($fornecedores) >10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@else
    <h3>ainda não existem alguns fornecedores cadastrados</h3>
@endif
--}}

{{-- Sintaxe unless, ao contrário do !(contato) que seria a inversão do resoltado apra entrar dentro da condição if do php
o @unless faz isso automáticamente dentro do blade... Traz o retorno caso seja negativo--}}
