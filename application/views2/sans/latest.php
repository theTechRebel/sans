<div class="row">
<div class="large-12 columns" align="center"><br/><br/>
<h3>Welcome to sans exposure</h3>
<h5>Discover amazing Zimbabwe designer collections that you will love.</h5>
</div>
</div>


<section class ="main-section">
    <div class="row full-width">
    <hr/>
    <div class="large-12 medium-12 small-12 columns">
    <div class="large-10 medium-9 small-12 columns">
    <?php   $i = 0;
            foreach ($items->result() as $row){ ?>
        <div class="large-3 medium-6 small-12 columns panel th">
        <a href="<?php echo $url?>catalogue/view/<?php echo $row->code;?>">
        <img width="350" height="400" src="<?php echo $url?><?php echo $row->pic;?>" class="frontpage"/>
        </a>
        <div class="small-12 large-12 medium-12 columns desc" align="left"><br/>
        <p><?php echo $row->item_name?></p>
         $<?php echo $row->price;?>
        </div>
        <div class="small-12 large-12 medium-12 columns desc" align="center">
            <a href="<?php echo $url?>catalogue/view/<?php echo $row->code;?>" class="button success tiny">Buy Now</a>
        </div>
        </div>
    <?php  $i++;}?>
</div>

<div class="large-2 medium-3 small-12 columns panel th">
<ul class="side-nav">
<li class="has-form">
  <div class="row collapse">
      <p><b>Quick Search for anything</b></p>
    <div class="large-12 medium-12 small-12 columns">
      <input type="text" placeholder="enter search item here...">
    </div>
    <div class="large-12 medium-12 small-12 columns">
    <a href="#" class="success button expand">Search</a>
    </div>
  </div>
</li>
<p><b>Categories</b></p>
<?php foreach ($collections->result() as $row){ ?>
&nbsp; &nbsp; <a href="<?php echo $url;?>catalogue/collection/<?php echo $row->collection_name;?>"><?php echo $row->collection_name;?></a><br/>
<?php }?>

  <br/><p><b>Blog articles</b></p>

</ul>
</div>
</div>

<div class="large-12 medium-12 small-12 columns callout panel">
    <h4 align="center">Navigate through our collections</h4>
<h4 align="center"><b><?php echo $this->pagination->create_links(); ?></b></h4>
</div>
<hr/>
</div>
</section>
