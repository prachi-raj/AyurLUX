<nav class="navbar  navbar-inverse navbar-fixed-top" style="background-color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="picture/logo.png" width="30" height="30" alt=""></a>
                <a href="index.php" class="navbar-brand navbar-left"><b>AyurLux</b></a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <?php
				if(!isset($_SESSION['email'])){ 
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
				</ul>
			<?php
				}else{
			?>
				
                <ul class="nav navbar-nav navbar-right">
                                    <li><a href=""></a></li>
					<li><a href="cart."><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
					<li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			<?php
				}
			?>
		</div>
	</div>
</nav>
               
