<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="overlay" id="overlay"></div>
<header>
    <div class="header-top">
        <div class="container clearfix">
            <div class="logo">
                <h1><a href="#"><img src="images/logo.png" alt="logo"></a></h1>
            </div>
            <div class="header-contacts">
                <div class="contact-phone">
                    <div>+7(499) 777-77-77</div>
                    <div>+7(499) 777-77-77</div>
                    <div class="contact-link">
                        <a id="form-show" href="#">Обратная связь</a>
                    </div>
                </div>
            </div>
            <form id="contact-form" class="contact-form" action="contact-form.php" method="post">
                <h3>Обратная связь</h3>
                <a id="form-close" href="#"></a>
                <ul>
                    <li>
                        <label for="name">Ваше имя*</label>
                        <input id="name" name="name" type="text">
                    </li>
                    <li>
                        <label for="phone">Телефон*</label>
                        <input id="phone" name="phone" type="text">
                    </li>
                    <li>
                        <label for="email">Email*</label>
                        <input id="email" name="email" type="email">
                    </li>
                    <li>
                        <label for="message">Сообщение</label>
                        <textarea id="message" rows="5" name="message"></textarea>
                    </li>
                    <li>
                        <button>Отправить</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-dark">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav nav-fill w-100 ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Главная </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Доставка и оплата</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Прайс-лист</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<main>
    <div class="slider">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/slide1.png" alt="slide1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide2.png" alt="slide2">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="products-path">
                <ul>
                    <li><a href="#" class="active">Главная</a></li>
                    <li><a href="#" class="active">Каталог</a></li>
                    <li><a href="#">Бытовая техника</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="left-sidebar col-12 col-lg-3">
                    <ul class="item-menu">
                        <li><a href="#">Автомобили</a></li>
                        <li><a href="#" class="active">Бытовая техника</a>
                            <ul>
                                <li><a href="#" class="active">Микроволновки</a></li>
                                <li><a href="#">Холодильники</a></li>
                                <li><a href="#">Посудомоечные машины</a></li>
                                <li><a href="#">Чайники</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Мобильная техника</a></li>
                        <li><a href="#">Компьютеры</a></li>
                        <li><a href="#">Одежда</a></li>
                        <li><a href="#">Недвижимость</a></li>
                    </ul>
                    <div class="pricelist">
                        <a href="#"><img src="images/pricelist.png" alt="pricelist"></a>
                    </div>
                </div>
                <div class="products-wrapper col-12 col-lg-9">
                    <div id="item-wrapper" class="item-wrapper">
                        <div class="product-item">
                            <div class="product-photo">
                                <img src="images/product-photo.png" alt="product-photo">
                            </div>
                            <div class="product-name">
                                Самый клёвый чайник который надо купить!
                            </div>
                            <div class="product-info">
                                <div class="product-price">1 900 р.</div>
                                <div class="product-add">
                                    <a href="#"><img src="images/addtobasket-mini.png" alt="basket"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-photo">
                                <img src="images/product-photo.png" alt="product-photo">
                            </div>
                            <div class="product-name">
                                Самый клёвый чайник который надо купить!
                            </div>
                            <div class="product-info">
                                <div class="product-price">1 900 р.</div>
                                <div class="product-add">
                                    <a href="#"><img src="images/addtobasket-mini.png" alt="basket"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-photo">
                                <img src="images/product-photo.png" alt="product-photo">
                            </div>
                            <div class="product-name">
                                Самый клёвый чайник который надо купить!
                            </div>
                            <div class="product-info">
                                <div class="product-price">1 900 р.</div>
                                <div class="product-add">
                                    <a href="#"><img src="images/addtobasket-mini.png" alt="basket"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-photo">
                                <img src="images/product-photo.png" alt="product-photo">
                            </div>
                            <div class="product-name">
                                Самый клёвый чайник который надо купить!
                            </div>
                            <div class="product-info">
                                <div class="product-price">1 900 р.</div>
                                <div class="product-add">
                                    <a href="#"><img src="images/addtobasket-mini.png" alt="basket"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-photo">
                                <img src="images/product-photo.png" alt="product-photo">
                            </div>
                            <div class="product-name">
                                Самый клёвый чайник который надо купить!
                            </div>
                            <div class="product-info">
                                <div class="product-price">1 900 р.</div>
                                <div class="product-add">
                                    <a href="#"><img src="images/addtobasket-mini.png" alt="basket"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul id="pagelist" class="pagelist">
                        <li><a href="page1.php" class="active-page">1</a></li>
                        <li><a href="page2.php">2</a></li>
                        <li><a href="page3.php">3</a></li>
                    </ul>
                    <div class="products-descr row">
                        <div class="col-md-6">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                            exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                            autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                        <div class="col-md-6">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                            exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                            autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-md-4 col-6">
                &copy; 2012-2013 ЗАО "Компания" <br>
                info@name.ru
            </div>
            <div class="footer-nav col-md-4 col-6">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Прайс-лист</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-logo col-md-4 col-12">
                <img src="images/footer-logo.png" alt="footer-logo">
            </div>
        </div>
    </div>
</footer>
<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</body>
</html>