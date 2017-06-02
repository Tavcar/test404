<?php require('header.php'); ?>
<?php require('session.php'); ?>
<?php 
	
$products = Marketcloud\Products::get($_GET);
$products = $products->body->data;
$product = $products[0];
#echo $products;
?>

    <!-- Page Content -->
    <div class="container-fluid">
    
    <div class="row">


            <div class="col-md-4">

                <div class="product-controls">
                    <div class="price text-center">€ <?php echo  $product->price; ?></div>
                    <?php  foreach ($product->variantsDefinition as $v_name => $v_values) { ?>
                        <div><b><?php echo  $v_name; ?></b></div>
                        <div class="form-group">
                        <select class="form-control" id="variant_<?php echo  $v_name ?>">
                            <?php  for($i=0; $i< count($v_values);$i++) { ?>
                            <option value="<?php echo  $v_values[$i]; ?>"><?php echo  $v_values[$i]; ?></option>
                        <?php  } ?>
                        </select>
                        </div>
                    <?php  } ?>
                    <button class="btn btn-block btn-success" id="addToCartButton">Add to cart</button>
                </div>

                
                

            </div>


        </div>


    </div>

<script type="text/javascript">
	
	

</script>


<script type="text/javascript">
    
	var product = <?php echo json_encode($product); ?>;
	var cart = <?php echo json_encode($cart); ?>;



	function addToCart() {
		var payload = {
			product_id: product.id,
			quantity: 1
		}
		var btn = $("#addToCartButton");
		btn.attr("disabled","disabled")

		btn.html("Adding to cart")
		
		if (product.has_variants) {
			
			payload.options = {};

			for (var variant_name in product.variantsDefinition) {
				var value = $("select#variant_" + variant_name).val();
				payload.options[variant_name] = value;
			}
		}

		console.log("Sending this cart request",payload)
		
		// Chiamata al backend
		marketcloud.carts.add(cart.id, [payload], function(err, data) {
			if (err) {
				console.log(err)
				alert("An error has occurred");
			} else{
				alert("Item added to cart")
				location.reload()
			}
		})
	}


	$(document).ready(function(){
        $("#addToCartButton").click(addToCart)
    })

</script>
<?php require('footer.php'); ?>