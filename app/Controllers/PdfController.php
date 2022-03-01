<?php

namespace App\Controllers;

use App\Libraries\MY_TCPDF as TCPDF;

class PdfController extends BaseController
{

    public function cetak()
    {

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('');
        $pdf->SetTitle('');
        $pdf->SetSubject('');
        $pdf->SetKeywords('TCPDF, PDF, example, ');

        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

        // set header and footer fonts
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', '', 12, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        $html = view('invoice');
        $no = 'General/BMO/0011';
        $date = date("d-m-Y");
        $nameCompany = 'PT. Tropolis';
        $nameDriver = 'Ron';
        $vehicle = 'Bp 2946 XZ';
        $nameAuthorizing = 'Laksemana Lufti';
        $nameIssued = 'Gunawan';
        $expected = date('d-m-Y', strtotime(date('d-m-Y') . "+3days"));
        $designation = 'HOD';
        $contact_no = '465032';
        $actual = 'N/A';
        $nameSecurity = 'Ririn';
        $depart = 'BMO';
        $section = 'SFPO';
        $issued = 'Abdul Shamad Rennu';
        $bearer = 'Budi';
        $nirc = 'PT. Darma Pasific';
        $authorizer = 'Fajar Wisnu Broto';
        $expected = date('d-m-Y', strtotime(date('d-m-Y') . "+5days"));
        $actual = 'N/A';
        $clock = date('d-m-Y H:i');
        //type 2
        $pdf->SetFont('times', 'B', 12);
        $pdf->Cell(60, 10, 'PIDSG - BT', 1, 0, 'C');
        $pdf->Cell(60, 10, 'GATE PASS', 1, 0, 'C');
        $pdf->Cell(60, 10, 'BMO', 1, 1, 'C');
        $pdf->Ln(5);
        $pdf->Cell(50, 5, "From", 0, 0);
        $pdf->writeHTMLCell(35, 5, 30, '', ':', 0, 0);
        $pdf->writeHTMLCell(35, 5, 32, '', $depart, 0, 0);
        $pdf->Cell(70, 5, '(                        Section)', 0, 0);
        $pdf->writeHTMLCell(50, 5, 70, '', $section, 0, 0);
        $pdf->Cell(80, 5, 'No.  :', 0, 0);
        $pdf->writeHTMLCell(40, 5, 135, '', $no, 0, 1);
        $pdf->SetX(120);
        $pdf->Cell(189, 5, 'Date:', 0, 0);
        $pdf->writeHTMLCell(40, 5, 135, '', $date, 0, 1);
        $pdf->Cell(189, 5, 'To: Security Guard', 0, 1);
        $pdf->Ln(5);
        $pdf->SetX(23);
        $pdf->Cell(90, 5, 'Bearer (Name):', 0, 0);
        $pdf->writeHTMLCell(50, 5, 55, '', $bearer, 0, 0);
        $pdf->Cell(90, 5, 'NIRC No  :', 0, 0);
        $pdf->writeHTMLCell(50, 5, 135, '', $nirc, 0, 1);
        $pdf->Ln(5);
        $pdf->SetX(113);
        $pdf->Cell(90, 5, 'Vehicle No:', 0, 0);
        $pdf->writeHTMLCell(50, 5, 135, '', $vehicle, 0, 1);
        $pdf->Ln(5);
        $pdf->SetFillColor(224, 235, 255);
        $pdf->Cell(20, 5, 'S/No', 1, 0, 'C', 1);
        $pdf->Cell(80, 5, 'PARTICULARS', 1, 0, 'C', 1);
        $pdf->Cell(40, 5, 'Quantity', 1, 0, 'C', 1);
        $pdf->Cell(40, 5, 'Remarks', 1, 0, 'C', 1);
        $html = view('invoice');
        // $pdf->writeHTML($html, true, 0, true, 0);
        $pdf->Ln(90);
        $pdf->Cell(80, 5, 'Issued By        :', 0, 0);
        $pdf->writeHTMLCell(50, 5, 45, '', $issued, 0, 0);
        $pdf->Cell(60, 5, 'Section:', 0, 0);
        $pdf->writeHTMLCell(43, 5, 112, '', $section, 0, 0);
        $pdf->Cell(60, 5, 'Signature:', 0, 0);
        $image_file = ROOTPATH . 'public/image/ttd_issue.png';
        $pdf->Image($image_file, '175', '', 25, 7);
        $pdf->Ln(15);
        $pdf->Cell(80, 5, 'Authorized By:', 0, 0);
        $pdf->writeHTMLCell(50, 5, 45, '', $authorizer, 0, 0);
        $pdf->Cell(60, 5, 'Section:', 0, 0);
        $pdf->writeHTMLCell(43, 5, 112, '', $section, 0, 0);
        $pdf->Cell(60, 5, 'Signature:', 0, 0);
        $image_file = ROOTPATH . 'public/image/ttd.png';
        $pdf->Image($image_file, '175', '', 25, 7);

        $pdf->Ln(15);
        // $pdf->Cell(90, 5, 'Return Type                    :',0,0);
        // $pdf->Cell(90, 5, 'Remark                        :',0,1);
        $pdf->Cell(90, 5, 'Expected Date of Return:', 0, 0);
        $pdf->writeHTMLCell(30, 5, 65, '', $expected, 0, 0);
        $pdf->Cell(90, 5, 'Actual Date of Return:', 0, 0);
        $pdf->writeHTMLCell(30, 5, 140, '', $actual, 0, 0);
        $pdf->Ln(10);
        $pdf->Cell(189, 5, 'use at Security Gate', 0, 1);
        $pdf->Ln(5);
        $pdf->Cell(90, 5, 'Checked & Verified By:  ', 0, 0);
        $pdf->writeHTMLCell(35, 5, 60, '', $nameSecurity, 0, 0);
        $pdf->Cell(90, 5, 'Signature:', 0, 0);
        $image_file = ROOTPATH . 'public/image/ttd_security.png';
        $pdf->Image($image_file, '115', '', 40, 7);
        $pdf->Ln(10);
        $pdf->SetX(34);
        $pdf->Cell(189, 5, 'Date & Time:', 0, 0);
        $pdf->writeHTMLCell(35, 5, 60, '', $clock, 0, 0);

        //Type 1
        // $pdf->Cell(130, 5,'No:',0,0,'R');
        // $pdf->writeHTMLCell('', 5, 150,'', $no,0,1);
        // $pdf->Cell(189, 5, 'LETTER OF AUTHORIZATION FOR OUTGOING GOODS VEHICLES',0,1);
        // $pdf->Ln(2);
        // $pdf->Cell(189, 5, '(A)  PARTICULAR',0,1);
        // $pdf->SetX(23);
        // $pdf->writeHTMLCell(123, 5, '','', 'Name of Company',0,0);
        // $pdf->writeHTMLCell(70, 5, 65,'', ':',0,0);
        // $pdf->writeHTMLCell(66, 5, 70,'', $nameCompany,0,0);
        // $pdf->writeHTMLCell(30, 5, '','', 'Date:',0,0);
        // $pdf->writeHTMLCell(66, 5, 150,'', $date,0,1);
        // $pdf->Ln(2);
        // $pdf->SetX(23);
        // $pdf->writeHTMLCell(189, 5, '','', 'Name of Driver',0,0);
        // $pdf->writeHTMLCell(70, 5, 65,'', ':',0,0);
        // $pdf->writeHTMLCell(66, 5, 70,'', $nameDriver,0,1);
        // $pdf->Ln(2);
        // $pdf->SetX(23);
        // $pdf->writeHTMLCell(189, 5, '','', 'Vehicle Regn No.',0,0);
        // $pdf->writeHTMLCell(70, 5, 65,'', ':',0,0);
        // $pdf->writeHTMLCell(66, 5, 70,'', $vehicle,0,1);
        // $pdf->Ln(2);
        // $pdf->Cell(63, 5, 'Type of Goods', 0, 0, 'R');
        // $pdf->Cell(78, 5, 'Quantity', 0, 1, 'R');
        // $pdf->writeHTMLCell(189, 5, 20,'',$html,0,0);
        // $pdf->Ln(100);
        // $pdf->SetX(23);
        // $pdf->Cell(109, 5, "Name of Authorizing Officer", 0,0);
        // $pdf->writeHTMLCell(47, 5, 85,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 90,'', $nameAuthorizing,0,0);
        // $pdf->Cell(80, 5, "Designation", 0, 0);
        // $pdf->writeHTMLCell(189, 5, 180,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 182,'', $designation,0,1);
        // $pdf->Ln(2);
        // $pdf->SetX(23);
        // $pdf->Cell(109, 5, "Name of Issued", 0, 0);
        // $pdf->writeHTMLCell(47, 5, 85,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 90,'', $nameIssued,0,0);
        // $pdf->Cell(80, 5, "Contact No", 0, 0);
        // $pdf->writeHTMLCell(189, 5, 180,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 182,'', $contact_no,0,1);
        // $pdf->Ln(2);
        // $pdf->SetX(23);
        // $pdf->Cell(109, 5, "Expected Date of Return", 0, 0);
        // $pdf->writeHTMLCell(47, 5, 85,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 90,'', $expected,0,0);
        // $pdf->Cell(80, 5, "Actual Date of Return", 0, 0);
        // $pdf->writeHTMLCell(189, 5, 180,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 182,'', $actual,0,1);
        // $pdf->Ln(10);
        // $pdf->SetX(23);
        // $pdf->Cell(109, 5, "Signature Authorizing", 0,0);
        // $pdf->writeHTMLCell(47, 5, 85,'', ':',0,0);
        // $image_file = ROOTPATH.'public/image/ttd.png';
        // $pdf->Image($image_file, '88', '', 40, 7 );
        // $pdf->Cell(80, 5, "Signature Issued", 0,0);
        // $pdf->writeHTMLCell(189, 5, 180,'', ':',0,0);
        // $image_file = ROOTPATH.'public/image/ttd_issue.png';
        // $pdf->Image($image_file, '182', '', 25, 7 );
        // $pdf->Ln(20);
        // $pdf->Cell(189, 5, "(B)  SECURITY CHECK AT FACTORY GATE", 0, 1);
        // $pdf->Ln(10);
        // $pdf->SetX(23);
        // $pdf->Cell(109, 5, "Date & Time Vehicle left Factory",0, 0);
        // $pdf->writeHTMLCell(189, 5, 93,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 97,'', $date,0,1);
        // $pdf->Ln(5);
        // $pdf->SetX(23);
        // $pdf->Cell(109, 5, "Name of Security guard", 0, 0);
        // $pdf->writeHTMLCell(189, 5, 93,'', ':',0,0);
        // $pdf->writeHTMLCell(42, 5, 97,'', $nameSecurity,0,1);
        // $pdf->ln(5);
        // $pdf->SetX(23);
        // $pdf->Cell(189, 5, "Signature", 0, 0);
        // $pdf->writeHTMLCell(189, 5, 93,'', ':',0,0);
        // $image_file = ROOTPATH.'public/image/ttd_security.png';
        // $pdf->Image($image_file, '95', '', 40, 7 );
        //    view mengarah ke invoice.php


        // Print text using writeHTMLCell()
        // $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        // ---------------------------------------------------------
        $this->response->setContentType('application/pdf');
        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $pdf->Output('Gatepass.pdf', 'I');
    }
}
