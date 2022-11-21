<!doctype html>
<html lang="en">
<?php
require './login.php';
 ?>

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;700&family=Open+Sans:wght@300&family=Oswald:wght@300;400;700&family=Oxygen:wght@700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/init.css">
</head>

<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-6">
                <p class="home_intro_text">Bất động sản ĐỨNG YÊN, <br> nhưng chúng tôi thì KHÔNG.
                </p>
            </div>
            <div class="col-6">
                <form class="container signin_form" action="init.php" method="post" enctype="multipart/form-data">
                    <h5 class="modal-title">Đăng nhập</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" id="userLogin" name="userLogin"
                            placeholder="Tài khoản" />
                        <?php if (!empty($errors['userLogin'])) echo $errors['userLogin']; ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="passLogin" name="passLogin"
                            placeholder="Mật khẩu" />
                        <?php if (!empty($errors['passLogin'])) echo $errors['passLogin']; ?>
                    </div>

                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <input type="button" class="btn btn-success btn-outline-success my-2 my-sm-0 text-white"
                        data-toggle="modal" data-target="#registerModal" value="Đăng ký" />
                </form>

                <!-- Register Modal -->
                <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Đăng ký</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="init.php" method="post" enctype="multipart/form-data">
                                <?php
				if(isset($_COOKIE["error"])){
			?>
                                <div class="alert alert-danger">
                                    <strong>Có lỗi!</strong> <?php echo $_COOKIE["error"]; ?>
                                </div>
                                <?php } ?>
                                <?php
				if(isset($_COOKIE["success"])){
			?>
                                <div class="alert alert-success">
                                    <strong>Chúc mừng!</strong> <?php echo $_COOKIE["success"]; ?>
                                </div>
                                <?php } ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="user" name="user"
                                            placeholder="Tài khoản" />
                                        <?php if (!empty($errors['user'])) echo $errors['user']; ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="acc" name="acc" placeholder="Tên" />
                                        <?php if (!empty($errors['acc'])) echo $errors['acc']; ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="pass" name="pass"
                                            placeholder="Mật khẩu" />
                                        <?php if (!empty($errors['pass'])) echo $errors['pass']; ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="passConfirm" name="passConfirm"
                                            placeholder="Xác nhận mật khẩu" />
                                        <?php if (!empty($errors['passConfirm'])) echo $errors['passConfirm']; ?>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" name="register" class="btn btn-primary reg_button"
                                        data-backdrop="static" value="Đăng ký" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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