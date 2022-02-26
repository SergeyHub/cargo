<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">Placeholder Data</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Reddit Data
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
                <!-- Cargo -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Cargo Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('cargo.test') }}">Test Cargo Data</a></li>
                        <li><a class="dropdown-item" href="{{ route('cargo.index') }}">IndexMethod</a></li>
                        <li><a class="dropdown-item" href="{{-- route('reddit.pluck') --}}">PluckMethod</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <!-- Fruits -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Fruits Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('fruit.get.data') }}">Fruit Data</a></li>
                        <li><a class="dropdown-item" href="{{ route('cargo.index') }}">IndexMethod</a></li>
                        <li><a class="dropdown-item" href="{{-- route('reddit.pluck') --}}">PluckMethod</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>


            </ul>

        </div>
    </div>
</nav>
