<header class="p-1 mb-1 fixed-top" style="background-color: white;">
	<div class="posmenu">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
		  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
			<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
		  </a>
		  	<img src="<?= URL ?>/public/img/logo.JPG" width="120px" height="50px"/>
			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				<li><a class="dropdown-item" href="<?= URL ?>">Home</a></li>
				<li><a class="dropdown-item" href="<?= URL ?>/Functions/register">New Function</a></li>
				<li><a class="dropdown-item" href="<?= URL ?>/Functions/all/20">All Functions</a></li>
				<li><a class="dropdown-item" href="<?= URL ?>/Contact/">Contact</a></li>
				<?php
					if($help->isAdmin()){
				?>
				<li><a class="dropdown-item" href="<?= URL ?>/Contact/received">Received Messages</a></li>
				<li><a class="dropdown-item" href="<?= URL ?>/Language/register">Register Language</a></li>
				<li><a class="dropdown-item" href="<?= URL ?>/Language/search">Update Language</a></li>
				<li><a class="dropdown-item" href="<?= URL ?>/User/register">Register User</a></li>
				<li><a class="dropdown-item" href="<?= URL ?>/User/search">Update User</a></li>
				<?php 
					}
				?>
			</ul>
			<div class="dropdown text-end">
				<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
				  <img src="<?= URL ?>/public/img/user.png" alt="mdo" width="42" height="42" class="rounded-circle">
				</a>
				<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
				  <li><a class="dropdown-item" href="<?= URL ?>/Functions/my">My Functions</a></li>
				  <li><a class="dropdown-item" href="<?= URL ?>/User/myprofile/<?= $_SESSION['fun_email'] ?>">Profile</a></li>
				  <li><hr class="dropdown-divider"></li>
				  <li><a class="dropdown-item" href="<?= URL ?>/User/logout">Sign Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="search">
		<form method="POST" action="<?= URL ?>/Functions/results/">
		  <div class="row justify-content-md-center">
			<div class="col col-lg-5">
			  <input type="search" class="form-control" placeholder="Search Function..." name="txtSearch" id="txtSearch">
			</div>
			<div class="col-md-2">
			  <select class="form-control" id="selLanguage" name="selLanguage">
				<option value="0" selected>All Languages</option>
				<?php foreach($dados["dadosLang"] as $linguagens){ ?>
				<option value='<?= $linguagens->codlan ?>'><?= $linguagens->deslan ?></option>
				<?php } ?>
			  </select>
			</div>
			<div class="col-md-1">
			  <input type="submit" value="Search" name="search" id="search" class="btn btn-primary">
			</div>
		  </div>
		</form>
	</div>
</header>