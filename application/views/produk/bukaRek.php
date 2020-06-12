<div class="blog-page-area struktur">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h5 class="text-center">Formulir Pembukaan Rekening Tabungan</h5>
                <form name="produk" class="user" method="post" action="<?= base_url(''); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" autofocus class="form-control form-control-user" name="produk" id="produk" placeholder="Nama Lengkap" value="<?= set_value('produk'); ?>">
                        <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control form-control-user" name="produk" id="produk" placeholder="Nomor Tanda Pengenal" value="<?= set_value('produk'); ?>">
                        <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="produk" id="produk" placeholder="Tempat Dikeluarkan Tanda Pengenal" value="<?= set_value('produk'); ?>">
                        <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="e">Berlaku Hingga:</label>
                        <input type="text" class="form-control form-control-user datepicker" placeholder="Masa Berlaku" />
                    </div>
                    <div class="form-group">
                        <textarea name="alamat_domisili" id="alamat_domisili" rows="3" class="form-control form-control-user" placeholder="Alamat sesuai Domisili"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="kota" placeholder="Kota" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="kode_pos" placeholder="Kode Pos" />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control form-control-user" name="no" placeholder="No. Hp/Telp" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="alamat_surat" placeholder="Alamat Surat Menyurat" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="kota_surat" placeholder="Kota" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="kode_pos_surat" placeholder="Kode Pos" />
                    </div>
                    <div class="form-group">
                        <label for="sumber dana">Sumber Penghasilan</label>
                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                            <option value="">Gaji</option>
                            <option value="">Hasil Investasi</option>
                            <option value="">Hasil Usaha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sumber dana">Tujuan Pembukaan Rekening</label>
                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                            <option value="">Transaksi</option>
                            <option value="">Investasi/Tabungan</option>
                            <option value="">Keperluan Pribadi</option>
                            <option value="">Pinjaman/Kredit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control custom-select custom-select-md" id="jenis" name="jenis">
                            <option value="" disabled diselected>--Pilih Jenis Produk--</option>
                            <?php foreach ($jenis as $row) : ?>
                                <option value="<?= $row->id_produk; ?>"><?= ucwords($row->produk); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php echo form_error('image', '<small class="text-danger pl-5">', '</small>'); ?>
                    <div class="form-group">
                        <label for="image">Lampirkan Foto Tanda Pengenal (KTP, SIM, Passport)</label>
                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Lampirkan Foto Selfie</label>
                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Lampirkan Foto Tanda Tangan</label>
                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Lampirkan Foto NPWP</label>
                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                    </div>
                    <p><b>Mohon Baca Persyaratan dan Ketentuan berikut ini:</b></p>
                    <div class="scroll">
                        Mohon dibaca secara seksama sebelum Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan karena Anda akan terikat oleh Syarat dan Ketentuan ini setelah Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan ini.

                        Syarat dan Ketentuan ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Formulir Pembukaan Rekening Tabungan Perorangan termasuk perubahannya di kemudian hari. Syarat dan Ketentuan ini berlaku pula untuk setiap pembukaan berikutnya dari produkTabungan yang sama yang dilakukan oleh Nasabah

                        1. Syarat-Syarat Umum
                        a. Nasabah adalah perorangan yang telah berusia di atas 17 tahun dan mempunyai kartu identitas (KTP/Paspor/KITAS) yang masih berlaku dan/atau yayasan (selanjutnya disebut “Nasabah”).
                        b. Sebagai bukti kepemilikan TABUNGAN, BPR Indra Candra akan menerbitkan buku TABUNGAN dan Kartu Tabungan.
                        c. Kartu Tabungan dapat digunakan oleh Nasabah untuk melakukan cek saldo, penyetoran, penarikan, dan pemindahbukuan melalui mesin EDC (Electronic Data Capture).
                        d. Buku TABUNGAN, Kartu Tabungan, dan PIN (Personal Identification Number) bersifat rahasia dan tidak untuk diberikan kepada pihak selain Nasabah.
                        e. Dalam hal buku TABUNGAN dicuri atau hilang, Nasabah wajib melaporkan secara tertulis dengan melampirkan surat keterangan kehilangan dari kepolisian kepada kantor BPR Indra Candra dimana rekening dibuka selama jam kerja dalam bentuk dan isi yang dapat diterima oleh BPR Indra Candra.
                        f. Sebelum pemberitahuan tertulis diterima oleh BPR Indra Candra, setiap transaksi yang dilakukan dengan buku TABUNGAN yang hilang menjadi tanggung jawab Nasabah sepenuhnya.
                        g. Nasabah bertanggung jawab sepenuhnya atas segala kerugian yang timbul karena adanya pemalsuan buku TABUNGAN, penyalahgunaan dalam bentuk apapun atas buku TABUNGAN, kerugian atau tuntutan yang timbul karena kehilangan buku TABUNGAN, kerusakan dan/atau kegagalan bekerjanya mesin EDC di luar kekuasaan BPR Indra Candra.
                        h. BPR Indra Candra tidak melayani transaksi apapun terhadap rekening TABUNGAN milik Nasabah yang dilaporkan hilang oleh Nasabah kepada BPR Indra Candra. Untuk dapat kembali melakukan transaksi atas rekening TABUNGAN tersebut, Nasabah dapat mengajukan permohonan penggantian buku TABUNGAN ke kantor BPR Indra Candra dimana rekening pertama dibuka.
                        i. BPR Indra Candra berhak memblokir/menutup rekening tanpa pemberitahuan terlebih dahulu apabila saldo Nasabah nihil dalam buku TABUNGAN atau tidak aktif sesuai dengan ketentuan yang berlaku di BPR Indra Candra atau apabila dipandang perlu karena data-data yang diserahkan ke BPR Indra Candra ternyata terbukti tidak benar atau ada dugaan/indikasi rekening disalahgunakan untuk tujuan penipuan/tindak pidana.
                        j. Apabila terdapat perbedaan antara saldo yang tertera pada buku TABUNGAN dengan saldo yang tercatat pada pembukuan BPR Indra Candra, maka yang akan digunakan sebagai pedoman adalah saldo yang tercatat pada pembukuan BPR Indra Candra, kecuali dapat dibuktikan sebaliknya.
                        k. Nasabah wajib menanggung biaya-biaya yang timbul sehubungan dengan penerbitan dan atau penggunaan Kartu Tabungan, antara lain tetapi tidak terbatas pada biaya pembuatan/penggantian Kartu Tabungan dan buku TABUNGAN, biaya administrasi, biaya transaksi, dan biaya lainnya.
                        l. Besarnya biaya-biaya dimaksud pada poin k di atas berikut perubahannya akan diberitahukan kepada Nasabah dalam bentuk dan melalui sarana apapun. Biaya-biaya tersebut langsung didebet oleh BPR Indra Candra dari rekening TABUNGAN Nasabah yang bersangkutan.
                        m. Nasabah wajib memberitahukan secara tertulis kepada BPR Indra Candra apabila terdapat perubahan data-data dan tanda tangan Nasabah. BPR Indra Candra tidak bertanggung jawab atas akibat dari kelalaian Nasabah dalam memperbaharui data Nasabah pada BPR Indra Candra.
                        n. Apabila Nasabah meninggal dunia, BPR Indra Candra berhak meminta dokumen-dokumen keahliwarisan yang disyaratkan oleh BPR Indra Candra agar BPR Indra Candra dapat mencairkan saldo rekening TABUNGAN kepada ahli waris yang ditentukan dalam dokumen keahliwarisan. Dengan pencairan saldo rekening TABUNGAN milik Nasabah yang telah meninggal dunia kepada ahli waris atau kuasanya yang mendapat hak sesuai dengan dokumen keahliwarisan, maka BPR Indra Candra dibebaskan dari seluruh tanggung jawab berkaitan dengan rekening TABUNGAN milik Nasabah.
                        o. Apabila di kemudian hari Nasabah mengajukan fasilitas Kartu ATM, maka Nasabah secara otomatis menyetujui syarat-syarat dan ketentuan-ketentuan Kartu ATM.
                        p. Selama Nasabah masih memiliki hutang kepada BPR Indra Candra berdasarkan pinjaman uang, bunga, provisi, materai, atau biaya-biaya yang timbul berdasarkan apapun juga, BPR Indra Candra berhak dan sepanjang perlu dengan ini diberi kuasa oleh Nasabah untuk mendebet rekening Nasabah dan menggunakannya untuk pembayaran kembali atas setiap jumlah uang yang setiap waktu terutang kepada BPR Indra Candra. Segala akibat yang timbul dari pendebetan rekening TABUNGAN tersebut menjadi tanggung jawab Nasabah sepenuhnya.
                        q. BPR Indra Candra berhak melakukan koreksi atas saldo Nasabah jika terjadi kesalahan posting yang dilakukan oleh BPR Indra Candra. Nasabah melepaskan BPR Indra Candra dari segala tuntutan atau gugatan atas perbaikan kesalahan tersebut.
                        r. Nasabah harus mencetak transaksi yang telah dilakukan pada buku TABUNGAN.
                        s. Buku TABUNGAN tidak diperbolehkan untuk dititipkan ataupun disimpan pada BPR Indra Candra termasuk pegawainya. Segala resiko yang terjadi atas penitipan buku TABUNGAN menjadi tanggung jawab Nasabah.
                        t. Dalam hal buku TABUNGAN rusak/cacat, maka Nasabah dapat mengajukan permohonan penggantian kepada kantor BPR Indra Candra tempat membuka rekening TABUNGAN dengan menyerahkan buku TABUNGAN yang rusak/cacat tersebut.
                        u. Penerbitan buku TABUNGAN tidak dikenakan biaya, sedangkan penggantian buku TABUNGAN yang hilang/rusak/cacat karena kesalahan Nasabah dikenakan biaya sesuai dengan ketentuan BPR Indra Candra.
                        v. Penutupan rekening TABUNGAN dikenakan biaya penutupan. Besarnya biaya penutupan rekening TABUNGAN maupun perubahannya akan diberitahukan oleh BPR Indra Candra kepada Nasabah dalam bentuk dan melalui sarana apapun.
                        w. Rekening TABUNGAN yang ditutup dalam masa periode undian tidak akan diikutsertakan dalam setiap undian yang diadakan oleh BPR Indra Candra.
                        x. Pada saat penutupan rekening, buku TABUNGAN harus diserahkan kembali kepada BPR Indra Candra sehingga menjadi tidak berlaku lagi.
                        y. Dengan membuka rekening TABUNGAN, maka Nasabah tunduk dan menyetujui ketentuan-ketentuan ini, termasuk setiap perubahannya yang akan diberitahukan terlebih dahulu oleh BPR Indra Candra dalam bentuk dan melalui sarana apapun.
                        z. Simpanan dalam TABUNGAN dijamin oleh Lembaga Penjamin Simpanan (LPS) sesuai ketentuan perundang-undangan yang berlaku.

                        2. Penyetoran dan Penarikan Dana
                        a. Setoran pertama dan setoran selanjutnya dapat diberitahukan oleh BPR Indra Candra dalam bentuk dan melalui sarana apapun.
                        b. Penyetoran dapat dilakukan bebas setiap saat dengan atau tanpa disertai buku TABUNGAN selama kas buka pada waktu jam kerja kantor BPR Indra Candra atau dapat juga dilakukan melalui petugas tabungan melalui sistem EDC.
                        c. Nasabah wajib melengkapi Formulir Setoran/Transfer (F-TAB-05) atau Formulir Penarikan (F-TAB-07) untuk setiap transaksi penyetoran atau penarikan tanpa melalui sistem EDC.
                        d. Setoran dengan Cek atau Bilyet Giro atau transaksi kiriman uang masuk akan dikreditkan ke dalam rekening TABUNGAN setelah dana efektif diterima oleh BPR Indra Candra.
                        e. Kecuali produk TABUNGAN MAPAN, TABUNGAN MAPAN XTRA, TABUNGAN PLUS XTRA, dan TABUNGAN SUPER, penarikan dana atau pemindahbukuan dana dapat dilakukan bebas setiap saat dengan menggunakan buku TABUNGAN asli selama kas buka pada waktu jam kerja kantor BPR Indra Candra atau dapat juga dilakukan melalui petugas tabungan melalui sistem EDC.
                        f. Produk TABUNGAN MAPAN, TABUNGAN MAPAN XTRA, TABUNGAN PLUS XTRA , dan TABUNGAN SUPER adalah produk simpanan berjangka, sehingga penarikan dana atau pemindahbukuan dana hanya dapat dilakukan setelah jangka waktu simpanan berakhir.
                        g. Penarikan atau pemindahbukuan dana yang dilakukan bukan oleh Nasabah sendiri hanya dapat dilakukan di kantor BPR Indra Candra tempat membuka rekening TABUNGAN dan harus dilengkapi dengan surat kuasa bermaterai cukup dari Nasabah serta kartu identitas asli milik Nasabah dan Penerima Kuasa.
                        h. Apabila tanda tangan pada Formulir Penarikan berbeda dengan tanda tangan pada buku TABUNGAN/identitas asli/pembukuan BPR Indra Candra, maka BPR Indra Candra berhak untuk menolak transaksi. Jika Nasabah tidak dapat menyerahkan kartu identitas aslinya, BPR Indra Candra berhak untuk menahan buku TABUNGAN untuk dilakukan pemeriksaan lebih lanjut sampai dapat dipastikan kebenaran penarikan yang dilakukan ataupun menolak transaksi Nasabah tersebut sampai dapat ditunjukannya kartu identitas asli dari Nasabah.
                        i. BPR Indra Candra berhak meminta kartu identitas asli dari Nasabah untuk penarikan tunai.
                        j. Nasabah wajib memberikan informasi sumber dana dan tujuan transaksi untuk setiap transaksi lebih dari Rp.100 juta, baik secara sekaligus maupun bertahap dalam 1 hari.

                        3. Perhitungan dan Pembayaran Bunga
                        a. Rekening TABUNGAN akan diberikan bunga yang dihitung harian (khusus TABUNGAN PLUS, TABUNGAN PLUS XTRA, TABUNGAN PLUS MAXI, dan TABUNGAN SUPER) atau yang dihitung berdasarkan saldo akhir bulan (khusus TABUNGAN MAPAN dan TABUNGAN MAPAN XTRA) atau yang dihitung berdasarkan saldo terendah bulanan (jenis TABUNGAN lainnya).
                        b. Pemberian bunga akan dilakukan pada akhir bulan dari bulan yang bersangkutan dan langsung dikreditkan atau ditambahkan pada saldo Nasabah yang tercatat pada pembukuan BPR Indra Candra.
                        c. Besarnya suku bunga ditentukan oleh BPR Indra Candra, dan apabila terjadi perubahan suku bunga, maka perubahan tersebut dapat diberlakukan tanpa pemberitahuan terlebih dahulu kepada Nasabah.
                        d. Setiap pendapatan bunga akan dikenakan pajak penghasilan (PPh) sesuai ketentuan perpajakan yang berlaku dan akan dibebankan kepada Nasabah.

                        4. Penanganan Keluhan
                        a. Dalam hal Nasabah akan menyampaikan keluhan kepada BPR Indra Candra sehubungan dengan rekening TABUNGAN, dapat dilakukan secara tertulis kepada kantor pusat BPR Indra Candra atau melalui surel di cs@bprindra.com dengan dilampiri dengan fotokopi identitas diri Nasabah dan dokumen pendukung lainnya.
                        b. BPR Indra Candra akan menanggapi keluhan tersebut sesuai dengan kebijakan dan prosedur yang berlaku di BPR Indra Candra, selambat-lambatnya 7 hari kerja sejak diterimanya keluhan tersebut.
                        c. Keluhan Nasabah yang disampaikan kepada BPR Indra Candra setelah 3 (tiga) bulan atau lebih sejak tanggal transaksi, tidak akan dilayani oleh BPR Indra Candra.

                        5. Force Majeure
                        a. BPR Indra Candra tidak bertanggung jawab atas kelalaian pelaksanaan kewajiban dalam hal terjadi peristiwa Force Majeure. Pelaksanaan kewajiban tersebut ditunda selama berlangsung peristiwa Force Majeure tersebut.
                        b. Nasabah dengan ini menjamin dan membebaskan BPR Indra Candra dari segala kewajiban, tuntutan, gugatan, dan klaim apapun dari pihak manapun juga, termasuk dari Nasabah sendiri, dalam hal BPR Indra Candra tidak dapat melaksanakan perintah dari Nasabah karena sebab-sebab yang diakibatkan oleh peristiwa Force Majeure.

                        6. Hukum yang Berlaku
                        a. Setiap transaksi perbankan yang dilakukan Nasabah akan diproses berdasarkan hukum yang berlaku di Negara Republik Indonesia.
                        b. Syarat dan Ketentuan ini serta pelaksanaannya dan penafsirannya dalam segala hal diatur oleh serta diartikan dan ditafsirkan dengan hukum Negara Republik Indonesia.
                        c. Nasabah dan BPR Indra Candra memilih domisili tetap dan permanen di Panitera Pengadilan Negeri Singaraja.
                    </div>
                    <input type="checkbox" class="checkbox" name="cek" id="cek" value="check"> Dengan ini menyatakan bahwa saya telah membaca dan memahami hal-hal yang tercantum dalam Syarat dan Ketentuan Pembukaan Rekening Tabungan dan berjanji mematuhi Ketentuan-ketentuan tersebut baik yang ada sekarang maupun yang ada dikemudian hari serta bersedia mengikatkan diri untuk itu kepada BPR Unisritama.
                    <div class="form-group">
                        <button type="button" class="btn btn-info" id="btSubmit" disabled>
                            SUBMIT
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#cek").click(function() {
            var d = document.getElementById('cek').value;
            alert(d);
        });
    });
</script>