<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah_model extends CI_Model
{

    private $_table = "nasabah_tab";
    public $id_nsb;
    public $nm_lengkap;
    public $nm_identitas;
    public $jenis_kelamin;
    public $agama;
    public $warga_negara;
    public $jenis_identitas;
    public $masa_berlaku;
    public $no_identitas;
    public $alamat_identitas;
    public $provinsi_identitas;
    public $kab_identitas;
    public $kec_identitas;
    public $kel_identitas;
    public $pos_identitas;
    public $tempat_lahir;
    public $tgl_lahir;
    public $no_hp;
    public $email;
    public $alamat_domisili;
    public $prov_domisili;
    public $kab_domisili;
    public $kec_domisili;
    public $kel_domisili;
    public $pos_domisili;
    public $npwp;
    public $nm_ayah;
    public $nm_ibu;
    public $nm_ahli_waris;
    public $hb_ahli_waris;
    public $alamat_ahli_waris;
    public $no_ahli_waris;
    public $status_menikah;
    public $nm_pasangan;
    public $tmp_lhr_pasangan;
    public $tgl_lhr_pasangan;
    public $identitas_pasangan;
    public $no_identitas_pasangan;
    public $alamat_pasangan;
    public $no_pasangan;
    public $profesi;
    public $jenis_pekerjaan;
    public $status_pekerjaan;
    public $sumber_dana;
    public $jabatan;
    public $gaji_bln;
    public $perusahaan;
    public $alamat_kantor;
    public $telp_kantor;
    public $email_kantor;
    public $gaji_thn;
    public $tambahan_penghasilan;
    public $tot_penghasilan;
    public $status_rumah;
    public $tanggungan;
    public $tujuan_buka;
    public $jenis_tab;
    public $penidikan;
    public $ft_identitas;
    public $ft_kk;
    public $ft_diri;
    public $ft_ttd;
    public $ft_npwp;

    public function createNsb()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_nsb = uniqid();
        $this->nm_lengkap = $post['nm_lengkap'];
        $this->nm_identitas = $post['nm_identitas'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->agama = $post['agama'];
        $this->warga_negara = $post['warga_negara'];
        $this->jenis_identitas = $post['jenis_identitas'];
        $this->masa_berlaku = $post['masa_berlaku'];
        $this->no_identitas = $post['no_identitas'];
        $this->alamat_identitas = $post['alamat_identitas'];
        $this->provinsi_identitas = $post['provinsi_identitas'];
        $this->kab_identitas = $post['kab_identitas'];
        $this->pos_identitas = $post['pos_identitas'];
        $this->tempat_lahir = $post['tempat_lahir'];
        $this->tgl_lahir = $post['tgl_lahir'];
        $this->no_hp = $post['no_hp'];
        $this->email = $post['email'];
        $this->alamat_domisili = $post['alamat_domisili'];
        $this->prov_domisili = $post['prov_domisili'];
        $this->kab_domisili = $post['kab_domisili'];
        $this->kec_domisili = $post['kec_domisili'];
        $this->kel_domisili = $post['kel_domisili'];
        $this->pos_domisili = $post['pos_domisili'];
        $this->npwp = $post['npwp'];
        $this->nm_ayah = $post['nm_ayah'];
        $this->nm_ibu = $post['nm_ibu'];
        $this->nm_ahli_waris = $post['nm_ahli_waris'];
        $this->hb_ahli_waris = $post['hb_ahli_waris'];
        $this->alamat_ahli_waris = $post['alamat_ahli_waris'];
        $this->no_ahli_waris = $post['no_ahli_waris'];
        $this->status_ahli_waris = $post['status_ahli_waris'];
        $this->nm_pasangan = $post['nm_pasangan'];
        $this->tmp_lhr_pasangan = $post['tmp_lhr_pasangan'];
        $this->tgl_lhr_pasangan = $post['tgl_lhr_pasangan'];
        $this->identitas_pasangan = $post['identitas_pasangan'];
        $this->no_identitas_pasangan = $post['no_identitas_pasangan'];
        $this->alamat_pasangan = $post['alamat_pasangan'];
        $this->no_pasangan = $post['no_pasangan'];
        $this->profesi = $post['profesi'];
        $this->jenis_pekerjaan = $post['jenis_pekerjaan'];
        $this->status_pekerjaan = $post['status_pekerjaan'];
        $this->sumber_dana = $post['sumber_dana'];
        $this->jabatan = $post['jabatan'];
        $this->gaji_bln = $post['gaji_bln'];
        $this->perusahaan = $post['perusahaan'];
        $this->alamat_kantor = $post['alamat_kantor'];
        $this->telp_kantor = $post['telp_kantor'];
        $this->email_kantor = $post['email_kantor'];
        $this->gaji_thn = $post['gaji_thn'];
        $this->tambahan_penghasilan = $post['tambahan_penghasilan'];
        $this->tot_penghasilan = $post['tot_penghasilan'];
        $this->status_rumah = $post['status_rumah'];
        $this->tanggungan = $post['tanggungan'];
        $this->tujuan_buka = $post['tujuan_buka'];
        $this->jenis_tab = $post['jenis_tab'];
        $this->penidikan = $post['penidikan'];
        $this->ft_identitas = $this->_uploadImage();
        $this->ft_kk = $post['ft_kk'];
        $this->ft_diri = $post['ft_diri'];
        $this->ft_ttd = $post['ft_ttd'];
        $this->ft_npwp = $post['ft_npwp'];
        print_r($this);
        die;
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/produk/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->nm_lengkap;
        $config['overwrite'] = true;
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('ft_identitas')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('pembukaan-rekening-tabungan');
        } else {
            // return $this->upload->file_name;
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './upload/tabungan/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            // $config['width'] = 1200;
            // $config['height'] = 760;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return "KTP_" . $gbr['file_name'];
        }
    }
}

/* End of file Nasabah_model.php */
