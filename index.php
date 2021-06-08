<?php
$htmlContent = file_get_contents("https://testy.lepszyweb.pl/deklaracja-dostepnosci");

# echo '<textarea cols="100" rows="100">'.$htmlContent.'</textarea>';

# funcion znajdź($hc, $ay){
	$num = stripos($htmlContent, "a11y-status");

	$ca = substr($htmlContent,$num, 1);

	$akt = "";
	$flaga = "false";

	while($flaga == "false"){
		$cut = substr($htmlContent,$num, 1);
		$akt .= $cut;
		if($cut == "/" /*chr(60)*/){
			$flaga = "true";
		} else {
			$flaga = "false";
			$num += 1;
		}
	
	}
	$s = strpos($akt, ">");
	$k = strRpos($akt, "<");

	$od = $s + 1;
	$ile = $k - $s - 1;
	
	echo substr($akt, $od, $ile);
# }

#	znajdź($htmlContent,"a11y-Status");


?>
