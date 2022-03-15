<header>
  <div class="row">
    <div class="col-md-2">
		<nav class="navbar navbar-expand-sm">
		  <div class="container-fluid">
		    <div class="collapse navbar-collapse" id="mynavbar">
		      <ul class="navbar-nav me-auto">
		        <li class="nav-item">
		          <a class="nav-link blc" href="javascript:void(0)">RU</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link blc" href="javascript:void(0)">EN</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link blc" href="javascript:void(0)">KZ</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
  </div>
     <div class="col-md-6">
     </div>
    <div class="col-md-4">
		<nav class="navbar navbar-expand-sm">
		  <div class="container-fluid">
		    <div class="collapse navbar-collapse" id="mynavbar">
		      <ul class="navbar-nav me-auto">
		        <li class="nav-item padd">
		          <a class="nav-link blc" href="javascript:void(0)">E-mail</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link blc" href="javascript:void(0)">Связаться с нами</a>
		        </li>
		      </ul>

		    </div>

		  </div>

		</nav>
	</div>
	<hr/>
	</div>

		<div class="row">
			<div class="col-md-2">
				<div class="logo">
					<a href="index.html">
						<img class="logoh" src="./templates/images/logo1.png">
					</a>
				</div>
			</div>
			<div class="col-md-7" >
				<div class="menu" >
					<button type="button" class="btn btn-primary dropdown-toggle search me-2 mar" data-bs-toggle="dropdown">Все категории</button>
    <div class="dropdown-menu">
    {foreach $gpl as $gpl_item}
      <a class="dropdown-item" href="?page=products&group={$gpl_item.id}">{$gpl_item.name}</a>
      
    {/foreach}
    </div>

					<button type="button" class="btn btn-outline-primary me-2 mar search">Магазин</button>
					<form class="d-flex search" >
			        <input class="form-control me-2 text1 mar" type="text" placeholder="Search">
			        <button class="btn btn-primary mar" type="button">Search</button>
			        </form>
				</div>
			</div>

			<div class="col-md-3">
				<div class="row">
					<div class="col-md-9" >
						<label for="fname" class="textnan">Добро пожаловть Гость!</label><br>
							<a href="/templates/Autho.html" class="blc">Войти </a>
							<span>|</span>
							<a href="Registration.html" class="blc">Зарегистироваться </a>
						</div>
						<div class="col-md-3 ps-0">
						<img class="ico1" src="./templates/images/Slice 2.png">
						</div>
					</div>	
			</div>
			<hr/>
		</div>
		</header>