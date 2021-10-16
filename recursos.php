<?php
  require_once('./sessio.php');
?>

<!DOCTYPE html>
<html lang="es">

	<?php include "./head.html" ?>

	<body class="home">
	
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >

			<?php include "./headernoregistrat.html" ?>

			<div class="navbar-blue">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav left">
						<li><a href="index.php">Home</a></li>
						<li><a href="proposta.php">Propostes</a></li>
						<li><a href="">Projectes</a></li> 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">X <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="">E</a></li>
								<li><a href="">X</a></li>
							</ul>
						</li>
						<li><a href="">Contacte</a></li>
					</ul>
				</div>
			</div>
		</div> 


		<div class="container info margin-top">  
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			  		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  		<li class="breadcrumb-item"><a href="proposta.php">El meu perfil</a></li>
					<li class="breadcrumb-item"><a href="proposta.php">Els meus projectes</a></li>
			  		<li class="breadcrumb-item"><a href="proposta.php">Projecte 1</a></li>
			  		<li class="breadcrumb-item"><a href="proposta.php">Sala virtual</a></li>
			  		<li class="breadcrumb-item active" aria-current="page">Recursos</li>
				</ol>
		  	</nav>
	  		<div class="row">
   			 	<div class="col-sm-8">
					<h2 class="thin">Recursos</h2>
				</div>
    			<div class="col-sm-4 padding-plus">
					<a class="add" href="crearrecurs.php"><i class="fa fa-plus fa-lg"></i></a>
				</div>
  			</div>
			<hr class="proposta-hr">
			
			<?php
				echo "<table class=\"table\">";
            	echo "<thead class=\"thead-dark\"><tr><th>Recurs</th><th>Aportat per</th></tr></thead><tbody>";
				echo "<tr><td>Impresora 3D</td><td>FabLab</td><td><a href=\"modrecursos.php\" class=\"fa fa-lg fa-edit edit-icon fa2\"></a><a href=\"elimrecursos.php\" class=\"fa fa-lg fa-trash-o fa2\"></a></td></tr>";
				echo "<tr><td>Plastic</td><td>Promotor</td><tr>";
				echo "</tbody></table>";
			?>

		</div>

		<footer id="footer" class="top-space">
		
			<?php include "./footer1.html" ?>

			<?php include "./footer2.html" ?>

		</footer>	
		
		<?php include "./scripts.html" ?>
	
	</body>
</html>