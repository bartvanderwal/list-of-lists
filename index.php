<?php

    $spelers = array('Robben','Huntelaar','Sneijders');

$spelers = sort($spelers); 			//waardes sorteren

$zangers = ['Jan'=>'Smit',
            'Nick'=>'Schilder',
            'Simon'=>'Keizer'
];
$zangers = asort($zangers);
// $zangers = ksort($zangers);

var_dump($zangers);