<?php

	print "Total de rendimentos bancários: ";
	$TotalRendimentosBancarios = trim (fgets(STDIN));
	
	print "Total de rendimentos de salários ou serviços: ";
	$TotalRendimentosSS = trim (fgets(STDIN));
	
	print "Total de outros rendimentos: ";
	$TotalOutrosRendimentos = trim (fgets(STDIN));
	
	print "Serviços médicos pagos: ";
	$ServiçosMedicosPagos = trim (fgets(STDIN));
	
	print "Serviços educacioais pagos: ";
	$ServiçosEducacionasPagos = trim (fgets(STDIN));
	
		
	$Rendimentos = $TotalRendimentosBancarios * 20 / 100; 
		
		if ($TotalRendimentosSS <= 8.000) {
			$ImpostoSalarioServiços = 0.00;
		}	
		else if ($TotalRendimentosSS > 8.000 && $TotalRendimentosSS <= 24000) {

			$ImpostoSalarioServiços = $TotalRendimentosSS * 15 / 100;
		}
		else {
			$ImpostoSalarioServiços = $TotalRendimentosSS * 20 / 100;
		} 
		
	$OutrosRendimento = $TotalOutrosRendimentos * 10 / 100;
	
	$TotalImpostos = $Rendimentos + $ImpostoSalarioServiços + $OutrosRendimento;
	
	$MaximoASerAbatido = $TotalImpostos * 30 / 100;
	
	$ServiçosPagos = $ServiçosMedicosPagos + $ServiçosEducacionasPagos;
	
		if ( $MaximoASerAbatido > $ServiçosPagos) {
			$PossivelDeAbater = $ServiçosPagos;
		}
		else {
			$PossivelDeAbater = $MaximoASerAbatido;
		}

	
	print "\nTotal de Impostos:";
	
	print "\nR$" . $Rendimentos . " (sobre os rendimentos bancários)";
	
	print "\nR$" . $ImpostoSalarioServiços . " (sobre salários e serviços)";
	
	print "\nR$" . $OutrosRendimento . " (sobre outros rendimentos)";
	
	print "\nR$" . $TotalImpostos . " (total)";
	
	print "\n-------------------------------------------------";
	
	print "\nMáximo a ser abatido:";
	
	print "\nR$" . $PossivelDeAbater;
	
	print "\n-------------------------------------------------";
	
	print "\nTotal de valores possíveis de abater:";
	
	print "\nR$" . $ServiçosMedicosPagos . " (serviços médicos)";
	
	print "\nR$" . $ServiçosEducacionasPagos . " (serviços educacionais)";
	
	print "\nR$" . $ServiçosPagos . " (total)";
	
	print "\n-------------------------------------------------";
	
	print "\nImposto Total:";
	
	print "\nR$" . $TotalImpostos . " (imposto bruto)";
	
	print "\nR$" . $PossivelDeAbater . " (abatimentos)";
	
	$Total = $TotalImpostos - $PossivelDeAbater;
	
	print "\nR$" . $Total . " (total)";
	
?>