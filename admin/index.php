	<?php
	require_once("../functions.php");
    include "header.php";
	if(isset($_GET["page"])){
		$page= $_GET["page"];
	}
	else{
		$page="panel";
	}
	 
	
	?>
			<section id="page">
			<?php
			CargarPagina($page);
			
			
			?>
			</section>

			</div>
