<?php require('header.php'); ?>


<div class="row vertical-center-row">  
    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
        <div class="jumbotron">
            <h1>Fusce > faucibus!</h1>
        </div>
    </div>
</div>


<div class="container">

        <div class="row col-lg-10 col-lg-offset-1">
            
            <div class=" col-xs-12 col-md-3 col-md-push-9 sidenav" id="sidebar">

                    <div class="col-xs-12">

                        <div class="group">
                            
                                <div class="input-group" id="search">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-md">
                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                        </button>
                                    </span>
                                </div>                    
                            
                            <div class="group-title">Categories</div>
                            <?php for ($i=0; $i< count($categories); $i++) { ?>
                                <div class="group-item">
                                    <a href="index.php?category_id=<?php echo $categories[$i]->id; ?>" ><?php echo $categories[$i]->name; ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                
                    <div class="col-xs-6 col-lg-12">
                        <div class="group">

                            <div class="group-title">Brands</div>
                            <?php for ($i=0; $i< count($brands); $i++) { ?>
                                <div  class="group-item"><a href="index.php?brand_id=<?php echo $brands[$i]->id; ?>"><?php echo $brands[$i]->name; ?></a></div>
                                <?php } ?>
                        </div>
                    </div>
            </div>
            
            
            <div class="col-md-9 col-md-pull-3 col-xs-12">

                <?php for ($i=0; $i<count($products);$i++) { ?>
                    <div class="col-sm-6 col-lg-4 col-md-4 col-xs-6" id="item">
                        <a class="product" href="product.php?id=<?php echo $products[$i]->id; ?>" id="">
                            
                           <?php if ($products[$i]->images) { ?>

                                <img class="img-responsive center-block" src="<?php echo $products[$i]->images[0] ?>">
                            
                            <?php } else {?>

                                <img class="img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=160%C3%97240&w=600&h=600">

                            <?php } ?>

                            <div class="info row">
                                <div class="col-sm-12 col-md-7 name" id="title"><?php echo $products[$i]->name ?></div>
                                <div class="col-sm-12 col-md-5 text-right" id="price"><?php echo $products[$i]->price ?> €</div>
                            </div>
                            <br>
                        </a>
                    </div>
                <?php } ?> 

            </div>
        
        </div>
    </div>

<?php require("footer.php"); ?>