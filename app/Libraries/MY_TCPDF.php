<?php

namespace App\Libraries;

use TCPDF;

class MY_TCPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = ROOTPATH.'public/image/logo.png';
        /**
         * width : 50
         */
        $this->Image($image_file, '', '', 40, 7 );
        // Set font
        $this->SetFont('helvetica', 'B', 12);
        $this->SetX(10);
        $this->Cell(0, 2, 'PT. Panasonic Industrial Devices Batam', 0, 1, 'C', 0, '', 0);
        // Title
        $this->SetFont('helvetica', 'B', 9);
        $this->SetX(10);
        $this->Cell(0, 2, 'Puri Industrial Park 2000 Batam Centre', 0, 1, 'C', 0, '', 0);
        $this->SetX(10);
        $this->Cell(0, 2, 'Kelurahan Baloi Permai, Batam 29463 Indonesia', 0, 1, 'C', 0, '', 0);
        $this->SetX(10);
        $this->Cell(0, 2, 'Telp : (0778) - 463688 Fax : (0778) - 465070 ', 0, 1, 'C', 0, '', 0);
        $this->SetX(10);
        $this->Cell(0, 2, 'GATE PASS ', 0, 1, 'C', 0, '', 0);
        
        // QRCODE,H : QR-CODE Best error correction
        $this->write2DBarcode('https://sobatcdoing.com', 'QRCODE,H', 0, 3, 20, 20, ['position' => 'R'], 'N');

       
       

    }

    public function content(){
        $this->Cell(60, 5, 'PIDSG - BT',1,0);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}