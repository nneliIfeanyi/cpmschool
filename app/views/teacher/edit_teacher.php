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
                        <h1 class="m-0">Edit Teacher </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="http://localhost/resultapp-v2/admin/">Home</a></li>
                            <li class="breadcrumb-item active">Edit Teacher</li>
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
                             <h3 class="card-title">Edit teacher's data below</h3>
                         </div>

                         <form action="<?php echo URLROOT;?>/teacher/edit_teacher/<?php echo $data['id'];?>" class="form-horizontal" method="post" id="teacher-add">
                              <div class="card-body">
                                  <div class="form-group row">
                                      <label for="name" class="col-sm-3 col-form-label">Teachers's name <span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" id="name" value="<?php echo $data['teacher']->name;?>" required data-parsley-trigger="keyup" name="name">
                                      </div>
                                    </div>
                                  <div class="form-group row">
                                      <label for="dob" class="col-sm-3 col-form-label">date of birth<span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="date" class="form-control" id="dob" value="<?php echo $data['teacher']->dob;?>" required name="dob" data-parsley-trigger="keyup">
                                      </div>
                                  </div>

                            

                                  <div class="form-group row">
                                      <label for="phone" class="col-sm-3 col-form-label">Phone <span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $data['teacher']->phone;?>" required data-parsley-type='number'
                                                 maxlength="11" data-parsley-length="[11, 11]" data-parsley-trigger="keyup" pattern="\d{11}">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="address" class="col-sm-3 col-form-label">Address</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" id="address" value="<?php echo $data['teacher']->address;?>" name="address">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="date" class="col-sm-3 col-form-label">Joining date<span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="date" class="form-control" id="date" value="<?php echo $data['teacher']->joining_date;?>" name="joining_date" required data-parsley-trigger="keyup">
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                      <label for="state" class="col-sm-3 col-form-label"></label>
                                      <div class="col-sm-9">
                                          <input type="submit" name="add_teacher" value="Add teacher" class="btn btn-info" id="submit">
                                      </div>
                                  </div>

                              </div>

                             <div id="success-msg">
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
<?php require APPROOT . '/views/inc/footer.php'; ?>

