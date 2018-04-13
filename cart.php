<?php require 'inc/head.php'; 

if (!empty($_COOKIE)) 
{
	;

	if ($_COOKIE['id'] == 46) 
	{
		?><section class="cookies container-fluid">
			<?php if(!empty($_SESSION))
			{
				 ?><h1>Hey <?php echo $_SESSION['username'];?>, vous avez craqué pour ça :</h1>
				<?php
			}
			?>
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
	elseif ($_COOKIE['id'] == 36) 
	{
		?><section class="cookies container-fluid">
			<?php if(!empty($_SESSION))
			{
				 ?><h1>Hey <?php echo $_SESSION['username'];?>, vous avez craqué pour ça :</h1>
				<?php
			}
			?>
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
	elseif ($_COOKIE['id'] == 58) 
	{
		?><section class="cookies container-fluid">
			<?php if(!empty($_SESSION))
			{
				 ?><h1>Hey <?php echo $_SESSION['username'];?>, vous avez craqué pour ça :</h1>
				<?php
			}
			?>
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
	elseif ($_COOKIE['id'] == 32) 
	{
		?><section class="cookies container-fluid">
			<?php if(!empty($_SESSION))
			{
				 ?><h1>Hey <?php echo $_SESSION['username'];?>, vous avez craqué pour ça :</h1>
				<?php
			}
			?>
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




require 'inc/foot.php'; ?>
