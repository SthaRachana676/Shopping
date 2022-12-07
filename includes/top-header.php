<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<button><li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li></button>
				<?php } ?>

					<button><li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li></button>
					<button><li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li></button>
					<button><li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li></button>
					<button><li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li></button>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<button><li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li></button>
<?php }
else{ ?>
	
				<button><li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li></button>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
					<button>	<a href="track-orders.php" class="dropdown-toggle" ><span class="key">Track Order</b></a></button>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->