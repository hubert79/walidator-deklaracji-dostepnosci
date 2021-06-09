<?php
$htmlContent = file_get_contents("https://testy.lepszyweb.pl/deklaracja-dostepnosci");

# echo '<textarea cols="100" rows="100">'.$htmlContent.'</textarea>';

# Wstęp 
$num = "";
$num = stripos($htmlContent, "a11y-wstep");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}


# Podmiot 
$num = "";
$num = stripos($htmlContent, "a11y-podmiot");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Url 
$num = "";
$num = stripos($htmlContent, "a11y-url");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Data publikacja 
$num = "";
$num = stripos($htmlContent, "a11y-data-publikacja");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Data aktualizacja 
$num = "";
$num = stripos($htmlContent, "a11y-data-aktualizacja");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Status 

$num = "";
$num = stripos($htmlContent, "a11y-status");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Ocena 
$num = "";
$num = stripos($htmlContent, "a11y-ocena");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Data sporządzenia 
$num = "";
$num = stripos($htmlContent, "a11y-data-sporzadzenie");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Audytor 
$num = "";
$num = stripos($htmlContent, "a11y-audytor");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Kontakt 
$num = "";
$num = stripos($htmlContent, "a11y-kontakt");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Osoba 
$num = "";
$num = stripos($htmlContent, "a11y-osoba");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# e-mail
 
$num = "";
$num = stripos($htmlContent, "a11y-email");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Telefon
 
$num = "";
$num = stripos($htmlContent, "a11y-telefon");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Procedura
$num = "";
$num = stripos($htmlContent, "a11y-procedura");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}

# Architektura 
$num = "";
$num = stripos($htmlContent, "a11y-architektura");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}


# Aplikacje
 
$num = "";
$num = stripos($htmlContent, "a11y-aplikacje");

if($num != ""){
	
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
	
	echo substr($akt, $od, $ile)."<br>";
}


?>
