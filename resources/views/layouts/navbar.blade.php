<nav dir="rtl" class="navbar navbar-expand-md navbar-light bg-white py-3" >
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
            <ul class="navbar-nav mr-auto">
                <!-- Authentication Links -->
                <li class="nav-item"><a href="/photo" class="nav-link">معرض الصور</a></li>
                <li class="nav-item"><a href="/videos" class="nav-link">معرض الفيديو</a></li>
                <li class="nav-item"><a href="/mygear" class="nav-link">المعدات</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">تواصل معنا</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">من نحن</a></li>

            </ul>
        </div>
    </div>
</nav>