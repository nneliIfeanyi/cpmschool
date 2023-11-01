<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include APPROOT . '/views/inc/nav.php'; ?>
<?php include APPROOT . '/views/inc/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add a student </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="http://localhost/resultapp-v2/admin/">Home</a></li>
                            <li class="breadcrumb-item active">Add Student</li>
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
                    <div class="col-lg-8">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Enter student's data below</h3>
                            </div>

                            <form action="<?php echo URLROOT?>/student/add_student" class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="surname" class="col-sm-3 col-form-label">Surname <span style="color: #f00;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="surname" required data-parsley-trigger="keyup" name="surname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="other_names" class="col-sm-3 col-form-label">Other names <span style="color: #f00;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="other_names" required data-parsley-trigger="keyup" name="other_names">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="dob" class="col-sm-3 col-form-label">date of birth<span style="color: #f00;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="dob" required name="dob" data-parsley-trigger="keyup">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sex" class="col-sm-3 col-form-label">Sex</label>
                                        <div class="col-sm-9">
                                            <select name="sex" id="sex" class="form-control">
                                                <option value="">Select sex</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="religion" class="col-sm-3 col-form-label">Religion</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="religion" name="religion">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 col-form-label">Parent/Guardian Phone</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" id="phone" name="phone" data-parsley-type='number'
                                                   maxlength="11" data-parsley-length="[11, 11]" data-parsley-trigger="keyup" pattern="\d{11}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="address" name="address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="state" class="col-sm-3 col-form-label">State of origin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="state" name="state">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="class" class="col-sm-3 col-form-label"> Class <span style="color: #f00;">*</span></label>
                                        <div class="col-sm-9">
                                            <select name="class" id="classID" class="form-control" required>
                                                <option value="">Select class</option>
                                                <?php foreach($data['classes'] as $class):?>
                                                    <option value="<?php echo $class->class_numeric;?>"><?php echo $class->name;?></option>
                                                <?php endforeach;?> 
                                             </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="reg_no" class="col-sm-3 col-form-label">Registration No<span
                                                    style="color: #f00;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="reg_no" required name="reg_no" value="<?php echo(generate_reg_no());?>"  readonly data-toggle='tooltip' title='Reg No is Auto Generated'>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="state" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <input type="submit" name="add_student" value="Add student" class="btn btn-info" id="submit">
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div>


                </div>



            </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->