@extends('layouts.main')

@section('content')


<form-transacao-component 
         :csrf-token="'{{ csrf_token() }}'" 
         :rota="'{{ route('transacao.store')}}'"    
         >
        </form-transacao-component>

@endsection