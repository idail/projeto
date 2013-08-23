 <html>
<head></head>
<body>
 <!-- Footer
 ================================================== -->
<footer class="footer">
	<div class="container">
		<div class="span4 pull-right">
			<a href="#"><img style="max-width:45px" src="themes/css/images/facebook.png" title="facebook"></a>
			<a href="#"><img style="max-width:45px" src="themes/css/images/twitter.png" title="twitter"></a>
			<a href="#"><img style="max-width:45px" src="themes/css/images/rss.png" title="rss"></a>
			<a href="#"><img style="max-width:45px" src="themes/css/images/youtube.png" title="youtube"></a>
		</div>
        <?php
			include_once("sysadmin/bd/conexao.php");
			mysql_select_db("sysadmin");
			$select = "select * from footer order by texto";
			$resultado = mysql_query($select);
			while($registros = mysql_fetch_array($resultado)){
		?>
		<p>&copy;2013 <br/><em> <?php echo $registros["texto"] ?> <a href="#"><?php echo $registros["texto"] ?>, </a> <a href="comingsoon.html"><?php echo $registros["texto"] ?></a></em></p><?php } ?>
	</div>
	<!-- TESTE DO GIT -->
</footer>
<br/>
</body>
</html>
