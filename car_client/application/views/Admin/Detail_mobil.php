<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Detail Mobil CarRent</h1>
              <p>Silahkan cek kembali.</p>
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
                            <th>Id Mobil</th>
                            <td><?= $mobil['id_mobil'];?></td>
                        </tr>
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
                            <th>Warna Mobil</th>
                            <td><?= $mobil['warna']; ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Mobil</th>
                            <td><?= $mobil['tahun']; ?></td>
                        </tr>
                        <tr>
                            <th>Type Mobil</th>
                            <td><?= $mobil['kode_type']; ?></td>
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
                                <td></td>
                                <td>
                                
                                <a href="<?php echo base_url('Admin/Data_mobil/')?>" class="btn btn-sm btn-warning">Kembali</i></a></td>   
                                </td> 
                            </tr>
                        </tr>
                        
                        
                    </table>
                </div>
            </div>
           
        </div>
    </div>
</div>

