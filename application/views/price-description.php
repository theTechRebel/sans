<div class="ui slim segment">
                      <div class="ui grid">
                        <div class="row">
                          <div id="item-description" class="sixteen wide column">

                          <div class="price field">
                            <h2 id="displayed-price">
                              <span class="ui price green tag label">$<?php echo $price;?></span>
                            </h2>
                            <div id="price-updating" class="ui loader small"></div>
                          </div>

                          <h3><?php echo $item_name;?></h3>
                          <h4><a href="<?php echo $url?>designers/view/<?php echo $designer;?>">Designed by <?php echo str_replace("_", " ", $designer);?></a></h4>
                          <h5><a href="<?php echo $url?>catalogue/view/<?php echo $sex;?>">
                          <?php  switch ($sex) {
                                case 1:
                                  echo "Mens Clothing";
                                break;
                                case 2:
                                  echo "Unisex";
                                break;
                                case 0:
                                  echo "Womens Clothing";
                                break;
                              }?></a>
                              </h5>
                          </div>
                        </div>
                      </div>
                    </div>