<nav class="header navbar navbar-expand-md bg-dark shadow-sm header">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img style="width: 30px; height:auto; margin-right:10px;" src="{{ asset('imgs/tomato.svg') }}" alt="">

            Home
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contacts') }}">Contacts</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @include('layouts.top_menu', ['categories' => $categories])
            </div>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">




                <!-- Authentication Links -->
                @guest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Sign in') }}</a>
                </li>

                @if (Route::has('register'))
                <li class=" nav-item ">
                    <a class="nav-link sign__up" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                </li>
                @endif

                @else
                <li class="nav-item mr-4">
                    <a href="{{ url('/profile') }}" class="nav-link">
                        Your profile
                    </a>
                </li>

                <li class="nav-item dropdown d-flex align-items-center">
                    <svg fill="#fff" class="bi bi-box-arrow-left" width="1em" height="1em" viewBox="0 0 16 16"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.354 11.354a.5.5 0 000-.708L1.707 8l2.647-2.646a.5.5 0 10-.708-.708l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708 0z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M11.5 8a.5.5 0 00-.5-.5H2a.5.5 0 000 1h9a.5.5 0 00.5-.5z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M14 13.5a1.5 1.5 0 001.5-1.5V4A1.5 1.5 0 0014 2.5H7A1.5 1.5 0 005.5 4v1.5a.5.5 0 001 0V4a.5.5 0 01.5-.5h7a.5.5 0 01.5.5v8a.5.5 0 01-.5.5H7a.5.5 0 01-.5-.5v-1.5a.5.5 0 00-1 0V12A1.5 1.5 0 007 13.5h7z"
                            clip-rule="evenodd" />
                    </svg>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
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
