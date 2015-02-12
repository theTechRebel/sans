
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Home
                        <small>Catalogue</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="ion-home"></i> Home</a></li>
                        <li class="active">Catalogue</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="row">
                    <?php $i = 0;?>
                    <?php foreach ($catalogue->result() as $row) {?>
                    <?php if($i == 3){?>
                            <!--</div> -->
                            <!--<div class="row">-->
                            <?php $i =0?>
                    <?php }?>
                    <a href="#">
                    <div class="large-4  mid-4 small-6 columns" align="center">
                            <img src="<?php echo $row->image_location?>">
                        <div class="panel large-12 columns" width="300px" height="300px">
                        View Collection
                        </div>
                    </div></a>
                    <?php $i++;?>
                    <?php }?>
                </div>
            </section>


    <!--
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                     <div class="row">
                    <!--Left Section
                    <?php //foreach ($catalogue->result() as $row) {?>


                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="thumbnail">
                                    <img src="<?php //echo $row->image_location?>" alt="image unavailable">
                                    <div class="caption">
                                        <h4><p align="center"><?php //echo $row->collection_name;?></p></h4>
                                        <p align="center"><?php //if($row->sex == "m"){echo "Mens Clothing";}else{echo "Ladies Clothing";}; ?></p>
                                              <p align="center"><a href="#" class="btn btn-primary" role="button" color="black">Add to Cart</a>
                                        <a href="<?php //echo $url?>home/view_collection/<?php echo $row->id;?>" class="btn btn-default" role="button">View Collection</a></p>
                                    </div>
                                </div>
                            </div>
                    <?php //}?>
             </div>
            </div>
    -->
<!--
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/400x200" alt="...">
                                    <div class="caption">
                                        <h3><span class="badge">£28</span> Thumbnail label</h3>
                                        <p align="center">The Summer Collection</p>

                                        <p align="center"><a href="#" class="btn btn-primary" role="button">Add to Cart</a>
                                        <a href="#" class="btn btn-default" role="button">View Collection</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="thumbnail">
                                    <img src=" http://placehold.it/400x200" alt="...">
                                    <div class="caption">
                                        <h3><span class="badge">£28</span> Thumbnail label</h3>
                                        <p align="center">The Summer Collection</p>
                                        <p align="center"><a href="#" class="btn btn-primary" role="button">Add to Cart</a>
                                        <a href="#" class="btn btn-default" role="button">View Collection</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/700x400" alt="...">
                                    <div class="caption">
                                        <h3><span class="badge">£28</span> Thumbnail label</h3>
                                        <p align="center">The Summer Collection</p>
                                        <p align="center"><a href="#" class="btn btn-primary" role="button">Add to Cart</a>
                                        <a href="#" class="btn btn-default" role="button">View Collection</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.Left Section -->

                    <!--Right Section-->
                <section>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <h3>
                        Featured
                        <small>Designer.</small>
                    </h3><br/>
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/700x400" alt="...">
                                    <div class="caption">
                                        <h3><span class="badge">£28</span> Thumbnail label</h3>
                                        <p align="center">The Summer Collection</p>
                                    </div>
                                </div>
                            </div>
                     <h3>
                        Featured
                        <small>Collection.</small>
                    </h3><br/>
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/700x400" alt="...">
                                    <div class="caption">
                                        <h3><span class="badge">£28</span> Thumbnail label</h3>
                                        <p align="center">The Summer Collection</p>
                                    </div>
                                </div>
                            </div>
                </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
