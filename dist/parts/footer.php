<div class="page-footer">
    <div class="container">
        <div class="row page-footer__top">
            <div class="col-md-2 col-sm-3">
                <div class="page-footer__logo">
                    <a href="javascript:void(0)">
                        <img src="img/jpeg_files/footer-logo.png" alt="site logo">
                    </a>
                </div>
                <ul class="page-footer__social">
                    <li><a href="javascript:void(0)"><i class="icon-vk"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="icon-fb"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="icon-inst"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="icon-ok"></i></a></li>
                </ul>

            </div>
            <div class="col-md-7 col-sm-9">
                <ul class="page-footer__list">
                    <li><a href="javascript:void(0)">Новости</a></li>
                    <li><a href="javascript:void(0)">Обсуждение</a></li>
                    <li><a href="javascript:void(0)">Статьи</a></li>
                    <li><a href="javascript:void(0)">Правила</a></li>
                    <li><a href="javascript:void(0)">Рассылка</a></li>
                    <li><a href="javascript:void(0)">Главная</a></li>
                    <li><a href="javascript:void(0)">О проекте</a></li>
                    <li><a href="javascript:void(0)">Акции</a></li>
                    <li><a href="javascript:void(0)">Блог</a></li>
                    <li><a href="javascript:void(0)">Реклама на сайте</a></li>
                    <li><a href="javascript:void(0)">Виды спорта</a></li>
                    <li><a href="javascript:void(0)">Тренеры</a></li>
                    <li><a href="javascript:void(0)">Аренда помещений</a></li>
                    <li><a href="javascript:void(0)">Спортивные магазины</a></li>
                    <li><a href="javascript:void(0)">Консультации</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="page-footer__mailto">
                    <p class="page-footer__mailto-title">Свежие новости</p>

                    <form action="#">
                        <i class="icon-mail-flag"></i>
                        <input type="email" id="footer-input" class="page-footer__mailto-input"
                               placeholder="Ваш email-адрес">
                        <label for="footer-input" class="icon-Email"></label>
                        <button class="btn page-footer__mailto-button">Подписаться</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row page-footer__bottom">
            <div class="col-sm-6 page-footer__bottom--left">
                <p>&copy; 2015 - 2017. Все права защищены.</p>
            </div>
            <div class="col-sm-6 page-footer__bottom--right">
                <a href="tel:8 (800) 757 32 15">8 (800) 757 32 15</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal login-->
<div id="logIn" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="icon-close-modal"></i></button>
                <h4 class="modal-title">Добро пожаловать!</h4>
            </div>
            <div class="container-fluid">
                <div class="row modal-body-wrapper">
                    <div class="col-sm-6 modal-block modal-block__left">
                        <h5 class="modal-title__small">Личный кабинет</h5>

                        <form action="#" class="logIn__form">
                            <input type="email" class="input-round-border input-md input-md-margin"
                                   placeholder="Ваш e-mail">
                            <input type="password" class="input-round-border input-md input-md-margin"
                                   placeholder="Пароль">
                            <a href="#" class="modal-link">Забыли пароль?</a>
                            <button class="btn btn-big btn-yellow-gradient">Войти</button>
                        </form>
                    </div>

                    <div class="col-sm-6 modal-block modal-block__right">
                        <h5 class="modal-title__small">Вход через профиль</h5>
                        <ul class="modal__social">
                            <li><a href="#"><i class="icon-fb-big"></i></a></li>
                            <li><a href="#"><i class="icon-vk-big"></i></a></li>
                            <li><a href="#"><i class="icon-google-big"></i></a></li>
                        </ul>
                        <p class="modal-inform">Нет аккаунта?</p>

                        <p class="modal-inform"><a href="#" id="toRegister" class="modal-link" data-toggle="modal"
                                                   data-target="#register">Зарегистрироваться</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal register-->
<div id="register" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="icon-close-modal"></i></button>
                <h4 class="modal-title">Добро пожаловать!</h4>
            </div>
            <div class="container-fluid">
                <div class="row modal-body-wrapper">
                    <div class="col-sm-6 modal-block modal-block__left">
                        <h5 class="modal-title__small">Личный кабинет</h5>

                        <form action="#" class="register__form">
                            <fieldset class="input-md-margin pseudo-placeholder">
                                <input type="text" id="user-name" class="input-round-border input-md">
                                <label for="user-name">Ваше имя <span>*</span></label>
                            </fieldset>

                            <fieldset class="input-md-margin pseudo-placeholder">
                                <input type="email" id="user-email" class="input-round-border input-md">
                                <label for="user-email">Ваш e-mail <span>*</span></label>
                            </fieldset>

                            <fieldset class="input-md-margin pseudo-placeholder">
                                <input type="password" id="user-pass" class="input-round-border input-md">
                                <label for="user-pass">Пароль <span>*</span></label>
                            </fieldset>

                            <fieldset class="input-md-margin pseudo-placeholder">
                                <input type="password" id="user-confirm-pass" class="input-round-border input-md">
                                <label for="user-confirm-pass">Повторите пароль <span>*</span></label>
                            </fieldset>

                            <fieldset class="input-md-margin pseudo-placeholder">
                                <input type="tel" id="user-tel" class="input-round-border input-md ">
                                <label for="user-tel" class="pseudo-placeholder">+38 (0__) ___ - __
                                    -___<span>*</span></label>
                            </fieldset>

                            <fieldset class="input-md-margin custom-checkbox">
                                <input type="checkbox" id="user-confirm-rules">
                                <label for="user-confirm-rules" class="text-small text-light">Регистрируясь на сайте , я
                                    соглашаюсь <a href="#" class="link">с условиями конфиденциальности</a></label>
                            </fieldset>

                            <fieldset class="custom-radio">
                                <input type="radio" id="user-owner" name="user-choice">
                                <label for="user-owner">Владелец объекта или тренер</label>
                            </fieldset>

                            <fieldset class="custom-radio">
                                <input type="radio" id="user-simple" name="user-choice">
                                <label for="user-simple">Пользователь</label>
                            </fieldset>

                            <button type="submit" class="btn btn-big">Зарегистрироваться</button>
                        </form>
                    </div>

                    <div class="col-sm-6 modal-block modal-block__right">
                        <h5 class="modal-title__small">Вход через профиль</h5>
                        <ul class="modal__social">
                            <li><a href="#"><i class="icon-fb-big"></i></a></li>
                            <li><a href="#"><i class="icon-vk-big"></i></a></li>
                            <li><a href="#"><i class="icon-google-big"></i></a></li>
                        </ul>
                        <p class="modal-inform">Нет аккаунта?</p>

                        <p class="modal-inform"><a href="#" class="modal-link">Зарегистрироваться</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal city-choice -->
<div id="city-choice" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="icon-close-modal"></i></button>
                <h4 class="modal-title">Выберите Ваш город:</h4>
            </div>
            <div class="modal-body">
                <ul class="city-choice__list">
                    <li class="city-checked"><a href="#">Киев</a></li>
                    <li><a href="#">Харьков</a></li>
                    <li><a href="#">Одесса</a></li>
                    <li><a href="#">Днепропетровск</a></li>
                    <li><a href="#">Донецк</a></li>
                    <li><a href="#">Запорожье</a></li>
                    <li><a href="#">Львов</a></li>
                    <li><a href="#">Чернигов</a></li>
                    <li><a href="#">Полтава</a></li>
                    <li><a href="#">Черкассы</a></li>
                    <li><a href="#">Горловка</a></li>
                    <li><a href="#">Житомир</a></li>
                    <li><a href="#">Сумы</a></li>
                    <li><a href="#">Хмельницкий</a></li>
                    <li><a href="#">Луцк</a></li>
                    <li><a href="#">Белая Церковь</a></li>
                    <li><a href="#">Краматорск</a></li>
                    <li><a href="#">Мелитополь</a></li>
                    <li><a href="#">Ужгород</a></li>
                    <li><a href="#">Никополь</a></li>
                    <li><a href="#">Славянск</a></li>
                </ul>
            </div>
            <div class="modal-footer main-menu__bottom">
                <i class="icon-all-lines"></i><a href="#">Весь список секций</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal sort-choice -->
<div id="sort-choice" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog--big">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="icon-close-modal"></i></button>
                <h4 class="modal-title">Выберите интересующее вас направление:</h4>
            </div>
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
        </div>
    </div>
</div>

<!-- Modal order-form -->
<div id="order-form" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="icon-close-modal"></i></button>
                <h4 class="modal-title">Форма записи</h4>
            </div>
            <div class="container-fluid">
                <div class="row modal-body-wrapper">
                    <div class="modal-block add-block">
                        <p class="modal-order-form-title">
                            <i class="icon-question"></i>
                            <span>Оставьте ваши контактные данные и менеджере свяжется с Вами в удобноедля Вас время:</span>
                        </p>
                        <form action="#" class="order-request-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">

                                    <label for="of-1" class="info__label">Ваше Имя и Фамилия: <span
                                            class="mark-red">*</span></label>
                                    <input id="of-1" type="text" class="input-round-border input-md"
                                           placeholder="Ваш e-mail">

                                    <label for="of-2" class="info__label">Ваше Имя и Фамилия: <span
                                            class="mark-red">*</span></label>
                                    <input type="text" id="of-2" class="input-round-border input-md"
                                           placeholder="Ваш e-mail">
                                </div>
                                <div class="col-md-6 col-sm-12"></div>
                            </div>
                            <input type="email" class="input-round-border input-md input-md-margin"
                                   placeholder="Ваш e-mail">
                            <input type="password" class="input-round-border input-md input-md-margin"
                                   placeholder="Пароль">

                            <button class="btn btn-big btn-yellow-gradient">Войти</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>

</body>