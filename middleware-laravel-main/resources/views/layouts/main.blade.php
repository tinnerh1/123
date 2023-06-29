<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- CSS Local  --}}
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <!-- CSS Externos -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
  </head>
  <body>

    <div class="sidebar">
        <div class="sidebar-logo">
            <div class="logo-details">
                <i id="logo" class='bx bxl-c-plus-plus'></i>
                <a href="">Chamados</a>
            </div>
            <i class='bx bx-menu'></i>
        </div>
        <div class="sidebar-content">
            <ul>
                <li>
                    <i class='bx bx-grid-alt'></i>
                    <a href="#">Dashboard</a>
                    <span>Dashboard</span>
                </li>
                <li>
                    <i class='bx bx-data' ></i>
                    <a href="#">Dados</a>
                    <span>Dados</span>
                </li>
                <li>
                    <i class='bx bx-food-menu'></i>
                    <a href="">Formulários</a>
                    <span>Formulários</span>
                </li>
                <li>
                    <i class='bx bx-user' ></i>
                    <a href="">Profile</a>
                    <span>Profile</span>
                </li>
                <li>
                    <i class='bx bx-chat' ></i>
                    <a href="#">Notification</a>
                    <span>Notification</span>
                </li> 
                <li>
                    <i class='bx bx-cog'></i>
                    <a href="">Settins</a>
                    <span>Settins</span>
                </li> 
            </ul>
        </div>
    </div>
    <div class="home-content">
        <h3>Dashboard</h3>
    </div>

    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/script.js')}}"></script>
</body> 
</html>