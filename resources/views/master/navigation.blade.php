<!-- Start navigation -->
<nav class="navbar navbar-default navbar-top">
    <div class="container-fluid">
        <div class="navbar-header head-nav">
            <button type="button" class="navbar-toggle bar-icon" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-logo" href="#"><img src="{{ asset(env('MASTER')) }}/images/dnvmaster-1.png" alt="DnvMaster"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-links">
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Категория <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Сборка мебели</a></li>
                        <li><a href="#">Услуги грузчиков</a></li>
                        <li><a href="#">Ремонт компьютеров</a></li>
                        <li><a href="#">Уборка квартир</a></li>
                        <li><a href="#">Электромонтеры</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left nav-search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav nav-links">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Отзывы <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Марина Васильевна</a></li>
                        <li><a href="#">Виктор Степанович</a></li>
                    </ul>
                </li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- End navigation -->
