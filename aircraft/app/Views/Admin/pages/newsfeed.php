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
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($newsf as $nf) : ?>
                                                <tr>
                                                    <td style="font-size: 15px;"><?= $nf['name'] ?></td>
                                                    <td style="font-size: 15px;"><?= $nf['nf_content'] ?></td>

                                                    <?php $star=$nf['nf_rating']; 
                            if($star=="1" or $star=="2" or $star=="3" or $star=="4" or $star=="5") { ?>
                    <?php if($star=="5") { ?>
                        <td> <span style="font-size: 15px;"><i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i>
                        <i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i> <?= $nf['nf_rating'] ?>/5</span></td>
                        <?php }?>
                        <?php if($star=="4") { ?>
                            <td> <span style="font-size: 15px;"><i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i>
                        <i class="fas fa-star text-warning" ></i> <?= $nf['nf_rating'] ?>/5</span></td>
                        <?php } ?>
                        <?php if($star=="3") { ?>
                            <td> <span style="font-size: 15px;"><i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i>
                         <?= $nf['nf_rating'] ?>/5</span></td>
                        <?php }?>
                        <?php if($star=="2") { ?>
                            <td> <span style="font-size: 15px;"><i class="fas fa-star text-warning" ></i><i class="fas fa-star text-warning" ></i> <?= $nf['nf_rating'] ?>/5</span></td>
                        <?php } ?>
                        <?php if($star=="1") { ?>
                            <td> <span style="font-size: 15px;"><i class="fas fa-star text-warning" ></i> <?= $nf['nf_rating'] ?>/5</span></td>
                        <?php }} ?>
                        

                        
                                                    <?php $status=$nf['nf_status']; 
                                                    if($status=="To Review" or $status=="Approved") { ?>
                                                    <?php if($status=="To Review") { ?>
                                                    <td> <span> To Review</span></td>
                                                    <?php }?>
                                                    <?php if($status=="Approved") { ?>
                                                    <td> <span>Posted</span></td>
                                                    <?php }} ?>
                                                    <td style="font-size: 15px;"><?= $nf['nf_createdon'] ?></td>
                                                    <?php if($status=="To Review") { ?>
                        
                                                        <td class="text-center" style="font-size: 17px;"><button id="myBtn" type="button" name="button" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><a href="<?= site_url('acceptpost/') . $nf['nf_id']  ?> " class="text-white" ><i class="fas fa-check"></i> Post</a></button>
                                                    </td>
                        <?php } ?>


                                                   
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