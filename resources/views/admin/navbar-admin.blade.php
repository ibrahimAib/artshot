@if (auth()->user() != null)
    
<nav class="navbar navbar-expand-md navbar-light bg-light  ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Ibrahim Bin Ali
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
                    <li class="nav-item"><a href="/admin" class="nav-link">PHOTO</a></li>
                    <li class="nav-item"><a href="/adgear" class="nav-link">GEAR</a></li>
                    <li class="nav-item"><a href="/adcontact" class="nav-link">CONTACT</a></li>
                    <li class="nav-item"><a href="/admins" class="nav-link">Admins</a></li>
                    <li class="nav-item">
                        <form action="/addadmin" method="post">
                            @csrf
                            <button type="submit" class="bg-light border-0 p-0 nav-link py-2 px-2">ADD ADMIN</button>
                        </form>
                    </li>
                    <li class="nav-item"><a href="/createphoto" class="nav-link">CREATE PHOTO</a></li>
                    <li class="nav-item"><a href="/createvideo" class="nav-link">CREATE VIDEO</a></li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="bg-light border-0 p-0 nav-link py-2 px-2">LOG OUT</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endif  