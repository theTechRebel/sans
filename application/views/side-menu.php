<div class="four wide column">
  <div id="side-menu" class="ui fluid vertical menu">
    <div class="header item">
      <i class="tags icon"></i>
      <a href="<?php echo $url."catalogue/"?>">Categories</a>
    </div>
    <?php   $i = 0;
            foreach ($collections->result() as $row){ ?>
    <a class="item" href="<?php echo $url;?>catalogue/collection/<?php echo $row->collection_name;?>">
      <?php echo str_replace('_', ' ', $row->collection_name);?>
    </a>
    <?php  $i++;}?>
    <div class="header item">
      <i class="users icon"></i>
      <a href="<?php echo $url."catalogue/designers/"?>">Designers</a>
    </div>
        <?php   $i = 0;
            foreach ($designers->result() as $row){ ?>
    <a class="item" href="<?php echo $url ."catalogue/designers/". $row->surname;?>">
      <?php echo $row->label;?>
    </a>
    <?php  $i++;}?>
  </div>

  <div id="side-menu" class="ui fluid vertical menu">
    <div class="header item">
      <i class="mail icon"></i>
      SANS Newsletter.
    </div>
    <div class="text item">
    <h4><a>Sign Up</a> for the SANS Exposure Newsletter and get updates on products 
      blogs, trends and news delivered straight to your inbox.</h4>
  </div>
  <div class="item">
    <div class="ui action input">
    <form action="<?php echo $url."catalogue/signmeup"?>" method="post">
      <input type="text" placeholder="example: me@email.com " name="newsletter">
      <input type="submit" class="ui primary button" value="Sign me up"/>
    </div>
  </form>
  </div>
  </div>

  <div id="side-menu" class="ui fluid vertical menu">
    <div class="header item">
      <i class="star icon"></i>
      Popular on SANS Exposure.
    </div>

     <a href="<?php echo $url;?>catalogue/search?search=dress" class="ui teal tag label">Dress</a>
     <a href="<?php echo $url;?>catalogue/search?search=dress" class="ui teal tag label">african shirt</a>
     <a href="<?php echo $url;?>catalogue/search?search=crop+top" class="ui teal tag label">Crop top</a>
     <a href="<?php echo $url;?>catalogue/search?search=pearl" class="ui teal tag label">Pearl</a>
     <a href="<?php echo $url;?>catalogue/search?search=bead" class="ui teal tag label">beads</a>
     <a href="<?php echo $url;?>catalogue/search?search=peplum+top" class="ui teal tag label">Peplum top</a>
     <a href="<?php echo $url;?>catalogue/search?search=chiffon" class="ui teal tag label">chiffon</a>
     <a href="<?php echo $url;?>catalogue/search?search=cocktail+dress" class="ui teal tag label">Cocktail dress</a>

  </div>
</div>
