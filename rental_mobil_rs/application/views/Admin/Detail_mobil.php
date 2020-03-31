<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Mobil</h1>
          </div>    
        </section>

        <?php foreach($detail as $dt) : ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img width="250px" src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">
                        </div>

                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <td>Type Mobil</td>
                                    <td>
                                    <?php
                                    if($dt->kode_type == "MBL"){
                                        echo "Mobil";
                                    }elseif($dt->kode_type == "BUS"){
                                        echo "Bus";
                                    }elseif($dt->kode_type == "PICKUP"){
                                        echo "Pickup";
                                    }else{
                                        echo "<span class='text-danger'>Type Mobil Belum Terdaftar</span>";
                                    }
                                    ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Merk Kendaraan</td>
                                    <td><?php echo $dt->merk ?></td>
                                </tr>

                                <tr>
                                    <td>Harga Sewa Kendaraan</td>
                                    <td><?php echo $dt->harga ?></td>
                                </tr>

                                <tr>
                                    <td>Plat Kendaraan</td>
                                    <td><?php echo $dt->nopol ?></td>
                                </tr>

                                <tr>
                                    <td>Warna Kendaraan</td>
                                    <td><?php echo $dt->warna ?></td>
                                </tr>

                                <tr>
                                    <td>Tahun Kendaraan</td>
                                    <td><?php echo $dt->tahun ?></td>
                                </tr>

                                <tr>
                                    <td>Status Kendaraan</td>
                                    <td>
                                        <?php
                                        if($dt->status == "0"){
                                            echo "<span class='badge badge-danger'>Sedang Direntalkan</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            <a class=" btn btn-danger" href="<?php echo base_url('Admin/Data_mobil')?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
</div>