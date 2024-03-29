<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
.cssmarquee {
height: 50px;
overflow: hidden;
position: relative;
}
.cssmarquee h1 {
font-size: 1em;
position: absolute;
width: 100%;
height: 100%;
margin: 0;
line-height: 50px;
text-align: center;
transform:translateX(100%);
animation: cssmarquee 12s linear infinite;
}
@keyframes cssmarquee {
0% {
transform: translateX(100%);
}
100% {
transform: translateX(-100%);
}
}
</style> 
<div class="bg">
    <div class="transparent">
<header class="mb-4">
    <div class="container pt-5 text-light">
        <div class="d-flex justify-content-end">
            <div class="btn-group">
                <button class="btn btn-light btn-sm" data-bs-theme-value="dark">
                Light
                </button>
                <button class="btn btn-secondary btn-sm" data-bs-theme-value="light">
                Dark  
                </button>
            </div>
        </div>
        <h1 class="mb-4">Users</h1>
    </div>
</header>
<div class="cssmarquee text-light">
<h1 style="text-transform: uppercase;font-style: italic;color:antiquewhite;">WELCOME TO <span class="text-primary">C.P.M. </span>International School Suleja</h1>
</div>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="user-img">
                            <i class="fas fa-graduation-cap fa-5x"></i>
                            </div>
                            <div class="user-info">
                                <h4>Student | Parent</h4>
                                <span class="badge bg-primary"><a href="#" class="text-white">Login</a></span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="user-img">
                            <i class="fas fa-sitemap fa-5x"></i>
                            </div>
                            <div class="user-info">
                                <h4>Teacher</h4>
                                <span class="badge bg-primary"><a href="#" class="text-white">Login</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="user-img">
                                <i class="fas fa-user-circle fa-5x"></i>
                            </div>
                            <div class="user-info">
                                <h4>Admin</h4>
                                <span class="badge bg-primary"><a href="<?php echo URLROOT?>/admin" class="text-white">Login</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>