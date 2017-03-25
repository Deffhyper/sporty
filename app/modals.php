<!DOCTYPE html>
<html>
<?php include_once "parts/header.php" ?>

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
                <ul>
                    <li><a href="#logIn" class="modal-link" data-toggle="modal" data-target="#logIn">Войти</a></li>
                    <li><a href="#register" class="modal-link" data-toggle="modal" data-target="#register">Зарегистрироваться</a></li>
                    <li><a href="#sort-choice" class="modal-link" data-toggle="modal" data-target="#sort-choice">Выбор направления</a></li>
                    <li><a href="#city-choice" class="modal-link" data-toggle="modal" data-target="#city-choice">Выбор города</a></li>
                    <li><a href="#order-form" class="modal-link" data-toggle="modal" data-target="#order-form">Форма записи</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php include_once "parts/footer.php" ?>
</html>