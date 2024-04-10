@extends('layouts.main')

@section('content')

<div class="container" style="margin-top: 50px">
  
  <filtro-transacao :csrf-token="'{{ csrf_token() }}'" :rota="'{{ route('categoria.index') }}'"></filtro-transacao>
  
  
  <div id="wrapperTable" class="table-responsive">
        
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
                    <th scope="col">Ações</th>
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
                   <td>
                       <form action="{{ route('transacao.destroy', ['id' => $transacao->id ])}}" method="POST">
                          @csrf
                          {{-- @method("DELETE") --}}
                          <button type="submit" class="btn btn-danger btn-sm">
                              <i class="ri-delete-bin-7-fill"></i> 
                          </button> 

                       </form>
                   </td>  
                 </tr>      
                @endforeach
               
            </tbody>
        </table>
       
            
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
       
    </div> 

    {{-- {{ $transacoes->appends($transacao->user_id)->links() }} --}}
  
</div>

@endsection