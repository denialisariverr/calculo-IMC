 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo IMC</title>
</head>
<body>
<center>
	<h1>Calcule seu IMC:</h1>
	<br/>

	<form action="" method="post">
		Digite seu peso em kg: 
		<br/>
		<input type="text" id="peso" name="peso" placeholder="Ex: 65.5...">
		<br/>
		<br/>
		Digite sua altura em metros e centímetros:
		<br/>
		<input type="text" id="altura" name="altura" placeholder="Ex: 1.70...">
		<br/>
		<br/>
		<input type="submit" name="btncalcular">
		<br/>
	</form>
		<br/>		
	<?php


	if (isset($_POST['peso']) && isset($_POST['altura'])){
		$peso = $_POST['peso'];
		$altura = $_POST['altura'];
	

		$Res = round($peso/($altura*$altura),2);

		echo"Seu IMC é: $Res";

		if ($Res>40) 
			{
				echo "<br/>Obesidade III (morbida)";
			}

				else if ($Res>35) 
				{
					echo "<br/>Obesidade Grau II (severa)";
				}

					else if ($Res>30)
					{
						echo "<br/>Obesidade Grau I";
					}

						else if ($Res>25)
						{
							echo "<br/>Levemente Acima do Peso";
						}

							else if ($Res>18.6)
							{	
								echo "<br/>Peso Ideal";
							}

								else
								{	
									echo "<br/>Abaixo do Peso";
								}
		}
	?>

</center>
</body>
</html>