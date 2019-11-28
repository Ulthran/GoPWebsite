<header class="header-user-dropdown">

	<div class="header-limiter">
		<?php if (!is_mobile()) { echo '<h1><a href="https://apps.carleton.edu/student/orgs/gop/">Hibiscus</a></h1>'; } ?>

		<nav>
			<a href="http://goppyworky.2kool4u.net/">Home</a>
			<a href="http://goppyworky.2kool4u.net/workout/">Workouts</a>
            <a href="http://goppyworky.2kool4u.net/exercise/">Exercises</a>
			<a href="http://goppyworky.2kool4u.net/film/">Film</a>
			<a href="http://goppyworky.2kool4u.net/personal/">Personal <span class="header-new-feature">chungus</span></a>
            <?php if (is_mobile()) { ?>
            <div class="header-user-menu">
			    <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/unknown_user.jpg" alt="User Image"/>

			    <ul>
				    <li><a href="http://goppyworky.2kool4u.net/settings/">Settings</a></li>
				    <li><a href="#">Payments</a></li>
				    <li><a href="http://goppyworky.2kool4u.net/logout/" class="highlight">Logout</a></li>
			    </ul>
		    </div>
        </nav>
            <?php } else { ?>
		</nav>


		<div class="header-user-menu">
			<img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/unknown_user.jpg" alt="User Image"/>

			<ul>
				<li><a href="http://goppyworky.2kool4u.net/settings/">Settings</a></li>
				<li><a href="#">Payments</a></li>
				<li><a href="http://goppyworky.2kool4u.net/logout/" class="highlight">Logout</a></li>
			</ul>
		</div>
        <?php } ?>

	</div>

</header>

