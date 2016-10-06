<?php

$mes=date("n");

$año=date("Y");

$diaActual=date("j");

 

$diaSemana=date("w",mktime(0,0,0,$mes,1,$año))+7;

$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$año)-1));

 

$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",

"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>

 

<!DOCTYPE html>

<html lang="es">

<head>


	<title>Calendario</title>

	<meta charset="utf-8">

	<style>

		#calendario {

			font-family:Arial;

			font-size:18px;

		}

		#calendario caption {

			text-align:center;

			padding:10px 10px;

			background-color:#D7DF01;

			color:#3B0B0B;

			font-weight:bold;

		}

		#calendario th {

			background-color:#585858;

			color:#fff;

			width:40px;

		}

		#calendario td {

			text-align:right;

			padding:2px 5px;

			background-color:#D7DF01;

		}

		#calendario .hoy {

			background-color:#FFFFFF;

		}

	</style>

</head>

 

<body>

<h1>Calendario</h1>

<table id="calendario">

	<caption><?php echo $meses[$mes]." ".$año?></caption>

	<tr>

		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>

		<th>Vie</th><th>Sab</th><th>Dom</th>

	</tr>

	<tr bgcolor="silver">

		<?php

		$last_cell=$diaSemana+$ultimoDiaMes;

		for($i=1;$i<=42;$i++)

		{

			if($i==$diaSemana)

			{

				$day=1;

			}

			if($i<$diaSemana || $i>=$last_cell)

			{


				echo "<td>&nbsp;</td>";

			}else{

				if($day==$diaActual)

					echo "<td class='hoy'>$day</td>";

				else

					echo "<td>$day</td>";

				$day++;

			}


			if($i%7==0)

			{

				echo "</tr><tr>\n";

			}

		}

	?>

	</tr>

</table>

</body>

</html>