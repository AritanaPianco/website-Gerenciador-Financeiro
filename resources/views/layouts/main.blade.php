<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gestão Financeira') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <style>
      body{
         background-color: rgb(244, 250, 255);
    }
        #navBar{
            background-color:rgb(0, 0, 44);
            padding: 10px 10px;
            min-height: 100vh; 
            position: fixed; /* Alteração aqui */
            top: 0; /* Para fixar a navbar no topo */
            left: 0; /* Para alinhar a navbar na lateral esquerda */
            width: 230px; /* Largura da navbar */
            overflow-y: auto;          
        }
        
        #navBar a{
            text-align: center;
            color: white;
            font-weight: bold;
            max-width: 100%;
            text-decoration: none

        }

        #wrapperLinks{
            margin-top: 400px;
        }
        
        #wrapperActions a{
            text-align: center;
            max-width: 100%;
        }

        #centro{
            margin-left: 200px;
        }
   
   </style>

</head>
<body>
    <div id="app">     
     <div class="mw-100 min-vh-100">      
        <div id="navBar" class="d-flex flex-column">
           
            <div id="wrapperActions" class="d-flex flex-column mt-4">
                
                <a href="{{route('transacao.index')}}" class="btn btn-light mb-3 text-primary">Minhas Transações</a>
                <a href="{{route('transacao.create')}}" class="btn btn-light text-primary mb-3">Nova Transação</a>
                <a href="{{ route('categoria.create') }}" class="btn btn-light text-primary mb-3">Categoria</a>
            </div>
                              
            <div id="wrapperLinks" class="w-100 d-flex flex-column">
                
                @if (Route::has('login'))
                @auth
                  <a href="{{ url('/home') }}" class="btn btn-light btn-sm text-dark mb-3">Home</a>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-light btn-sm text-dark mb-3">
                        Sair
                  </a>
  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                  </form>

                @else
                  @guest 
                  <a href="{{ route('login') }}" class="btn mb-3 btn-light btn-sm text-dark">Login</a>
                
                  @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn mb-3 btn-light btn-sm text-dark">Register</a>
                  @endguest
                                   
                @endif
                @endauth
                
                @endif
                
            </div>
        </div>

        <div id="centro" class="">
            @yield('content')
        </div>

    </div>  
</div> 
   
</body>
</html>   