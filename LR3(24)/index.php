<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="UTF-8">
    <title>Организация дня рождения или юбилея в Волгограде</title>
    <meta charset="UTF-8">
    <!--для открытия на смартфоне-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Exo+2:wght@700&display=swap" rel="stylesheet">

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class = "cake_bg" background="images/background.jpg">

    <!-- ШАПКА -->
    <nav class = "cap shadow navbar navbar-expand-lg sticky-top">
        <div class="container justify-content-center align-items-center">
            <div class="header">
                <div class="row">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="bxr-logo"><img width="240" src="images/pertsi_logo.png" height="auto" text-align="middle"></a>
                        </li>
                        <div class="row">
                            <ul class="nav justify-content-end">
                                <li class="nav-item" style="padding-top: 20px;">
                                    <a class="link" href="#"><img src = "images/messagers.png">+7 (902) 098 35 55<br></a>
                                    <a class="link" href="#" style="padding-left: 92px;" href="#"><img src = "images/mail.png">hello@pertsi.ru</a>
                                </li>
                                <li>
                                    <img style="margin-left: 30px; margin-right: 30px;" src="images/peretz.png">
                                </li>
                            </ul>

                            <ul class="nav justify-content-between header-top-margin">
                                <ul class="nav flex-column justify-content-start">
                                            <li class="nav-item dropdown">
                                                <a class="link dropdown-item dropdown-toggle " data-bs-toggle="dropdown">Услуги</a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li><a class="link dropdown-item" href="#">Организация свадьбы</a></li>
                                                    <li><a class="link dropdown-item" href="#">Организация выпускного</a></li>
                                                    <li><a class="link dropdown-item" href="#">Дни рождения и юбилеи</a></li>
                                                    <li><a class="link dropdown-item" href="#">Корпоративные мероприятия</a></li>
                                                    <li><a class="link dropdown-item" href="#">Открытия и презентации</a></li>
                                                </ul>
                                            </li>
                                </ul>
                                    <li class="nav-item header-top-margin">
                                        <a class="link" href="#">Портфолио</a>
                                    </li>
                                    <li class="nav-item header-top-margin">
                                        <a class="link" href="#">Отзывы</a>
                                    </li>
                                    <li class="nav-item header-top-margin">
                                        <a class="link" href="#">О нас</a>
                                    </li>
                                    <ul class="nav flex-column justify-content-start" >
                                            <li class="nav-item dropdown">
                                                <a class="link dropdown-item dropdown-toggle " data-bs-toggle="dropdown">Каталог</a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li><a class="link dropdown-item" href="#"><img src="images/bantik.png">Ведущие</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/camera.png">Фотографы</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/filmcamera.png">Видеографы</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/star.png">Артисты</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/plate.png">Банкетные залы и шатры</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/tooth.png">Оформление</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/waiter.png">Кейтеринг</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/curtains.png">Регистраторы</a></li>
                                                    <li><a class="link dropdown-item" href="#"><img src="images/cake.png">Торты</a></li>
                                                </ul>
                                            </li>
                                    </ul>
                                    <li class="nav-item header-top-margin">
                                        <a class="link" href="#">Контакты</a>
                                    </li>
                                    <li class="nav-item header-left-margin">
                                        <li class="nav-item">
                                            <a href="#"><img src="images/basket.png"></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#"><a href="#"><img src="images/search.png"></a></a>
                                        </li>
                                    <?php if (isset($_SESSION['loggedUser'])) : ?>
                                        <li class="nav-item ms-2 pt-1">
                                            Вы авторизированы как <?php echo htmlspecialchars($_SESSION['loggedUser'])?>
                                        </li>
                                        <li class="nav-item ms-2 me-2">
                                            <a type="button" class="btn btn-danger btn-sm" href="logout.php">Выйти</a>
                                        </li>
                                    <?php else : ?>
										<li class="nav-item">
                                            <a class="link" href="register.php">Регистрирация</a>
                                        </li>
                                        <?php endif;?>
                                    </li>
                                </ul>
                        </div>

                </div>
            </div>
        </div>
    </nav>

    <!-- ГЛАВНЫЙ ЭКРАН -->
    <div class="main cake_bg">
        <div style="padding-top: 20px;" align="center">
            <div class = "container" style="padding-left: 100px;">
                <nav aria-label="breadcrumb">
                     <ol class="breadcrumb" align="center">
                        <li class="breadcrumb-item"><a class="back_link" href="#">Главная</a></li>
                        <li class="breadcrumb-item"><a class="back_link" href="#">Услуги</a></li>
                        <li class="breadcrumb-item active back_text_last" style="color: rgb(215, 215, 216);">Дни рождения и юбилеи</li>
                     </ol>
                </nav>
            </div> 
            <h2 class="heading">Дни рождения и юбилеи</h2>
            <img align = "center"; src="images/greenthing.png" style="margin-bottom: 25px; padding-bottom: 20px;">
        </div>


        <div class = "white_bg">
            <div align="center">
                <button class = "red_button">Бесплатная консультация</button>
            </div>
            <!-- ТЕКСТ НИЖЕ БЛОКА С КНОПКОЙ -->
            <div class="container main_text" style="max-width: 850px;" align="start" align="center">
                <p>Организация дня рождения или юбилея — хороший повод устроить веселый праздник.</p>
                <p>Каждый юбиляр хочет, чтобы событие стало ярким и запоминающимся.</p>
                <p>Радость гостей и спокойствие виновника торжества стоит того, чтобы обратиться за помощью в event-агентство.</p>
                <p>Event-агентство «Перцы» поможет вам организовать незабываемое торжество, которое подарит и имениннику, и гостям массу положительных эмоций.</p>
                <p>Мы подготовим для вас сценарий проведения юбилея, вам не нужно будет тратить время и силы на поиск хорошего ресторана, ведущего или артистов на ваш праздник — все это мы возьмем на себя.</p>
            </div>

        <!--ЭКРАН С КАРТИНКАМИ-->
            <div class="imgdivclass">
                <h2 class="heading" align="center" style="color: #000">Портфолио</h2>
                <div align = "center">
                    <img src="images/greenthing.png" style="margin-bottom: 25px; padding-bottom: 20px;">
                </div>
                <div align="center" style="padding-bottom: 100px;">
                    <table>
                        <tbody>
                            <tr>
                                <td><a href="#"><img class = "img" src = "images/1photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/2photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td rowspan="2"><a href="#"><img class = "img" src = "images/3photo.jpg" width="220"  text-align="middle" height="294"></a></td></td>
                                <td><a href="#"><img class = "img" src = "images/4photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/5photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/6photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/7photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/8photo.jpg" width="220" height="147" text-align="middle"></a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img class = "img" src = "images/9photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/10photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/11photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/12photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/13photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/14photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/15photo.jpg" width="220" height="147" text-align="middle"></a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img class = "img" src = "images/16photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/17photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/18photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td><a href="#"><img class = "img" src = "images/19photo.jpg" width="220" height="147" text-align="middle"></a></td>
                                <td></td>
                                <td><a href="#"><img class = "img" src = "images/20photo.jpg " width="220" height="147" text-align="middle"></a></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--ЭКРАН С ОТЗЫВАМИ-->
            <div align="center">
                <h2 class="heading">Отзывы</h2>
                <div align = "center">
                    <img src="images/greenthing.png" style="margin-bottom: 25px; padding-bottom: 20px;">
                </div>
            </div>

            
            <!--КАРУСЕЛЬ С ОТЗЫВАМИ-->
            <div class="container" align="center">
                <div id="review_carousel" class="carousel slide" data-ride="carousel" style="max-width: 1300px;">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="review_bg" alt="1 отзыв">
                                <table class="review_table">
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img class = "review_img" src = "images/1reviewphoto.jpg"></a></td>
                                            <td rowspan="3"><p class= "review_text"> 
                                                Ксения, мы ВСЕ (да да «все», я сейчас вам пишу слова БЛАГОДАРНОСТИ от всех
                                                присутствующих на нашем сегодняшнем суперском празднике, организованном вами!)
                                                вы большая молодец, во-первых вы большая молодец что были постоянно со мной на
                                                связи, так как я с другого ГОРОДА, отвечали на куча моих вопросов, ездили
                                                договаривались, налаживали со всеми язык, дабы было всем хорошо, за это вам
                                                отдельное большое спасибо от меня!! Все замечательно подобрали, ведущих: Мария и
                                                ее диджей молодец учли вкусы по му...<a class = "review_link" href = "#"> Показать весь отзыв</a></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="review_name">Anna Mladenovich</p></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><img class="inst_img" src="images/instagram.png" ></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                        <div class="carousel-item">
                            <div class="review_bg" alt="2 отзыв">
                                <table class="review_table">
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img class = "review_img" src = "images/2reviewphoto.jpg"></a></td>
                                            <td rowspan="3"><p class= "review_text"> 
                                                Ксения, мы ВСЕ (да да «все», я сейчас вам пишу слова БЛАГОДАРНОСТИ от всех
                                                присутствующих на нашем сегодняшнем суперском празднике, организованном вами!)
                                                вы большая молодец, во-первых вы большая молодец что были постоянно со мной на
                                                связи, так как я с другого ГОРОДА, отвечали на куча моих вопросов, ездили
                                                договаривались, налаживали со всеми язык, дабы было всем хорошо, за это вам
                                                отдельное большое спасибо от меня!! Все замечательно подобрали, ведущих: Мария и
                                                ее диджей молодец учли вкусы по му...<a class = "review_link" href = "#"> Показать весь отзыв</a></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="review_name">Ольга Викулина</p></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><img class="inst_img" src="images/instagram.png" ></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                        <div class="carousel-item">
                            <div class="review_bg" alt="3 отзыв">
                                <table class="review_table">
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img class = "review_img" src = "images/3reviewphoto.jpg"></a></td>
                                            <td rowspan="3"><p class= "review_text"> 
                                                Хочу выразить большую благодарность самому крутому ведущему Сергею Кравченко за
                                                проведение моего праздника — дня рождения 09.02.2019 г. 1!!! Сережа, спасибо за эти
                                                позитивные эмоции, которые мы испытывали на протяжении всего вечера! Вечер прошел
                                                на ура!! Все очень креативно, с добротой! Я в восторге! Мои гости естественно тоже!
                                                Огромное спасибо за профессионализм! За великолепные песни! Это сильный голос и
                                                большой талант! Работали с Сергеем н...<a class = "review_link" href = "#"> Показать весь отзыв</a></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="review_name">Ольга</p></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><img class="inst_img" src="images/instagram.png" ></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                      <!--КНОПКИ КАРУСЕЛИ-->
                      <a class="carousel-control-prev" href="#review_carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                      </a>
                      <a class="carousel-control-next" href="#review_carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                      </a>
                </div>
            </div>

            <!--КНОПКА ЕЩЕ ОТЗЫВЫ-->
            <div align="center">
                <button class="white_button" align="center">Ещё отзывы</button>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
     crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
     crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
     crossorigin="anonymous"></script>
</body>
</html>