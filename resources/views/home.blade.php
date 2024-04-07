@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-secondary bg-gradient text-light">Painel Adm - {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem vindo(a) ao seu gerenciador financeiro pessoal
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
