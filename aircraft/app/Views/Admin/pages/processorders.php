<?= $this->include('Admin/inc/top')?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?= $this->include('Admin/inc/navnoloader')?>
    <?= $this->include('Admin/inc/left_side')?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br>
      <br>

      <!-- Main content -->
      <section class="content" >
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card" >
                <div class="card-header">
                  <h3 class="card-title"><b>Processing Orders</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- <div class="card-body" style="background-color: #3C8DBC"> -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Customer Name</th>
                        <th>Contact No.</th>
                        <th>Qty</th>
                        <th>Total Price</th>
                        <th>Type of Order</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($myplaceorder as $ord): ?>
                    <tr>
                        <td><img src="<?= base_url(). '/'.$ord['image']?>" width="40px" height="40px"></td>
                        <td><?= $ord['productname']?></td>
                        <td><?= $ord['name']?></td>
                        <td><?= $ord['contactno']?></td>
                        <td><?= $ord['orquantity']?></td>
                        <td>₱<?= $ord['total']?>.00</td>
                        <?php $status = $ord['type'];
                                                    if ($status == "D" or $status == "P") { ?>

                                                        <?php if ($status == "D") { ?>
                                                            <td>Dine-in</td>
                                                        <?php } ?>
                                                        <?php if ($status == "P") { ?>
                                                          <td>Pick-up</td>
                                                        <?php } ?>
                                                    <?php } ?>
                        <td class="text-center"><button type="button" class="btn btn-success"><span class="fa fa-cog fa-spin" aria-hidden="true"></span> PROCESSING</button></td>

                        
                        <?php if($status=="D") { ?>
                        
                        <td class="text-center" style="font-size: 20px;">
                        <a href="<?= site_url('processed/') . $ord['menuid'] . '/' . $ord['user_id']  ?> " class="btn-sm btn-primary"><i class="fas fa-utensils"> </i> &nbsp;Ready For Dine-in</a>
                        </td>
                        <?php } else {?>
                         <td class="text-center" style="font-size: 20px;">
                         <a href="<?= site_url('processed/') . $ord['menuid'] . '/' . $ord['user_id']  ?> " class="btn-sm btn-primary"><i class="fas fa-shopping-bag"> </i> &nbsp;Ready For Pick-up</a>

                        </td>
     
                         <?php }?>

                         
          
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
      </script>
    <!-- data tables specific script -->
  </div>

<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
