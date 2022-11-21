<!doctype html>
<html lang="en">
<?php
// require './register.php';
$_SESSION["loged"] = "false";
require './login.php';
// session_start();
 ?>


<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <a class="navbar-brand" href="#">
            <img src="./image/logo.jpg" alt="" width="100px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">
                        Trang chủ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./houses.php">
                        Dự án
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./business.v2.php">
                        Bán
                    </a>
                </li>
            </ul>
            <button class="btn btn-primary"><?php
            if ($_SESSION["loged"] = "true") {
                echo  'Hello ' . $_SESSION["username"] .'';
            }?></button>

            <button class="btn btn-danger" onclick="location.href='init.php'">Đăng xuất</button>
        </div>
    </nav>

    <div class="banner">
        <img src="https://storage.googleapis.com/vinhomes-data-02/styles/images_1520_x_680/public/2021_06/3_1624089856.jpg?itok=HC1s67mJ"
            class="d-block w-100" alt="..." height={600} />
    </div>

    <div class="content">
        <h1 class="content_head text-center">
            Chúng tôi là một trong những nhà phát triển, <br>môi giới bất động sản tốt nhất Việt Nam </h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <h1>Sài Gòn</h1>
                            <p>
                                Nếu Hà Nội được biết đến là thủ đô ngàn năm văn hiến với vẻ
                                đẹp yên bình, trầm mạc cùng nhịp sống chậm rãi thì Sài Gòn
                                lại là thành phố của những chuyển động, sự sôi nổi, sầm uất
                                bậc nhất cả nước nhưng lại đan xen một chút cổ kính, một
                                chút châu Âu giữa lòng Việt Nam.
                            </p>
                        </div>
                        <div class="col-8">
                            <img src="https://secure3.vncdn.vn/ttnew/r/2019/07/20/ho-chi-minh-city-skyline-night-1563604839.jpg"
                                class="d-block w-100" alt="..." height="400px" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <h1>Hà Nội</h1>
                            <p>
                                Những công trình từ thời Pháp thuộc, hàng quán vỉa hè bày
                                bán đặc sản địa phương, xe máy luồn lách trên đường đông
                                đúc... là những ấn tượng đầu tiên của du khách về Hà Nội.
                                Với nhiều người, Hà Nội có tất cả những thứ thú vị để khám
                                phá nơi đây theo cách riêng của mình.
                            </p>
                        </div>
                        <div class="col-8">
                            <img src="https://i.etsystatic.com/21348027/r/il/54a7d3/3645028558/il_fullxfull.3645028558_6851.jpg"
                                class="d-block w-100" alt="..." height="400px" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <h1>Đà Nẵng</h1>
                            <p>
                                Nhiều nơi vẫn lọt top thành phố đáng sống nhưng khi nhắc đến
                                cái danh hiệu thành phố đáng sống người ta lại nhớ đến cái
                                tên đầu tiên chính là Đà Nẵng. Vậy Tại sao Đà Nẵng được mệnh
                                danh là thành phố đáng sống nhất của Việt Nam trong khi
                                những nơi khác vẫn có nhiều thế mạnh riêng và nằm trong top
                                thành phố đáng sống?
                            </p>
                        </div>
                        <div class="col-8">
                            <img src="https://filmore.com.vn/wp-content/uploads/2021/11/the-filmore-da-nang-filmore.jpg"
                                class="d-block w-100" alt="..." height="400px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-4">
                <h4>Về Chúng Tôi</h4>
                <ul>
                    <li>Giới thiệu</li>
                    <li>Dự án</li>
                    <li>Tuyển dụng</li>
                </ul>
            </div>
            <div class="col-4">
                <h4>Góc Khách Hàng</h4>
                <ul>
                    <li>Mua</li>
                    <li>Bán</li>
                </ul>
            </div>
            <div class="col-4">
                <h4>Hỗ Trợ</h4>
                <ul>
                    <li>Chăm sóc Khách Hàng</li>
                    <li>Đường dây nóng</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>