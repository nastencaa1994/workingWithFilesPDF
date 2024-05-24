<?php
namespace FilesPDF;

require('tFPDF.php');

use PDF\tFPDF;

class WorkingWithFilesPDF {

    public $file;

    public function __construct(){
        $this->file = new tFPDF();
    }

    public function fileMainFormation($arrayOfStrings){
        $this->file->AddPage();
        $this->file->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);

        foreach ($arrayOfStrings as $index=>$string){
            if($index==0){
                $this->headersFile($string);
            }else{
                $this->file->MultiCell(0, 9, $string, 0, 1);
            }

        }
    }

    public function fileMainFormationList($arraysOfFilesStrings){
        foreach ($arraysOfFilesStrings as $item){
            $this->fileMainFormation($item);
        }
    }

    private function headersFile($title){
        $this->file->SetFont('DejaVu','',25);
        $this->file->Cell(80);
        $this->file->MultiCell(100,10,$title,0,0);
        $this->file->Ln(20);
        $this->file->SetFont('DejaVu','',14);
    }

    public function saveFile($fileName){
        //$this->file->Output();
        $this->file->Output('F', $fileName);
        $link=$fileName;
        return $link;
    }

}