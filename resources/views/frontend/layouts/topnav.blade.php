<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="logo" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/homepage">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/eco">Eco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/donation">Donations</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item" href="pricing.html">Pricing Table</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
