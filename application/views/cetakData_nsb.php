<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Pembukaan Rekening Tabungan Online - ' . $data_nsb->nm_lengkap);
$pdf->setHeaderMargin(5);
// remove default header/footer
// $pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 014', PDF_HEADER_STRING);
// set font
$pdf->SetFont('times', 'B', 10);

$pdf->SetTopMargin(15);
// $pdf->setFooterMargin(1);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('BPR Unisritama');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$html =
    '<h3 align="center">FORMULIR PEMBUKAAN REKENING - BANK UNISRITAMA</h3>
<table width="100%"  cellspacing="1" cellpadding="2">
<tr>
    <td>Nama Nasabah</td>
    <td>: ' . $data_nsb->nm_lengkap . '</td>
</tr>
<tr>
    <td>Tujuan Pembukaan</td>
    <td>: ' . $data_nsb->tujuan_buka . '</td>
</tr>                                    
<tr>
<td>Produk Tabungan</td>
<td>: ' . strtoupper($data_nsb->produk) . '</td>
</tr>                                    
<tr>
<td>Jenis Kelamin</td>
<td>: ' . $data_nsb->jenis_kelamin . '</td>
</tr>
<tr>
<td>Agama</td>
<td>: ' . $data_nsb->agama . '</td>
</tr>
<tr>
<td>Warga Negara</td>
<td>: ' . $data_nsb->warga_negara . '</td>
</tr>
<tr>
<td>Jenis Identitas</td>
<td>: ' . $data_nsb->jenis_identitas . '</td>
</tr>
<tr>
<td>Masa Berlaku</td>
<td>: ' . $data_nsb->masa_berlaku . '</td>
</tr>
<tr>
<td>No. Identitas</td>
<td>: ' . $data_nsb->no_identitas . '</td>
</tr>
<tr>
<td>Alamat sesuai Identitas</td>
<td>: ' . $data_nsb->alamat_identitas . '</td>
</tr>
<tr>
<td>Profesi</td>
<td>: ' . $data_nsb->profesi . '</td>
</tr>';
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
// $pdf->Write(5, 'Testing TCPDF - Codeigniter');
$pdf->Output('Pembukaan Rekening Tabungan Online - ' . $data_nsb->nm_lengkap, 'I');
