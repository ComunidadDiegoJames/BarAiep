<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2012-07-25
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               Manor Coach House, Church Hill
//               Aldershot, Hants, GU12 4RQ
//               UK
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

require_once('../PDF/tcpdf/config/lang/spa.php');
require_once('../PDF/tcpdf/tcpdf.php');

/*mysql_connect("localhost","root","");
mysql_select_db("softtime2");
*/


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('');
$pdf->SetTitle('');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData($tc=array(0,64,0), $lc=array(0,64,128));

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
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));




/*$sql = "SELECT Nombre FROM Personas  ";
$rs = mysql_query($sql);

while($row = mysql_fetch_array($rs)){
	$nombre = $row['Nombre'];*/
	
// TENGO QUE GENERAR UN WHILE PARA TRAER LOS DATOS QLS!
$html = <<<EOD
<br>
<br>
<br>
<br>
<h1 align="center">Informe de PDFs</h1>

 <table border="1">
            <thead>
                <tr>
                    <th align="center">CODIGO</th>
                    <th align="center">NOMBRE</th>
                    <th align="center">BODEGA</th>
                    <th align="center">VENTA</th>
                    <th align="center">FISICO</th>
                    <th align="center">DIFERENCIA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">1</td>
                    <td>&nbsp; Pisco alto 35º</td>
                    <td align="right">10.5 &nbsp;</td>
                    <td align="right">0.1 &nbsp;</td>
                    <td align="right">10.7 &nbsp;</td>
                    <td align="right">0.9 &nbsp;</td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td>&nbsp; Pisco Mistral 35º</td>
                    <td align="right">9.3 &nbsp;</td>
                    <td align="right">0.7 &nbsp;</td>
                    <td align="right">8.4 &nbsp;</td>
                    <td align="right">0.9 &nbsp; </td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td>&nbsp; Pisco alto 35º</td>
                    <td align="right">10.5 &nbsp;</td>
                    <td align="right">0.1 &nbsp;</td>
                    <td align="right">10.7 &nbsp;</td>
                    <td align="right">0.9 &nbsp;</td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td>&nbsp; Pisco Mistral 35º</td>
                    <td align="right">9.3 &nbsp;</td>
                    <td align="right">0.7 &nbsp;</td>
                    <td align="right">8.4 &nbsp;</td>
                    <td align="right">0.9 &nbsp;</td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td>&nbsp; Pisco alto 35º</td>
                    <td align="right">10.5 &nbsp;</td>
                    <td align="right">0.1 &nbsp;</td>
                    <td align="right">10.7 &nbsp;</td>
                    <td align="right">0.9 &nbsp;</td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td>&nbsp; Pisco Mistral 35º</td>
                    <td align="right">9.3 &nbsp;</td>
                    <td align="right">0.7 &nbsp;</td>
                    <td align="right">8.4 &nbsp;</td>
                    <td align="right">0.9 &nbsp;</td>
                </tr>
                
            </tbody>
        </table>
EOD;
    /*}*/

// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Sistema_Bar.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>