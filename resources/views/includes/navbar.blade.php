<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#">
            <img src="{{ asset('img/logo-light.png') }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Home</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Main Home</a>
                        <a class="dropdown-item" href="#">Creative Production</a>
                        <a class="dropdown-item" href="#">Strategy</a>
                        <a class="dropdown-item" href="#">Consulting</a>
                        <a class="dropdown-item" href="#">Content</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Showcases</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">PR Communications</a>
                        <a class="dropdown-item" href="#">Marketing Campaign </a>
                        <a class="dropdown-item" href="#">Events</a>
                        <a class="dropdown-item" href="#">Concept Design</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutPage') }}">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">StudioX</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Video</a>
                        <a class="dropdown-item" href="#">Photo</a>
                        <a class="dropdown-item" href="#">Camera Crew</a>
                        <a class="dropdown-item" href="#">Design Studio</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactPage') }}">Contact</a>
                </li>
            </ul>
            <div class="search">
                <span class="icon pe-7s-search cursor-pointer"></span>
                <div class="search-form text-center custom-font">
                    <form>
                        <input type="text" name="search" placeholder="Search">
                    </form>
                    <span class="close pe-7s-close cursor-pointer"></span>
                </div>
            </div>
        </div>
    </div>
</nav>
