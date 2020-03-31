<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Transaksi</h1>
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
              <a href="<?php echo base_url('Admin/Data_transaksi/tambah_transaksi')?>" class="btn btn-sm btn-primary mb-4">
            <i class="fas fa-plus fa-sm"></i>Tambah Data Transaksi</a>
          </div>

            <?php echo $this->session->flashdata('pesan') ?> 

          <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                <th>No</th>
                <th>ID Customer</th>
                <th>ID Mobil</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Pengembalian</th>
                <th>Status Transaksi</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                foreach($transaksi as $tr) : ?> 
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->id_customer ?></td>
                    <td><?php echo $tr->id_mobil ?></td>
                    <td><?php echo $tr->tgl_pinjam ?></td>
                    <td><?php echo $tr->tgl_kembali ?></td>
                    <td><?php echo $tr->tgl_pengembalian ?></td>
                    <td><?php 
                    if($tr->status_pengembalian == "0"){
                        echo "<span class='badge badge-primary'>Tepat Waktu </span>";
                    }else{
                        echo "<span class='badge badge-danger'>Terlambat </span>";
                    }
                    ?></td>
                    <td><?php 
                    if($tr->status_transaksi == "0"){
                        echo "<span class='badge badge-primary'>Lunas </span>";
                    }else{
                        echo "<span class='badge badge-danger'>Uang Muka </span>";
                    }
                    ?></td>
                    <td>
                        <a href="<?php echo base_url('Admin/Data_mobil/update_mobil/').$tr->id_mobil ?>" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url('Admin/Data_mobil/delete_mobil/').$tr->id_mobil ?>" class="btn btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
        </section>
</div>