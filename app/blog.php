<!DOCTYPE html>
<html>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="left-sidebar">
                    <h2 class="left-sidebar--title">Все категории <span class="icon-arrow hidden-lg hidden-md"></span></h2>

                    <ul id="accordion" class="left-sidebar-nav" role="tablist" aria-multiselectable="true">
                        <li>
                            <div role="tab" id="tab-1" class="left-sidebar-nav__title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#tab-content-1" aria-expanded="true"
                                   aria-controls="tab-content-1">Обзор новостей<span class="caret"></span></a>

                            </div>
                            <div id="tab-content-1" class="left-sidebar-nav__content panel-collapse collapse in"
                                 role="tabpanel" aria-labelledby="tab-1">
                                <ul>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div role="tab" id="tab-2" class="left-sidebar-nav__title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#tab-content-2" aria-expanded="true"
                                   aria-controls="tab-content-2">Авторские статьи<span class="caret"></span></a>

                            </div>
                            <div id="tab-content-2" class="left-sidebar-nav__content panel-collapse collapse"
                                 role="tabpanel" aria-labelledby="tab-2">
                                <ul>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div role="tab" id="tab-3" class="left-sidebar-nav__title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#tab-content-3" aria-expanded="true"
                                   aria-controls="tab-content-3">Страницы игроков<span class="caret"></span></a>

                            </div>
                            <div id="tab-content-3" class="left-sidebar-nav__content panel-collapse collapse"
                                 role="tabpanel" aria-labelledby="tab-3">
                                <ul>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                    <li><a href="#">Последние сутки</a><span>(12)</span></li>
                                    <li><a href="#">Личный обзор </a><span>(20)</span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <div class="left-sidebar__subscribe hidden-sm hidden-xs">
                        <i class="label-icon"></i>

                        <h3 class="left-sidebar__subscribe--title">Подписка на блог</h3>

                        <form action="#">
                            <fieldset>
                                <input type="text" placeholder="Ваше имя">
                                <input type="email" placeholder="email">
                            </fieldset>
                            <button type="submit" class="btn btn-medium btn-block">Подписаться</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                    <ul class="blog-list">

                        <li class="blog-list__item">
                            <div class="blog-list__item--foto">
                                <a href="#">
                                    <span class="time-sticker">
                                        <i class="icon-clock"></i>
                                        <time datetime="20.02.2017">20.02.2017</time>
                                    </span>
                                    <img src="img/jpeg_files/blog-1.jpg" alt="blog-foto">
                                </a>
                            </div>

                            <div class="blog-list__item--content">
                                <p class="blog-list--title">Куньлунь Ред Стар - Магнитогорск </p>
                                <div class="star-ratings-css">
                                    <div class="star-ratings-css-top" style="width: 25%">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                    <div class="star-ratings-css-bottom">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                </div>
                                <a href="#" class="blog-list--subtitle link-blue">Хоккей</a>
                                <p class="blog-list--prev">
                                    Не вижу ни одного аргумента в пользу Куньлунь против Магнитки. Металлург забросил
                                    18 шайб китайскому клубу в 4 матчах. Завтра Металлург снова будет играть на победу.
                                    Хоккеист второго звена в полном порядке.
                                </p>
                            </div>
                            <a href="#" class="blog-list--readAll link-blue">Читать полностью</a>
                        </li>

                        <li class="blog-list__item">
                            <div class="blog-list__item--foto">
                                <a href="#">
                                    <span class="time-sticker">
                                        <i class="icon-clock"></i>
                                        <time datetime="20.02.2017">20.02.2017</time>
                                    </span>
                                    <img src="img/jpeg_files/blog-2.png" alt="blog-foto">
                                </a>
                            </div>

                            <div class="blog-list__item--content">
                                <p class="blog-list--title">Пилоты «F-1» круче космонавтов</p>
                                <div class="star-ratings-css">
                                    <div class="star-ratings-css-top" style="width: 25%">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                    <div class="star-ratings-css-bottom">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                </div>
                                <a href="#" class="blog-list--subtitle link-blue">F-1</a>
                                <p class="blog-list--prev">
                                    В последнее время критики «Формулы-1» склоняются к уничижению роли пилота в
                                    результатах: болиды стали настолько крутыми и технологичными, что гонки теперь
                                    похожи на компьютерные игры.
                                </p>
                            </div>
                            <a href="#" class="blog-list--readAll link-blue">Читать полностью</a>
                        </li>

                        <li class="blog-list__item">
                            <div class="blog-list__item--foto">
                                <a href="#">
                                    <span class="time-sticker">
                                        <i class="icon-clock"></i>
                                        <time datetime="20.02.2017">20.02.2017</time>
                                    </span>
                                    <img src="img/jpeg_files/bitrix-3.jpg" alt="blog-foto">
                                </a>
                            </div>

                            <div class="blog-list__item--content">
                                <p class="blog-list--title">Любимый тренер Роналдо и Тарибо Уэста</p>
                                <div class="star-ratings-css">
                                    <div class="star-ratings-css-top" style="width: 25%">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                    <div class="star-ratings-css-bottom">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                </div>
                                <a href="#" class="blog-list--subtitle link-blue">Футбол</a>
                                <p class="blog-list--prev">
                                    В раздевалке Роналдо подарил тренеру свою майку с десятым номером и
                                    горизонтальными полосами. Симони ее с тех пор ни разу не стирал, на ней и сегодня
                                    грязь динамовского поля.
                                </p>
                            </div>
                            <a href="#" class="blog-list--readAll link-blue">Читать полностью</a>
                        </li>
                        <li class="blog-list__item">
                            <div class="blog-list__item--foto">
                                <a href="#">
                                    <span class="time-sticker">
                                        <i class="icon-clock"></i>
                                        <time datetime="20.02.2017">20.02.2017</time>
                                    </span>
                                    <img src="img/jpeg_files/bitrix-2.jpg" alt="blog-foto">
                                </a>
                            </div>
                            <div class="blog-list__item--content">
                                <p class="blog-list--title">Какую дочь воспитал Франк Лебеф</p>
                                <div class="star-ratings-css">
                                    <div class="star-ratings-css-top" style="width: 25%">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                    <div class="star-ratings-css-bottom">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                </div>
                                <a href="#" class="blog-list--subtitle link-blue">Фитнес</a>
                                <p class="blog-list--prev">
                                    25-летняя Джейд пошла по стопам отца. Нет, она не стала футболисткой, просто ее
                                    папа теперь актер – вот и она туда же. Джейд Лебеф живет в Лос-Анджелесе.
                                    Ей определенно есть что показать.
                                </p>
                            </div>
                            <a href="#" class="blog-list--readAll link-blue">Читать полностью</a>
                        </li>
                        <li class="blog-list__item">
                            <div class="blog-list__item--foto">
                                <a href="#">
                                    <span class="time-sticker">
                                        <i class="icon-clock"></i>
                                        <time datetime="20.02.2017">20.02.2017</time>
                                    </span>
                                    <img src="img/jpeg_files/bitrix-1.jpg" alt="blog-foto">
                                </a>
                            </div>
                            <div class="blog-list__item--content">
                                <p class="blog-list--title">Золотая мужская эстафета на ЧМ 2017</p>
                                <div class="star-ratings-css">
                                    <div class="star-ratings-css-top" style="width: 25%">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                    <div class="star-ratings-css-bottom">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                </div>
                                <a href="#" class="blog-list--subtitle link-blue">Мужская эстафета</a>
                                <p class="blog-list--prev">
                                    Тренерский штаб российской сборной определился с составом команд на следующий этап
                                    Кубка мира по биатлону. Уже в предстоящее воскресенье спортсмены вылетают в
                                    Южную Корею. Гонки пройдут со 2 по 5 марта.
                                </p>
                            </div>
                            <a href="#" class="blog-list--readAll link-blue">Читать полностью</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <?php include_once "parts/pagination.php" ?>
                    <h4 class="section-block__title"><i class="icon-star-marker"></i>Спортивные новости Киев</h4>
                    <div class="news-slider-1">
                        <div>
                            <div class="news-slider__item">
                                <div class="news-slider__item--foto">
                                    <a href="#">
                                        <span class="time-sticker">
                                            <i class="icon-clock"></i>
                                            <time datetime="20.02.2017">20.02.2017</time>
                                        </span>
                                        <img src="img/jpeg_files/slider-foto-6.png" alt="news picture">
                                    </a>
                                </div>
                                <div class="news-slider__item--link">
                                    <a href="#">Тайсон Фьюри и ещё дюжина бойцов, проваливших допинг-тесты</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="news-slider__item">
                                <div class="news-slider__item--foto">
                                    <a href="#">
                                        <span class="time-sticker">
                                            <i class="icon-clock"></i>
                                            <time datetime="20.02.2017">20.02.2017</time>
                                        </span>
                                        <img src="img/jpeg_files/slider-foto-7.png" alt="news picture">
                                    </a>
                                </div>
                                <div class="news-slider__item--link">
                                    <a href="#">14 рекордов, которые могут быть побиты по итогам регулярным КХЛ</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="news-slider__item">
                                <div class="news-slider__item--foto">
                                    <a href="#">
                                        <span class="time-sticker">
                                            <i class="icon-clock"></i>
                                            <time datetime="20.02.2017">20.02.2017</time>
                                        </span>
                                        <img src="img/jpeg_files/slider-foto-8.png" alt="news picture">
                                    </a>
                                </div>
                                <div class="news-slider__item--link">
                                    <a href="#">Квят в «Храме скорости»: удар
                                        по днищу и слухи от Гасли</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="news-slider__item">
                                <div class="news-slider__item--foto">
                                    <a href="#">
                                        <span class="time-sticker">
                                            <i class="icon-clock"></i>
                                            <time datetime="20.02.2017">20.02.2017</time>
                                        </span>
                                        <img src="img/jpeg_files/slider-foto-9.png" alt="news picture">
                                    </a>
                                </div>
                                <div class="news-slider__item--link">
                                    <a href="#">Вальбуэна хоронит бывший клуб. Экс-легионеры РФПЛ</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="news-slider__item">
                                <div class="news-slider__item--foto">
                                    <a href="#">
                                        <span class="time-sticker">
                                            <i class="icon-clock"></i>
                                            <time datetime="20.02.2017">20.02.2017</time>
                                        </span>
                                        <img src="img/jpeg_files/slider-foto-6.png" alt="news picture">
                                    </a>
                                </div>
                                <div class="news-slider__item--link">
                                    <a href="#">Тайсон Фьюри и ещё дюжина бойцов, проваливших допинг-тесты</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="hidden-lg hidden-md">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="left-sidebar__subscribe">
                    <i class="label-icon"></i>

                    <h3 class="left-sidebar__subscribe--title">Подписка на блог</h3>

                    <form action="#">
                        <fieldset>
                            <input type="text" placeholder="Ваше имя">
                            <input type="email" placeholder="email">
                        </fieldset>
                        <button type="submit" class="btn btn-medium btn-block">Подписаться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-block md-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="section-block__title">О проекте Sporty</h4>

                <p class="section-block__text">
                    Cпорт сегодня занимает достаточно много времени в общем объеме интересов человечества.
                    Каждого из нас привлекает какой то вид спорта, будь то футбол, хоккей, теннис, бокс, баксетбол или
                    биатлон. Наш ресурс предлагает возможность получить полнейшую информацию, статистику, результаты в
                    таких разделах мирового спорта, как: футбол онлайн, теннис онлайн, хоккей онлайн,биатлон онлайн и
                    весь
                    спорт в целом.
                </p>

                <p class="section-block__text">
                    Мы постараемся найти для вас интересные спортивные события и прямые трансляции трансляции онлайн.
                    Также позаботимся о возможности просмотра видео повторов голов, обзоры матчей и самые интересные
                    спортивные моменты. У нас вы сможете принять участие в конкурсе прогнозов, проанализировать
                    турнирные
                    таблицы лучших чемпионатов, узнать результаты спортивных соревнований, быть в курсе последних
                    новостей
                    спорта.
                </p>

                <p class="section-block__text">
                    Спасибо, что вы с нами!
                </p>
            </div>
        </div>
    </div>
</section>


<?php include_once "parts/footer.php" ?>
</html>