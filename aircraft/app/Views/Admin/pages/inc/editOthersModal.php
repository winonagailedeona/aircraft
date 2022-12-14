<!-- Start of Modal Section -->
<div id="editModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
      <p><b>Edit Product</b></p>
      <form action="<?= base_url('/updateOthers')?>" method="post">
        <div class="form-group mb-4">
          <input type="text" name="name" class="form-control" value="" placeholder="Product Name" required>
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
          <input type="text" name="image" class="form-control" placeholder="Upload Image">
        </div>
        <button type="submit" name="submit" style="background-color: #0bbb42; border-radius: 3px; border-color: #0bbb42; color: white;"><b>Update</b></button>
      </form>
    </div>
  </div>
</div>
<?= $this->include('Admin/pages/inc/script_modal')?>
<!-- End of Modal Section -->
