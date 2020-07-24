<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Pembukaan Rekening Tabungan Online - ' . $data_nsb->nm_lengkap);
$pdf->setHeaderMargin(5);
// set font
$pdf->SetFont('times', '', 12);

$pdf->SetTopMargin(23);
// $pdf->setFooterMargin(1);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('BPR Unisritama');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$html =
    '<h2 align="center">e-Form ' . ucwords($data_nsb->produk) . '</h2>
    <hr>
<table cellspacing="1" cellpadding="2">
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
<td>Tempat Lahir</td>
<td>: ' . $data_nsb->tempat_lahir . '</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>: ' . $data_nsb->tgl_lahir . '</td>
</tr>
<tr>
<td>No. Handphone</td>
<td>: ' . $data_nsb->no_hp . '</td>
</tr>
<tr>
<td>Email</td>
<td>: ' . $data_nsb->email . '</td>
</tr>
<tr>
<td>NPWP</td>
<td>: ' . $data_nsb->npwp . '</td>
</tr>
<tr>
<td>Nama Ayah</td>
<td>: ' . $data_nsb->nm_ayah . '</td>
</tr>
<tr>
<td>Nama Ibu Kandung</td>
<td>: ' . $data_nsb->nm_ibu . '</td>
</tr>
<tr>
<td>Nama Ahli Waris</td>
<td>: ' . $data_nsb->nm_ahli_waris . '</td>
</tr>
<tr>
<td>Hubungan dg Ahli Waris</td>
<td>: ' . $data_nsb->hb_ahli_waris . '</td>
</tr>
<tr>
<td>Alamat Ahli Waris</td>
<td>: ' . $data_nsb->alamat_ahli_waris . '</td>
</tr>
<tr>
<td>No. Ahli Waris</td>
<td>: ' . $data_nsb->no_ahli_waris . '</td>
</tr>
<tr>
<td>Profesi</td>
<td>: ' . $data_nsb->profesi . '</td>
</tr>
<tr>
<td>Jenis Pekerjaan</td>
<td>: ' . $data_nsb->jenis_pekerjaan . '</td>
</tr>
<tr>
<td>Status Pekerjaan</td>
<td>: ' . $data_nsb->status_pekerjaan . '</td>
</tr>
<tr>
<td>Sumber Penghasilan</td>
<td>: ' . $data_nsb->sumber_dana . '</td>
</tr>
<tr>
<td>Perusahaan</td>
<td>: ' . $data_nsb->perusahaan . '</td>
</tr>
<tr>
<td>Alamat Perusahaan/Usaha</td>
<td>: ' . $data_nsb->alamat_kantor . '</td>
</tr>
<tr>
<td>Telp. Kantor</td>
<td>: ' . $data_nsb->telp_kantor . '</td>
</tr>';
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('e-Form ' . $data_nsb->nm_lengkap . '.pdf', 'I');
