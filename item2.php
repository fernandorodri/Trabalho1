<?php

	print "Total de rendimentos banc�rios: ";
	$TotalRendimentosBancarios = trim (fgets(STDIN));
	
	print "Total de rendimentos de sal�rios ou servi�os: ";
	$TotalRendimentosSS = trim (fgets(STDIN));
	
	print "Total de outros rendimentos: ";
	$TotalOutrosRendimentos = trim (fgets(STDIN));
	
	print "Servi�os m�dicos pagos: ";
	$Servi�osMedicosPagos = trim (fgets(STDIN));
	
	print "Servi�os educacioais pagos: ";
	$Servi�osEducacionasPagos = trim (fgets(STDIN));
	
		
	$Rendimentos = $TotalRendimentosBancarios * 20 / 100; 
		
		if ($TotalRendimentosSS <= 8.000) {
			$ImpostoSalarioServi�os = 0.00;
		}	
		else if ($TotalRendimentosSS > 8.000 && $TotalRendimentosSS <= 24000) {

			$ImpostoSalarioServi�os = $TotalRendimentosSS * 15 / 100;
		}
		else {
			$ImpostoSalarioServi�os = $TotalRendimentosSS * 20 / 100;
		} 
		
	$OutrosRendimento = $TotalOutrosRendimentos * 10 / 100;
	
	$TotalImpostos = $Rendimentos + $ImpostoSalarioServi�os + $OutrosRendimento;
	
	$MaximoASerAbatido = $TotalImpostos * 30 / 100;
	
	$Servi�osPagos = $Servi�osMedicosPagos + $Servi�osEducacionasPagos;
	
		if ( $MaximoASerAbatido > $Servi�osPagos) {
			$PossivelDeAbater = $Servi�osPagos;
		}
		else {
			$PossivelDeAbater = $MaximoASerAbatido;
		}

	
	print "\nTotal de Impostos:";
	
	print "\nR$" . $Rendimentos . " (sobre os rendimentos banc�rios)";
	
	print "\nR$" . $ImpostoSalarioServi�os . " (sobre sal�rios e servi�os)";
	
	print "\nR$" . $OutrosRendimento . " (sobre outros rendimentos)";
	
	print "\nR$" . $TotalImpostos . " (total)";
	
	print "\n-------------------------------------------------";
	
	print "\nM�ximo a ser abatido:";
	
	print "\nR$" . $PossivelDeAbater;
	
	print "\n-------------------------------------------------";
	
	print "\nTotal de valores poss�veis de abater:";
	
	print "\nR$" . $Servi�osMedicosPagos . " (servi�os m�dicos)";
	
	print "\nR$" . $Servi�osEducacionasPagos . " (servi�os educacionais)";
	
	print "\nR$" . $Servi�osPagos . " (total)";
	
	print "\n-------------------------------------------------";
	
	print "\nImposto Total:";
	
	print "\nR$" . $TotalImpostos . " (imposto bruto)";
	
	print "\nR$" . $PossivelDeAbater . " (abatimentos)";
	
	$Total = $TotalImpostos - $PossivelDeAbater;
	
	print "\nR$" . $Total . " (total)";
	
?>