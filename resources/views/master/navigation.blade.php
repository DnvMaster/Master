<!-- Start navigation -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-logo" href="{{ url('/') }}">
                <img src="{{ asset(env('MASTER')) }}/images/dnvmaster-1.png" alt="DnvMaster">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Главная</a></li>
                <li><a href="{{ url('/') }}"><i class="fa fa-edit"></i> О нас</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- End navigation -->
