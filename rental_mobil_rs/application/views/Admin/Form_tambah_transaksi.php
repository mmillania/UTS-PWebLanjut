<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Transaksi</h1>
          </div> 
        </section>
        <form method ="POST" action="<?php echo base_url('Admin/Data_transaksi/tambah_transaksi_aksi')?>">
            <div class="form-group">
                <label>ID Customer</label>
                <input type="text" name="id_customer" class="form-control">
                <?php echo form_error('id_customer','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>ID Mobil</label>
                <input type="text" name="id_mobil" class="form-control">
                <?php echo form_error('id_mobil','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input type="date" name="tgl_pinjam" class="form-control">
                <?php echo form_error('tgl_pinjam','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
            <label>Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" class="form-control">
                <?php echo form_error('tgl_kembali','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Tanggal Pengembalian</label>
                <input type="date" name="tgl_pengembalian" class="form-control">
                <?php echo form_error('tgl_pengembalian','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Status Pengembalian</label>
                <select name="status_pengembalian" class="form-control">
                    <option>----------Pilih Status----------</option>
                    <option value="0">Tepat Waktu</option>
                    <option value="1">Terlambat</option>
                </select>
                <?php echo form_error('status_pengembalian','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Status Transaksi</label>
                <select name="status_transaksi" class="form-control">
                    <option>----------Pilih Status----------</option>
                    <option value="0">Lunas</option>
                    <option value="1">Uang Muka</option>
                </select>
                <?php echo form_error('status_transaksi','<span class="text-small text-danger">','</span>') ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <button type="reset" class="btn btn-sm btn-danger">Hapus</button>
        </form>
</div>