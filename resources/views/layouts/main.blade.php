<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    @vite('resources/scss/app.scss')

</head>
<body>
   
     <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                      

                        <li class="nav-item">
                            <a href="{{ route('controle.index') }}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Controle</span>
                            </a>
                        </li>
                   
                        <li>
                            <a href="{{route('sala.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-key"></i> <span class="ms-1 d-none d-sm-inline">Chaves/Salas</span> </a>
                        </li>
    
                        <li>
                            <a href="{{route('projetor.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-laptop"></i> <span class="ms-1 d-none d-sm-inline">Projetores</span> </a>
                        </li>

                        <li>
                            <a href="{{route('notebook.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-laptop"></i> <span class="ms-1 d-none d-sm-inline">Notebooks</span> </a>
                        </li>
    
                        <li>
                            <a href="{{route('pessoa.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Pessoas</span> </a>
                        </li>
                     @can('user_is_admin')
                        <li>
                            <a href="{{route('user.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Usuário</span> </a>
                        </li>
                        @endcan
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                          
                            <li><a class="dropdown-item" href="#">Alterar Senha</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Sair</button></form></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>
    
    
    @vite('resources/js/app.js')
</body>
</html>