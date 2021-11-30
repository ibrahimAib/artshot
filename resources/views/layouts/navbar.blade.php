<nav class="navbar navbar-expand-md navbar-dark bg-dgray py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="" src="image/logo.png" height="120px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item"><a href="/photo" class="nav-link">PHTOT</a></li>
                <li class="nav-item"><a href="/video" class="nav-link">VIDEO</a></li>
                <li class="nav-item"><a href="/mygear" class="nav-link">MY GEAR</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">CONTACT</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">ABOUT</a></li>
                <li class="nav-item"><a href="/createphoto" class="nav-link">CREATE Photo</a></li>
                <li class="nav-item"><a href="/createvideo" class="nav-link">CREATE video</a></li>
            </ul>
        </div>
    </div>
</nav>