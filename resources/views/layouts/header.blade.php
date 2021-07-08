<div class="navbar-area fixed-top">

    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="assets/img/logo.png" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span style="font-weight: bold;color:black;">LOGO ICI</span>{{-- <img src="{{ asset('assets/img/logoATC.png') }}" alt="Logo" > --}}
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link dropdown-toggle active">ACCUEIL 
								{{-- <i class="icofont-simple-down"></i> --}}
							</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('offres') }}" class="nav-link">NOS OFFRES</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('service') }}" class="nav-link dropdown-toggle">SERVICE 
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">CONTACT</a>
                        </li>
                    </ul>
                    <div class="common-btn">
                        <a class="login-btn" href="{{ route('login') }}">
                            <i class="icofont-plus-square"></i>
                        	CONNEXION
                        </a>
                        <a class="sign-up-btn" href="{{ route('register') }}">
                            <i class="icofont-user-alt-4"></i>
                            S'INSCRIRE
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
