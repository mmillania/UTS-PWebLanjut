
    <!--== Page Title Area Start ==-->
    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Mobil CarRent</h1>
              <p>Kami menyediakan berbagai macam jenis dan type mobil sesuai kebutuhan Anda.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row mt-5">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            <div class="row text-center mt-3">
                            <?php foreach ($mobil as $mbl) : ?>

                            <div class="card ml-3 mb-3" style="width: 16rem;">
                            <img src="<?php echo base_url()?>assets/img/<?= $mbl['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-1"><?=$mbl['merk'] ?></h5>
                                <small><?=$mbl['nopol'] ?></small><br>

                                <span class="badge badge-pill badge-warning mb-3">Rp. <?= number_format($mbl['harga'], 0,',','.')  ?></span><br>

                                <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                </p>

                                <?php if($mbl['status'] == "0"){ ?>
                                            <a class="btn btn-sm btn-danger">Sedang Dirental</a>
                                            
                                <?php }else{ ?>
                                            <a class="btn btn-sm btn-success">Tersedia</a>
                                <?php } ?>
                                        
                                <a href="<?php echo base_url('Customer/Data_mobil/detail_mobil/'.$mbl['id_mobil'])?>" class="btn btn-sm btn-primary">Detail</a>
                                
                            </div>
                            </div>



                            
                            <?php endforeach; ?>
                            <!-- Single Car End -->
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

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
    

    