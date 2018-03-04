<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/main.css">
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
        <div class="container clearfix">
            <button class="hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <nav id="navigation">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Прайс-лист</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main>
    <div class="slider">
        <div class="container-fluid">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="images/slide1.png" alt="slide1">
                    </li>
                    <li>
                        <img src="images/slide2.png" alt="slide2">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="products-path">
                <ul>
                    <li><a href="#">Главная /</a></li>
                    <li><a href="#">Каталог /</a></li>
                    <li><a href="#">Бытовая техника</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="left-sidebar col-12 col-lg-3">
                    <ul class="item-menu">
                        <li><a href="#">Автомобили</a></li>
                        <li><a href="#">Бытовая техника</a>
                            <ul>
                                <li><a href="#">Микроволновки</a></li>
                                <li><a href="#">Холодильники</a></li>
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

<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script>
</body>
</html>