<?php include'../includes/header.php'?>
<?php 
$_GET['page'];
switch($_GET['page']){
case 'request-try': 
    $text = "Заполните заявку и получите <span class='green'>5 пробных лидов </span>";
    break;
case 'request-consult': 
    $text = "Оставьте заявку и наш специалист подробно вас проконсультирует";
    break;
default: 
    $text = "Оставьте заявку и наш специалист подробно вас проконсультирует";
    break;
} 
?>
    <main class="main">
        <section class="request">
            <div class="container">
                <div class="request__body">
                    <div class="request__left">
                        <h1 class="subtitle"><?= $text ?></h1>
                        <h3 class="main__txt-20" style="margin-top: 2.5rem;">Укажите ваши данные для связи</h3>
                        <form action="" method="post" class="request__form">
                            <input class="request__input" type="name" name="name" placeholder="Ваше имя" required/>
                            <input class="request__input" type="phone" name="phone" placeholder="Ваш телефон" required/>
                            <button type="submit" class="button-purple request__button"> Получить пробные лиды</button>
                        </form>
                        <p class="remark">*отправляя формы на данном сайте, вы даете согласие на обработку персональных данных в соответствии с 152-ФЗ</p>
                    </div>
                    <div class="request__right">
                        <img src="../src/how-leads.svg" alt="От 3 дней минимальный срок поставки лидов сразу после оформления заказа"/>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
    <?php include'../includes/footer.php'?>