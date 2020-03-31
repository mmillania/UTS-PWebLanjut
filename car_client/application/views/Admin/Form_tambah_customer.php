<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Form Tambah Data Customer</h1>
              <p>Silahkan tambahkan data sesuai data.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1 class="text-center">Data Customer</h1>
          </div> 
        </section>
        <form method ="POST" action="<?php echo base_url('Admin/Data_customer/tambah_customer_aksi')?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
                <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
                <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>No KTP</label>
                <input type="text" name="no_ktp" class="form-control">
                <?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input type="text" name="no_tlp" class="form-control">
                <?php echo form_error('no_tlp','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option>----------Pilih Gender----------</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
            </div>
           
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
            </div>
            <a href="<?php echo base_url('Admin/Data_customer/')?>" class="btn btn-sm btn-warning">Kembali</i></a></td>   
            <button type="reset" class="btn btn-sm btn-danger mb-4 mt-4">Hapus</button>
            <button type="submit" class="btn btn-sm btn-primary mb-4 mt-4">Simpan</button>
            
        </form>
</div>