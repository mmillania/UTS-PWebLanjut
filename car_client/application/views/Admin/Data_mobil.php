 <!--== Page Title Area Start ==-->
 <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Data Mobil CarRent</h1>
              <p>Selalu Update Data Mobil.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

 <!--== Car List Area Start ==-->
 <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row mt-5">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        

                            <div class="row text-center mt-3">
                            <?php foreach ($mobil as $mbl) : ?>

                            <div class="card ml-3 mb-3" style="width: 16rem;">
                            <img src="<?php echo base_url()?>assets/img/<?= $mbl['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-1"><?=$mbl['merk'] ?></h5>
                                <small><?=$mbl['nopol'] ?></small><br>

                                <span class="badge badge-pill badge-warning mb-3">Rp. <?= number_format($mbl['harga'], 0,',','.')  ?></span><br>

                                <?php if($mbl['status'] == "0"){ ?>
                                            <a class="btn btn-sm btn-danger">Sedang Dirental</a>
                                            
                                <?php }else{ ?>
                                            <a class="btn btn-sm btn-success">Tersedia</a>
                                <?php } ?>
                                        
                                <a href="<?php echo base_url('Admin/Data_mobil/detail_mobil/'.$mbl['id_mobil'])?>" class="btn btn-sm btn-primary">Detail</a>
                                  
                            
                                
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
          <h2>H A L L O | A D M I N</h2>
          <p>Fitur - fitur yang tersedia.</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
      <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Login</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Data Mobil</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">Data Type Mobil</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Data Peminjaman</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Data Customer</span>
        </div>
        <div class="step">
          <span class="number"><span>06</span></span>
          <span class="caption">Logout</span>
        </div>
        

      </div>
    </div>



<!-- <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>

          <div class="row mt-3">
              <div class="col-md-6">
                  <form action="" method="post">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Cari..." name="keyword">
                      <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">Cari</button>
                      </div>
                  </div>
                  </form>
              </div>
              <a href="<?php echo base_url('Admin/Data_mobil/tambah_mobil')?>" class="btn btn-sm btn-primary mb-4">
            <i class="fas fa-plus fa-sm"></i>Tambah Data Mobil</a>
          </div>

            <?php echo $this->session->flashdata('pesan') ?> 

          <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Type</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Nomor Kendaraan</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php
                $no=1;
                foreach($mobil as $mbl) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td>
                      <img width="160px" src="<?php echo base_url().'assets/upload/'.$mbl->gambar ?>">
                    </td>
                    <td><?php echo $mbl->kode_type ?></td>
                    <td><?php echo $mbl->merk ?></td>
                    <td><?php echo $mbl->harga ?></td>
                    <td><?php echo $mbl->nopol ?></td>
                    <td><?php 
                    if($mbl->status == "0"){
                        echo "<span class='badge badge-danger'>Sedang Direntalkan </span>";
                    }else{
                        echo "<span class='badge badge-primary'>Tersedia </span>";
                    }
                    ?></td>
                    <td>
                        <a href="<?php echo base_url('Admin/Data_mobil/detail_mobil/').$mbl->id_mobil ?>" class="btn btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="<?php echo base_url('Admin/Data_mobil/update_mobil/').$mbl->id_mobil ?>" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url('Admin/Data_mobil/delete_mobil/').$mbl->id_mobil ?>" class="btn btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
        </section>
</div> -->