<?php
	include 'header.php';
	include 'config.php';
	$open = OpenCon();
?>

<link rel="stylesheet" href="css/source.css" />
<link rel="stylesheet" href="css/bootstrap.css">

<body>
	<section>
		<div class="middle">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class = "col-md-8">
						<h1 class="maintext">Here you can find the cheapest bikes on the market</h1>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4"></div>
					<div class = "col-md-4">
						<h2 class="produse">PRODUCTS</h2>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</section>
	
	<?php
	$sql = "SELECT * FROM produse JOIN categorieproduse ON produse.CATEGORIE_ID = categorieproduse.ID ";
	$res = $open -> query($sql);
	$i = 1;
	if($res -> num_rows > 0){
		echo "<div class = 'row'>";
		while($row = $res->fetch_assoc()){
			if($i == 4){
				echo " </div><div class = 'row'>"
				."<div class='col-md-4'>"
				."<img src='".$row['POZA']."' class='picture4'>"
				."<h3>".$row['FIRMA']."  </h3>"
				."<h3>".$row['MODEL']."  </h3>"
				."<h3>".$row['PRET']." $ </h3>"
				."</div>";
				$i = 2;
			}else{
			echo "<div class='col-md-4'>"
			."<img src='".$row['POZA']."' class='picture4'>"
			."<h3>".$row['FIRMA']."  </h3>"
			."<h3>".$row['MODEL']."  </h3>"
			."<h3>".$row['PRET']." $ </h3>"
			."</div>";
			$i = $i + 1;
			}
		}
	}
	echo "</div>"
	
	?>
</body>

	<?php
	include 'footer.php'
?>