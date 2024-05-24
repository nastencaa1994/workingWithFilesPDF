<?php

require('WorkingWithFilesPDF.php');

use FilesPDF\WorkingWithFilesPDF;


$pdf = new WorkingWithFilesPDF();






// Load a UTF-8 string from a file and print it
$txt = 'Действительно, аш мозг - это массив из 100 миллиардов нервных клеток, называемых нейронами.';


$ar=[
    [
        'Анкета1',
        $txt,
        $txt,
        $txt,
        $txt,
    ],
    [
        'Анкета2',
        $txt,
        $txt,
        $txt,
        $txt,
        $txt,
    ]
];

$ar2=    [
    'Анкета0',
    $txt,
    $txt,
    $txt,
    $txt,
    $txt,
];

//$pdf->fileMainFormationList($ar);
//$pdf->saveFile('test1.pdf');
$pdf->fileMainFormation($ar2);
$pdf->saveFile('test2.pdf');










