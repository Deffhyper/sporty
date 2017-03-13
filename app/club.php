<!DOCTYPE html>
<html>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<section class="section-block md-padding--bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="left-sidebar">
                    <h2 class="left-sidebar--title hidden-lg hidden-md">Все категории <span class="icon-arrow hidden-lg hidden-md"></span>
                    </h2>
                    <ul class="left-sidebar-nav left-sidebar-nav--ctrl">
                        <li>
                            <a href="#">Персональная информация</a>
                        </li>
                        <li>
                            <a href="#">Избранное</a>
                        </li>
                        <li class="active">
                            <a href="#">Мои клубы</a>
                        </li>
                        <li>
                            <a href="#">Тренеры</a>
                        </li>
                        <li>
                            <a href="#">Выйти <i class="icon-log-out"></i></a>
                        </li>
                    </ul>

                    <div class="left-sidebar__upcount">
                        <h3 class="left-sidebar--title">На Вашем счету: <b>1200 грн.</b><span class="icon-arrow hidden-lg hidden-md"></span>
                        </h3>
                        <div class="left-sidebar-nav">
                            <a href="#" class="round-clear-btn">Пополнить</a>
                        </div>
                    </div>
                    <div class="left-sidebar__display-ID">
                        <ul class="left-sidebar-nav left-sidebar-nav--ctrl">
                            <li>
                                <a href="#">Ваш клиентский ID: <b>123000</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <h1 class="section-block__title--light top-zero pull-left">Мои клубы</h1>
                <a href="#" class="btn btn-success add-club-btn pull-right"> <i class="icon-white-plus"></i>Добавить клуб</a>
                <div class="clearfix"></div>
                <ul class="favorite-list clearfix">

                    <li class="admin-goods">
                        <div class="goods">
                            <div class="goods-photo">
                                <img src="img/jpeg_files/club-3.png" alt="club-1">
                            </div>
                            <div class="goods-prop">
                                <h4 class="goods-prop__title">Сеть фитнес-клубов Gold Fitness</h4>
                                <div class="goods-prop__partitions">
                                    <p>Секции: </p>
                                    <p>Бокс, Карате, Спортивный зал, Пилатес</p>
                                </div>
                                <hr>
                                <div class="clearfix">
                                    <div class="goods-prop__left-block">
                                        <div class="goods-prop__location">
                                            <i class="icon-blue-picker"></i>
                                            <a href="#">Киев, бул. Леси Украинки, 12 А</a>
                                        </div>
                                        <div class="goods-prop__rating-favorite">
                                            <div class="rateit" data-rateit-resetable="false" data-rateit-value="3.5"
                                                 data-rateit-mode="font">
                                            </div>
                                            <span class="rateit-value-now">4.5</span>
                                            <a href="#" class="goods-prop__reviews">Отзывы (4)</a>
                                            <a href="#" class="goods-prop__to-favorite">
                                                <i class="icon-red-heart"></i>
                                                В избранное
                                            </a>
                                        </div>
                                    </div>
                                    <div class="goods-prop__right-block">
                                        <div class="goods-prop__start-price">
                                            <p>от <span>320 грн</span>/мес</p>
                                        </div>
                                        <div class="goods-prop__more">
                                            <a href="#" class="btn btn-medium btn-yellow-gradient">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-goods__control clearfix">
                            <div class="admin-goods__control--left">
                                <a href="#" class="btn btn-redact">Редактировать</a>
                                <a href="#" class="btn btn-danger">Удалить</a>
                            </div>
                            <div class="admin-goods__control--right add-block">
                                <select name="" id="" class="custom-select" title="Поднять в топ" data-width="200px">
                                    <option value="1">Do something-1</option>
                                    <option value="2">Do something-2</option>
                                    <option value="3">Do something-3</option>
                                    <option value="4">Do something-4</option>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li class="admin-goods">
                        <div class="goods">
                            <div class="goods-photo">
                                <img src="img/jpeg_files/club-5.jpg" alt="club-1">
                            </div>
                            <div class="goods-prop">
                                <h4 class="goods-prop__title">Сеть фитнес-клубов Gold Fitness</h4>
                                <div class="goods-prop__partitions">
                                    <p>Секции: </p>
                                    <p>Бокс, Карате, Спортивный зал, Пилатес</p>
                                </div>
                                <hr>
                                <div class="clearfix">
                                    <div class="goods-prop__left-block">
                                        <div class="goods-prop__location">
                                            <i class="icon-blue-picker"></i>
                                            <a href="#">Киев, бул. Леси Украинки, 12 А</a>
                                        </div>
                                        <div class="goods-prop__rating-favorite">
                                            <div class="rateit" data-rateit-resetable="false" data-rateit-value="3.5"
                                                 data-rateit-mode="font">
                                            </div>
                                            <span class="rateit-value-now">4.5</span>
                                            <a href="#" class="goods-prop__reviews">Отзывы (4)</a>
                                            <a href="#" class="goods-prop__to-favorite">
                                                <i class="icon-red-heart"></i>
                                                В избранное
                                            </a>
                                        </div>
                                    </div>
                                    <div class="goods-prop__right-block">
                                        <div class="goods-prop__start-price">
                                            <p>от <span>320 грн</span>/мес</p>
                                        </div>
                                        <div class="goods-prop__more">
                                            <a href="#" class="btn btn-medium btn-yellow-gradient">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-goods__control clearfix">
                            <div class="admin-goods__control--left">
                                <a href="#" class="btn btn-redact">Редактировать</a>
                                <a href="#" class="btn btn-danger">Удалить</a>
                            </div>
                            <div class="admin-goods__control--right add-block">
                                <select name="" id="" class="custom-select" title="Поднять в топ" data-width="200px">
                                    <option value="1">Do something-1</option>
                                    <option value="2">Do something-2</option>
                                    <option value="3">Do something-3</option>
                                    <option value="4">Do something-4</option>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li class="admin-goods">
                        <div class="goods">
                            <div class="goods-photo">
                                <img src="img/jpeg_files/club-6.jpg" alt="club-1">
                            </div>
                            <div class="goods-prop">
                                <h4 class="goods-prop__title">Сеть фитнес-клубов Gold Fitness</h4>
                                <div class="goods-prop__partitions">
                                    <p>Секции: </p>
                                    <p>Бокс, Карате, Спортивный зал, Пилатес</p>
                                </div>
                                <hr>
                                <div class="clearfix">
                                    <div class="goods-prop__left-block">
                                        <div class="goods-prop__location">
                                            <i class="icon-blue-picker"></i>
                                            <a href="#">Киев, бул. Леси Украинки, 12 А</a>
                                        </div>
                                        <div class="goods-prop__rating-favorite">
                                            <div class="rateit" data-rateit-resetable="false" data-rateit-value="3.5"
                                                 data-rateit-mode="font">
                                            </div>
                                            <span class="rateit-value-now">4.5</span>
                                            <a href="#" class="goods-prop__reviews">Отзывы (4)</a>
                                            <a href="#" class="goods-prop__to-favorite">
                                                <i class="icon-red-heart"></i>
                                                В избранное
                                            </a>
                                        </div>
                                    </div>
                                    <div class="goods-prop__right-block">
                                        <div class="goods-prop__start-price">
                                            <p>от <span>320 грн</span>/мес</p>
                                        </div>
                                        <div class="goods-prop__more">
                                            <a href="#" class="btn btn-medium btn-yellow-gradient">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-goods__control clearfix">
                            <div class="admin-goods__control--left">
                                <a href="#" class="btn btn-redact">Редактировать</a>
                                <a href="#" class="btn btn-danger">Удалить</a>
                            </div>
                            <div class="admin-goods__control--right add-block">
                                <select name="" id="" class="custom-select" title="Поднять в топ" data-width="200px">
                                    <option value="1">Do something-1</option>
                                    <option value="2">Do something-2</option>
                                    <option value="3">Do something-3</option>
                                    <option value="4">Do something-4</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
                <?php include_once "parts/pagination.php" ?>
            </div>
        </div>
    </div>
</section>

<?php include_once "parts/footer.php" ?>
</html>