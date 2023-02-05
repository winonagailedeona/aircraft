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
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>Menu Products</b></h3>
                  <?php if(session()->getFlashdata('msg', 'Updated Successfully!')):?>
            <div class="alert alert-success">
            <?= session()->getFlashdata('msg', 'Updated Successfully!')?></div>
            <?php endif; ?>
            <?php if(session()->getFlashdata('mssg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('mssg') ?>
                    </div>
                <?php endif;?>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <button data-toggle="modal" data-target="#modal-default" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><b><i class="fas fa-plus"> </i> Add Product</b></button>
                  <div class="modal fade" id="modal-default">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title"></h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
                        <p><b>  Add Product</b></p>
                        <form action="saveMenu" method="post">
                          <div class="form-group mb-4">
                            <input type="text" name="productname" class="form-control" value="" placeholder="Product Name" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="text" name="description" class="form-control" placeholder="Product Description" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="text" name="price" class="form-control" placeholder="Price" required>
                          </div>
                          <div class="form-group mb-4">
                            <input type="text" name="quantity" class="form-control" placeholder="Quantity" required>
                          </div>
                          <div class="form-group mb-4">
                            <select type="text" name="category" class="form-control" placeholder="Category" required>
                              <option>Select Category</option>
                              <option value = "milktea">Continental Series</option>
                              <option value = "pica">Pica Pica</option>
                              <option value = "meals">Rice Meals</option>
                              <option value = "pasta">Pasta</option>
                              <option value = "dessert">Dessert</option>
                              <option value = "sandwich">Sandwich</option>
                            </select>
                          </div>
                          <div class="form-group mb-4">
                            <!-- <input type="text" name="image" class="form-control" placeholder="Upload Image"> -->

                          <input type="file" name="image" size="30" required/>
                          </div>

</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
<button type="submit"  class="btn btn-outline-primary" >Save</button>
</form>
</div>
</div>

</div>

</div><br>
                  <table id="example2" class="table table-bordered table-hover">
                    <br>
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th>Created On</th>
                      <th>Last Updated On</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($menu as $me): ?>
                    <tr>
                      <td style="font-size: 14px;"><?= $me['productname']?></td>
                      <td style="font-size: 14px;"><?= $me['description']?></td>
                      <td style="font-size: 14px;"><?= $me['price']?></td>
                      <td style="font-size: 14px;"><?= $me['category']?></td>
                      <td style="font-size: 14px;"><img src="<?= base_url(). '/'.$me['image']?>" width="40px" height="40px"> </td>
                      <td style="font-size: 14px;"><?= $me['created_at']?></td>
                      <td style="font-size: 14px;"><?= $me['updated_at']?></td>
                      <td style="font-size: 14px;"><button id="myBtn" type="button" name="button" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><a href="/aircraft/editMenu/<?=$me['id']?>" style=" color: white;"><i class="fas fa-edit"></i></a></button>
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


<?= $this->include('Admin/inc/footer')?>
<?= $this->include('Admin/inc/end')?>
