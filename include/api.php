<?php
$date = date('d-m-y-h-m-s');
 if(isset($_POST['btn'])){
 	$hrs = $date;
 	extract($_POST);
 	$lines = explode(PHP_EOL, $lista);	
 	$n = $_POST['n'];
 	$c = count($lines)-1;
 	if($n>$c){
 		echo "Split não permitido";
 	}else{
	 	$cont = $c / $n;
	 	$num = 0;
	 	$linha = 1;
	 	$indice= 0;
	 	$nameArq = 1;
	 	for($i=0;$i<=$n;$i++){
	 		$x=0;
	 		while($x<=$cont){
	 			if($num<$n){
		 			echo "<p class='line'>Arquivo: ".$nameArq." Linha: ".$linha." =>".$lines[$indice]."</p><br>";
		 			$file = "Result/".$nameArq."-".$date."-arquivo.txt";
		 			$texto = $lines[$indice]."\n";
		 			file_put_contents($file, $texto, FILE_APPEND | LOCK_EX);
	 			}
	 			$x++;
	 			$indice++;
	 			$linha++;
	 		}
	 		$num++;
	 		$nameArq++;
	 	}
 	}
 }
