<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title> @yield('title') </title>
</head>
<body>
    <!-- Header -->
    <div class="navbar-fixed">
        <nav class="row">
            <!-- SIDE LEFT -->
            <ul class="col s6 m5 l4">
                <li><a href=" {{ route('home') }} ">Home</a></li>
                <li><a href="">Categories</a></li>
                <li><a href="">Contato</a></li>
            </ul>
            <!-- SIDE RIGHT -->
            <ul class="col s6 m5 l3 offset-l5 m2">
                @if (auth()->guard('client')->check())
                    <li><a href="#" class="dropdown-trigger" data-target="drop-user">
                        {{ auth()->guard('client')->user()->name }}
                    <i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href=""><i class="material-icons">local_grocery_store</i></a></li>
                        <ul id="drop-user" class="dropdown-content">
                            <li><a href=" {{ route('client.edit', ['id' => auth()->guard('client')->user()->id]) }} ">
                                Edit<i class="material-icons">create</i></a></li>
                            <li><a href="#">Show<i class="material-icons">account_circle</i></a></li>
                            <li class="divider"></li>
                            <li><a href=" {{ route('client.logout') }} ">Sair<i class="material-icons">close</i></a></li>
                        </ul>
                @else
                    <li><a href=" {{ route('client.login') }} ">Login</a></li>
                    <li><a href=" {{ route('client.register') }} ">Register</a></li>
                @endif

                
            </ul>
        </nav>
    </div>
    <!-- endHeader -->
    <div class="container content" style="margin-top: 2rem;">
        @yield('content')
    </div>

<!-- Footer -->
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l4 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 s6">
                <h5 class="white-text">Categories</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Nanatsu No Taizai</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Boku no Hero</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">One Punch Man</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Tokyo Ghol</a></li>
                </ul>
              </div>
              <div class="col l4 s6">
                <h5 class="white-text">Categories</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Naruto</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Dragon Ball</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Shingeki no Kyojin</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Berserk</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Manga
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
 

    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/materialize.js')}}"></script>
    <script src="{{ asset('js/action.js')}}"></script>
</body>
</html>