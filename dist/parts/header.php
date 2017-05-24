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
        <div class="container site-header--top">
            <div class="row">
                <div class="col-sm-12">
                    <div class="site-header__logo">
                        <a href="javascript:void(0)">
                            <img src="img/jpeg_files/site-logo.png" alt="site logo">
                        </a>
                    </div>

                    <div class="for-mob-group">
                        <div class="site-header__tel">
                            <i class="icon-phone"></i>
                            <a href="tel:8 (800) 757 32 15" class="site-header__tel--title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">8 (800) 757 32 15 <span class="icon-arrow"></span></a>
                            <ul class="dropdown-menu">
                                <li><i class="icon-b-line"></i><a href="tel:+38 (093) 757 32 15"><span>+38 (093)</span> 757 32 15</a></li>
                                <li><i class="icon-vd-phone"></i><a href="tel:+38 (099) 757 32 15"><span>+38 (099)</span> 757 32 15</a></li>
                                <li><i class="icon-kvstr"></i><a href="tel:+38 (067) 757 32 15"><span>+38 (067)</span> 757 32 15</a></li>
                            </ul>
                        </div>

                        <div class="site-header__location">
                            <i class="icon-map-picker"></i>
                            <span>Ваш город: </span>
                            <a href="#" data-toggle="modal" data-target="#city-choice">
                                <span>Киев</span>
                                <span class="icon-arrow"></span>
                            </a>
                        </div>
                    </div>
                    <div class="for-mob-group">
                        <div class="site-header__favorite hidden-xs">
                            <a href="javascript:void(0)">
                                <i class="icon-red-heart"></i>
                                <span class="site-header__favorite--counter">15</span>
                            </a>
                        </div>

                        <div class="site-header__add">
                            <a href="javascript:void(0)" class="btn">Добавить объект</a>
                        </div>
                    </div>


                    <div class="site-header__login">
                        <i class="icon-user-icon"></i>
                        <p>Личный кабинет,</p>
                        <a href="#logIn" data-toggle="modal" data-target="#logIn">Войти</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header--menu">
            <nav class=" container navbar">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="menu-trigger">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="with-drop-menu">
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
                                        <div class="main-menu__right--item">
                                            <a href="#">A</a>
                                            <ul>
                                                <li><a href="#">Автоспорт и мотоспорт<span>(10)</span></a></li>
                                                <li><a href="#">Айкидо<span>(15)</span></a></li>
                                                <li><a href="#">Аквааэробика<span>(6)</span></a></li>
                                                <li><a href="#">Акробатика<span>(3)</span></a></li>
                                                <li><a href="#">Альпинизм<span>(30)</span></a></li>
                                                <li><a href="#">Армреслинг<span>(90)</span></a></li>
                                                <li><a href="#">Аэробика<span>(90)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Б</a>
                                            <ul>
                                                <li><a href="#">Бадбинтон<span>(3)</span></a></li>
                                                <li><a href="#">Баскетбол<span>(20)</span></a></li>
                                                <li><a href="#">Биатлон<span>(6)</span></a></li>
                                                <li><a href="#">Бильярд <span>(3)</span></a></li>
                                                <li><a href="#">Бодибилдинг<span>(30)</span></a></li>
                                                <li><a href="#">Бокс<span>(90)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">B</a>
                                            <ul>
                                                <li><a href="#">Велоспорт<span>(2)</span></a></li>
                                                <li><a href="#">Водное поло<span>(3)</span></a></li>
                                                <li><a href="#">Волейбол<span>(26)</span></a></li>
                                                <li><a href="#">Вьет Во Дао<span>(1)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Г</a>
                                            <ul>
                                                <li><a href="#">Гандбол <span>(2)</span></a></li>
                                                <li><a href="#">Гимнастика для беременных<span>(3)</span></a></li>
                                                <li><a href="#">Гимнастика дыхательная<span>(26)</span></a></li>
                                                <li><a href="#">Гимнастика оздоровительная<span>(50)</span></a></li>
                                                <li><a href="#">Гимнастика спортивная<span>(3)</span></a></li>
                                                <li><a href="#">Гимнастика художественная<span>(9)</span></a></li>
                                                <li><a href="#">Гимнастика оздоровительная<span>(44)</span></a></li>
                                                <li><a href="#">Гольф<span>(2)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Д</a>
                                            <ul>
                                                <li><a href="#">Дайвинг<span>(12)</span></a></li>
                                                <li><a href="#">Дартс<span>(3)</span></a></li>
                                                <li><a href="#">Джиу-джитсу<span>(16)</span></a></li>
                                                <li><a href="#">Дзюдо<span>(10)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Е</a>
                                            <ul>
                                                <li><a href="#">Единоборства<span>(2)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Й</a>
                                            <ul>
                                                <li><a href="#">Йога<span>(24)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">К</a>
                                            <ul>
                                                <li><a href="#">Капоэйра<span>(12)</span></a></li>
                                                <li><a href="#">Карате <span>(3)</span></a></li>
                                                <li><a href="#">Картинг<span>(16)</span></a></li>
                                                <li><a href="#">Кёрлинг<span>(10)</span></a></li>
                                                <li><a href="#">Кикбоксинг<span>(10)</span></a></li>
                                                <li><a href="#">Кобудо<span>(10)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="main-menu__bottom">
                                        <i class="icon-all-lines"></i><a href="#">Весь список секций</a>
                                    </div>

                                </div>
                            </li>
                            <li class="with-drop-menu">
                                <a href="javascript:void(0)"><i class="icon-menu-man"></i>Тренеры</a>
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
                                        <div class="main-menu__right--item">
                                            <a href="#">A</a>
                                            <ul>
                                                <li><a href="#">Автоспорт и мотоспорт<span>(10)</span></a></li>
                                                <li><a href="#">Айкидо<span>(15)</span></a></li>
                                                <li><a href="#">Аквааэробика<span>(6)</span></a></li>
                                                <li><a href="#">Акробатика<span>(3)</span></a></li>
                                                <li><a href="#">Альпинизм<span>(30)</span></a></li>
                                                <li><a href="#">Армреслинг<span>(90)</span></a></li>
                                                <li><a href="#">Аэробика<span>(90)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Б</a>
                                            <ul>
                                                <li><a href="#">Бадбинтон<span>(3)</span></a></li>
                                                <li><a href="#">Баскетбол<span>(20)</span></a></li>
                                                <li><a href="#">Биатлон<span>(6)</span></a></li>
                                                <li><a href="#">Бильярд <span>(3)</span></a></li>
                                                <li><a href="#">Бодибилдинг<span>(30)</span></a></li>
                                                <li><a href="#">Бокс<span>(90)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">B</a>
                                            <ul>
                                                <li><a href="#">Велоспорт<span>(2)</span></a></li>
                                                <li><a href="#">Водное поло<span>(3)</span></a></li>
                                                <li><a href="#">Волейбол<span>(26)</span></a></li>
                                                <li><a href="#">Вьет Во Дао<span>(1)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Г</a>
                                            <ul>
                                                <li><a href="#">Гандбол <span>(2)</span></a></li>
                                                <li><a href="#">Гимнастика для беременных<span>(3)</span></a></li>
                                                <li><a href="#">Гимнастика дыхательная<span>(26)</span></a></li>
                                                <li><a href="#">Гимнастика оздоровительная<span>(50)</span></a></li>
                                                <li><a href="#">Гимнастика спортивная<span>(3)</span></a></li>
                                                <li><a href="#">Гимнастика художественная<span>(9)</span></a></li>
                                                <li><a href="#">Гимнастика оздоровительная<span>(44)</span></a></li>
                                                <li><a href="#">Гольф<span>(2)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Д</a>
                                            <ul>
                                                <li><a href="#">Дайвинг<span>(12)</span></a></li>
                                                <li><a href="#">Дартс<span>(3)</span></a></li>
                                                <li><a href="#">Джиу-джитсу<span>(16)</span></a></li>
                                                <li><a href="#">Дзюдо<span>(10)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Е</a>
                                            <ul>
                                                <li><a href="#">Единоборства<span>(2)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">Й</a>
                                            <ul>
                                                <li><a href="#">Йога<span>(24)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right--item">
                                            <a href="#">К</a>
                                            <ul>
                                                <li><a href="#">Капоэйра<span>(12)</span></a></li>
                                                <li><a href="#">Карате <span>(3)</span></a></li>
                                                <li><a href="#">Картинг<span>(16)</span></a></li>
                                                <li><a href="#">Кёрлинг<span>(10)</span></a></li>
                                                <li><a href="#">Кикбоксинг<span>(10)</span></a></li>
                                                <li><a href="#">Кобудо<span>(10)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="main-menu__bottom">
                                        <i class="icon-all-lines"></i><a href="#">Весь список секций</a>
                                    </div>

                                </div>
                            </li>
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
