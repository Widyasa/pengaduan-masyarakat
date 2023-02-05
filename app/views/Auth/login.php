<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?=BASEURL?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans&display=swap" rel="stylesheet">
    <title><?=$data['title']?> Page</title>
</head>
<body class="container ">
<div class="row row-login d-flex  justify-content-center mt-lg-4 pt-lg-5">
    <div class="col-lg-6 col-md-6 col-8  d-lg-flex d-md-flex align-items-center d-none ">
        <img src="<?=BASEURL?>/img/auth/login.svg" class="img-fluid img-login" alt="">
    </div>
    <div class="col-lg-6 col-md-6 col-12 align-self-center">
        <div class="card card-login border-0">
            <div class="card-body">
                <div class="fs-3 fw-semibold main-color text-center">Welcome Back to PemMas Website</div>
                <form action="<?=BASEURL?>auth/login" method="post">
                    <div class="input-wrapper pt-2 w-100">
                        <div class=" input-gmail w-100">
                            <label>Username</label>
                            <div class="input-text-wrapper w-100 mt-2">
                                <input type="text" name="username" class="w-100 border-0" placeholder="Enter your username" >
                            </div>
                        </div>
                        <div class="pt-3 input-password w-100">
                            <label>Password</label>
                            <div class="input-text-wrapper w-100 mt-2">
                                <input type="password" name="password" class="w-100 border-0" placeholder="Enter your Password" >
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" value="login" class="text-decoration-none  btn-login w-100 p-3 login-text text-center d-flex justify-content-center ">Login</button>
                    </div>
                </form>

                <div class="text-center pt-4">Don't Have Account? <span class="main-color"><a href="{{route('register')}}" class="text-decoration-none main-color">Sign Up</a></span> </div>
            </div>
        </div>



    </div>
</div>


<script src="<?=BASEURL?>js/jquery-3.5.1.js"></script>
<script src="<?=BASEURL?>js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://kit.fontawesome.com/9e88c62f38.js" crossorigin="anonymous"></script>
<!--    <script src="js/popper.min.js"></script>-->
<script src="<?=BASEURL?>js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="<?=BASEURL?>js/script.js"></script>

</body>
</html>


