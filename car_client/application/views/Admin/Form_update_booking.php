
 <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Form Edit Data Peminjaman</h1>
              <p>Silahkan perbarui data sesuai data.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1 class="text-center">Data Peminjaman</h1>
          </div> 
        </section>
        <?php foreach ($peminjaman as $pj) : ?>
        <form method ="POST" action="<?php echo base_url('Admin/Data_booking/update_booking_aksi')?>">
            <div class="form-group">
                <label>Nama Peminjam</label>
                <input type="hidden" name="id_peminjaman" value="<?php echo $pj->id_peminjaman ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $pj->nama ?>">
                <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Alamat Peminjam</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $pj->alamat ?>">
                <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>No KTP Peminjam</label>
                <input type="text" name="no_ktp" class="form-control" value="<?php echo $pj->no_ktp ?>">
                <?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>No Telpon Peminjam</label>
                <input type="text" name="no_tlp" class="form-control" value="<?php echo $pj->no_tlp ?>">
                <?php echo form_error('no_tlp','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Merk Mobil</label>
                <input type="text" name="merk_mobil" class="form-control" value="<?php echo $pj->merk_mobil ?>">
                <?php echo form_error('merk_mobil','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input type="date" name="tgl_pinjam" class="form-control" value="<?php echo $pj->tgl_pinjam ?>">
                <?php echo form_error('tgl_pinjam','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" class="form-control" value="<?php echo $pj->tgl_kembali ?>">
                <?php echo form_error('tgl_kembali','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Durasi Hari</label>
                <input type="text" name="durasi" class="form-control" value="<?php echo $pj->durasi ?>">
                <?php echo form_error('durasi','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $pj->username ?>">
                <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
            </div>
           
            <a href="<?php echo base_url('Admin/Data_booking/')?>" class="btn btn-sm btn-warning">Kembali</i></a>
            <button type="submit" class="btn btn-sm btn-primary mb-3 mt-3">Simpan</button>
           
        </form>
        <?php endforeach; ?>
</div>