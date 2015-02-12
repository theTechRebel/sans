<div class="four wide column">
  <div id="side-menu" class="ui fluid vertical menu">
    <div class="header item">
      <i class="tags icon"></i>
      Categories
    </div>
    <?php   $i = 0;
            foreach ($collections->result() as $row){ ?>
    <a class="item" href="<?php echo $url;?>catalogue/collection/<?php echo $row->collection_name;?>">
      <?php echo str_replace('_', ' ', $row->collection_name);?>
    </a>
    <?php  $i++;}?>
    <div class="header item">
      <i class="users icon"></i>
      Designers
    </div>
        <?php   $i = 0;
            foreach ($designers->result() as $row){ ?>
    <a class="item" href="<?php echo $row->surname;?>">
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
      <input type="text" placeholder="example: me@email.com ">
      <div class="ui primary button">Sign me up</div>
    </div>
  </div>
  </div>

  <div id="side-menu" class="ui fluid vertical menu">
    <div class="header item">
      <i class="star icon"></i>
      Popular on SANS Exposure.
    </div>

     <a class="ui teal tag label">Dress</a>
     <a class="ui teal tag label">Chik</a>
     <a class="ui teal tag label">Red Dress</a>
     <a class="ui teal tag label">Traditional outfit</a>
     <a class="ui teal tag label">African shirt</a>
     <a class="ui teal tag label">Dress</a>
     <a class="ui teal tag label">Chik</a>
     <a class="ui teal tag label">Red Dress</a>
     <a class="ui teal tag label">Traditional outfit</a>
     <a class="ui teal tag label">African shirt</a>

  </div>
</div>
