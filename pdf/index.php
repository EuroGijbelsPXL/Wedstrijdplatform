<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',35);
    // Move to the right
    //$this->Cell();
    // Title
    $this->Cell(190,20,'Schachtenboek',1,1,'C');
	$this->Image('Schachtenboek.png',25,12,20);
	$this->Image('Schachtenboek.png',165,12,20);
    // Line break
    $this->Ln(10);
	
	$this->SetFont('Arial','B',14);
	$this->Cell(40,10,'Naam',1,0,'C');
	$this->Cell(60,10,'Aanwezigheid',1,0,'C');
	$this->Cell(30,10,'Cantussen',1,0,'C');
	$this->Cell(35,10,'Opdrachten',1,0,'C');
	$this->Cell(25,10,'Straffen',1,1,'C');

	$this->Cell(40,10,'',1,0,'C');
	$this->Cell(30,10,'Prominos',1,0,'C');
	$this->Cell(30,10,'Andere',1,0,'C');
	$this->Cell(30,10,'',1,0,'C');
	$this->Cell(35,10,'',1,0,'C');
	$this->Cell(25,10,'',1,1,'C');
	
	
}

// Page footer
function Footer()
{
	$this->SetFont('Arial','B',14);
	$this->Cell(40,10,'',1,0,'C');
	$this->Cell(30,10,'Prominos',1,0,'C');
	$this->Cell(30,10,'Andere',1,0,'C');
	$this->Cell(30,10,'',1,0,'C');
	$this->Cell(35,10,'',1,0,'C');
	$this->Cell(25,10,'',1,1,'C');
	
	$this->Cell(40,10,'Naam',1,0,'C');
	$this->Cell(60,10,'Aanwezigheid',1,0,'C');
	$this->Cell(30,10,'Cantussen',1,0,'C');
	$this->Cell(35,10,'Opdrachten',1,0,'C');
	$this->Cell(25,10,'Straffen',1,1,'C');
	
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 30);
$pdf->AddPage();


$pdf->SetFont('Arial','',11);
$pdf->SetFillColor(142,178,53); //Green
$pdf->SetFillColor(196,63,63); //Red
$pdf->SetFillColor(255,154,47); //Orange

// Getting Data from database
require_once 'fpdf/medoo.min.php';
$database = new medoo();
										
	$datas = $database->select("Schachten", "*");

		foreach($datas as $data)
		{
			$pdf->Cell(40,10,''.$data['Voornaam'].' '.$data['Naam'].'',1,0,'C');
			if($data['Aanwezigheid_Prominos'] <3){
				$pdf->SetFillColor(196,63,63); //Red
			}else if($data['Aanwezigheid_Prominos'] <6){
				$pdf->SetFillColor(255,154,47); //Orange
			}else{
				$pdf->SetFillColor(142,178,53); //Green
			}
			$pdf->Cell(30,10,''.$data['Aanwezigheid_Prominos'].'',1,0,'C',true);
			
			if($data['Aanwezigheid_Andere'] == 0){
				$pdf->SetFillColor(196,63,63); //Red
			}else if($data['Aanwezigheid_Andere'] <4){
				$pdf->SetFillColor(255,154,47); //Orange
			}else{
				$pdf->SetFillColor(142,178,53); //Green
			}
			$pdf->Cell(30,10,''.$data['Aanwezigheid_Andere'].'',1,0,'C',true);
			
			
			if($data['Cantussen'] < 3){
				$pdf->SetFillColor(196,63,63); //Red
			}else{
				$pdf->SetFillColor(142,178,53); //Green
			}
			$pdf->Cell(30,10,''.$data['Cantussen'].'',1,0,'C',true);
			
			if($data['Opdrachten'] == 0){
				$pdf->SetFillColor(196,63,63); //Red
			}else if($data['Opdrachten'] <4){
				$pdf->SetFillColor(255,154,47); //Orange
			}else{
				$pdf->SetFillColor(142,178,53); //Green
			}
			$pdf->Cell(35,10,''.$data['Opdrachten'].'',1,0,'C',true);
			
			if($data['Straffen'] == 0){
				$pdf->SetFillColor(142,178,53); //Green
			}else if($data['Straffen'] <2){
				$pdf->SetFillColor(255,154,47); //Orange
			}else{
				$pdf->SetFillColor(196,63,63); //Red
			}
			$pdf->Cell(25,10,''.$data['Straffen'].'',1,1,'C',true);
		}

	

$pdf->Output();
?>