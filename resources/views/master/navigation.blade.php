<nav class="navbar navbar-default navbar-top">
    <div class="container-fluid">
        <div class="navbar-header head-nav">
            <button type="button" class="navbar-toggle bar-icon" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-logo" href="{{ url('/') }}"><img src="{{ asset(env('MASTER')) }}/images/dnvmaster-1.png" alt="DnvMaster"></a>
        </div>
        @if($menu)
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav-links">
                    @include(env('MASTER').'.menuItems',['items'=>$menu->roots()])
                </ul>
            </div>
        @endif
    </div>
</nav>
