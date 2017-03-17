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
                        <li>
                            <a href="#">Мои отзывы</a>
                        </li>
                        <li class="active">
                            <a href="#">Статистика</a>
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
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="block-with-border">
                    <div class="statistic">
                        <div class="statistic-header clearfix">
                            <h1 class="section-block__title top-zero pull-left">
                                <i class="icon-statistic"></i>
                                Статистика просмотров
                            </h1>
                            <div class="add-block pull-right">
                                <label for="st-1" class="info__label info__label--bold">Период:</label>
                                <select name="" id="st-1" class="custom-select" title="01.02.2017 – 01.03.2017" data-width="200px">
                                    <option value="1">11.12.16-11.12.17</option>
                                    <option value="2">11.12.16-11.12.17</option>
                                    <option value="3">11.12.16-11.12.17</option>
                                    <option value="4">11.12.16-11.12.17</option>
                                    <option value="5">11.12.16-11.12.17</option>
                                </select>
                            </div>
                        </div>
                        <div class="statistic-body">
                            <table id="simple-example-table" class="statistic-body__table">
                                <tbody>
                                <tr>
                                    <td><i class="icon-small-yellow-picker"></i>Объект</td>
                                    <td><i class="icon-small-yellow-eye"></i>Cегодня</td>
                                    <td>Вчера</td>
                                    <td>Последние 30 дней</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="link">Fitness-Life Позняки</a></td>
                                    <td>20</td>
                                    <td>120</td>
                                    <td>3000</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="link">Фитнес клуб Wild Athletics</a></td>
                                    <td>10</td>
                                    <td>89</td>
                                    <td>2200</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="link">Раков Илья Максимович</a></td>
                                    <td>38</td>
                                    <td>246</td>
                                    <td>7630</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="link">Фитнес центр "Лето"</a></td>
                                    <td>25</td>
                                    <td>229</td>
                                    <td>1209</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="link">Фитнес клуб World Class Lite"</a></td>
                                    <td>60</td>
                                    <td>780</td>
                                    <td>5701</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="link">Гоккоев Павел Игоревич"</a></td>
                                    <td>12</td>
                                    <td>457</td>
                                    <td>3701</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once "parts/footer.php" ?>
</html>