<!DOCTYPE html>
<html>
<?php include_once "parts/header.php" ?>

<section class="direction-filter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="#">
                    <div class="direction-filter__item add-block">
                        <label for="df-1" class="info__label">Направление:</label>
                        <div class="direction-filter__wrapper direction-filter__wrapper--lg">
                            <select name="" id="df-1" class="custom-select" title="Спортивные залы" data-width="100%" style="display: none">
                                <option value="0">Спортивные залы-1</option>
                                <option value="1">Спортивные залы-2</option>
                                <option value="2">Спортивные залы-3</option>
                                <option value="3">Спортивные залы-4</option>
                            </select>
                        </div>
                    </div>
                    <div class="direction-filter__item add-block">
                        <label for="df-2" class="info__label">Район:</label>
                        <div class="direction-filter__wrapper direction-filter__wrapper--md">
                            <select name="" id="df-2" class="custom-select" title="Святошин" data-width="100%" style="display: none">
                                <option value="0">Район:-1</option>
                                <option value="1">Район:-2</option>
                                <option value="2">Район:-3</option>
                                <option value="3">Район:-4</option>
                            </select>
                        </div>
                    </div>
                    <div class="direction-filter__item add-block">
                        <label for="df-3" class="info__label">Метро:</label>
                        <div class="direction-filter__wrapper direction-filter__wrapper--md">
                            <select name="" id="df-3" class="custom-select" title="Печерская" data-width="100%" style="display: none">
                                <option value="0">Метро:-1</option>
                                <option value="1">Метро:-2</option>
                                <option value="2">Метро:-3</option>
                                <option value="3">Метро:-4</option>
                            </select>
                        </div>
                    </div>
                    <div class="direction-filter__item--checkbox">
                        <input type="checkbox" id="add-1" class="custom-checkbox custom-checkbox__bold">
                        <label for="add-1" class="">Только для детей</label>
                        <input type="checkbox" id="add-2" class="custom-checkbox custom-checkbox__bold">
                        <label for="add-2" class="">Только для взрослых</label>
                    </div>
                    <div class="direction-filter__item--submit">
                        <button class="btn btn-big btn-yellow-gradient">Найти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php include_once "parts/breadcrumbs.php" ?>
        </div>
    </div>
</div>



<section class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="section-block__title--light top-zero bottom-zero">
                    Акции Киева
                    <span>— 127 акций</span>
                </h1>
            </div>
            <div class="col-sm-12">
                <div class="item-filter add-block">
                    <span class="info__label">Сортировать по:</span>
                    <ul class="list-inline hidden-sm hidden-xs">
                        <li class="item-filter__child active"><a href="javascript:void(0)">рейтингу</a></li>
                        <li  class="item-filter__child"><a href="javascript:void(0)">цене по убыванию</a></li>
                        <li  class="item-filter__child"><a href="javascript:void(0)">цене по возрастанию</a></li>
                        <li class="item-filter__child"><a href="javascript:void(0)">по отзывам</a></li>
                        <li class="item-filter__child"><a href="javascript:void(0)">по алфавиту</a></li>
                    </ul>
                    <select name="" id="" class="custom-select hidden-lg hidden-md">
                        <option value="1">рейтингу</option>
                        <option value="1">цене по убыванию</option>
                        <option value="1">цене по возрастанию</option>
                        <option value="1">по отзывам</option>
                        <option value="1">по алфавиту</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="sticky-left" class="col-md-9 col-sm-12">
            <ul class="action-list clearfix">
                <li class="goods">
                    <div class="goods-photo">
                        <a href="#">
                            <i class="icon-sticker-empty"><span>-30%</span></i>
                            <img src="img/jpeg_files/club-1.jpg" alt="club-1">
                        </a>
                    </div>
                    <div class="goods-prop">
                        <h4 class="goods-prop__title bold-text"><a href="#">Акция на месячные абонементы VeGym</a></h4>
                        <hr>
                        <a href="#" class="link">SportLife на Печерске</a>
                        <hr>
                        <div class="clearfix">
                            <div class="goods-prop__left-block">
                                <div class="goods-prop__action-date">
                                    <i class="icon-stock-action"></i>
                                    <span>Действует до: <time>00.00.0000</time></span>
                                </div>
                                <div class="goods-prop__rating-favorite">
                                    <div class="rateit" data-rateit-resetable="false" data-rateit-value="3.5"
                                         data-rateit-mode="font">
                                    </div>
                                    <span class="rateit-value-now">4.5</span>
                                    <a href="#" class="goods-prop__reviews">Отзывы (4)</a>
                                </div>
                            </div>
                            <div class="goods-prop__right-block">
                                <div class="goods-prop__start-price">
                                    <p>
                                        <span class="goods-prop__old-price">9000 грн</span>
                                        <span class="goods-prop__actual-price">7000</span> грн
                                    </p>
                                </div>
                                <div class="goods-prop__more">
                                    <a href="#" class="btn btn-medium btn-yellow-gradient">Купить пакет</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="goods">
                    <div class="goods-photo">
                        <a href="#">
                            <i class="icon-sticker-empty"><span>-50%</span></i>
                            <img src="img/jpeg_files/club-2.jpg" alt="club-1">
                        </a>
                    </div>
                    <div class="goods-prop">
                        <h4 class="goods-prop__title bold-text"><a href="#">Безлимитный массаж в Зебра</a></h4>
                        <hr>
                        <a href="#" class="link">Зебра на Кузьминках</a>
                        <hr>
                        <div class="clearfix">
                            <div class="goods-prop__left-block">
                                <div class="goods-prop__action-date">
                                    <i class="icon-stock-action"></i>
                                    <span>Действует до: <time>00.00.0000</time></span>
                                </div>
                                <div class="goods-prop__rating-favorite">
                                    <div class="rateit" data-rateit-resetable="false" data-rateit-value="3.5"
                                         data-rateit-mode="font">
                                    </div>
                                    <span class="rateit-value-now">4.5</span>
                                    <a href="#" class="goods-prop__reviews">Отзывы (4)</a>
                                </div>
                            </div>
                            <div class="goods-prop__right-block">
                                <div class="goods-prop__start-price">
                                    <p>
                                        <span class="goods-prop__old-price">9000 грн</span>
                                        <span class="goods-prop__actual-price">7000</span> грн
                                    </p>
                                </div>
                                <div class="goods-prop__more">
                                    <a href="#" class="btn btn-medium btn-yellow-gradient">Купить пакет</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="goods">
                    <div class="goods-photo">
                        <a href="#">
                            <i class="icon-sticker-empty"><span>-70%</span></i>
                            <img src="img/jpeg_files/club-5.jpg" alt="club-1">
                        </a>
                    </div>
                    <div class="goods-prop">
                        <h4 class="goods-prop__title bold-text"><a href="#">Бесплатный вход на 1 день в X-Fit</a></h4>
                        <hr>
                        <a href="#" class="link">X-Fit на Павелецком, Новокосино</a>
                        <hr>
                        <div class="clearfix">
                            <div class="goods-prop__left-block">
                                <div class="goods-prop__action-date">
                                    <i class="icon-stock-action"></i>
                                    <span>Действует до: <time>00.00.0000</time></span>
                                </div>
                                <div class="goods-prop__rating-favorite">
                                    <div class="rateit" data-rateit-resetable="false" data-rateit-value="3.5"
                                         data-rateit-mode="font">
                                    </div>
                                    <span class="rateit-value-now">4.5</span>
                                    <a href="#" class="goods-prop__reviews">Отзывы (4)</a>
                                </div>
                            </div>
                            <div class="goods-prop__right-block">
                                <div class="goods-prop__start-price">
                                    <p>
                                        <span class="goods-prop__old-price">9000 грн</span>
                                        <span class="goods-prop__actual-price">7000</span> грн
                                    </p>
                                </div>
                                <div class="goods-prop__more">
                                    <a href="#" class="btn btn-medium btn-yellow-gradient">Купить пакет</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <?php include_once "parts/pagination.php" ?>
            <div class="direction-show-more">
                <a href="#">Показать еще</a>
            </div>
        </div>
        <div id="sticky-block" class="col-md-3 col-sm-12">
            <div class="right-sidebar">
                <div class="right-sidebar__map">
                    <a href="#" class="right-sidebar__map--link btn btn-success">Развернуть карту</a>

                    <div id="map" style="height: 530px; background-color: #f2f2f2"></div>
                    <script>

                        //        init map with javascript
                        function initMap() {
                            var myLatLng = {lat: 50.4434022, lng: 30.5202183};


                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 10,
                                disableDefaultUI: true,
                                scrollwheel: false,
                                center: myLatLng
                            });
                            var icon = "http://deff-hyper.xyz/img/jpeg_files/picker-yellow.png";

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                icon: icon,
                                title: 'Sporty'
                            });

                        }
                    </script>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZIngoLRi7b8SOAsASZu726qekWdjQng0&callback=initMap">
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="block-with-back section-block md-padding">
    <div class="container ">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="section-block__title">Спортивные акции Киев</h4>
                <div class="goods-slider">
                    <div>
                        <div class="goods-slider__item">
                            <div class="goods-slider__item--foto">
                                <a href="#">
                                    <span class="icon-sticker"><span>11%</span></span>
                                    <img src="img/jpeg_files/slider-foto-1.png" alt="picture">
                                </a>
                            </div>
                            <div class="goods-slider__item--link">
                                <a href="#">Скидка 50% на все абонементы</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="goods-slider__item">
                            <div class="goods-slider__item--foto">
                                <a href="#">
                                    <span class="icon-sticker"><span>11%</span></span>
                                    <img src="img/jpeg_files/slider-foto-2.png" alt="picture">
                                </a>
                            </div>
                            <div class="goods-slider__item--link">
                                <a href="#">Скидка 50% на все абонементы</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="goods-slider__item">
                            <div class="goods-slider__item--foto">
                                <a href="#">
                                    <span class="icon-sticker"><span>11%</span></span>
                                    <img src="img/jpeg_files/slider-foto-3.png" alt="picture">
                                </a>
                            </div>
                            <div class="goods-slider__item--link">
                                <a href="#">Скидка 50% на все абонементы</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="goods-slider__item">
                            <div class="goods-slider__item--foto">
                                <a href="#">
                                    <span class="icon-sticker"><span>11%</span></span>
                                    <img src="img/jpeg_files/slider-foto-4.png" alt="picture">
                                </a>
                            </div>
                            <div class="goods-slider__item--link">
                                <a href="#">Скидка 50% на все абонементы</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="goods-slider__item">
                            <div class="goods-slider__item--foto">
                                <a href="#">
                                    <span class="icon-sticker"><span>11%</span></span>
                                    <img src="img/jpeg_files/slider-foto-5.png" alt="picture">
                                </a>
                            </div>
                            <div class="goods-slider__item--link">
                                <a href="#">Скидка 50% на все абонементы</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="goods-slider__item">
                            <div class="goods-slider__item--foto">
                                <a href="#">
                                    <span class="icon-sticker"><span>11%</span></span>
                                    <img src="img/jpeg_files/slider-foto-1.png" alt="picture">
                                </a>
                            </div>
                            <div class="goods-slider__item--link">
                                <a href="#">Скидка 50% на все абонементы</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="section-block__link">
                    <a href="#" class="link-button">Все акции</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-block md-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="section-block__title center-title">Спортивные новости Киев</h4>
                <div class="news-slider">
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
                <div class="section-block__link">
                    <a href="#" class="link-button">Все новости</a>
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
                    таких разделах мирового спорта, как: футбол онлайн, теннис онлайн, хоккей онлайн,биатлон онлайн и весь
                    спорт в целом.
                </p>
                <p class="section-block__text">
                    Мы постараемся найти для вас интересные спортивные события и прямые трансляции трансляции онлайн.
                    Также позаботимся о возможности просмотра видео повторов голов, обзоры матчей и самые интересные
                    спортивные моменты. У нас вы сможете принять участие в конкурсе прогнозов, проанализировать турнирные
                    таблицы лучших чемпионатов, узнать результаты спортивных соревнований, быть в курсе последних новостей
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