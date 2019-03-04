<?php

/* Traduit une date au format US vers le format FR */
	function dateUS_toFR($dateUS)
	{	
		list($annee, $mois, $jour) = split('[-.]', $dateUS);
		$dateFR=$jour."/".$mois."/".$annee;
		return $dateFR;
	}