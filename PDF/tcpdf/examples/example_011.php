<?php
mysql_connect("localhost","root","");
mysql_select_db("softtime2");
 
require_once('../config/lang/eng.php');
require_once('../tcpdf.php');
 
// extend TCPF with custom functions
class MYPDF extends TCPDF {
 
    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(50, 80, 50);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {             $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, $row[2], 'LR', 0, 'L', $fill);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}
 
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
 

 
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', PDF_HEADER_STRING);
 
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
//set auto page breaks

 
//set image scale factor

 
//set some language-dependent strings
$pdf->setLanguageArray($l);
 
// ---------------------------------------------------------
 
// set font
$pdf->SetFont('helvetica', '', 12);
 
// add a page
$pdf->AddPage();
 
//IMAGEN--------------------------------------------------------------------------------------
// Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)
//$pdf->Image('../images/image_demo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);
//---------------------------------------------------------------------------------------------

 
//Column titles
$header = array('ola', 'Name', 'Engine');
 
//Data loading
$sql = "SELECT nombre, rut, apellido FROM personas";
$rs = mysql_query($sql);
if (mysql_num_rows($rs)>0){
    while($rw = mysql_fetch_array($rs)){
        $data[] = $rw;
    }
}
 
// print colored table
$pdf->ColoredTable($header, $data);
 
// ---------------------------------------------------------
 
//Close and output PDF document
$pdf->Output('example_011.pdf', 'I');
 
//============================================================+
// END OF FILE
//============================================================+