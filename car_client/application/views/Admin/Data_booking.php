 <!--== Page Title Area Start ==-->
 <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Data Peminjaman</h1>
              <p>Selalu Update Data Tebaru!.</p>
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
                        <div class="row">
                            <!-- Single Car Start -->
                          <a href="<?php echo base_url('Admin/Data_booking/tambah_booking')?>" class="btn btn-sm btn-primary mb-4 mt-4 col-md-5">
                        <i class="fas fa-plus fa-sm"></i>Tambah Bookingan</a>
                      </div>
                      <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Alamat Peminjam</th>
                    <th>No KTP</th>
                    <th>No Telpon</th>
                    <th>Merk Mobil</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    
                    <th>Durasi</th>
                    <th>Username</th>
                    <th>Hapus</th>
                    <th>Edit</th>

                </tr>
            </thead>

            <tbody>
            <?php 
                $no = 1;
                foreach ($peminjaman as $pj) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pj->nama ?></td>
                        <td><?php echo $pj->alamat ?></td>
                        <td><?php echo $pj->no_ktp ?></td>
                        <td><?php echo $pj->no_tlp ?></td>  
                        <td><?php echo $pj->merk_mobil ?></td>  
                        <td><?php echo $pj->tgl_pinjam ?></td>
                        <td><?php echo $pj->tgl_kembali ?></td>
                        <td><?php echo $pj->durasi ?></td>
                        <td><?php echo $pj->username ?></td>
                        <td><a href="<?php echo base_url('Admin/Data_booking/delete_booking/').$pj->id_peminjaman ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                        <td>
                        <a href="<?php echo base_url('Admin/Data_booking/update_booking/').$pj->id_peminjaman ?>" class="btn btn-sm btn-warning">Edit</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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


