<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Suma de matrices</title>
</head>
<body>
	<?php if ($_POST) {
	    require_once("../Utilidades/funcionesAuxiliares.php");
	    $a=$_POST['a'];$b=$_POST['b'];
	    $c=sumaMatrices($a, $b);
	    echo "<table>
                <tr>
                     <td>";
	    imprimirMatriz($a);
	    echo "       </td>
                  </tr>
                        <tr>
                       <td>+</td>
                       <td>";
	    imprimirMatriz($b);
	    echo "         </td>
                    </tr>
                     <tr>
                       <td>=</td>
                        <td>";
	    imprimirMatriz($c);
	    echo "         </td>
                     </tr>
                </table>";
	}
	elseif ($_GET){
	    function imprimeTablaMatriz($nombre,$filas,$cols) {
	        echo "     <table>\n";
	        for ($i = 0; $i < $filas; $i++) {
	            echo "\n<tr>";
	            for ($j = 0; $j < $cols; $j++) {
	                $valor=$i*$cols+$j;
	                echo "<td><input type='number' name ='$nombre"."[$i][]' value='$valor 'maxlength='4'/></td>";
	            }
	           echo "</tr>\n";
	        }
	        echo "</table>";
	    }
	    $filas = $_GET['filas']; $cols=$_GET['cols'];
	    echo "<form action='' method='POST' enctype='multipart/form-data'>
                <table>
                    <tr>    
                        <td>";
	                           imprimeTablaMatriz("a",$filas,$cols);
	    echo"           </td>   
                        <td>";
	                           imprimeTablaMatriz("b",$filas,$cols);
	    echo '      </td>
                    </tr>
                    <tr>
				    <td><button type="submit">Enviar</button></td>
			         </tr>
                </table>
                </form>';
	}
	else {
	    ?>
	   <form action="" method="GET" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label for="filas">Filas:</label></td>
				<td><input name="filas" id="filas" type="number" min="1" max="20"
					size="4" /></td>
			</tr>
			<tr>
				<td><label for="cols">Cols:</label></td>
				<td><input name="cols" id="cols" type="number" min="1" max="20"
					size="4" /></td>
			</tr>
			<tr>
				<td><button type="submit">Enviar</button></td>
			</tr>
		</table>
	</form>
	<?php 
	}
	?>
</body>
</html>