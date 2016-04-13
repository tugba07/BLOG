
<html>
<head>
<link rel="stylesheet" href="css/generelstyle.css" type="text/css" media="all">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/slider.js"></script>


</head>

<body>

<div id="contein">

<?php include ("generel/header.php"); ?>

<div id="content">
<div id="contentform">
<?php include ("slider/slider.php"); ?>
</div>

<div id="formsmall" style="float:left" >

<iframe width="560" height="315" src="https://www.youtube.com/embed/1CMSVErkH-k" frameborder="0" allowfullscreen></iframe>


</div>
<div id="formsmaller">
<p>The Volkswagen Type 2, known officially (depending on body type) as the Transporter, Kombi or Microbus, or, informally, as the Bus (US) or Camper (UK), is a cabover panel van introduced in 1950 by the German automaker Volkswagen as its second car model. Following – and initially deriving from Volkswagen's first model, the Type 1 (Beetle) – it was given the factory designation Type 2.[10]

As one of the forerunners of the modern cargo and passenger vans, the Type 2 gave rise to forward control competitors in the United States in the 1960s, including the Ford Econoline, the Dodge A100, and the Chevrolet Corvair 95 Corvan, the latter adopting the Type 2's rear-engine configuration. European competition included the 1960s FF layout Renault Estafette and the FR layout Ford Transit..</p>
</div>

<div id="contentform">



									<form  id="form1" action="database\insertGris.php" method="post" >
										<fieldset>
											<div class="row">
											Name:
												<input type="text" name="isim" class="input">
											</div>
											<div class="row">
											Your Name:
												<input type="text" name="soyisim"  class="input">
											</div>
											
											<div class="row">
											E-Mail Address:
												<input type="text" name="adres"  class="input">
											</div>		
											<div class="wrapper">
												<button type="submit" class="btn">Bu Verileri Kaydet</button>
											</div>
										</fieldset>
									</form>
							


</div>


</div>
<?php include ("generel/footer.html"); ?>
</div>
</body>
</html>
