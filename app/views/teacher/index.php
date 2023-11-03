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
                        <h1 class="m-0">Teachers </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Teachers</li>
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
                      <a href="<?php echo URLROOT?>/teacher/add_teacher"> <button class="btn btn-outline-success">Add teacher</button></a>
                  </section>
                    <?php flash('add_teacher_success');?>
                    <?php flash('delete_teacher_success');?>
                    <section class="col-lg-12 connectedSortable">
                        <div class="card">
                         <div class="card-header">
                             <h3 class="card-title">Manage Teachers</h3>
                         </div>
                         <div class="card-body">
                             <table id="teacher" class="table table-bordered table-striped">
                                 <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Name</th>
                                       <th>Username</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                   </tr>
                                 </thead>
                                  <tbody>
                                    <?php $n =1; foreach($data['all_teachers'] as $teacher):?>
                                        <tr>
                                            <td><?php echo $n?></td>
                                            <td><?php echo $teacher->name;?></td>
                                            <td><?php echo $teacher->username;?></td>
                                            <td>
                                            <i class="fa fa-check-circle" style="font-size: 20px; color: #085d3d; cursor: pointer;" data-toggle="tooltip" title="Active"></i>
                                            </td>
                                            <td>
                                                <a href="<?php echo URLROOT;?>/teacher/edit_teacher/<?php echo $teacher->id;?>" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;
                                                <a href="javascript:void(0);">
                                                <form action="<?php echo URLROOT;?>/teacher/delete/<?php echo $teacher->id;?>" method="post">
                                                   <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></button>
                                                </form> 
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $n++;endforeach;?>
                                  </tbody>
                                 <tfoot>
                                 <tr>
                                 <th>#</th>
                                       <th>Name</th>
                                       <th>Username</th>
                                       <th>Status</th>
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

<?php require APPROOT . '/views/inc/footer.php'; ?>