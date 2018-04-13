<?php 
require 'inc/head.php'; 




if (empty($_SESSION)) 
{
  header('location: login.php');
}

if (!empty($_POST))
{
  $id = $_POST['submit'];
  $cookieEnd = time()+60*60*24;
  switch ($id) 
  {
    case 46:
         setcookie("id1", $id, $cookieEnd);
      break;
        
     case 36:
         setcookie("id2", $id, $cookieEnd);
      break;

      case 58:
        setcookie("id3", $id, $cookieEnd);
      break;

      case 32:
           setcookie("id4", $id, $cookieEnd);
      break;
    
  }

 
 
 
  
 
}

?>


    <section class="cookies container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

         
          <figure class="thumbnail text-center">
            <img name="imgnuts" src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3 name="titlenuts">Pecan nuts</h3>
              <p name="descnuts" >Cooked by Penny !</p>
               <form method="POST" action="">
              <button type="submit" name="submit" value="46" type="submit" href="?add_to_cart=46" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart
              </button>
              </form>

            </figcaption>
          </figure>
        

        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

        
          <figure class="thumbnail text-center">
            <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>Chocolate chips</h3>
              <p>Cooked by Bernadette !</p>
                <form method="POST" action="">
              <button  type="submit" name="submit" value="36" href="?add_to_cart=36" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
                </form>

            </figcaption>
          </figure>
      

        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

        

            <figure class="thumbnail text-center">
              <img  for="chips" name="imgchips" src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
              <figcaption class="caption">
                <h3 name ="titlechips" for="chips">Chocolate cookie</h3>
                <p for="chips">Cooked by Bernadette !</p>

                <form method="POST" action="">
                <button type="submit" name="submit" value="58" href="?add_to_cart=58" class="btn btn-primary">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
                </form>

              </figcaption>
           </figure>

         

        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

       

          <figure class="thumbnail text-center">
            <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>M&M's&copy; cookies</h3>
              <p>Cooked by Penny !</p>

               <form method="POST" action="" class="form-inline">
              <button type="submit" name="submit" value="32" href="?add_to_cart=32" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </button>
               </form>

            </figcaption>
          </figure>

       

        </div>
      </div>
    </section>
</form>



<?php 





require 'inc/foot.php'; ?>
