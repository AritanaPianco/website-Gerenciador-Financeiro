@extends('layouts.main')

@section('content')

<div class="container mt-5">
           
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Transação</th>
                    <th scope="col">Método de Pagamento</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data da Transação</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($transacoes as $index => $transacao)
                 <tr>
                   <td>{{ $transacao->id }}</td>
                   <td>{{ $transacao->categoria}}</td>  
                   <td>{{ $transacao->tipoTransacao->nome }}</td>  
                   <td>{{ $transacao->metodoPagamento->nome }}</td>  
                   <td>{{ $transacao->valor }}</td>  
                   <td>{{ $transacao->descricao }}</td>  
                   <td>{{ $transacao->data_transacao }}</td>  
                 </tr>      
                @endforeach
               
            </tbody>
        </table>
       
    </div> 
    <nav aria-label="...">
        <ul class="pagination">
           <li class="page-item">
            <a class="page-link" href="{{ $transacoes->previousPageUrl()}}">Voltar</a>
          </li>
            
          @for ($i = 1; $i < $transacoes->lastPage(); $i++)
            <li class="page-item" {{$transacoes->currentPage() == $i ? "active" : '' }}>
                <a class="page-link" href="{{ $transacoes->url($i)}}">{{ $transacoes->currentPage() }}</a>
            </li>
              
          @endfor
        
           <li class="page-item">
             <a class="page-link" href="{{ $transacoes->nextPageUrl() }}">Avançar</a>
           </li>
        </ul>
      </nav>


    {{-- {{ $transacoes->appends($transacao->user_id)->links() }} --}}

   
</div>


@endsection

