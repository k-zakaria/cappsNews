<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>YouEvento</title>

</head>
<style>
  .navbar-brand {
    color: #339898;
    font-weight: bold;
  }

  .navbar-nav {
    margin-left: auto;
  }
</style>


<body>
  <nav>
    <nav>
      <div class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm ">
        <div class="container  ">
          <a class="navbar-brand" href="/" style="color: #141f38; font-size: 25px; "><span style="color: #023071; " class="nav-brand-two">C</span>N</a>
          <div class="relative flex items-center">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <i class="fas fa-search text-gray-400"></i>
            </span>
            <input type="text" class="pl-3 pr-4 rounded-4 w-full py-1 border border-gray-300 " placeholder="Search">
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              @if(Auth::check())
              @if(Auth::User()->role_id == 1)
              <li><a class="nav-link ml-5 navigation" href="/categories">dashboard</a></li>
              @elseif(Auth::User()->role_id == 2)
              <li><a class="nav-link ml-5 navigation" href="/events">dashboard</a></li>
              @endif
              <li class="nav-item">
                <a class="nav-link ml-5 navigation" href="reservation">Mes réservations</a>
              </li>

              <div class="dropdown d-flex">
                <a href="#" class="dropdown-toggle nav-link   navigation " id="notificationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow dropdown__list" aria-labelledby="notificationsDropdown">
                  <li><a class="dropdown-item rounded-2" href="#">Profil</a></li>
                  <li><a class="dropdown-item rounded-2" href="#">Sitting</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item rounded-2" href="{{ route('user.logout') }}">Sign out</a></li>
                </ul>
              </div>
              @else
              <li class="nav-item">
                <a class="nav-link ml-5 navigation" href="{{ route('user.register') }}">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ml-5 navigation" href="{{ route('user.login') }}">Login</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
        <div>
        </div>
      </div>
      <div class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm  " style="margin-top: 50px;">
        <div class=" container collapse navbar-collapse  border-top " id="navbarNav">
          <ul class="navbar-nav mx-auto justify-content-center  ">
            <li class="nav-item">
              <a class="nav-link" href="#">World</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Politics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Business</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opinion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tech</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Science</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Health</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Entertainment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Travel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">More</a>
            </li>
          </ul>
        </div>
      </div>



    </nav>

    <section>
@yield('content')

    </section>


    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>