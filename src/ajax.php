<?php


namespace App;

require_once '../vendor/autoload.php';

use App\controller\Controller;

$controller = new Controller();

$valeurs = [
    '67000' => ['Strasbourg'],
    '67100' => ['Strasbourg'],
    '67200' => ['Strasbourg'],
    '67110' => ['Dambach', 'Gumbrechtshoffen'],
    '67120' => ['Altorf', 'Avolsheim', 'Dachstein', 'Dorlisheim']];

echo json_encode($valeurs, true) ;
