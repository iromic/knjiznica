<html>
<head></head>

<body>

<table>
	<tr><td><pre>Naziv Tvrtke </pre> </td><td><pre>Adresa </pre> </td></tr> 
	<?php 

		foreach ($autor as $naziv => $autor)
		{
			echo '<tr><td><a href="mvc.php?id='.$autor->id.'">'.$autor->naziv_autora.'</a></td></tr>';
		}

	?>
</table>

</body>
</html>