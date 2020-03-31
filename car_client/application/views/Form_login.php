<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_customer/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
             

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
                <span class="m-2"><?php echo $this->session->flashdata('pesan'); ?></span>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('Auth/login')?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?php echo base_url('Register')?>">Create One</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



            </div>
          </div>
        </div>
      </div>
    </div>

            