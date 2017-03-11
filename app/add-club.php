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
                            <a href="#">Рассылки</a>
                        </li>
                        <li>
                            <a href="#">Мои объекты</a>
                        </li>
                        <li>
                            <a href="#">Тренеры</a>
                        </li>
                        <li>
                            <a href="#">Объекты аренды</a>
                        </li>
                        <li>
                            <a href="#">Спортивные магазины</a>
                        </li>
                        <li>
                            <a href="#">Акции</a>
                        </li>
                        <li>
                            <a href="#">Услуги и счета</a>
                        </li>
                        <li>
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
                    <h1 class="section-block__title--light top-zero ">Добавление клуба</h1>

                    <div class="add-block">
                        <form action="#">

                            <fieldset class="is-active-check">
                                <input type="checkbox" id="add-1" class="custom-checkbox">
                                <label for="add-1" class="label-bold">Активен</label>
                            </fieldset>

                            <fieldset>
                                <input type="text" class="border-input col-sm-12" placeholder="Название клуба">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="custom-select" title="Выбрать город" data-width="100%">
                                                <option value="0">Киев</option>
                                                <option value="0">Одесса</option>
                                                <option value="0">Львов</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="custom-select" title="Выбрать район" data-width="100%">
                                                <option value="0">Район-Киев-1</option>
                                                <option value="0">Район-Киев-2</option>
                                                <option value="0">Район-Киев-3</option>
                                                <option value="0">Район-Киев-4</option>
                                                <option value="0">Район-Киев-5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <select class="custom-select" title="Выбрать улицу" data-width="100%">
                                                <option value="0">Вокзальная-1</option>
                                                <option value="1">Вокзальная-2</option>
                                                <option value="2">Вокзальная-3</option>
                                                <option value="3">Вокзальная-4</option>
                                                <option value="4">Вокзальная-5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="border-input col-sm-12" placeholder="Выбрать улицу">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="border-input col-sm-12" placeholder="Номер">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="map-init">
                                <div id="map" style="height: 200px; background-color: gray"></div>
<!--                                <script>-->
<!---->
<!--                                    //        init map with javascript-->
<!--                                    function initMap() {-->
<!--                                        var myLatLng = {lat: 50.4434022, lng: 30.5202183};-->
<!---->
<!---->
<!--                                        var map = new google.maps.Map(document.getElementById('map'), {-->
<!--                                            zoom: 13,-->
<!--                                            scrollwheel: false,-->
<!--                                            center: myLatLng-->
<!--                                        });-->
<!--//                                    var iconBase = '';-->
<!---->
<!--                                        var marker = new google.maps.Marker({-->
<!--                                            position: myLatLng,-->
<!--                                            map: map,-->
<!--//                                        icon: iconBase,-->
<!--                                            title: 'Sporty'-->
<!--                                        });-->
<!---->
<!--                                    }-->
<!--                                </script>-->
<!--                                <script async defer-->
<!--                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZIngoLRi7b8SOAsASZu726qekWdjQng0&callback=initMap">-->
<!--                                </script>-->
                            </fieldset>
                            <fieldset class="photo-set">
                                <h3 class="photo-set--title">Фотографии</h3>
                                <label for="file-1" class="custom-input-file"><input type="file" id="file-1"><span>Выберите файлы</span></label>
                                <div class="photo-set--list">
                                    <ul>
                                        <li class="photo-set--item">
                                            <img src="img/jpeg_files/prev-1.jpg" alt="preview">
                                        </li>
                                        <li class="photo-set--item">
                                            <img src="img/jpeg_files/prev-2.jpg" alt="preview">
                                        </li>
                                        <li class="photo-set--item">
                                            <img src="img/jpeg_files/prev-3.jpg" alt="preview">
                                        </li>
                                        <li class="photo-set--item">
                                            <img src="img/jpeg_files/prev-4.jpg" alt="preview">
                                        </li>
                                        <li class="photo-set--item">
                                            <img src="img/jpeg_files/prev-5.jpg" alt="preview">
                                        </li>
                                        <li class="photo-set--item">
                                            <img src="img/jpeg_files/prev-6.jpg" alt="preview">
                                        </li>
                                    </ul>

                                </div>


                            </fieldset>
                            <fieldset class="photo-set">
                                <h3 class="photo-set--title">Главная фотография</h3>
                                <label for="file-1" class="custom-input-file"><input type="file" id="file-1"><span>Выберите файлы</span></label>
                                <div class="photo-set--list">
                                    <ul>
                                        <li class="photo-set--item">
                                            <img src="img/jpeg_files/prev-7.jpg" alt="preview">
                                        </li>
                                        <li class="photo-set--item">
                                            <label for="file-3" class="custom-input-file-2"><input type="file" id="file-3"></label>
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>
                            <fieldset class="object-description">
                                <div class="form-group">
                                    <textarea class="border-input col-sm-12" rows="10" placeholder="Описание объекта"></textarea>
                                </div>
                            </fieldset>

                            <fieldset class="contact-info">
                                <h3 class="section-block__title">Контактная информация</h3>
                                <div class="add-tel-number">
                                    <div class="row">
                                        <div class="col-sm-2"><span class="info__label">Телефон:</span></div>
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-sm-6"><input type="tel" class="border-input col-sm-12" placeholder="+38(0__) ___-____"></div>
                                                <div class="col-sm-6"><input type="text" class="border-input col-sm-12" placeholder="Название отдела"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="#" class="contact-info__add-tel"><i class="icon-plus"></i>Добавить телефон</a>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-sm-2"><span class="info__label">E-mail адрес:</span></div>
                                        <div class="col-sm-10">
                                            <input type="email" class="border-input col-sm-12" placeholder="email">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-2"><span class="info__label">E-mail для заявок:</span></div>
                                        <div class="col-sm-10">
                                            <input type="email" class="border-input col-sm-12" placeholder="email">
                                        </div>
                                    </div>
                            </fieldset>

                            <fieldset>
                                <h3 class="section-block__title">Добаления направления / секции</h3>
                                <div class="add-sport-section">
                                    <h4 class="section-block__title--light top-zero">Фитнес клуб</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6"><span class="info__label">Стоимость за месяц от:</span></div>
                                                <div class="col-sm-6 no-left-padding">
                                                    <input type="text" class="border-input border-input--short col-sm-12">
                                                </div>
                                            </div>
                                       </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6"><span class="info__label">Разовое посещение от:</span></div>
                                                <div class="col-sm-6 no-left-padding">
                                                    <input type="text" class="border-input border-input--short col-sm-12">
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6"><span class="info__label">Годовой абонемент от:</span></div>
                                                <div class="col-sm-6 no-left-padding">
                                                    <input type="text" class="border-input border-input--short col-sm-12 ">
                                                </div>
                                            </div>
                                       </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6"><span class="info__label">Бесплатное занятие</span></div>
                                                <div class="col-sm-6 no-left-padding">
                                                    <select class="custom-select border-input" title="Да" data-width="70px">
                                                        <option value="0">Да</option>
                                                        <option value="1">Нет</option>
                                                    </select>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">

                                                <input type="checkbox" id="add-2" class="custom-checkbox">
                                                <label for="add-2" class="label-medium">Уточняйте</label>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once "parts/footer.php" ?>
</html>