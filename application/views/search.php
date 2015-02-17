  <div class="ui centered grid">
    <div class="one wide colunm">
<!-- search box -->
    <form method="get" action="<?php echo $url;?>catalogue/search">
      <div class="ui search">
      <div class="ui icon input">
        <div class="ui grid">
        <div class="item" align="center"><h1>Search SANS Exposure</h1></div>
        <div class="ten wide column">
          <input class="prompt" type="text" name="search" placeholder="e.g african shirt">
        </div>
        <div class="six wide column">
          <input type="submit" name="submit" class="ui teal animated button" value="Search">
        </div>
      </div>
        
      </div>
      <div class="results"></div>
    </div>
  </form>
    </div>
  </div>
