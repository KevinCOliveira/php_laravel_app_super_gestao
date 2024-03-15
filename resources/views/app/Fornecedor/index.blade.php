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
    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        Cnpj: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        {{-- se a variavel testada não estiver definida 
            ou
            $variavel testada possuir o valor null --}}
        <br>
        Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG            
                @break
            @case('85')
                Fortaleza - CE 
                @break    
            @default
                Estado não identificado
        @endswitch
        <br>
        @if ($loop->first)
            primeira iteração do Loop
        @endif
        @if ($loop->last)
            ultima iteração do Loop
            <br>
            Total de registros: {{$loop->count}}
        @endif
        <br>
        <hr>
        @empty
            Não existem fornecedores cadastrados!!!
    @endforelse
@endisset

<br>
@for($i = 0; $i <10; $i++)
        {{$i}} <br>
@endfor
