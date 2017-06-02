<?php require('header.php'); ?>


<div class="row vertical-center-row">  
    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
        <div class="jumbotron">
        </div>
    </div>
</div>


<div class="container">

        <div class="row col-lg-12">
                        
            <div class=" col-xs-12 col-md-2 col-md-push-10 sidenav" id="sidebar">

                    <div class="col-xs-12">

                        <div class="group"><!-- -->
                            
                                <div class="input-group" id="search">
                                    <input type="text" class="form-control" placeholder="Iskanje...">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-md">
                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                        </button>
                                    </span>
                                </div>                    
                            
                                <div class="group-title"><h4 id="sidetitle"><span class="blue">| </span>KATEGORIJE</h4></div>
                            
                                <?php for ($i=0; $i< count($categories); $i++) { ?>
                            
                                    <div class="panel-group">
                                        
                                                <?php if (!(isset($categories[$i]->parent_id))) {?>
                                                    <a data-toggle="collapse" data-target="#demo<?php echo $i; ?>"><?php echo $categories[$i]->name; ?></a>
                                                    <ul id="demo<?php echo $i; ?>"> 
                                        
                                                    <?php for ($x=0; $x< count($categories); $x++) {?>
    
                                                         <?php
                                                        if (isset($categories[$x]->parent_id)) {?>
                                                            
                                                              
                                                                <?php
                                                                if ($categories[$i]->id === $categories[$x]->parent_id) {?>
                                                                
                                                                    <a href="index.php?category_id=<?php echo $categories[$x]->id; ?>"><?php echo $categories[$x]->name; ?></a>

                                                                <?php }?>
                                                            
                                                            <?php        
                                                            
                                                        }?>
                                                        <?php  
    
                                                    } ?>
                                                    </ul>
                                                <?php } ?>
                                        
                                    </div>
                                <?php } ?>
                        </div><!-- group -->
                    </div>
            </div><!-- sidebar -->
            
            
            
            <div class="col-md-10 col-md-pull-2 col-xs-12"><!-- items -->

                <?php for ($i=0; $i<count($products);$i++) { ?>
                
                    <div class="col-sm-6 col-lg-4 col-md-4 col-xs-6" id="item">
                        <a class="product" href="product.php?id=<?php echo $products[$i]->id; ?>" id="">
                            
                           <?php if ($products[$i]->images) { ?>

                                <img class="img-responsive center-block" src="<?php echo $products[$i]->images[0] ?>">
                            
                            <?php } else {?>

                                <img class="img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=160%C3%97240&w=600&h=600">

                            <?php } ?>

                            <div class="info row">
                                <div class="col-xs-12 name" id="title"><?php echo $products[$i]->name ?></div>
                                <div class="col-xs-12" id="desc"><?php echo $products[$i]->description ?></div>
                                
                                <div class="col-xs-3" id="">
                                    <button type="button" class="btn btn-default btn-md">
                                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="col-xs-3" id="">
                                    <button type="button" class="btn btn-default btn-md">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="col-xs-3" id="">
                                    <button type="button" class="btn btn-default btn-md">
                                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                                    </button>
                                    <!-- 
                                    <?php /*if ($products[$i]-> ) {?>
                                        <button type="button" class="btn btn-default btn-md">
                                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                                        </button><?php
                                    } else {?>
                                        <button type="button" class="btn btn-default btn-md">
                                            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                                        </button><?php
                                    {*/?>
                                    -->
                                </div>
                                
                                <div class="col-xs-3" id="price"><span class="blue"><?php echo $products[$i]->price ?>€</span></div>
                            </div>
                            
                        </a>
                    </div>
                
                <?php } ?> 

            </div><!-- items -->
        
    </div><!-- -->

<?php require("footer.php"); ?>