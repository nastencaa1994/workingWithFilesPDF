<?php

require('WorkingWithFilesPDF.php');

use FilesPDF\WorkingWithFilesPDF;

$pdf = new WorkingWithFilesPDF();

$txt = 'Действительно, аш мозг - это массив из 100 миллиардов нервных клеток, называемых нейронами.';


$ar=[
    [
        'Анкета1',
        $txt,
    ],
    [
        'Анкета2',
        $txt,
    ]
];

$ar2=    [
    'АНКЕТА СУБЪЕКТА ПЕРСОНАЛЬНЫХ ДАННЫХ (ФВТОРИЗОВАННОГО ЛИЦА)',
    $txt,
];

//$pdf->fileMainFormationList($ar);
//$pdf->saveFile('test1.pdf');
$pdf->fileMainFormation($ar2);
$pdf->saveFile('test2.pdf');










