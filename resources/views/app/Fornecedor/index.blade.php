<h3>Fornecedor</h3>

{{-- Fica o comentario que será descartado pelo interpretador do blade --}}

{{'Texto teste '}}

<?= 'Texto teste '?>

@php

//   if($a>$b){}
//   elseif($b>$a){}
//   else{}

@endphp



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
@endif

@dd($fornecedores)