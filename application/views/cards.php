<div class="ui centered grid">
<div class="one wide colunm">
  <div class="item"><h2><?php echo $this->pagination->create_links(); ?></h2></div>
</div>
</div>

<div class="ui four doubling cards">
<?php   $i = 0;
            foreach ($items->result() as $row){ ?>
  <div id="card" class="ui card" align="center">
    <div class="image" href="#">
      <span class="product">

        <div class="image" align="center">
          <a href="<?php echo $url?>catalogue/view/<?php echo $row->code;?>"><img alt="SANS Exposure Catalogue Item" height="300" src="<?php echo $url?><?php echo $row->pic;?>?width=100&format=png&quality=50"></a>
        </div>

        <span class="in-relation">
          <span class="name-tagline">
            <span class="header"><a href="<?php echo $url?>catalogue/view/<?php echo $row->code;?>"><i class="ui teal tag label"><?php echo $row->item_name?></i></a></span>
            <span class="tagline"></span>
            <span class="price">
              <span class="current">$<?php echo $row->price;?>.<sup>00</sup></span>
               <!-- <div class="ui circular primary animated button"> -->
                <a href="<?php echo $url?>catalogue/view/<?php echo $row->code;?>" class="ui primary button">Buy Now</a>
              <!-- <div class="hidden content">
                <i class="shop icon"></i>
              </div>
            </div> -->
            </span>
          </span>
        </span>



        <span class="bar"></span>

        <span class="designer">Designed by <strong><a href="<?php echo $url ."catalogue/designers/". $row->designer;?>"><?php echo str_replace('_',' ',$row->designer);?></a></strong></span>

      </span>
    </div>
  </div>
<?php  $i++;}?>
</div>


<div class="ui centered grid">
<div class="one wide colunm">
  <div class="item"><h2>Browse through our collections</h2></div>
  <div class="item"><h2><?php echo $this->pagination->create_links(); ?></h2></div>
</div>
</div>
