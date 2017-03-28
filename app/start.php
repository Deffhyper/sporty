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
                <div class="start-page text-center">
                    <h1 class="start-page__title">Этот раздел находится в разработке</h1>
                    <p class="start-page__subtitle">Оставьте свой Email и мы опевестим Вас <b>первым</b> о запуске  сайта.
                        Так же вы автоматически становитесь участником розыграша <mark class="mark-blue">*</mark>
                        <b>супер-приза!</b></p>
                    <div class="start-page__form">
                        <h2 class="start-page__form--title">Введите Ваши данные:</h2>
                        <div class="start-page__form--image">
                            <img src="img/jpeg_files/cup.png" alt="cup">
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 start-page__form--inputLeft">
                                    <i class="icon-user-white"></i>
                                    <input type="text" class="input-round-border" placeholder="Ваше имя">
                                </div>
                                <div class="col-sm-6 col-xs-12 start-page__form--inputRight">
                                    <i class="icon-mail-white"></i>
                                    <input type="email" class="input-round-border" placeholder="E-mail">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-big btn-yellow-gradient">Хочу быть первым!</button>
                        </form>
                    </div>

                    <p class="start-page__inform">* условия розыграша будут отправлены на Ваш email за 10 рабочих дней до официального запуска сайта.</p>

                    <div class="start-page__counter">
                        <h3 class="start-page__counter--title">До запуска сайта осталось:</h3>
                        <div id="countdown"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once "parts/footer.php" ?>
<script>
    ////////////////////////////////////// countdown
    function countdown(){
        var names = {days:      {1:"день", 2:"дня", 3: "дней"},
            hours:     {1:"час", 2: "часа", 3: "часов"},
            minutes:   {1:"минута", 2: "минуты", 3: "минут"},
            seconds:   {1:"секунда", 2: "секунды", 3: "секунд"}
        };
        var day_name = names['days'][3];
        var hur_name = names['hours'][3];
        var min_name = names['minutes'][3];
        var sec_name = names['seconds'][3];


        var today = new Date();
        var BigDay = new Date(2017, 04, 31, 15, 00, 00);
        var timeLeft = (BigDay.getTime() - today.getTime());

        var e_daysLeft = timeLeft / 86400000;
        var daysLeft = Math.floor(e_daysLeft);

        var slice_day = String(daysLeft).slice(-1);
        if(parseInt(slice_day) == 1 && (parseInt(daysLeft) < 10 || parseInt(daysLeft) > 20)){
            day_name = names['days'][1];
        }else if((parseInt(slice_day) == 2 || parseInt(slice_day) == 3 || parseInt(slice_day) == 4) && (parseInt(daysLeft) < 10 || parseInt(daysLeft) > 20)){
            day_name = names['days'][2];
        }else{
            day_name = names['days'][3];
        }

        var e_hrsLeft = (e_daysLeft - daysLeft)*24;
        var hrsLeft = Math.floor(e_hrsLeft);
        if(hrsLeft < 10){
            hrsLeft = '0'+hrsLeft;
        }
        var slice_hours = String(hrsLeft).slice(-1);
        if(parseInt(slice_hours) == 1 && (parseInt(hrsLeft) < 10 || parseInt(hrsLeft) > 20)){
            hur_name = names['hours'][1];
        }else if((parseInt(slice_hours) == 2 || parseInt(slice_hours) == 3 || parseInt(slice_hours) == 4)  && (parseInt(hrsLeft) < 10 || parseInt(hrsLeft) > 20)){
            hur_name = names['hours'][2];
        }else{
            hur_name = names['hours'][3];
        }

        var e_minsLeft = (e_hrsLeft - hrsLeft)*60;
        var minsLeft = Math.floor(e_minsLeft);
        if(minsLeft < 10){
            minsLeft = '0'+minsLeft;
        }
        var slice_min = String(minsLeft).slice(-1);
        if(parseInt(slice_min) == 1 && (parseInt(minsLeft) < 10 || parseInt(minsLeft) > 20)){
            min_name = names['minutes'][1];
        }else if((parseInt(slice_min) == 2 || parseInt(slice_min) == 3 || parseInt(slice_min) == 4) && (parseInt(minsLeft) < 10 || parseInt(minsLeft) > 20)){
            min_name = names['minutes'][2];
        }else{
            min_name = names['minutes'][3];
        }

        var seksLeft = Math.floor((e_minsLeft - minsLeft)*60);
        if(seksLeft < 10){
            seksLeft = '0'+seksLeft;
        }
        var slice_sec = String(seksLeft).slice(-1);
        if(parseInt(slice_sec) == 1 && (parseInt(seksLeft) < 10 || parseInt(seksLeft) > 20)){
            sec_name = names['seconds'][1];
        }else if((parseInt(slice_sec) == 2 || parseInt(slice_sec) == 3 || parseInt(slice_sec) == 4) && (parseInt(seksLeft) < 10 || parseInt(seksLeft) > 20)){
            sec_name = names['seconds'][2];
        }else{
            sec_name = names['seconds'][3];
        }

        if (BigDay.getTime() > today.getTime() ){

            document.getElementById("countdown").innerHTML =
                "<div>"
                +"<span>"+daysLeft+"</span><span>:</span>"
                +"<span>"+day_name+"</span>"
                +"</div>"
                +"<div>"
                +"<span>"+hrsLeft+"</span><span>:</span>"
                +"<span>"+hur_name+"</span>"
                +"</div>"
                +"<div>"
                +"<span>"+minsLeft+"</span><span>:</span>"
                +"<span>"+min_name+"</span>"
                +"</div>"
                +"<div>"
                +"<span>"+seksLeft+"</span>"
                +"<span>"+sec_name+"</span>"
                +"</div>";
        } else {
            document.getElementById("countdown").innerHTML = "<a href='/'>Ссылка на сайт!</a>"
        }
    }
    setInterval(function () {
        countdown();
    }, 1000);
</script>
</html>