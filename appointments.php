<?php
class appointments extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $cart=new Cart();
    if(!empty($_POST['cart'])) {
            $cart->productsQuantity=json_decode($_POST['cart'],true);
    }
    if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
            case "add":
                if(!empty($_POST["quantity"])) {
                    $cart->addProduct($_GET["id"],$_POST["quantity"]);
                }
            break;
            case "remove":
                $cart->removeProduct($_GET["id"]);
            break;
            case "empty":
                $cart->emptyCart();	
            break;	
        }
    }
   
  
?>

<HTML>
<HEAD>
<TITLE>Patient's Appointments</TITLE>
<link href="<?php echo URLROOT; ?>css/style1.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
	<div class="txt-heading">
	Patient's Appointments <a id="btnEmpty" href="appointments?action=empty">Appointments</a>
	</div>

    <?php
	
	if(count($cart->productsQuantity)>0){
		$item_total = 0;
		?>
		<table cellpadding="10" cellspacing="1">
			<tr>
				<th><strong>Name</strong></th>
				
				<th><strong>Time</strong></th>
				<th><strong>Action</strong></th>
			</tr>	
			<?php	
			foreach ($cart->productsQuantity as $productID => $quantity){  
				$product=new Product($productID);						
				?>
				<tr>
					<td><strong><?php echo $product->name; ?></strong></td>
					
					<td><?php echo $product->price; ?></td>
					<td>
						<form method="post" action="appointments?action=remove&id=<?php echo $product->id; ?>">
							<input type="submit" value="Cancel Appointments" class="btnAddAction" />
							<input type='hidden' name='cart' value='<?php echo (json_encode($cart->productsQuantity)); ?>' />
						</form>
					</td>
				</tr>
				<?php
				#$item_total += ($product->price*$quantity);
			}
			?>
			
		</table>		
	<?php
	} ?>
</div>
<div id="product-grid">
	<div class="txt-heading">Appointments</div>
	<?php	
	$allProducts=Product::getAllProducts();
	foreach ($allProducts as $product){
        ?>
		<div class="product-item" width="200px">
			<form method="post" action="appointments?action=add&id=<?php echo $product->id; ?>">
				<div><strong><?php echo $product->name; ?></strong></div>
				<div class="product-image"><img src="<?php echo $product->image; ?>" width="100px" height="100px"></div>
				
				<div class="product-price"><?php echo $product->price; ?></div>

				<?php
				foreach ($product->options as $option => $value){  //x['drug strength']=500mg
					echo"<div> $value</div>";
				}
				?>
				<div>
					<input type="text" name="quantity" value="1" size="2" />
					<input type="submit" value="Make Appointment" class="btnAddAction" />
				</div>
					<input type='hidden' name='cart' value='<?php echo (json_encode($cart->productsQuantity)); ?>' />
			</form>
		</div>
		<?php
	}
	?>








<?php 
  }

    }



?>
</BODY>
</HTML>
