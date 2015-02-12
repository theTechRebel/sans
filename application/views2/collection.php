<!--
Exposed variable
'items' => $item,
'collection_pic' => $collection_pic,
'collection_id' => $id,
'page' => "Catalogue Number: ".$id,
'user' => $this->session->userdata('user'));

//The website and app need to display the images
//from the catalogue and have a shopping cart.
//Images will be accompanied with the name of the
//item, sizes available, product ID, price and add to shopping cart button.
-->

<?php require_once('header.php') ?>
<?php require_once('navbar_top.php') ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
<?php require_once('navbar_left.php') ?>


<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Collection Number: <?php echo $collection_id?>
                        <small>Catalogue</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="ion-hanger"></i> Collection</a></li>
                        <li class="active">#<?php echo $collection_id?></li>
                    </ol>
                </section>

              <!-- Main content -->
                <section class="content">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="thumbnail">
                          <img src="<?php echo $url.$collection_pic;?>" alt="image unavailable">
                          <div class="caption">
                          <h3><span class="badge">£28</span><?php echo $collection_id;?></h3>
                              <p align="center">Title of Collection</p>
                              <p align="center"><a href="#" class="btn btn-primary" role="button">Add to Cart</a></p>
                          </div>
                    </div>
                </div>
                <?php foreach ($items as $key => $value): ?>
                      <?php //echo $value['pic'];?>
                      <?php //echo $value['code'];?>

              <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail">
                          <img src="<?php echo $url.$value['pic'];?>" alt="image unavailable">
                          <div class="caption">
                          <h3><span class="badge">£28</span><?php echo $value['code'];?></h3>
                              <p align="center">Title of Collection</p>
                              <p align="center"><a href="#" class="btn btn-primary" role="button">Add to Cart</a></p>
                          </div>
                    </div>
              </div>
              <?php endforeach ?>

          </div>

    </section>
  </aside>
</div>
<?php require_once('footer.php')  ?>
