<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Detail Mobil CarRent</h1>
              <p>Silahkan dilihat terlebih dahulu detail mobil ini sebelum menyewa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="container mt-5 mb-5">
    <div class="card" style="margin-top: 200px">
        <div class="card-body">
            
                <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url()?>assets/img/<?= $mobil['gambar'] ?>" style = "width: 500px; height: 350px" alt="">
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>Merk Mobil</th>
                            <td><?= $mobil['merk'];?></td>
                        </tr>
                        <tr>
                            <th>No Plat Mobil</th>
                            <td><?= $mobil['nopol']; ?></td>
                        </tr>
                        <tr>
                            <th>Harga Mobil</th>
                            <td>Rp. <?= number_format($mobil['harga'], 0,',','.'); ?></td>
                        </tr>
                        <tr>
                            <th>Status Mobil</th>
                            <td><?php if ($mobil['status'] == '1') {
                                echo "Tersedia";
                            }else {
                                echo "Telah Direntalkan";
                            } ?>
                            </td>
                            <tr>
                                <td><a href="<?php echo base_url('Customer/Data_mobil/')?>" class="btn  btn-warning">Kembali</i></a></td>
                                <td>
                                
                                    <?php
                                        if($mobil['status'] == "0"){
                                        echo "<span class= 'btn btn-danger' disable>Mobil Sedang di Rental,Silahkan Cari Mobil Lain!</span>";
                                        }else{
                                        echo "<span class= 'btn btn-primary' disable>Ayo Segera ke Toko dan Booking Sekarang Juga!</span>";
                                        // echo anchor('Customer/Rental/tambah_rental'.$mobil['id_mobil'], '<button class="btn btn-primary">Booking</button>');
                                        }
                                    ?>
                                    
                                </td> 
                            </tr>
                        </tr>
                        
                    </table>
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
    
      