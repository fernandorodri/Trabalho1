<?php

	print "Digite o gênero do consumidor (M/F ou m/f): ";
	$sexo = trim (fgets(STDIN));
	
	print "Digite a quantidade de cervejas consumidas: ";
	$Qcervejas = trim (fgets(STDIN));
	
	print "Digite a quantidade de refrigerantes consumidos: ";
	$Qrefrigerante = trim (fgets(STDIN));
	
	print "Digite a quantidade de espetinhos consumidos: ";
	$Qespetinhos = trim (fgets(STDIN));

		if ( $sexo == "M" || $sexo == "m" ) {
			$entrada = "10.00";
		}
		else {
			$entrada = "8.00";
		}

	$cerveja = "2.50";
	$refrigerante = "2.00";
	$espetinho = "4.00";
	
	$consumo = ($Qcervejas * $cerveja) + ($Qrefrigerante * $refrigerante) + ($Qespetinhos * $espetinho);

	if ($consumo < 15) {
		$cover = "3.00";
	}
	else {
		$cover = "0.00";
	}

	$subtotal = $entrada + $consumo + $cover;
	
	$total = $subtotal + ($subtotal * 10 / 100);
	
	print "\n Valor da conta:";
	print "\nR$" . $entrada . " (valor da entrada)";
	print "\nR$" . $consumo . " (bebida e comida)";
	print "\nR$" . $cover . " (cantores)";
	print "\nR$" . $subtotal . " (subtotal sem 10%)";
	print "\n--------------------------------------------";
	print "\nR$" . $total . " (total da conta)";		
	















?>