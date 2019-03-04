<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Bootstrap.png') }}" width="30" height="30" alt=""/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCart"
                aria-controls="navbarcrud" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarcrud">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link" href="/demo">Demo</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link" href="{{ route('contacts.index')}}">Users</a>
                </li>
            </ul>
        </div>
    </div>
</nav>