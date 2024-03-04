<h3>Fornecedor</h3>

{{-- Fica o comentario que será descartado pelo interpretador do blade --}}

{{-- 
{{'Texto teste '}}

<?= 'Texto teste '?> --}}

@php

//   if($a>$b){}
//   elseif($b>$a){}
//   else{}

@endphp
{{-- 
@if(count($fornecedores) > 0 && count($fornecedores) < 10) {
    <h3> Existem alguns fornecedores cadastrados </h3>
}
@elseif(count($fornecedores) >10){
    <h3> existem vários fornecedores cadastrados</h3>
}
@else
{
    <h3> ainda não existem fornecedores cadastrados</h3>
}
@endif --}}


    {{-- @dd($fornecedores) --}}

    {{-- @unless executa se a condição for falsa --}}

{{-- @isset ($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset ($fornecedores[0]['cnpj'])
        Cnpj: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
    <br>
    <br>
    @if(!($fornecedores[0]['status'] == 'S'))
        Fornecedor inativo
    @endif
    <br>
    @unless ($fornecedores[0]['status'] == 'S')
            Fornecedor inativo
    @endunless 
    <br>    
@endisset --}}

@php
    /*
    if(empty($variavel)) {} //retornar true se a varivel estiver vazia)
     - ''
     - 0
     - 0.0
     - '0'
     - null
     - false
     - array()
     - $var
    */
@endphp

@isset($fornecedores)
    Fornecedor: {{$fornecedores[1] ['nome']}}
    <br>
    Status: {{$fornecedores[1] ['status']}}
    <br>
    Cnpj: {{$fornecedores[1] ['cnpj'] ?? 'Dado não foi preenchido'}}
    {{-- se a variavel testada não estiver definida 
        ou
        $variavel testada possuir o valor null --}}
@endisset