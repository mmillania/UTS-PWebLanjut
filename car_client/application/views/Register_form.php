<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
    <section class="section">
    
      <div class="container">
      
        <div class="row mb-4">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h4>Buat Akun Baru</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('Register')?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input id="no_ktp" type="text" class="form-control" name="no_ktp">
                    <?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <label for="no_tlp">No Telpon</label>
                    <input id="no_tlp" type="text" class="form-control" name="no_tlp">
                    <?php echo form_error('no_tlp','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="gender">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="">---Pilih Gender---</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                      <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <?php echo form_error('usernames','<div class="text-small text-danger">','</div>') ?>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Buat Akun Saya
                    </button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
