{{-- @auth

    <div class="pie pie1" onclick="document.body.classList.remove('active')">
        <div class="pie-color pie-color1">
            <a class="nav-link" href="{{ route('order.index') }}">
                <svg class="card_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                    <path
                        d="M99.98 27.38c0-7.597-6.18-13.777-13.78-13.777H13.78C6.18 13.603 0 19.783 0 27.38v45.842C0 80.82 6.18 87 13.778 87H86.2c7.6 0 13.8-6.18 13.8-13.778v-45.84zm-92.678 0c0-3.555 2.9-6.433 6.455-6.433H86.18c3.555 0 6.455 2.878 6.455 6.434v4.213H7.302zM86.18 79.657H13.757c-3.556 0-6.455-2.9-6.455-6.434V44.185h85.312v29.037c.02 3.556-2.88 6.434-6.434 6.434zM23.852 60.82s-3.725-.973-4.466-1.122c-.783-.19-.867-.635-.867-1.015v-.424c0-.255.02-.51.23-.72.128-.127.32-.212.53-.212h3.47c.298 0 .51.064.827.91l.042.127c.04.17.19.445.72.445.316 0 .824-.085 1.438-.254.57-.17 1.058-.635 1.29-1.207.234-.593.17-1.228-.19-1.757-.846-1.334-2.264-2.2-3.936-2.37 0-.128-.02-.297-.02-.51 0-.845-.87-1.523-1.97-1.523s-1.968.657-1.968 1.524c0 .19 0 .36-.02.487-2.668.128-4.572 2.117-4.572 4.848v.804c0 2.137 1.333 4 3.238 4.508l5.354 1.46c.254.064.423.318.423.635v.466c0 .19 0 .7-.232.932-.127.148-.318.21-.487.21h-3.47c-.276 0-.403-.083-.488-.19-.233-.232-.317-.613-.38-.867-.064-.19-.234-.444-.763-.444-.338 0-.846.086-1.418.234-.572.148-1.038.592-1.292 1.164-.254.592-.19 1.248.127 1.8.868 1.46 2.307 2.348 3.916 2.432v.487c0 .445.233.847.636 1.143.36.254.825.38 1.333.38h.02c1.1 0 1.968-.676 1.968-1.523v-.508c2.603-.212 4.593-2.37 4.593-5.1v-.636c.022-2.2-1.48-4.085-3.618-4.614zm7.704 10.54H83.98v-4.19H31.555z" />
                </svg>
            </a>
        </div>
    </div>
    <div class="pie pie2" onclick="document.body.classList.remove('active')">
        <div class="pie-color pie-color2">
            <svg class="discount" xmlns="http://www.w3.org/2000/svg" viewBox="-375 377 100 100" width="100" height="100">
                <path fill="#fff"
                    d="M-311.266 425.624c-.106 0-.212 0-.34.022-1.057.127-1.755.783-2.115 2.01-.318 1.1-.36 2.645-.128 4.57.19 1.567.783 6.307 3.407 6.307.105 0 .21 0 .317-.02 1.947-.234 2.603-2.37 2.074-6.667-.507-4.317-1.502-6.222-3.216-6.222zm-28.166-9.967c-.106 0-.212 0-.34.02-.634.086-1.12.34-1.5.827-.784 1.016-1.038 3.005-.7 5.756.508 4.21 1.61 6.242 3.365 6.242.106 0 .19 0 .296-.02 1.12-.128 1.798-.868 2.094-2.265.297-1.397.148-3.153 0-4.36-.508-4.274-1.502-6.2-3.216-6.2zm63.654 10.306l-12.887-7.13c-1.037-.573-1.397-1.885-.783-2.9l7.597-12.613c.613-1.016.147-1.84-1.06-1.82l-14.728.275c-1.185.02-2.137-.93-2.116-2.116l.275-14.73c.022-1.206-.782-1.67-1.82-1.058l-12.61 7.576c-1.017.614-2.33.275-2.9-.783l-7.132-12.887c-.57-1.037-1.524-1.037-2.095 0l-7.13 12.887c-.573 1.037-1.885 1.397-2.9.783l-12.634-7.597c-1.017-.613-1.842-.147-1.82 1.06l.274 14.728c.02 1.185-.93 2.137-2.116 2.116l-14.73-.275c-1.184-.022-1.67.782-1.057 1.82l7.598 12.61c.614 1.017.275 2.33-.783 2.9l-12.887 7.132c-1.037.57-1.037 1.524 0 2.095l12.887 7.13c1.037.573 1.397 1.885.783 2.9l-7.597 12.634c-.613 1.017-.147 1.842 1.06 1.82l14.728-.274c1.185-.02 2.137.93 2.116 2.116l-.275 14.73c-.022 1.205.782 1.67 1.82 1.057l12.61-7.598c1.017-.614 2.33-.275 2.9.783l7.132 12.887c.57 1.037 1.524 1.037 2.095 0l7.13-12.887c.573-1.037 1.885-1.397 2.9-.783l12.613 7.597c1.016.613 1.84.147 1.82-1.06l-.275-14.728c-.02-1.185.93-2.137 2.116-2.116l14.73.275c1.185.022 1.67-.782 1.058-1.82l-7.597-12.61c-.613-1.017-.274-2.33.784-2.9l12.887-7.132c1.06-.592 1.06-1.524.022-2.095zm-62.067 8.19c-.402.042-.783.063-1.185.063-1.905 0-3.577-.592-5.08-1.82-3.11-2.54-3.935-6.2-4.337-9.46-.487-4.04.148-7.28 1.947-9.65 1.523-1.967 3.66-3.173 6.137-3.47.36-.042.72-.063 1.1-.063 2.73 0 5.185 1.27 6.9 3.555 1.395 1.82 2.22 4.17 2.623 7.407.444 3.64 0 6.772-1.29 9.078-1.398 2.476-3.747 3.98-6.815 4.36zm8.634 10.686c-.192.486-.72 1.82-2.308 2.01-.084.02-.17.02-.275.02-1.12 0-2.412-.655-2.582-2.115-.084-.72.148-1.355.36-1.82l13.184-33.817c.36-.762.803-1.777 2.263-1.947.106-.02.212-.02.318-.02 1.122 0 2.307.677 2.498 2.18.084.656-.064 1.08-.233 1.502zm26.345-5.08c-1.396 2.498-3.767 4.02-6.856 4.402-.424.043-.826.085-1.23.085-1.882 0-3.533-.593-5.056-1.82-3.11-2.518-3.936-6.222-4.338-9.502-.487-4.042.17-7.3 1.946-9.65 1.545-1.968 3.66-3.174 6.137-3.47.36-.042.74-.063 1.12-.063 1.948 0 4.74.613 6.92 3.555 1.398 1.82 2.223 4.19 2.625 7.406.444 3.598 0 6.75-1.27 9.058z" />
            </svg>
        </div>
    </div>
    <div class="pie pie3" onclick="document.body.classList.remove('active')">
        <div class="pie-color pie-color3">
            <a class="nav-link" href="{{ url('/product') }}">
                <svg class="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                    <path
                        d="M98.993 14.537c-.816-.966-2.018-1.503-3.263-1.503H25.698c-.064 0-.107.022-.172.022l-9.36-9.404c-.816-.794-1.91-1.245-3.05-1.245H4.295C1.932 2.407 0 4.34 0 6.7c0 2.363 1.932 4.295 4.294 4.295h7.063l7.73 7.728 9.574 56.893c.344 2.06 2.148 3.585 4.23 3.585h50.388c2.36 0 4.293-1.93 4.293-4.293 0-2.36-1.93-4.293-4.292-4.293h-46.76l-1.588-9.447h54.423c2.104 0 3.908-1.524 4.23-3.606l6.354-39.545c.215-1.267-.128-2.533-.944-3.478zm-60.177 38.02H33.49L31.56 41.03h7.256zm0-20.115H30.1L28.273 21.6h10.542zm16.38 20.116h-7.793V41.03h7.793zm0-20.116h-7.793V21.6h7.793zm16.38 20.116h-7.792V41.03h7.793zm0-20.116h-7.792V21.6h7.793zm14.128 20.116h-5.54V41.03h7.386zm3.22-20.116h-8.78V21.6h10.52zm-47.618 50.13c-4.143 0-7.514 3.37-7.514 7.514 0 4.143 3.37 7.514 7.514 7.514s7.514-3.37 7.514-7.514-3.37-7.514-7.514-7.514zm34.758 0c-4.143 0-7.514 3.37-7.514 7.514 0 4.143 3.37 7.514 7.514 7.514 4.165 0 7.514-3.37 7.514-7.514s-3.35-7.514-7.514-7.514z" />
                </svg>
            </a>
        </div>
    </div>
    <div class="menu" onclick="document.body.classList.toggle('active')">
        <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
            <g fill="none" stroke="#000" stroke-width="7.999" stroke-linecap="round">
                <path d="M 55,26.000284 L 24.056276,25.999716" />
                <path d="M 24.056276,49.999716 L 75.943724,50.000284" />
                <path d="M 45,73.999716 L 75.943724,74.000284" />
                <path d="M 75.943724,26.000284 L 45,25.999716" />
                <path d="M 24.056276,73.999716 L 55,74.000284" />
            </g>
        </svg>
    </div> --}}


    {{-- <div class="user_title">
        <img class="rounded-circle border border-dark rounded-lg"
            src="{{ URL::asset('/storage/logo/9_gamers_dark.png') }}" width="200px;" height="150px;" alt="">
       
        9 GAMERS
    </div>
    <div class="body">
        Online Shopping Cart
    </div> --}}

    {{-- <div class="color_primary" id="fixed-div_name">
        NAME 
    </div> --}}
    {{-- <div class="user_menu" id="fixed-div">
        <div class="user_title_nav" onclick="f()"> <h3><i class="fas fa-ellipsis-v"></i></h3>
            <div class=""></div>
        </div> 
        <div class="dropdown">
            <p>Settings <span class="fas fa-user-cog"></span></p>
            <p>Sign Out <span class="fas fa-sign-out-alt"></span></p>
        </div>
    </div>
@endauth

<script>
    function f() {
        document.getElementsByClassName('dropdown')[0].classList.toggle('down');
        document.getElementsByClassName('arrow')[0].classList.toggle('gone');
        if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
            setTimeout(function() {
                document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
            }, 500)
        } else {
            document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
        }
    }

</script> --}}

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/product') }}">products</a>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <a href="{{ route('cart.show') }}" class="nav-link ">
                    <span class="fas fa-shopping-cart">
                        ({{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }})
                    </span>
                </a>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ url('/orders') }}" class="dropdown-item font-weight-bold">
                            <i class="fas fa-th text-primary"></i>
                            Orders
                        </a>
                        <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt text-danger"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
