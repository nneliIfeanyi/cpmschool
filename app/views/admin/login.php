<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container row">
    <div class="col-md-6 mx-auto">
    <div class="card card-outline mt-5 card-primary">
        <div class="card-header text-center">
            <p>
                <i class="fas fa-lock fa-5x"></i>
            </p>
            <a href="index" class="h1" style="color: #1b2626;"><b>Restricted Area</b></a>
        </div>

   <div class="card">
     <div class="card-body">
        <p class="login-box-msg">Please fill in your credentials to Sign in</p>
        <form action="<?php echo URLROOT;?>/admin/login" method="post" id="adminLogin">
            <div class="input-group mb-3">
                <input type="text"required data-parsley-trigger="keyup" class="form-control" placeholder="Username" name="username" value="<?php echo $data['username'];?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                <p class="text-danger text-center">
                    <?php echo $data['name_err'];?>
                </p>
            </div>

            <div class="input-group mb-3">
                <input type="password"required data-parsley-length="[6,16]" data-parsley-trigger="keyup" class="form-control" placeholder="Password" name="password" value="<?php echo $data['password'];?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <p class="text-danger text-center">
                    <?php echo $data['password_err'];?>
                </p>
                
            </div>

            <div class="row">
                <div class="col-4" style="margin: 0 auto;">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
            </div>
        </form>

        <p class="mb-1 mt-2 text-center">
            <a href="<?php echo  URLROOT; ?>" class="btn btn-light btn-block"><span class="fas fa-backward"></span> Back</a>
        </p>
    </div>
   </div>
</div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

</body>
</html>

