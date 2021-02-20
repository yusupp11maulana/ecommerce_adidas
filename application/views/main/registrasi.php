
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E-Commerce Adidas | Registrasi</title>
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url()?>assets/images/adidas-logo.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="<?= base_url()?>quixlab/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Registrasi</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="<?= base_url()?>login/registrasicust" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Customer" name="namacust">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="passw">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="No Telp" name="notelp">
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Save</button>
                                </form>
                                <p class="mt-5 login-form__footer">Do you have an account? <a href="<?= base_url()?>login/logincust" class="text-primary">Sign In</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url()?>quixlab/plugins/common/common.min.js"></script>
    <script src="<?= base_url()?>quixlab/js/custom.min.js"></script>
    <script src="<?= base_url()?>quixlab/js/settings.js"></script>
    <script src="<?= base_url()?>quixlab/js/gleek.js"></script>
    <script src="<?= base_url()?>quixlab/js/styleSwitcher.js"></script>
</body>
</html>




