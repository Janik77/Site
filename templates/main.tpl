{config_load file = 'my_conf.conf'}
<!DOCTYPE html>
<html>
<head>
		<title>{$TITLE}</title>
		<meta charset="utf-8">
		<meta name="view" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<script scr="./js/bootstrap.min.js"></script>
		<script src="./js/bootstrap.bundle.min.js"></script>
		<script src="fontawesome/js/fontawesome.min.js"></script>
</head>
<body>
	
<h2>{$name}</h2>

<p>arr1[0] = {$arr1[0]}</p>
<p>arr1[1] = {$arr1[1]}</p>
<p>arr1[2] = {$arr1[2]}</p>

<hr/>

{foreach $arr2 as $keyvar => $itemvar}
	<p>{$keyvar} = {$itemvar}</p>
{/foreach}

<hr/>

<table>
	<tr>
		<td>Num</td>
		<td>Name</td>
		<td>Value</td>
	</tr>
{foreach $data as $item}
	<tr>
		{foreach $item as $itemvar}
			<td>{$itemvar}</td>
		{/foreach}
	</tr>
{/foreach}
</table>

<hr/>



</body>
</html>