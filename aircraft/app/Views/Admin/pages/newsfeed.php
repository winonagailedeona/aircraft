<?= $this->include('Admin/inc/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?= $this->include('Admin/inc/navnoloader') ?>
        <?= $this->include('Admin/inc/left_side') ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <br>
            <br>



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Review Posts</b></h3>
                                    <?php if (!empty(session()->getFlashdata('mssg', 'Successfully Approved!'))) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('mssg', 'Successfully Approved!') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body"><br>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Content</th>
                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Created On</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($newsf as $nf) : ?>
                                                <tr>
                                                    <td style="font-size: 14px;"><?= $nf['name'] ?></td>
                                                    <td style="font-size: 14px;"><?= $nf['nf_content'] ?></td>
                                                    <td style="font-size: 14px;"><?= $nf['nf_rating'] ?>/5</td>
                                                    <td style="font-size: 14px;"><?= $nf['nf_status'] ?></td>
                                                    <td style="font-size: 14px;"><?= $nf['nf_createdon'] ?></td>
                                                    <td style="font-size: 14px;"><button id="myBtn" type="button" name="button" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><a href="<?= site_url('acceptpost/') . $nf['nf_id'] . '/' . $nf['user_id'] ?> " style=" color: white;"><i class="fas fa-check"></i> Approved</a></button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>

        </div>


        <?= $this->include('Admin/inc/footer') ?>
        <?= $this->include('Admin/inc/end') ?>