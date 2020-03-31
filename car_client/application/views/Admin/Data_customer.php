 <!--== Page Title Area Start ==-->
 <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Data Customer CarRent</h1>
              <p>Selalu berikan layanan terbaik untuk customer.</p>
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
                          <a href="<?php echo base_url('Admin/Data_customer/tambah_customer')?>" class="btn btn-sm btn-primary mb-4 mt-4 col-md-5">
                        <i class="fas fa-plus fa-sm"></i>Tambah Data Customer</a>
                      </div>
                      <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No KTP</th>
                    <th>No Telpon</th>
                    <th>Gender</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <tbody>
            <?php 
                $no = 1;
                foreach ($customer as $cs) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $cs->nama ?></td>
                        <td><?php echo $cs->alamat ?></td>
                        <td><?php echo $cs->no_ktp ?></td>
                        <td><?php echo $cs->no_tlp ?></td>
                        <td><?php echo $cs->gender ?></td>
                        <td><?php echo $cs->username ?></td>
                        <td><?php echo $cs->password ?></td>
                        <td>  
                        <a href="<?php echo base_url('Admin/Data_customer/delete_customer/').$cs->id_customer ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                        <td>
                        <a href="<?php echo base_url('Admin/Data_customer/update_customer/').$cs->id_customer ?>" class="btn btn-sm btn-warning">Edit</i></a></td>
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


<!-- <div class="main-content">
        <div class="section">
          <div class="section-header">
            <h1>Data Type Mobil</h1>
          </div>    
        </div>

        <a href="<?php echo base_url('Admin/Data_type/tambah_type')?>" class="btn btn-sm btn-primary mb-4">
            <i class="fas fa-plus fa-sm"></i>Tambah Data  Type Mobil</a>

        <?php echo $this->session->flashdata('pesan') ?> 

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th width="30px">No</th>
                    <th>Kode Type</th>
                    <th>Nama Type</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no =1;
                foreach($type as $tp) :?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tp->kode_type ?></td>
                        <td><?php echo $tp->nama_type ?></td>
                        <td>
                        <a href="<?php echo base_url('Admin/Data_type/update_type/').$tp->id_type ?>" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url('Admin/Data_type/delete_type/').$tp->id_type ?>" class="btn btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                        
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
</div> -->
 



<!-- <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>    

            <a href="<?php echo base_url('Admin/Data_customer/tambah_customer')?>" class="btn btn-sm btn-primary mb-4">
            <i class="fas fa-plus fa-sm"></i>Tambah Data Customer</a>

            <?php echo $this->session->flashdata('pesan') ?> 
            
            <table class="table table-striped table-responsive table-bordered">
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No KTP</th>
                    <th>No Telpon</th>
                    <th>Gender</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach ($customer as $cs) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $cs->nama ?></td>
                        <td><?php echo $cs->alamat ?></td>
                        <td><?php echo $cs->no_ktp ?></td>
                        <td><?php echo $cs->no_tlp ?></td>
                        <td><?php echo $cs->gender ?></td>
                        <td><?php echo $cs->username ?></td>
                        <td><?php echo $cs->password ?></td>
                        <td>
                            <a href="<?php echo base_url('Admin/Data_customer/delete_customer/').$cs->id_customer ?>" class="btn btn-sm"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('Admin/Data_customer/update_customer/').$cs->id_customer ?>" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
</div> -->