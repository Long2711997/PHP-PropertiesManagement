<?php
require './libs/Business.php';
require_once './delete.php';
session_start();

date_default_timezone_set("Asia/Ho_Chi_Minh");
$houses = get_all_houses();
// disconnect_db();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Mua</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/houses.css">

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
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">
                        Trang chủ
                    </a>
                </li>
                <li class="nav-item active">
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
    <div class="intro">
        <div class="row">
            <div class="col-6">
                <img src="https://online.vinhomes.vn/images/ly-do-2.jpg" alt="" width="500px">
                <img src="https://online.vinhomes.vn/images/ly-do-1.jpg" alt="" width="500px">
            </div>
            <div class="col-6">
                <h1>Những lý do nên mua nhà trực tuyến</h1>
                <ul>
                    <li><i class="fa-solid fa-check"></i>Mua nhà trực tiếp từ chủ đầu tư</li>
                    <li><i class="fa-solid fa-check"></i>Tiếp cận thông tin minh bạch, đầy đủ</li>
                    <li><i class="fa-solid fa-check"></i>Mua nhà mọi lúc, mọi nơi 24/7</li>
                    <li><i class="fa-solid fa-check"></i>Được tư vấn chuyên nghiệp, miễn phí</li>
                    <li><i class="fa-solid fa-check"></i>Tiếp kiệm chi phí và thời gian</li>
                    <li><i class="fa-solid fa-check"></i>Hưởng trọn vẹn các ưu đãi và khuyến mãi theo sản phẩm</li>
                    <li><i class="fa-solid fa-check"></i>Tìm mua nhà Vinhomes từ quỹ căn đủ nhất với giá tốt nhất</li>
                    <li><i class="fa-solid fa-check"></i>Tự tìm, tự chọn, tự mua căn nhà Vinhomes yêu thích</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="product">
        <h1 class="text-center">Danh sách nhà bán</h1>
        <div class="container">
            <div class="row">
                <?php foreach ($houses as $item){ ?>
                <div class="card mr-3" style="width: 23%;">
                    <img src="<?php echo $item['image']; ?>" class="card-img-top" alt="..." width="100px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['city']; ?> - <?php echo $item['price']; ?></h5>
                        <h5><?php echo $item['square']; ?></h5>
                        <?php if ($_SESSION["username"] === "Admin"){ ?>
                        <form method="post" action="houses.php" enctype="multipart/form-data">
                            <button class="btn btn-success"
                                onclick="window.location = 'edit_template.php?id=<?php echo $item['id']; ?>'"
                                type="button" value="edit">Sửa</button>
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <button class="btn btn-danger" type="submit" name="delete"
                                onclick="'delete.php?id=<?php $item['id']; ?>'" value="delete">Xóa</button>
                        </form>
                        <?php } else { ?>
                        <form method="post" action="houses.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <input type="button" class="btn btn-success btn-outline-success my-2 my-sm-0 text-white"
                                data-toggle="modal" data-target="#detailModal" value="Chi tiết" />
                        </form>
                        <?php }  ?>
                    </div>
                </div>
                <?php } ?>
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

    <!-- Detail Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class=" modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông tin bất động sản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo $item['image']; ?>" class="card-img-top" alt="..." width="100px"
                        height="200px">
                    <h1><?php echo $item['city']; ?></h1>
                    <p>Diện tích: <?php echo $item['square']; ?></p>
                    <p>Giá: <?php echo $item['price']; ?></p>
                    <p>Địa chỉ: <?php echo $item['address']; ?></p>
                    <p>Chủ nhà: <?php echo $item['name']; ?> - <?php echo $item['phone']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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