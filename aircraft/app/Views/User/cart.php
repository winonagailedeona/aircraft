<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->
    <br><br>

<script>
function updateCartItem(obj, rowid) {
    $.get("<?php echo base_url().'cart/updateCartItemQty/'; ?>", {
            rowid: rowid,
            qty: obj.value
        },
        function(resp) {
            if (resp == 'ok') {
                location.reload();
            } else {
                alert('Cart update failed, please try again.');
            }
        });
}
</script>
<div class="container">
    <h2>Cart</h2>
    <div class="table-responsive-sm">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="20%">Image</th>
                    <th width="20%">Product</th>
                    <th width="20%">Price</th>
                    <th width="20%">Quantity</th>
                    <th width="20%">SubTotal</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
            <?php foreach($items as $cart_item): ?>
            
                <tr>
                
                    <td>

                    <img class="" width="70"
                        src="<?= base_url($cart_item['image']) ?>">
                    </td>
                    
                    <td><?=$cart_item['prod_name']?></td>

                    <td><?=$cart_item['price']?></td>
                                      
                    <td><?=$cart_item['quantity']?></td>  
                    <td><?=$cart_item['total']?></td>                                 
                    <td>
                    
                        <a href=""
                            onclick="return confirm('Are you sure you want to delete?')"
                            class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            
            
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="" class="btn btn-sm btn-warning"><i class="fas fa-angle-left"></i> Continue Ordering</a></td>
                    <td colspan="3"></td>
                    <td class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><a href="" class="btn btn-sm btn-success btn-block">Checkout <i class="fas fa-angle-right"></i></a></td>

                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?= $this->include('Menus/inc/footer') ?>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- About End -->
<?= $this->include('Menus/inc/end') ?>
