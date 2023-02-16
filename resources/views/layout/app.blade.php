<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarriereChange</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="public/css/general.css" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, #4e42f5, #96f4f5);">
        <div class="container-fluid">
            <img src="{{asset("images/logo.png")}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="/">CarriereChange</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("about")}}">À propos de nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("contact")}}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route("osp")}}">Orientation scolaire et professionnelle</a></li>
                            <li><a class="dropdown-item" href="{{route("coaching")}}">Coaching</a></li>
                            <li><a class="dropdown-item" href="{{route("formation")}}">Formation</a></li>
                            <li><a class="dropdown-item" href="{{route("transition")}}">Transition</a></li>
                            <li><a class="dropdown-item" href="{{route("jobCounseling")}}">Conseils en emploi</a></li>
                            <li><a class="dropdown-item" href="{{route("immersiveCourse")}}">Stage immersif</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav me-right mb-2 mb-lg-0">
                    @if (!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.login') }}">
                                <span class="bi bi-box-arrow-in-right"></span>
                                <span class="d-sm-none">Connexion</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("users.changepassword")}}">
                                <span class="bi bi-person"></span>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("clients.index")}}">Clients</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("editors.index")}}">Editeur de pages</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("image.form")}}">Gestionnaire d'image</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.logout') }}">
                                <span class="bi bi-box-arrow-right"></span>
                                <span class="d-sm-none">Déconnexion</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script> --}}
    <div class="container mt-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
        @endif
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @stack('scripts')
    <script src="/js/app.js"></script>
</body>
</html>
