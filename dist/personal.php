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
                        <li class="active">
                            <a href="#">Избранное</a>
                        </li>
                        <li>
                            <a href="#">Мои отзывы</a>
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
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
               <div class="block-with-border">
                   <h1 class="section-block__title--light top-zero ">Персональная информация</h1>
                   <div class="personal-form">
                       <form action="#">
                           <fieldset class="row add-block">
                               <div class="col-sm-4 text-right">
                                   <label for="pf-1" class="info__label info__label--bold">Имя:</label>
                               </div>
                               <div class="col-sm-8">
                                   <input type="text" id="pf-1" class="border-input col-xs-12">
                               </div>
                           </fieldset>
                           <fieldset class="row add-block">
                               <div class="col-sm-4 text-right">
                                   <label for="pf-2" class="info__label info__label--bold">Фамилия:</label>
                               </div>
                               <div class="col-sm-8">
                                   <input type="text" id="pf-2" class="border-input col-xs-12">
                               </div>
                           </fieldset>
                           <fieldset class="row add-block">
                               <div class="col-sm-4 text-right">
                                   <label for="pf-3" class="info__label info__label--bold">Телефон</label>
                               </div>
                               <div class="col-sm-8">
                                   <input type="tel" id="pf-3" class="border-input col-xs-12">
                                   <span class="personal-form__confirm">Не подтвержден<a href="#" class="link">Подтвердить</a></span>
                               </div>
                           </fieldset>
                           <fieldset class="row add-block">
                               <div class="col-sm-4 text-right">
                                   <label for="pf-4" class="info__label info__label--bold">Email:</label>
                               </div>
                               <div class="col-sm-8">
                                   <input type="email" id="pf-4" class="border-input col-xs-12">
                               </div>
                           </fieldset>
                           <fieldset class="row add-block">
                               <div class="col-sm-4 text-right">
                                   <label for="pf-5" class="info__label info__label--bold">Дата рождения:</label>
                               </div>
                               <div class="col-sm-8">
                                   <input type="text" id="pf-5" class="datepicker border-input col-xs-12">
                               </div>
                           </fieldset>

                           <div class="personal-form__required-block">
                               <fieldset class="row add-block">
                                   <div class="col-sm-4 text-right">
                                       <label for="pf-6" class="info__label info__label--bold">
                                           <mark class="mark-red">*</mark>
                                           Старый пароль:
                                       </label>
                                   </div>
                                   <div class="col-sm-8">
                                       <input type="password" id="pf-6" class=" border-input col-xs-12" placeholder="Введите старый пароль ">
                                   </div>
                               </fieldset>
                               <fieldset class="row add-block">
                                   <div class="col-sm-4 text-right">
                                       <label for="pf-7" class="info__label info__label--bold">
                                           <mark class="mark-red">*</mark>
                                           Новый пароль:
                                       </label>
                                   </div>
                                   <div class="col-sm-8">
                                       <input type="password" id="pf-7" class=" border-input col-xs-12" placeholder="Придумайте новый">
                                   </div>
                               </fieldset>
                               <fieldset class="row add-block">
                                   <div class="col-sm-4 text-right">
                                       <label for="pf-8" class="info__label info__label--bold">
                                           <mark class="mark-red">*</mark>
                                           Повторите пароль:
                                       </label>
                                   </div>
                                   <div class="col-sm-8">
                                       <input type="password" id="pf-8" class=" border-input col-xs-12" placeholder="Повторите новый пароль">
                                   </div>
                               </fieldset>
                           </div>

                           <fieldset class="row add-block">
                               <div class="col-sm-4 text-right">
                                   <label for="" class="info__label info__label--bold">
                                       Я хочу:
                                   </label>
                               </div>
                               <div class="col-sm-8">
                                   <ul class="personal-form__checkbox-list">
                                       <li>
                                           <input type="checkbox" id="pf-9" class="custom-checkbox custom-checkbox__bold">
                                           <label for="pf-9">Добавлять клубы/залы/сеции</label>
                                       </li>
                                       <li>
                                           <input type="checkbox" id="pf-10" class="custom-checkbox custom-checkbox__bold">
                                           <label for="pf-10">Добавлять тренеров</label>
                                       </li>
                                       <li>
                                           <input type="checkbox" id="pf-11" class="custom-checkbox custom-checkbox__bold">
                                           <label for="pf-11">Добавлять объекты аренды</label>
                                       </li>
                                       <li>
                                           <input type="checkbox" id="pf-12" class="custom-checkbox custom-checkbox__bold">
                                           <label for="pf-12">Добавлять  спортивные магазины</label>
                                       </li>
                                   </ul>
                               </div>
                           </fieldset>
                           <fieldset class="row">
                               <div class="col-xs-12 text-center">
                                   <button type="submit" class="btn btn-big btn-blue-gradient">Сохранить</button>
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