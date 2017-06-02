<div class="col-lg-10 col-lg-offset-1" id="top">
    <div class="row" id="darkbar">
            <div class="col-xs-12">

                    <div class="col-sm-4" id="left">
                        <p>040 666 296 | info@idoktor.si</p>
                    </div>

                    <div class="col-sm-5" id="cet">
                        <p>Center Murgle, Cesta v mestni log 55/e40, Ljubljana</p>
                    </div>

                    <div class="col-sm-3" id="right">
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
            </div>
    </div>


    <div class="col-xl-10 col-xl-offset-1">
        <nav class="navbar navbar-default" role="navigation" id="navbarw">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="/"><img src="assets/logo1.png" id="logo1" alt="iDoktor">
                    </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-center" id="links">
                    <li><a href="/">Domov</a></li>
                    <li><a href="#">Servis</a></li>
                    <li><a href="#">Apple dodatki</a></li>
                    <li><a href="#">Apple rezervni deli</a></li>
                    <li><a href="#">Ovitki po naročilu</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="nav-cart">
                    <li class="dropdown">
                          <button type="button" class="btn-lg btn-default dropdown-toggle" id="navbar-search" data-toggle="dropdown" aria-expanded="false"><span class="glyphicon glyphicon-search"></span></button>
                          <div class="dropdown-menu dropdown-menu-right" id="search-drop" role="menu">

                              <form class="form-horizontal" role="form">

                                  <div class="form-group">
                                      <label for="contain">Search...</label>
                                      <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                              </form>

                            </div>
                    </li>

                    <li><div id="blue"><span class="bluetop">|</span></div></li>

                    <li class="dropdown">
                        <button class="btn-lg btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart"></span><div class="circle"><?php echo count($cart->items); ?></div></button>
                        <ul class="dropdown-menu dropdown-cart" role="menu">
                          <?php foreach ($cart->items as $item): ?>
                            <li>
                                <span class="item" id="navcart">
                                    <span class="item-left">
                                          <img src="<?php echo $item->images[0]; ?>"/>
                                      </span>
                                      <span class="item-right">
                                          <span class=""><?php echo $item->quantity; ?> x <?php echo $item->name; ?></span><br>
                                          <span class="pull-right"><?php echo $item->price; ?> €</span><br>
                                      </span>
                                  </span>
                              </span>
                            </li>
                            <li class="divider"></li>

                            <?php endforeach; ?>

                            <li><a class="text-center" href="#">Cart</a></li>
                            <li><a class="text-center" href="#">Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
