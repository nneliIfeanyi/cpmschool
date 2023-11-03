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
                        <h1 class="m-0">Students</h1>
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
                
                         <div class="card-body">
                                <div class="card-header" style="background: #c3570f; color: #fff; margin: 20px 0 2px;">
                                      <h3 class="card-title" style="font-size: 15px;">
                                          <i class="fa fa-star"></i>
                                          Viewing Students details for class <?php echo $data['class']?>                                      </h3>
                                  </div>

                                  <table id="subject" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Name</th>
                                          <th>Username</th>
                                          <th>Reg No</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php $n=1; foreach($data['students'] as $student):?>
                                        <tr>
                                            <td><?php echo $n?></td>
                                            <td><?php echo $student->name?></td>
                                            <td><?php echo $student->username?></td>
                                            <td><?php echo $student->registerNO?></td>
                                            <td>
                                                <a href=""  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;

                                                <a href="javascript:void();" data-toggle='modal' data-target='#delete-studentstanvic'>
                                                    <i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i>
                                                </a>

                                            </td>
                                              </tr>
                                              <?php $n++; endforeach;?>
                                        </tbody>

                                      <tfoot>
                                      <tr>
                                          <th>#</th>
                                          <th>Name</th>
                                          <th>Username</th>
                                          <th>Reg No</th>
                                          <th>Action</th>
                                      </tr>
                                      </tfoot>

                                  </table>


                                  
                         </div>
                     </div>
                 </section>




                </div>



          </div><!-- /.row (main row) -->
        </section>
            </div><!-- /.container-fluid -->
        <!-- /.content -->

    <!-- /.content-wrapper -->
    
<?php include APPROOT . '/views/inc/footer.php'; ?>