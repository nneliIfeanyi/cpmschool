<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include APPROOT . '/views/inc/nav.php'; ?>
<?php include APPROOT . '/views/inc/sidebar.php'; ?>
  

        <!-- Main row -->
      
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Student </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Student</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                 <section class="col-lg-12 connectedSortable">
                     <div class="card">
                         <div class="card-header" style="background: #17a2b8; color: #fff;">
                             <h3 class="card-title" style="font-size: 15px;">
                                     <i class="fa fa-star"></i>
                                 Manage Students
                             </h3>
                         </div>
                         <div class="card-header">
                             <h3 class="card-title">
                                 <a href="<?php echo URLROOT;?>/student/add_student">Add a student
                                   <i class="fa fa-plus"></i>
                                 </a>
                             </h3>
                         </div>
                         <div class="card-body">
                             <h3 class="card-title text-center" style="font-size: 15px;">
                                 Please select a class to view available students
                                 <i class="fa fa-info-circle" data-toggle="tooltip" title=""></i>

                             </h3>
                             <br><br>
                             <div>
                                <?php foreach($data['classes'] as $classes):
                                    $low = strtolower($classes->name);
                                    $low2 = str_replace(" ", "-", $low);
                                    $link = URLROOT.'/'.'student'.'/'.'class'.'/'.$classes->class_numeric;
                                    $num_students = $this->student_model->num_students($classes->name);
                                    ?>
                                <a class="btn btn-app" style="min-width:120px; height: 90px;" href="<?php echo $link?>"> 
                                    <span class="badge bg-success" data-toggle="tooltip" title="only <?php echo $num_students?>">
                                        <?php echo $num_students?>
                                    </span>
                                    <i class="fas fa-users" style="font-size: 50px;"> </i>
                                    <?php echo $classes->name?>
                                </a>
                                <?php endforeach;?>
                                                                            
                            </div>
                             
                         </div>
                     </div>
                 </section>




                </div>



          </div><!-- /.row (main row) -->
        </section>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>