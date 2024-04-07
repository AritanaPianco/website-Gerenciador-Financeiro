@extends('layouts.main')

@section('content')
 
  
  <form-categoria-component :csrf-token="'{{ csrf_token() }}'" :rota="'{{ route('categoria.store') }}'"></form-categoria-component>

@endsection