<div class="ui slim segment">
                      <div class="ui grid">
                        <div class="row">

                        <!-- slider images -->
                          <div class="slider slider-nav">
                          <div><noscript data-slimmage><img class="halfsize" src="<?php echo $url?><?php echo $featuredpic;?>?width=100&format=png&quality=50"></noscript></div>

                          <?php
                          $i = 0;
                          foreach ($pics as $pic) {?>
                          <div class="slider-image" ><noscript data-slimmage><img class="halfsize" src="<?php echo $url?><?php echo $pic;?>?width=100&format=png&quality=50"></noscript></div>
                          <?php $i++;}?>
                          </div>
                          <!-- end slider images -->

                        </div>
                      </div>
                    </div>