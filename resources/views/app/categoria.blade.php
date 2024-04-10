@extends('layouts.main')

@section('content')
 
<div class="container" style="margin-top: 50px">
  
  <div id="wrapperTable" class="table-responsive">
        
       <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($categorias as $index => $categoria)
                 <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>  
                 </tr>      
                @endforeach
               
            </tbody>
        </table>
        
        
        {{ $categorias->appends($request->all())->links() }}

</div>


@endsection