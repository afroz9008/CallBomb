<?php

if(isset($_GET['n1']))
{
	$nums=1;
}
if(isset($_GET['n2']))
{
	$nums=2;
}
if(isset($_GET['n3']))
{
	$nums=3;
}
if(isset($_GET['n4']))
{
	$nums=4;
}
if(isset($_GET['n5']))
{
	$nums=5;
}
if(isset($_GET['n6']))
{
	$nums=6;
}
if(isset($_GET['n7']))
{
	$nums=7;
}
if(isset($_GET['n8']))
{
	$nums=8;
}
if(isset($_GET['n9']))
{
	$nums=9;
}
if(isset($_GET['clear']))
{
	$nums=" ";
}

?>



<html>
	<head>
	<style>
		table{
			width:60%;
			margin-left:20%;
		}
		caption{
			margin-top:300px;
		}
		.display{
			width:100%;
			height:5%;
			border:5px solid black;
			text-align:right;
			font-size:30px;
		}
		.num{
			width:100%;
			height:50px;
		}
		
	</style>
	</head>
	<body>
		<form action="#" method="GET">
	<table border="1" cellpadding="0" cellspacing="0">
		<caption><input type="text" class="display" name="display" value="<?php echo $nums; ?>"></caption>
		<tr>
			<th>
				<input type="submit" class="num" name="n1" value="1">
					</th>
					<th>
				<input type="submit" class="num" name="n2" value="2">
					</th>
					<th>
				<input type="submit" class="num" name="n3" value="3">
					</th>
					<th>
						<input type="" class="num" name="clear" value="CLEAR">
							
						</th>
					</tr>
					<tr>
					<th>
				<input type="submit" class="num" name="n4" value="4">
					</th>
					<th>
				<input type="submit" class="num" name="n5" value="5">
					</th>
					<th>
				<input type="submit" class="num" name="n6" value="6">
					</th>
					</tr>
					<tr>
					<th>
				<input type="submit" class="num" name="n7" value="7">
					</th>
					<th>
				<input type="submit" class="num" name="n8" value="8">
					</th>
					<th>
				<input type="submit" class="num" name="n9" value="9">
					</th>
					</tr>
		</table>
	</form>
	</body>
</html>
