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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <style>
        body{
           /* background-color: rgb(244, 250, 255); */
           background-color: #131e26;
         }
           #navBar{
              /* background-color:rgb(0, 0, 44); */
              background-color: #20282d;
              padding: 10px 10px;
              min-height: 100vh; 
              /* position: fixed;  */
              /* top: 0;  */
              /* left: 0;  */
              /* position: relative; */

          }


           #wrapperTable{
                /* margin-left: 250px; */
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
        
        #wrapperActions{
            display: flex;
            flex-direction: column;
            
        }
        
        #wrapperActionsMobile{
            display: none;
         
        }

        #wrapperTable thead th{
          text-align: center 
        }
        #wrapperTable tbody tr td{
          text-align: center 
        }
        
        /* @media screen and (max-width: 1000px){        
             #wrapperTable{
                  margin-left: 180px;
            }
      
        }       
        @media screen and (max-width: 800px){        
             #wrapperTable{
                  margin-left: 150px;
            }
      
        }       
        @media screen and (max-width: 700px){        
             #wrapperTable{
                  margin-left: 100px;
            }
      
        }       
        @media screen and (max-width: 550px){        
             #wrapperTable{
                  margin-left: 100px;
            }
      
        }        */

        @media screen and (max-width: 530px){
            #navBar{
                /* position: fixed;
                top: 0;
                left: 0;
                min-height: 100vh */
                    
            }

            #wrapperTable{
                  /* margin-left: 50px; */
            }

            #welcome{
                margin-left: 10px;
                font-size: 10px
            }
            #wrapperActions{
                display: none;  
            }
            
            .link{
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 5px;
                font-size: 10px;
            }
            
            #wrapperActionsMobile{
                display: flex;
                flex-direction: column
            }

              
            #wrapperLinks{
               margin-top: 370px;
            
           }
            
        
        }
   
   </style>

</head>
<body>
    <div id="app">   

        
<div class="container mw-100">
      <div class="row">
            
        <div id="navBar" class="col-2 flex-column">

            <div id="wrapperActionsMobile" class="w-100 mt-5">
                <a href="{{route('transacao.create')}}"  class="link btn btn-light text-primary mb-3">
                    <i class="ri-folder-open-fill"></i>
                    {{-- Nova Transação --}}
                </a>
                <a href="{{route('transacao.index')}}" class="link btn btn-light mb-3 text-primary">
                    <i class="ri-organization-chart"></i>
                    {{-- Minhas Transações --}}
                </a>
                <a href="{{ route('categoria.index') }}" class="link btn btn-light text-primary mb-3">
                    <i class="ri-numbers-fill"></i>
                </a>
            </div>


           
            <div id="wrapperActions" class="w-100 mt-5">
                <a href="{{route('transacao.create')}}"  class="link btn btn-light text-primary mb-3">
                    <i class="ri-folder-open-fill"></i>
                    Nova Transação
                </a>
                <a href="{{route('transacao.index')}}" class="link btn btn-light text-primary mb-3">
                    <i class="ri-organization-chart"></i>
                    Minhas Transações
                </a>
                <a href="{{ route('categoria.index') }}" class="link btn btn-light text-primary mb-3">
                    <i class="ri-numbers-fill"></i>
                    Minhas Categorias
                </a>
            </div>
                
                              
            
            <div id="wrapperLinks" class="w-100 d-flex flex-column overflow-hidden">
                @if (Route::has('login'))
                @auth
                  <a href="{{ url('/home') }}"  class="link btn btn-light btn-sm text-primary mb-3">Home</a>
                  <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link btn btn-light btn-sm text-primary mb-3">
                        Sair
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                  </form>
  
                @else
                  @guest 
                    <a href="{{ route('login') }}" class="link btn mb-3 btn-light btn-sm text-primary">Login</a>
                
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="link btn mb-3 btn-light btn-sm text-primary">Register</a>
                  @endguest
                                   
                @endif
                @endauth
                @endif
                 
            </div>
        </div>  
        
        <div id="centro" class="col-10">
            @yield('content')
        </div>
    </div>
        
</div>


</div> 
   
</body>
</html>   