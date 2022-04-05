{config_load file = 'my_conf.conf'}
<!DOCTYPE html>
<html>
<head>
	{include file='head.tpl'}
</head>
<body>
	
<div class="container">
	<header>
	{include file='header.tpl'}
	</header>
	{include file='carusel.tpl'}
			<div class="row">
				<div class="col-md-6">
					<h3 class="mar2">Популярные товары</h3>
				</div>
				<div class="col-md-6 ">
					<button type="button" class="btn btn-outline-primary right mar2">Все товары</button>
				</div>
			</div>
			<div class="row">
			{eval $Content}
			 </div>
			
		</div>
		{include file='footer.tpl'}
</div>
{include file ='authorization.tpl'}
<script src="./templates/js/jquery-3.6.0.min.js"></script>
<script src="./templates/js/scripts.js"></script>
</body>
</html>