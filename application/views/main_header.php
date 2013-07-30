<!-- Header -->
<div id="header">

	<!-- 960 Container Start -->
	<div class="container ie-dropdown-fix">
	
		<!-- Logo -->
		<div class="">
		<div><h4>Registration User Level<h4></div>
		</div>
		
		<!-- Main Navigation Start -->
		<div class="navbar navbar-inverse"">
			<div id = navigation >
				<ul id="nav">
					<li>					
						<a href="<?php echo base_url ()?>index.php/homepage" class="current">Home</a>
					</li>
					
					<li class="dropdown">
						<a href="<?php echo base_url ()?>index.php/station/add_station" class="current">Form</a>
						<ul class="dropdown-menu">
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/station/add_station">Form Station</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/unit/add_unit">Form Unit</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/sub_unit/add_sub_unit">Form Sub Unit</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/team/add_team">Form Team</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/functionn/add_function">Form Function</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/position/add_position">Form Position</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="<?php echo base_url ()?>index.php/station/tabel_station" class="current">Tabel</a>
						<ul class="dropdown-menu">
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/station/tabel_station">Tabel Station</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/unit/tabel_unit">Tabel Unit</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/sub_unit/tabel_sub_unit">Tabel Sub Unit</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/team/tabel_team">Tabel Team</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/functionn/tabel_function">Tabel Function</a></li>
						   <li><a tabindex="-1" href="<?php echo base_url ()?>index.php/position/tabel_position">Tabel Position</a></li>
						</ul>
					</li>
					
					<li>
					<?php if( $this->ion_auth->logged_in() ):?>
						<a href="<?php echo base_url ()?>index.php/auth/logout" class="current">Log Out</a>
					<?php else: ?>
						<a href="<?php echo base_url ()?>index.php/auth/login" class="current">Log In</a>
					<?php endif; ?>
					</li>
				</ul>
				</div>
			</div>
		</div>
		<!-- Main Navigation End -->
		
	</div>
	<!-- 960 Container End -->

</div>
<!-- End Header -->