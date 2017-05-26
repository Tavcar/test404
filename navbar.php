
<div class="container container-fullwidth" id="topdark">
    <div class="row" id="darkbar">  
            <div class="col-xs-12">

                    <div class="col-sm-4" id="left">
                        <p>555-453-554 | text@mail.com</p>
                    </div>

                    <div class="col-sm-5" id="cet">
                        <p>location, street address, city</p>
                    </div>

                    <div class="col-sm-3" id="right">        
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    </div> 
            </div>
    </div>
</div>


<div class="col-lg-10 col-lg-offset-1">
    <nav class="navbar navbar-default" role="navigation" id="navbarw"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>    
            <a class="navbar-brand" href="#">Fusce faucibus</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-center">
                <li><a href="/">Home</a></li>
                <li><a href="#">Tristique</a></li>
                <li><a href="#">Aenean</a></li>
                <li><a href="#">Curabitur</a></li>
                <li><a href="#">Fringilla</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="nav-cart">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span><?php echo count($cart->items); ?> Cart<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-cart" role="menu">
                        <li><a class="text-center" href="cart.php">View Cart</a></li>
                        <li><a class="text-center" href="checkout.php">Checkout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

