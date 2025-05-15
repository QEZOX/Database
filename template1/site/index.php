<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#F7F7F7" /> <!-- for android -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>site title</title>
    <link rel="stylesheet" href="../lib/fonts/fonts.css" />
    <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css"  />
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../lib/js/jquery.min.js"></script>
</head>

<body class="rtl" >

<div class="container">
    <div class="row"><!-- menu -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark w-100">
            <span class="navbar-brand title" >عنوان سایت</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-home"></i></a></li>
                    <li class="nav-item" ><a  class="nav-link" href="" >صفحه اصلی</a></li>
                    <li class="nav-item" ><a  class="nav-link" href="" >صفحه اصلی</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">محصولات</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown1">
                            <a class="dropdown-item" href="">محصول 1</a>
                            <a class="dropdown-item" href="">محصول 2</a>
                            <a class="dropdown-item" href="">محصول 3</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">محصولات</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown1">
                            <a class="dropdown-item" href="">محصول 1</a>
                            <a class="dropdown-item" href="">محصول 2</a>
                            <a class="dropdown-item" href="">محصول 3</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end menu -->
    <div class="row"><!-- slider -->
        <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../images/img5.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title Caption</h5>
                        <p>carousel caption text </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/img6.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title Caption</h5>
                        <p>carousel caption text </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/img6.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title Caption</h5>
                        <p>carousel caption text </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/img7.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title Caption</h5>
                        <p>carousel caption text </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><!-- end slider -->
    <div class="row p-2 bg-light" ><!-- newsbar -->
        <div class="col-md-8">
            <div id="typed-strings">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، </p>
                <p>کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، </p>
            </div>
            <span id="typed"></span>

            <script src="../lib/js/typed.min.js" ></script>
            <script>
                var typed = new Typed('#typed', {
                    stringsElement: '#typed-strings',
                    typeSpeed: 100,
                    loop:true,
                });
            </script>
        </div>
        <div class="col-md-4 p-2">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit"><i class='fab fa-1x fa-sistrix' ></i></button>
                </div>
            </div>
        </div>
    </div><!-- newsbar -->
    <div class="row"><!-- post -->
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="../images/img9.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">عنوان مطلب</h5>
                    <p class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                        گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی م
                        ورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                    </p>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="../images/img10.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">عنوان مطلب</h5>
                    <p class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                        گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی م
                        ورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                    </p>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="../images/img11.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">عنوان مطلب</h5>
                    <p class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                        گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی م
                        ورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                    </p>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>
    </div><!-- end post -->
    <div class="row p-2"><!-- post 2 -->
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="../images/img9.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">عنوان مطلب</h5>
                    <p class="card-text text-justify">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                        گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی م
                        ورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                    </p>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="../images/img10.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">عنوان مطلب</h5>
                    <p class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                        گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی م
                        ورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                    </p>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="../images/img11.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">عنوان مطلب</h5>
                    <p class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                        گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی م
                        ورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                    </p>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>
    </div><!-- end post 2-->
    <div class="row bg-dark p-2"><!-- footer -->
        <div class="col-md-6">
            <div class="h4 text-light">درباره ما</div>
            <p class="text-light text-justify">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

            </p>
        </div>
        <div class="col-md-6">
            <div class="h4 text-light">تماس با ما</div>
            <div class="text-light">
                برای تماس با ما می توانید از طریق راه های زیر اقدام کنید
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent"><a class="text-light" href="tel:0912245"  ><i class="fas fa-phone"></i>09024815244</a></li>
                    <li class="list-group-item bg-transparent"><a class="text-light" href="sms:0912457?body=sample text" ><i class="fas fa-comment-dots"></i>09024815244</a></li>
                    <li class="list-group-item bg-transparent"><a class="text-light" href="mailto:zakeri.rahmat@gmail.com?subject=subject text &body=sample text" ><i class="fas fa-at"></i>zakeri.rahmat@gmail.com</a></li>
                    <li class="list-group-item bg-transparent"><a class="text-light" href="https://telegram.me/your username" ><i class="fab fa-telegram"></i>zakeri.rahmat</a></li>
                    <li class="list-group-item bg-transparent"><a class="text-light" href="https://wa.me/09024815244" ><i class="fab fa-whatsapp-square"></i>09024815244</a></li>
                </ul>
            </div>
        </div>
    </div><!-- end footer -->
</div>



<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>