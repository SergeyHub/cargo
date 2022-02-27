<!-- navbar start -->
<nav class="navbar navbar-expand-lg fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="index.html">JSON</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <!--<span class="navbar-toggler-icon"></span>-->
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" data-scroll-nav="0" href="{{ route('home') }}">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll-nav="1" href="{{ route('post.index') }}">PlaceHolder</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    Reddit
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('reddit.show') }}">Show Data</a></li>
                    <li><a class="dropdown-item" href="{{ route('reddit.index') }}">Index Method</a></li>
                    <li><a class="dropdown-item" href="{{ route('reddit.filter') }}">FilterMethod</a></li>
                    <li><a class="dropdown-item" href="{{ route('reddit.pluck') }}">PluckMethod</a></li>
                    <li><a class="dropdown-item" href="{{ route('reddit.contains') }}">ContainsMethod</a></li>
                    <li><a class="dropdown-item" href="{{ route('reddit.groupby') }}">GroupByMethod</a></li>
                    <li><a class="dropdown-item" href="{{ route('reddit.sortby') }}">SortByMethod</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll-nav="3" href="#">download</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll-nav="4" href="#">testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll-nav="5" href="#">pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll-nav="6" href="#">team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll-nav="7" href="#">faq</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll-nav="8" href="#">contact</a>
            </li>
        </ul>
    </div>
</nav>
<!-- navbar end -->
