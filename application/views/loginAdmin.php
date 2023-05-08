<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="<?php echo site_url('new_assets/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo site_url('new_assets/assets/fonts/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('new_assets/assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('new_assets/assets/fonts/fontawesome5-overrides.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('new_assets/assets/js/sweetalert2.min.css');?>" >
    <script src="<?php echo site_url('new_assets/assets/js/sweetalert2.all.min.js'); ?>"></script>
</head>

<body class="bg-gradient-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-12 col-xl-10">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(<?php echo site_url('new_assets/assets/img/dogs/admin.jpg'); ?>)"></div>
                            </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Administrator</h4>
                                        </div>
                                        <form action="<?php echo site_url();?>Welcome\loginUsers" method="POST" class="user">
                                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" value="erico@gmail.com" name="email"></div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" value="root" name="password"></div>
                                            <div class="mb-3">
                                                <div class="custom-control custom-checkbox small">
                                                    <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                                </div>
                                            </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                            <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                            <hr>
                                        </form>
                                        <?php if(isset($error_message)) { ?>
                                            <script>
                                                Swal.fire({icon: 'error',title: 'Erreur...',
                                                text: '<?php echo $error_message; ?>',
                                                footer: '<a href="">Why do I have this issue?</a>'}).then((result) => {if (result.isConfirmed) {window.history.back()}});
                                            </script>
                                        <?php } ?>
                                        <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                                        <div class="text-center"><a class="small" href="register.html">Create an Account!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="<?php echo site_url('new_assets/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('new_assets/assets/js/bs-init.js'); ?>"></script>
    <script src="<?php echo site_url('new_assets/assets/js/theme.js'); ?>"></script>
</body>

</html>