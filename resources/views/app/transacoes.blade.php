@extends('layouts.main')

@section('content')


<table-transacao 
         :csrf-token="'{{ csrf_token() }}'" 
         :transacoes='@json($transacoes)'   
         >
</table-transacao>

@endsection