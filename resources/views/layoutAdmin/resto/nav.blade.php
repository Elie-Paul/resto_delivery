<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('admin')}}"><i class="menu-icon fa fa-laptop"></i>Tableau de bord </a>
                </li>
                <li class="menu-title">Restaurant</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Paramètres de base</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-address-book-o"></i><a href="{{Route('resto.access')}}">Nom et adresse</a></li>
                        <li><i class="menu-icon fa fa-cutlery"></i><a href="#">Sélecteur de cuisine</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear"></i>Services et heures d'ouverture</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{Route('resto.reserv')}}">Réservation de table</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="#">Heure d'ouverture</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon fa fa-bars"></i>Menu</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <!--button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div-->
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{asset('images/admin.jpg')}}" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
