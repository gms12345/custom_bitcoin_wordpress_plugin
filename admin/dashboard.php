<?php include('header.php');

if (isset($_POST['submit'])) {
	 $api_key = $_POST['api_key'];
     
     if($api_key == ''){
     	$err_msg = "Pleas Enter Your Api Key.";
     }
}


 ?>



<div class="container p-4">
<div class="container-fluid p-0">
	<div class="logo-box">
		<h3><span class="logo_text">T</span><span class="trua-text">RUAMORE </span><span class="pay-text">PAYMENT</span></h3>
	</div>
	<hr>
</div>

<span class="text-danger"><?php if(isset($err_msg)){echo $err_msg;}; ?></span>
<div class="row ">
	<div class="col-sm-12 col-lg-6 col-md-6">
		<form action="" method="post" class="mt-4">
			
			<div class="input-group ">
			  <input type="text" class="form-control <?php if(isset($err_msg)){echo "border border-danger";} ?>" placeholder="Enter your blockonomics API key" aria-label="Recipient's username" aria-describedby="button-addon2" name="api_key">
			  <button type="submit" class="btn btn-outline-secondary shadow-none" name="submit"  id="button-addon2">Activate</button>
			</div>
			<div id="emailHelp" class="form-text mb-3"><i>If you do not have the key. please <a href="https://www.blockonomics.co/merchants#/" target="_blank">click</a> here to generate the key.</i></div>
		</form>
		
	</div>
	<div class="col-sm-12 col-lg-6 col-md-6">
		
	</div>
</div>

	
</div>


<?php include('footer.php') ?>