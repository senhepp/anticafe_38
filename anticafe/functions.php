    <link rel="stylesheet" href="styles.css">
<?php
    function drawHeader(){
?>
        <div class="header">
            <a href="index.php" class="logoAndText">
                <div class = "logo">
                    <div class="dice"><img src="images/dice.svg"></div>
                    <div class="cup"><img src="images/cup.svg"></div>
                </div>
                <div class="textLogo">UpTime</div>
            </a>
            <div class="headerElement"></div>
            <a href="index.php" class="headerElement">Акции</a>
            <a href="news.php" class="headerElement">Новости</a>
            <a href="tariffs.php" name="hallSelection" class="headerElement">Тарифы</a>
            <a href="contacts.php" class="headerElement">Контакты</a>
        </div>
<?php   
    }

    function drawFooter(){
?>
        <div class="footer">
            <div>
                <div class="strFooter">
                    <img src="images/pinIcon.svg">
                    <a href="https://yandex.ru/maps/213/moscow/house/krivokolenny_pereulok_3/Z04YcARiQEEEQFtvfXt3cXtgZg==/" target="_blank" class="footerClickText">
                        Москва, ул. Кривоколенный переулок, 3
                    </a>
                </div>
                <div class="strFooter">
                    <img src="images/moscowMetro.svg">
                    <a href="https://yandex.ru/maps/213/moscow/stops/station__9858845/" target="_blank" class="footerClickText">
                        Лубянка
                    </a>
                </div>
                <div class="strFooter"><br></div>
                <div class="strFooter">
                    <img src="images/time.svg">
                    <div class="footerText">Работаем круглосуточно</div>
                </div>
                <div class="strFooter"><br></div>
            </div>
            <div>
                <div class="footerLogo">
                    <img src="images/logoCup.svg">
                </div>
                <div class="strFooter"><br></div>
                <div class="strFooter"><br></div>
                <div class="strFooter">
                    <img src="images/copyrightPic.svg">
                    <div class="footerText">Антикафе “Uptime”, 2023</div>
                </div>
            </div>
            <div>
                <div class="strFooter">
                    <a href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank" class="footerClickText">
                        Политика конфиденциальности
                    </a>
                </div>
                <div class="strFooter">
                    <a href="https://otvet.mail.ru" target="_blank" class="footerClickText">
                        Вопросы и ответы
                    </a>
                </div>
                <div class="strFooter"><br></div>
                <div class="strFooter">
                    <a href="https://vk.com/ask_mirea" target="_blank" class="footerClickIcon">
                        <img src="images/iconVk.svg">
                    </a>
                    <a href="https://www.whatsapp.com" target="_blank" class="footerClickIcon">
                        <img src="images/iconWhatsapp.svg">
                    </a>                    
                    <a href="https://t.me/telegram" target="_blank" class="footerClickIcon">
                        <img src="images/iconTelegram.svg">
                    </a>
                    <a href="https://mail.google.com" target="_blank" class="footerClickIcon">
                        <img src="images/iconGmail.svg">
                    </a>
                </div>
            </div>
        </div>
<?php   
    }

    function drawPromotions(){
?>
        <div class="bodyPromotionsHI">
            <div class="textEL72" style="padding-top: 128px; margin-left: 20%;">
                Антикафе Uptime
            </div>
            <div class="textL48" style="padding-top: 32px; margin-left: 20%;">
                Сеть уютных антикафе в Москве
            </div>
            <div style="display: flex; justify-content: end;  margin-right: 30%; padding-top: 384px;">
                <a href="tariffs.php#hallSelection" class="buttonR32">Выбрать зал</a>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div class="textL56" style="padding-top: 128px;">
                Акции и Скидки
            </div>
        </div>
        <div style="display: flex; justify-content: center; padding-top: 96px; padding-bottom: 160px;">
            <div class="promotionCard" style="background-color: #6517A6; display: flex; justify-content: center;">
                <div class="textR48" style="text-align: center; align-self: center;">
                    -10% <br> на день <br> рождения
                </div>
            </div>
            <div class="promotionCard" style="background-color: #006620; display: flex; justify-content: center;">
                <div class="textR48" style="text-align: center; align-self: center;">
                    Час в подарок <br> 4+1
                </div>  
            </div>
            <div class="promotionCard" style="background-color: #990069; display: flex; justify-content: center;">
                <div class="textR48" style="text-align: center; align-self: center;">
                    -20% <br> студентам
                </div>
            </div>
        </div>
        <div class="bodyPromotionsHI" style="background-image: url('images/freePizza.svg');">
            <div style="display: flex; justify-content: center;">
                <div class="textL56" style="padding-top: 256px;">
                    Бесплатная пицца за 8 часов посещения
                </div>
            </div>
            <div style="display: flex; justify-content: end;  margin-right: 20%; padding-top: 128px;">
                <a href="tariffs.php#hallSelection" class="buttonR32">Узнать больше</a>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div class="textL56" style="padding-top: 128px; color: #62B919;">
                Антикафе?
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div class="textR32" style="padding-top: 80px; width: 864px; margin-left: 64px;">
                Антикафе — это место, куда вы приходите провести время, пообщаться с друзьями и завести новые знакомства.
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div class="textR32" style="padding-top: 56px; width: 864px; margin-left: 64px;">
                У нас можно собираться компаниями, арендовать настолки, играть в приставку, выбирать удобный зал. 
                Клиенты платят за проведенное время, другие возможности бесплатны, безлимитны и круглосуточны.
            </div>
        </div>
        <div style="display: flex; justify-content: center; padding-top: 80px; padding-bottom: 64px;">
                <a href="https://ru.wikipedia.org/wiki/Антикафе" target="_blank" class="buttonR32">Так, а подробнее?</a>
        </div>
<?php   
    }

    function drawTariffs(){
?>
        <div class="bodyTariffs" style="background: #171717;">
            <div class="headerTariffs" style="color: #62B919;">Тарификация</div>
            <div class="textTariffs32" style="padding-top: 32px; padding-bottom: 32px;">
                Тарифы определяются временем, когда вы пришли к нам:
            </div>
            <div class="tariff">
                <div>
                    <div style="display: flex; padding-top: 32px; padding-bottom: 32px;">
                        <div><img src="images/icon_1.svg"></div>
                        <div class="textTariffs32" style="color: #990069; align-self: flex-end;">руб/мин</div>
                    </div>
                    <div class="textTariffs32" style="padding-bottom: 32px;">22:00 - 6:00</div>
                </div>
                <div>
                    <div style="display: flex; padding-top: 32px; padding-bottom: 32px;">
                        <div><img src="images/icon_2.svg"></div>
                        <div class="textTariffs32" style="color: #990069; align-self: flex-end;">руб/мин</div>
                    </div>
                    <div class="textTariffs32" style="padding-bottom: 32px;">6:00 - 13:00</div>
                </div>
                <div>
                    <div style="display: flex; padding-top: 32px; padding-bottom: 32px;">
                        <div><img src="images/icon_3.svg"></div>
                        <div class="textTariffs32" style="color: #990069; align-self: flex-end;">руб/мин</div>
                    </div>
                    <div class="textTariffs32" style="padding-bottom: 32px;">13:00 - 22:00</div>
                </div>
            </div>  
        </div>

        <div class="bodyTariffs">
            <div class="headerTariffs" style="color: #6517A6;">Так сколько с меня?</div>
            <div class="textTariffs24" style="padding-top: 16px; padding-bottom: 16px;">
                Давайте вместе посчитаем, для этого нужны некоторые данные о вас:
            </div>            
            <div class="elementTariff">
                <div class="textTariffs24" style="text-align: left; padding-top: 32px; padding-left: 16px; padding-bottom: 16px;">
                    Сколько людей без учета студентов?
                </div>
                <input type="number" id="numPeople" value="0" min=0 max=20 oninput='price()'>
            </div>
            <div class="elementTariff">
                <div class="textTariffs24" style="text-align: left; padding-top: 32px; padding-left: 16px; padding-bottom: 16px;">
                    Сколько в вашей компании студентов?
                </div>
                <input type="number" id="numStud" value="0" min=0 max=20 oninput='price()'>
            </div>
            <div class="elementTariff">
                <div class="textTariffs24" style="text-align: left; padding-top: 32px; padding-left: 16px; padding-bottom: 16px;">
                    Как долго планируете быть в Uptime?
                </div>
                <input type="number" id="numTime" value="0" min=0 max=20 oninput='price()'>
            </div>
            <div class="elementTariff">
                <div class="textTariffs24" style="text-align: left; padding-top: 32px; padding-left: 16px; padding-bottom: 16px;">
                    Когда нам вас ждать?
                </div>
                <div class="inputDateTime">
                    <input type="date">
                    <div class="textTariffs24" style="align-self: center; color:62B919;">в</div>
                    <input type="time" id="startTime" value="00:00" oninput='price()'>
                </div>
            </div>
            <div style="display: flex; justify-content:center; padding-top: 16px;">
                <div class="headerTariffs" style="color: #EAEAEA; padding-bottom: 16px;">Итого:&nbsp;</div>
                <div id = "info1" class="headerTariffs" style="color: #6517A6; padding-bottom: 16px;">0</div>
                <div class="headerTariffs" style="color: #6517A6; padding-bottom: 16px;">&nbsp;рублей&nbsp;</div>
                <div class="headerTariffs" style="color: #EAEAEA; padding-bottom: 16px;">за компанию</div>
            </div>

            <div class="textTariffs24" style="padding-bottom: 16px;">
                А ещё от 8 часов пребывания полагается бесплатная пицца!
            </div>
            <div style="display: flex; justify-content: center; padding-top: 16px;">
                <a href="#hallSelection" class="buttonTariffs32">Мне подходит</a>
            </div>
        </div>
<?php   
    }
?>  

<script>
    function price() {
        //студентам скидки 20% (см. акции)
        var numP = document.getElementById("numPeople").value;
        var numS = document.getElementById("numStud").value;
        var numT = document.getElementById("numTime").value;
        var startTime = document.getElementById("startTime").value;
        if (startTime >= "22:00" || startTime < "06:00"){
            var price = (numP * numT * 60) + (numS * numT * 60 * 0.8);
        }
        if (startTime >= "06:00" && startTime < "13:00"){
            var price = (numP * numT * 120) + (numS * numT * 120 * 0.8);
        }
        if (startTime >= "13:00" && startTime < "22:00"){
            var price = (numP * numT * 180) + (numS * numT * 180 * 0.8);
        }
        info1.innerHTML = price;
    }
</script>