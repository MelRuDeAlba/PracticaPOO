<?php 
	$producto;
	class Tablas {

		function ImprimeTablas($inicio,$final){
					
					for($x=$inicio;$x<=($inicio+$final);$x++){
						echo "<br>";
					for($i=1;$i<=10;$i++){
						$this->producto=$x*$i;
						echo $x," * ",$i," = ", $this->producto,"<br>";
					}
				}
					
		}	
	}

	$T = new Tablas;
	$T->ImprimeTablas($_POST['inicio'],$_POST['cuantas']);
		
?> 




