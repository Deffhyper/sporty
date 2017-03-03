<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="site-header__logo">
                        <a href="javascript:void(0)">
                            <img src="img/jpeg_files/site-logo.png" alt="site logo">
                        </a>
                    </div>
                    <div class="site-header__tel">
                        <i class="icon-phone"></i>
                        <a href="tel:8 (800) 757 32 15" class="site-header__tel--title">8 (800) 757 32 15</a>
                        <a href="#" class="site-header__tel--handler" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-arrow"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><i class="icon-b-line"></i><a href="tel:+38 (093) 757 32 15"><span>+38 (093)</span> 757 32 15</a></li>
                            <li><i class="icon-vd-phone"></i><a href="tel:+38 (099) 757 32 15"><span>+38 (099)</span> 757 32 15</a></li>
                            <li><i class="icon-kvstr"></i><a href="tel:+38 (067) 757 32 15"><span>+38 (067)</span> 757 32 15</a></li>
                        </ul>
                    </div>
                    <div class="site-header__location">
                        <i class="icon-map-picker"></i>
                        <span>Ваш город: </span>
                        <a href="#">
                            <span>Киев</span>
                            <span class="icon-arrow"></span>
                        </a>
                    </div>

                    <div class="site-header__favorite">
                        <a href="javascript:void(0)" class="site-header__favorite--star">&#9733;</a>
                        <span class="site-header__favorite--counter">15</span>
                    </div>

                    <div class="site-header__add">
                        <a href="javascript:void(0)" class="btn">Добавить объект</a>
                    </div>

                    <div class="site-header__login">
                        <i class="icon-user-icon"></i>
                        <p>Личный кабинет,</p>
                        <a href="#">Войти</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header--menu">
            <nav class=" container navbar">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="navbar-nav">
                            <li>
                                <a href="javascript:void(0)"><i class="icon-menu-burger"></i>Виды спорта</a>
                                <div class="site-header__main-menu">
                                    <div class="main-menu__left">
                                        <p class="main-menu__left-title">Популярные виды:</p>
                                        <ul class="main-menu__left-list">
                                            <li><i class="icon-box-blue"></i><a href="#">Бокс</a></li>
                                            <li><i class="icon-vall-blue"></i><a href="#">Волейбол</a></li>
                                            <li><i class="icon-joga-blue"></i><a href="#">Йога</a></li>
                                            <li><i class="icon-swim-blue"></i><a href="#">Плавание</a></li>
                                            <li><i class="icon-dance-blue"></i><a href="#">Танцы</a></li>
                                            <li><i class="icon-tennis-blue"></i><a href="#">Теннис</a></li>
                                            <li><i class="icon-fitness-blue"></i><a href="#">Фитнес</a></li>
                                            <li><i class="icon-football-blue"></i><a href="#">Футбол</a></li>
                                            <li><i class="icon-hockey-blue"></i><a href="#">Хоккей</a></li>
                                            <li><i class="icon-gym-blue"></i><a href="#">Спортзалы</a></li>
                                        </ul>
                                    </div>
                                    <div class="main-menu__right">

                                    </div>
                                    <div class="main-menu__bottom">

                                    </div>

                                </div>
                            </li>
                            <li><a href="javascript:void(0)"><i class="icon-menu-man"></i>Тренеры</a></li>
                            <li><a href="javascript:void(0)"><i class="icon-menu-map"></i>Аренда</a></li>
                            <li><a href="javascript:void(0)"><i class="icon-menu-house"></i>Спортивные магазины</a></li>
                            <li><a href="javascript:void(0)"><i class="icon-menu-sale"></i>Aкции</a></li>
                            <li><a href="javascript:void(0)"><i class="icon-menu-book"></i>Блог</a></li>
                        </ul>
                        <form class="navbar-right site-header__search">
                            <fieldset id="search-field">
                                <input type="search">
                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                            </fieldset>
                            <a href="#" id="search-trigger"><i class="icon-search"></i></a>
                        </form>
                    </div>
                    <!--/.nav-collapse -->


                </div>
            </nav>
        </div>
    </header>
