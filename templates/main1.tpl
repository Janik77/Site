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
	<div class="h1">
		<h1 class="gr">Наш магазин</h1>
	</div>
	<div class="row">
      <div class="col-md-3">
	{include file='aside.tpl'}
	{include file='diapozoncen.tpl'}
		<div class="col-md-9">
        <h4>Найдено NN товаров</h4>
        <hr/>
    <div class="page_content">
		{eval $Content}
	</div>
	</div>
	{include file='footer.tpl'}
{include file ='authorization.tpl'}
</body>

</html>