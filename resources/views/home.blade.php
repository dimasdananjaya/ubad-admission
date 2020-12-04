@extends('layouts.app')

@section('content')
<section id="mahasiswa-baru">
    <div data-aos="fade-left">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="text-center"><b>PENDAFTARAN MAHASISWA BARU</b></h1>
              <h3 class="text-center"><b>TAHUN AKADEMIK 2021/2022</b></h3>
            </div>
         </div>
    </div>

    <div id="gelombang-pendaftaran">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center"><b>GELOMBANG EARLY BIRD</b></h2>
                    <p class="text-center"><b>Daftar Sekarang Kuliah Nanti, Dengan Keuntungan Berikut :</b></p>
                </div><!--col-lg-12-->
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/potongan.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Potongan Biaya Kuliah</b></h5>
                            <p class="card-text">Isi formulir online dengan menekan tombol dibawah, pastikan data yang anda isi sesuai, Setelah mengisi formulir secara online admin kami akan memproses formulir dan akan menghubungi via Whatsapp
                                dalam waktu 24 jam</p>
                        </div><!--card body-->
                    </div><!--card-->     
                </div><!--col-lg-4-->

                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/beasiswa.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Beasiswa Rp. 2jt</b></h5>
                            <p class="card-text">Isi formulir online dengan menekan tombol dibawah, pastikan data yang anda isi sesuai, Setelah mengisi formulir secara online admin kami akan memproses formulir dan akan menghubungi via Whatsapp
                                dalam waktu 24 jam</p>
                        </div><!--card body-->
                    </div><!--card-->     
                </div><!--col-lg-4-->

                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/gratis-pendaftaran.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Gratis Pendaftaran</b></h5>
                            <p class="card-text">Isi formulir online dengan menekan tombol dibawah, pastikan data yang anda isi sesuai, Setelah mengisi formulir secara online admin kami akan memproses formulir dan akan menghubungi via Whatsapp
                                dalam waktu 24 jam</p>
                        </div><!--card body-->
                    </div><!--card-->     
                </div><!--col-lg-4-->
            </div><!--row-->
        </div><!--container-->
    </div><!--gelombang pendaftaran-->

    <div id="merdeka-belajar">
        <div class="container">
            <h3 class="text-center mb-3 mt-5"><b>Kampus Merdeka, Merdeka Belajar !</b></h3>
            <p class="text-center mb-3">Dalam mendukung program Merdeka Belajar oleh Kementerian Pendidikan dan Kebudayaan Republik Indonesia dan mensupport 
                calon mahasiswa baru dalam masa Pandemi COVID-19 ini Universitas Bali Dwipa
                memberikan <b>5 Kebebasan</b> bagi Calon Mahasiswa Baru diantaranya : </p>
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <img class="mx-auto d-block" src="/resources/logo/bebas-uang-pendaftaran.svg">
                            <h5 class="text-center mt-2"><b>Bebas Uang Pendaftaran</b></h5>
                        </div><!--card-header-->
                        <div class="card-body">
                            <p class="text-center">Pendaftaran Online Gratis ! <br> Anda dapat langsung mendaftar tanpa membayar </p>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-lg-4-->

                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <img class="mx-auto d-block" src="/resources/logo/bebas-waktu-pendaftaran.svg">
                            <h5 class="text-center mt-2"><b>Bebas Waktu Pendaftaran</b></h5>
                        </div><!--card-header-->
                        <div class="card-body">
                            <p class="text-center">Pendaftaran Online Dimanapun Kapanpun <br> Anda dapat langsung mendaftar dimanapun dan kapanpun secara online </p>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-lg-4-->

                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <img class="mx-auto d-block" src="/resources/logo/bebas-waktu-kuliah.svg">
                            <h5 class="text-center mt-2"><b>Bebas Waktu Kuliah</b></h5>
                        </div><!--card-header-->
                        <div class="card-body">
                            <p class="text-center">Perkuliahan Dapat Dilakukan Online Anda dapat mengikuti kuliah secara Online kami memiliki sistem E-Learning yang akan
                                membantu kalian dalam melakukan perkuliahan dimanapun dan kapanpun</p>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-lg-4-->

                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <img class="mx-auto d-block" src="/resources/logo/bebas-waktu-bayar-kuliah.svg">
                            <h5 class="text-center mt-2"><b>Bebas Waktu Bayar Kuliah</b></h5>
                        </div><!--card-header-->
                        <div class="card-body">
                            <p class="text-center">Punya Kendala Dalam Pembayaran? Pembayaran Uang Kuliah dapat dibayar kapanpun dan dicicil hingga sebelum Semester berakhir </p>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-lg-4-->

                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <img class="mx-auto d-block" src="/resources/logo/bebas-kuliah-3-semester.svg">
                            <h5 class="text-center mt-2"><b>Bebas Kuliah 3 Semester Diluar Prodi</b></h5>
                        </div><!--card-header-->
                        <div class="card-body">
                            <p class="text-center">Perkuliahan Merdeka Belajar <br> Mahasiswa berhak mengambil 3 semester diluar program studinya sesuai dengan prgoram merdeka balajar</p>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-lg-4-->

                <div class="col-lg-12">
                    <a href="/form-pendaftaran" class="btn btn-berminat btn-primary btn-md btn-block text-center mx-auto d-block mt-4">Berminat Bergabung? <br> Klik Disini Untuk Daftar Online</a>
                </div><!--div class-->
            </div><!--row-->
        </div><!--container-->
    </div><!--merdeka belajar-->

    <div id="alur-pendaftaran">
        <div class="container">
            <!-- Full Page Image Header with Vertically Centered Content -->
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h3 class="text-center mt-4"><b>Alur Pendaftaran</b></h3>
                    <img class="img-responsive" src="/resources/logo/alur-pendaftaran.svg" alt="Card image cap">
                </div><!--col 12-->
    
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/isi-formulir.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>1. Isi Formulir Online</b></h5>
                            <p class="card-text">Isi formulir online dengan menekan tombol dibawah, pastikan data yang anda isi sesuai, Setelah mengisi formulir secara online admin kami akan memproses formulir dan akan menghubungi via Whatsapp
                                dalam waktu 24 jam</p>
                            <a href="/form-pendaftaran" class="btn btn-primary btn-md text-center">Isi Formulir Pendaftaran Disini</a>
                        </div><!--card body-->
                    </div><!--card-->
                </div><!--col 6-->
    
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/admin.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>*Admin Akan Segera Menghubungi Anda*</b></h5>
                            <p class="card-text">
                                Setelah mengisi formulir Online maka salah satu dari admin kami akan menghubungi anda, admin kami nantinya
                                akan membantu anda hingga proses akhir pendaftaran
                            </p>
                        </div><!--card body-->
                    </div><!--card-->
                </div><!--col 6-->
    
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/diproses.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>2. Penyerahan Persyaratan</b></h5>
                            <p class="card-text">
                                Calon manahasiswa baru menyerahkan kelengkapan berkas persyaratan pendaftaran berupa : <br>
                                1. Ijazah (Legalisir)<br>
                                2. Rapor (Legalisir)<br>
                                3. KTP
                                <br>
                                <small><b>*seluruh persyaratan dikirim ke email pmb@balidwipa.ac.id </b></small>
                            </p>
                            <a href="/status-pendaftaran" class="btn btn-primary btn-md text-center">Cek Status Pendaftaran</a>
                        </div><!--card body-->
                    </div><!--card-->
                </div><!--col 6-->
    
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/pembayaran.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>3. Pembayaran Pendaftaran dan Initial Payment</b></h5>
                            <p class="card-text">Setelah data divalidasi selanjutnya calon mahasiswa wajib membayar <b>Biaya Pendaftaran dan Initial Payment</b>
                            jumlah biaya bergantung pada Program Studi yang dipilih, hubungi admin kami dengan menekan tombol Whatsapp di pojok kanan bawah
                            untuk mengetahui biaya yang harus dibayar. Bukti pembayaran dapat dibawa langsung ke Universitas Bali Dwipa atau dikirimkan online melalui admin kami
                            yang telah menghubungi anda.
                            <br><small><b>*tata cara pembayaran akan diberikan setelah mengumpulkan berkas pendaftaran kepada admin</b></small>
                            </p>
                        </div><!--card body-->
                    </div><!--card-->
                </div><!--col 6-->
    
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/registrasi-ulang.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>4. Registrasi Ulang</b></h5>
                            <p class="card-text">Setelah melakukan <b>Pembayaran Pendaftaran dan Initial Payment (3)</b> selanjutnya calon mahasiswa wajib melakukan <b>Registrasi Ulang</b>
                            Registrasi Ulang adalah proses administrasi yang <b>Wajib</b> dilakukan oleh seluruh calon mahasiswa, proses ini mencakup melengkapi administrasi, pengumpulan
                            dokumen, dan pelunasan DP3 dan Semester. 
                            </p>
                        </div><!--card body-->
                    </div><!--card-->
                </div><!--col 6-->
    
                <div class="col-lg-6 d-flex mx-auto">
                    <div class="card">
                        <img class="card-img-top" src="/resources/logo/selesai.svg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="color : #4e89ae;"><b>5. SELESAI</b></h5>
                            <p class="card-text">Setelah calon Mahasiswa Baru menyelesaikan seluruh proses 1-4, maka <b>SELAMAT !</b> Anda telah terdaftar resmi sebagai Calon Mahasiswa Universitas Bali Dwipa. 
                                Calon mahasiswa menunggu untuk pengumuman Masa Orientasi</p>
                            <a href="/status-pendaftaran" class="btn btn-primary btn-md text-center">Cek Status Pendaftaran</a>
                        </div><!--card body-->
                    </div><!--card-->
                </div><!--col 6-->
    
            </div><!--row-->
        </div><!--container-->
    </div><!--alur pendaftaran-->

    <section id="form-pendaftaran">
        <div class="container">
            <div class="row">
                <div data-aos="fade-left" class="col-lg-6 pt-5">
                    <h2 data-aos="fade-left" class="text-center white-text"><b>Pendaftaran Mahasiswa Baru</b></h2>
                    <hr>
                    <p class="text-center white-text" data-aos="fade-left" class="why-dosen lead">
                        Silahkan mengisi formulir berikut ini untuk melakukan pendaftaran kolom diisi selengkap mungkin dan merupakan data yang sebenarnya.
                    <p>
                    <img class="mx-auto" src="/resources/logo/pendaftaran-form.svg">
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3><b>Formulir Pendaftaran</b></h3>
                            
                            <hr>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="nama" class="form-control" name="nama" id="nama"
                                                placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="no_hp">No Handphone</label>
                                            <input type="text" class="form-control" name="no_hp" id="no_hp"
                                            placeholder="" required>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="no_whatsapp">No Whatsapp</label>
                                            <input type="text" class="form-control" name="no_whatsapp" id="no_whatsapp"
                                            placeholder="" required>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                            placeholder="" required>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="prodi">Program Studi Pilihan</label>
                                            <select name="prodi" class="form-group form-control">
                                                <option value="Teknologi Pangan" class="form-control">Teknologi Pangan</option>
                                                <option value="Gizi" class="form-control">Gizi</option>
                                                <option value="Farmasi" class="form-control">Farmasi</option>
                                                <option value="Psikologi" class="form-control">Psikologi</option>
                                                <option value="Teknik Biomedis" class="form-control">Teknik Biomedis</option>
                                                <option value="Hukum" class="form-control">Hukum</option>
                                                <option value="Akuntansi" class="form-control">Akuntansi</option>
                                                <option value="Bahasa Inggris" class="form-control">Bahasa Inggris</option>
                                                <option value="Hubungan Masyarakat" class="form-control">Hubungan Masyarakat</option>
                                                <option value="Sistem Informasi" class="form-control">Sistem Informasi</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12" style="visibility: hidden;">
                                        <div class="form-group">
                                            <label for="kelas">Kelas</label>
                                            <select name="kelas" class="form-group form-control">
                                                <option value="Reguler" class="form-control" selected>Reguler</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="kelas">Kode Referral</label>
                                            <p><small>*diisi jika memiliki kode Referral dari marketing</small></p>
                                            <input type="text" class="form-control" name="referral" id="referral"
                                            placeholder="xxxxxx">
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-12-->
            </div><!--row-->
        </div><!--container-->
    </section>

    <div class="mahasiswa-baru-question">
        <div data-aos="fade-right">
            <h2 class="text-center">Ada Pertanyaan?</h2>
            <p class="card-text text-center">Tekan tombol Whatsapp di pojok kanan bawah <br>atau Hubungi Kami Pada Kontak Dibawah Ini</p>
            <ul class="text-center">
                <li>Whatsapp : 085792463944 </li>
                <li>Phone    : 081339827770</li>
                <li>Email    : info@balidwipa.ac.id</li>
            </ul>
        </div>
    </div><!--question-->
</section>
@endsection