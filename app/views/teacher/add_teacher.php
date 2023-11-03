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
                        <h1 class="m-0">Add Teacher </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Teacher</li>
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
                             <h3 class="card-title">Enter teacher's data below</h3>
                         </div>

                         <form action="<?php echo URLROOT;?>/teacher/add_teacher" class="form-horizontal" method="post" id="teacher-add">
                              <div class="card-body">
                                  <div class="form-group row">
                                      <label for="name" class="col-sm-3 col-form-label">Teachers's name <span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" id="name" required data-parsley-trigger="keyup" name="name">
                                      </div>
                                    </div>
                                  <div class="form-group row">
                                      <label for="dob" class="col-sm-3 col-form-label">date of birth<span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="date" class="form-control" id="dob" required name="dob" data-parsley-trigger="keyup">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                                      <div class="col-sm-9">
                                          <select name="gender" id="gender" class="form-control">
                                              <option value="">Select gender</option>
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
                                      <label for="phone" class="col-sm-3 col-form-label">Phone <span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="tel" class="form-control" id="phone" name="phone" required data-parsley-type='number'
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
                                      <label for="date" class="col-sm-3 col-form-label">Joining date<span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="date" class="form-control" id="date" name="joining_date" required data-parsley-trigger="keyup">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                                      <div class="col-sm-9">
                                          <div class="input-group">
                                              <div class="custom-file">
                                                  <input type="file" class="custom-file-input" id="photo" name="photo">
                                                  <label class="custom-file-label" for="photo">Choose photo</label>
                                              </div>
                                          </div>
                                      </div>

                                  </div>

                                  <div class="form-group row">
                                      <label for="username" class="col-sm-3 col-form-label">Username <span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" id="username" required name="username">
                                            <p class="text-danger text-center">
                                                <?php echo $data['username_err'];?>
                                            </p>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="password" class="col-sm-3 col-form-label">Password <span style="color: #f00;">*</span></label>
                                      <div class="col-sm-9">
                                          <input type="password" class="form-control" id="password" required name="password">
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

