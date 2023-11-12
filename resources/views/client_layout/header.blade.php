		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +237 656718997</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> poseymec22@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> carrefour MUTZIG bonaberi</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> CFA</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> Mon Compte</a></li>
						<li><a href="#"><i class="fa fa-unlock" ></i>ADMINISTRATION</a></li>
					</ul>i>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
                                    <img src="{{asset('/frontend/img/logo6.png')}}" alt="">
                                </a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
							        <select class="input-select">
										<option value="0">Categories</option>
										<option value="1">Categorie 01</option>
										<option value="1">Categorie 02</option>
									</select>
									<input class="input" placeholder="">
									<button class="search-btn">Recherche</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!--<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>-->
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Votre Panier</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('/frontend/img/product01.png')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('/frontend/img/product02.png')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<!--<a href="#">voir le panier</a>-->
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="{{request()->is('/')? 'active' : ''}}"><a href="{{url('/')}}">Accueil</a></li>
						<li  class="{{request()->is('store')? 'active' : ''}}"><a href="{{url('/store')}}">Bonnes Affaires</a></li>
						<li class="{{request()->is('store')? 'active' : ''}}"><a href="{{url('/store')}}">Categories</a></li>
						<li class="{{request()->is('store')? 'active' : ''}}"><a href="{{url('/store')}}">Apareils Electroniques</a></li>
						<li class="{{request()->is('store')? 'active' : ''}}"><a href="{{url('/store')}}">Telephones</a></li>
						<li class="{{request()->is('store')? 'active' : ''}}"><a href="{{url('/store')}}">Ordinateurs</a></li>
						<li class="{{request()->is('store')? 'active' : ''}}"><a href="{{url('/store')}}">Accessoires</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
