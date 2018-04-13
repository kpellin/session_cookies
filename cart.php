<?php require 'inc/head.php'; 

if (empty($_SESSION)) 
{
  header('location: login.php');
}

if (isset($_COOKIE['id1']) || isset($_COOKIE['id2']) || isset($_COOKIE['id3']) || isset($_COOKIE['id4'])) 
{
	if(!empty($_SESSION))
			{
				 ?><h1>Hey <?php echo $_SESSION['username'];?>, vous avez craqué pour ça :</h1>
				<?php
			}

	if (isset($_COOKIE['id1']) AND $_COOKIE['id1'] == 46) 
	{
		?><section class="cookies container-fluid">
			
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img name="imgnuts" src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3 name="titlenuts">Pecan nuts</h3>
              <p name="descnuts" >Cooked by Penny !</p>
            </figcaption>
          </figure>
     	 </div>
  		</div>
        <?php
	}

	if (isset($_COOKIE['id2']) AND $_COOKIE['id2'] == 36) 
	{
		?><section class="cookies container-fluid">
			
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>Chocolate chips</h3>
              <p>Cooked by Bernadette !</p>
            </figcaption>
          </figure>
     	 </div>
  		</div>
        <?php
	}

	if (isset($_COOKIE['id3']) AND $_COOKIE['id3'] == 58) 
	{
		?><section class="cookies container-fluid">
			
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
              <img  for="chips" name="imgchips" src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
              <figcaption class="caption">
                <h3 name ="titlechips" for="chips">Chocolate cookie</h3>
                <p for="chips">Cooked by Bernadette !</p>
            </figcaption>
          </figure>
     	 </div>
  		</div>
        <?php
	}
	
	if (isset($_COOKIE['id4']) AND $_COOKIE['id4'] == 32) 
	{
		?><section class="cookies container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>M&M's&copy; cookies</h3>
              <p>Cooked by Penny !</p>
            </figcaption>
          </figure>
     	 </div>
  		</div>
        <?php
	}
	
	
}
else
	{
		?>
		<div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">   
              <h3> <?php echo 'Vous n\'avez craqué pour rien ? ... Vraiment ? '; ?></h3>
     	 </div>
  		</div>
  		<?php
		
	}



require 'inc/foot.php'; ?>
