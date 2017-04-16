<html>
<head>
	<title>Leonardo Lira - InfoPage</title>
    <style type="text/css" media="all">@import url("css/style.css")</style>;

</head>
<body>
	<?php
		include_once("topo.php");
		include_once("menu.php");
		
				
		if(empty($_SERVER["QUERY_STRING"])){
			$var = "conteudo.php";
			include_once("$var");
		}else{
			$pg=$_GET['pg'];
			include_once("$pg.php");
		}
		
		include_once("rodape.php");
	?>
	

</body>
</html>