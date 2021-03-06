<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_1.jpg')">
         <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="feature-car-rent-box-1">
              <?php if($this->session->userdata('nama')) { ?> 
                <h2>Halo! Selamat Datang</h2>
             
                <div class="row align-items-center mb-2">
                  <div class="col-md-12">
                    <h4 class="m-0">Ayo Lihat Mobil Yang Tersedia Sesuai Jadwal Anda</h4>
                    <h5 class="m-0">**Perhitungan Hari dihitung jam 09.00 WIB</h5>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="form-group col-md-3">
                    <label for="cf-3">Tanggal Peminjaman</label>
                    <input type="text" id="cf-3" placeholder="Tanggal Peminjaman" class="form-control datepicker px-3">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="cf-3">Tanggal Pengembalian</label>
                    <input type="text" id="cf-3" placeholder="Tanggal Pengembalian" class="form-control datepicker px-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <input type="submit" value="CEK" class="btn btn-primary">
                  </div> -->
                </div>
              
            

              <?php  }else{ ?>
                <h2>Mau Lihat Mobil Untuk Dipinjam ?</h2>
              
                <h3>Silahkan Login Terlebih Dahulu</h3>
                <div class="app-btns">
                  <a href="<?php echo base_url('Auth/login')?>"><i class=""></i> LOGIN</a>
                  <a href="<?php echo base_url('Register')?>"><i class=""></i> REGISTER</a>
                </div>
             <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

                
    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Bagaimana Cara Menyewa Mobil Disini?</h2>
          <p>Silahkan Perhatikan Alur dibawah ini dengan benar.</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
      <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Registrasi atau Login</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Lihat Mobil yang tersedia</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">Lihat Detail Mobil</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Mengunjungi Toko</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Booking dan Ambil Mobil di toko</span>
        </div>
        <div class="step">
          <span class="number"><span>06</span></span>
          <span class="caption">Jaga Mobil dan Kembalikan Tepat Waktu</span>
        </div>
        <div class="step">
          <span class="number"><span>07</span></span>
          <span class="caption">Selesai</span>
        </div>

      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-2">
            <h2>Testimoni Pelanggan</h2>
            <p>Seberapa puas Anda dengan pelayanan kami? Ayo Ceritakan!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4  mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Sangat Puas dengan pelayanan CarRent"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="<?php echo base_url()?>assets/assets_customer/images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Junaedi</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Mobil-mobilnya bagus dalam keadaan baik semua"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="<?php echo base_url()?>assets/assets_customer/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Tiara</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"pelayanannya sangat ramah"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="<?php echo base_url()?>assets/assets_customer/images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Siti Munawaroh</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    


   
            </div>
          </div>
        </div>
      </div>
    </div>