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

<div class="container md-padding--bottom">
    <div class="row">
        <div class="col-sm-12">
            <div class="block-with-border">
                <div class="error-page text-center">
                    <h1 class="error-page__title">404</h1>
                    <p class="error-page__subtitle">увы, такой страницы не существует,</p>
                    <p class="error-page__direction">но мы уверены, что Вы сможете найти нужную информацию в наших разделах:</p>
                    <ul class="list-inline">
                        <li><a href="#" class="link-button">Виды спорта</a></li>
                        <li><a href="#" class="link-button">Тренеры</a></li>
                        <li><a href="#" class="link-button">Аренда</a></li>
                        <li><a href="#" class="link-button">Спортивные магазины</a></li>
                        <li><a href="#" class="link-button">Акции</a></li>
                    </ul>
                    <div class="error-page__image">
                        <img src="img/jpeg_files/men.png" alt="page not found">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once "parts/footer.php" ?>
</html>