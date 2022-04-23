<?php
define('FPDF_FONTPATH', 'font/');
require 'FPDF/fpdf.php';


$pdf = new FPDF('P');// aqui determinamos se a folha vai ser impressa na vertical usando L e P para horizontal
$pdf->AddPage();

$pdf->SetTextColor(0,0, 128);//cor do texto no caso aqui está azul

//imagem

$pdf->Image('../assets/img/favicon/apple-icon-57x57.png');

//cabeçalho
$pdf->SetFont('Arial','B',12);
$pdf->Cell(140,10,('informacoes do relatorio = autor:Gean.Dev = data:23/04/2022'),0,0,"C");//titulo

$pdf->ln(15); // espaçamento entra linhas de 15 mm

//titulo da tabela
$pdf->SetFont('Arial','B',16);//tamanho do titulo
$pdf->Cell(140,10,('Relatorio de propietarios'),0,0,"C");//titulo

$pdf->ln(15); // espaçamento entra linhas de 15 mm

//parametros da tabela 

$pdf->SetFont('Arial','B',12);//tamanho do resto da tabela
$pdf->Cell(10, 7, 'ID' ,1,0,'c');
$pdf->Cell(55, 7, 'Sistema' ,1,0,'c');
$pdf->Cell(30, 7, 'plataforma' ,1,0,'c');
$pdf->Cell(30, 7, 'Manutencao' ,1,0,'c');
$pdf->Cell(55, 7, 'Propietario' ,1,0,'c');
$pdf->ln(); //nenhum espaçamentos entre linhas

//cpnteudo da tabela

$pdf->Cell(10, 7, '1' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean.dev Portfolio' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'SIM' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '2' ,1,0,'c');
$pdf->Cell(55, 7, 'Cinema extremo lite' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '3' ,1,0,'c');
$pdf->Cell(55, 7, 'Default info' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '4' ,1,0,'c');
$pdf->Cell(55, 7, 'Curriculo de Geanderson' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'SIM' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '5' ,1,0,'c');
$pdf->Cell(55, 7, 'Curriculo de Genilson' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Jose Genilson' ,1,0,'c');
$pdf->ln();
$pdf->Cell(10, 7, '6' ,1,0,'c');
$pdf->Cell(55, 7, 'GF Livros' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'SIM' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '7' ,1,0,'c');
$pdf->Cell(55, 7, 'GF player' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '8' ,1,0,'c');
$pdf->Cell(55, 7, 'Adotpet' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Ads Uninassau' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '9' ,1,0,'c');
$pdf->Cell(55, 7, 'JS servicos' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Jose Carlos' ,1,0,'c');
$pdf->ln();
$pdf->Cell(10, 7, '10' ,1,0,'c');
$pdf->Cell(55, 7, 'Tempo agora' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '11' ,1,0,'c');
$pdf->Cell(55, 7, 'G code editor' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '12' ,1,0,'c');
$pdf->Cell(55, 7, 'Painel de Controle' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'SIM' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '13' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev-site' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'SIM' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '14' ,1,0,'c');
$pdf->Cell(55, 7, 'Onebithealt' ,1,0,'c');
$pdf->Cell(30, 7, 'Mobile' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Cell(10, 7, '15' ,1,0,'c');
$pdf->Cell(55, 7, '	xbox-series-leading-page' ,1,0,'c');
$pdf->Cell(30, 7, 'Multi-web' ,1,0,'c');
$pdf->Cell(30, 7, 'NAO' ,1,0,'c');
$pdf->Cell(55, 7, 'Gean-Dev' ,1,0,'c');
$pdf->ln();

$pdf->Output();

?>