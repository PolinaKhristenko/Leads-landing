<?php include'../includes/header.php'?>
<?php 
$_GET['page'];
switch($_GET['page']){
case 'sale': 
    $text = "Узнайте стоимость лидов в вашем регионе и получите <span class='green'>скидку 15% на заказ</span>";
    break;
case 'quality': 
    $text = "Закажите пробные лиды и сами проверьте качество";
    break;
default: 
    $text = "Закажите пробные лиды и сами проверьте качество";
    break;
} 
?>
    <main class="main">
        <section class="request">
            <div class="container">
                <div class="request__body">
                    <div class="request__left">
                        <h1 class="subtitle"><?= $text ?></h1>
        
                        <form id="form1" class="form1" method="post" action="#">
                            <div class="step1">
                                <h3 class="main__txt-20" style="margin: 2.5rem 0 1.5rem 0;">Какие лиды вас интересуют?</h3>
                                    <select name="sum" id="sum" class="kinds__select">
                                        <option value="" class="kinds__option" selected disabled hidden>Сумма долга</option>
                                        <option value="от 100 000₽" class="kinds__option">от 100 000₽</option>
                                        <option value="любая сумма" class="kinds__option">любая сумма</option>
                                    </select>

                                    <select name="city" id="city" class="kinds__select">
                                        <option value="" class="kinds__option" selected disabled hidden>Ваш регион</option>
                                        <option value="Москва" class="kinds__option">Москва</option>
                                        <option value="Санкт-Петербург" class="kinds__option">Санкт-Петербург</option>
                                        <option value="Алтайский край" class="kinds__option">Алтайский край</option>
                                        <option value="Астраханская область" class="kinds__option">Астраханская область</option>
                                    </select>

                                    <select name="quantity" id="quantity" class="kinds__select">
                                        <option value="" class="kinds__option" selected disabled hidden>Необходимое число лидов</option>
                                        <option value="до 10" class="kinds__option">до 10</option>
                                        <option value="от 10 до 50 шт." class="kinds__option">от 10 до 50 шт.</option>
                                        <option value="от 50 до 100 шт." class="kinds__option">от 50 до 100 шт.</option>
                                        <option value="более 100 шт" class="kinds__option">более 100 шт.</option>
                                    </select>

                                    <div class="form1__fill1"></div>


                                    <button type="button" class="button-purple step-changer request__button" style="margin-top: 1.25rem;">Заполнить заявку</a>
                            </div>
                            <div class="step2">
                                <h3 class="main__txt-20" style="margin: 2.5rem 0 1.5rem 0;">Укажите ваши данные для связи</h3>
                                <input class="request__input" type="name" name="name" placeholder="Ваше имя" required/>
                                <input class="request__input" type="phone" name="phone" placeholder="Ваш телефон" required/>
                                <div class="form1__fill2"></div>
                                <button type="submit" class="button-purple request__button"> Получить пробные лиды</button>
                            </div>
                        </form>
                    </div>
                    <div class="request__right">
                        <img src="../src/how-leads.svg" alt="От 3 дней минимальный срок поставки лидов сразу после оформления заказа"/>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php include'../includes/footer.php'?>