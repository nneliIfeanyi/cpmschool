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
                        <h1 class="m-0">Classes </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Class</li>
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
                        <a href="<?php echo URLROOT;?>/admin/add_class"> <button class="btn btn-outline-success">Add class</button></a>
                    </section>

                    <section class="col-lg-12 connectedSortable">
                                                <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Manage Classes</h3>
                            </div>
                            <div class="card-body">
                                <table id="class" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Class Numeric</th>
                                        <th>Teacher Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n = 1; foreach($data['all_class'] as $class):?>
                                        <tr>
                                            <td><?php echo $n?></td>
                                            <td><?php echo $class->name?></td>
                                            <td><?php echo $class->class_numeric?></td>
                                            <td><?php echo $class->teacher_name?></td>
                                            <td>
                                                <a href="<?php echo URLROOT;?>/admin/edit_class/<?php echo $class->id?>" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;
                                                <form action="<?php echo URLROOT;?>/admin/delete/<?php echo $class->id;?>" method="post">
                                                   <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></button>
                                                </form>
                                            </td>
                                        </tr> 
                                        <?php $n++; endforeach;?>                                                              
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Class Numeric</th>
                                        <th>Teacher Name</th>
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