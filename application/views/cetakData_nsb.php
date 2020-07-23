<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Pembukaan Rekening Tabungan Online - ' . $data_nsb->nm_lengkap);
$pdf->setHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('BPR Unisritama');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$html = '<h3>FORMULIR PEMBUKAAN TABUNGAN - ' . $data_nsb->nm_lengkap . '</h3>
<table cellspacing="2">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tujuan Pembukaan</th>
                                    <th>Produk Tabungan</th>
                                </tr>
                            </thead>
                            <tbody>';
$html .= '<tr>
<td>' . $data_nsb->nm_lengkap . '</td>
<td>' . $data_nsb->tujuan_buka . '</td>
<td>' . strtoupper($data_nsb->produk) . '</td>
</tr>';
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
// $pdf->Write(5, 'Testing TCPDF - Codeigniter');
$pdf->Output('Pembukaan Rekening Tabungan Online - ' . $data_nsb->nm_lengkap, 'I');
