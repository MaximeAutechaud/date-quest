<?php

$dateStringPresent = 'Oct-21-2015';
$dateStringDestination = 'Jan-1-2019';

$presentTime = DateTime::createFromFormat('M-d-Y', $dateStringPresent);
$presentTime->setTime(4,6);

$destinationTime = DateTime::createFromFormat('M-d-Y', $dateStringDestination);
$destinationTime->setTime(20,29);

echo 'Le présent est à la date de :' . ' ' . $presentTime->format('M d Y A h:i') . '<br>';
echo 'Le futur est à la date de : ' . ' ' . $destinationTime->format('M d Y A h:i') . '<br>';

$diff = $presentTime->diff($destinationTime);

echo $diff->format('La différence entre les deux date est de %y année(s), %m mois, %d jour(s), %h heure(s) et %i minute(s)') . '<br>';

echo $diff->days . ' jours' . '<br>';
echo $diff->h . ' heures' . '<br>';
echo $diff->i . ' minutes' . '<br>';

$minutes = ($diff->days * 24 * 60) + ($diff->h * 60) + $diff->i;
echo 'La différence entre les deux dates est de ' . $minutes . ' minutes<br>';

$fuel = $minutes / 10000;
echo 'La Delorean a besoin de ' . $fuel . ' litres de carburant pour ce voyage';

//Déso pour le CSS j'ai vraiment pas le courage :)
