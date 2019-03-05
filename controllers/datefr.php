<?php

function splitDate(date) {
//Mois
let month = new Array();
month[0] = "Janvier";
month[1] = "Février";
month[2] = "Mars";
month[3] = "Avril";
month[4] = "Mai";
month[5] = "Juin";
month[6] = "Juillet";
month[7] = "Août";
month[8] = "Septembre";
month[9] = "Octobre";
month[10] = "Novembre";
month[11] = "Décembre";

//Récupération des différents élements de la date
let splitDate = date.split(' ');
let splitYear = splitDate[0].split('-')[0]; //Année
let splitMonthNum = parseInt(splitDate[0].split('-')[1]); //Mois Nombre
let splitMonth = month[splitMonthNum - 1]; // Mois 
let splitDay = splitDate[0].split('-')[2]; //Jour
let splitHour = splitDate[1].split(':')[0]; //Heure
let splitMin = splitDate[1].split(':')[1]; //Minutes
let titleDateStr = "Le " + splitDay + " " + splitMonth + " " + splitYear + " à " + splitHour + ":" + splitMin;
return titleDateStr;
}