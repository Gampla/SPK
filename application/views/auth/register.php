  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/');?>img/logoside.png" alt="logo" width="300" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>REGISTER</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/register');?>">
				
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" class="form-control" 
					name="name" value="<?php echo set_value('name');?>">
					<?php echo form_error('name');?>
				  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control"
					name="email" value="<?php echo set_value('email');?>">
					<?php echo form_error('email');?>
				  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password1" class="d-block">Password</label>
                      <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password1">               
						<?php echo form_error('password1');?>
					<div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
			<div class="mt-5 text-muted text-center">
              <a href="auth-register.html">Forgot Password?</a>
            <div>  
			  <a href="<?php echo base_url('auth');?>">Already have an account? Login</a>
            </div>
			</div>
            <div class="simple-footer">
              Copyright &copy; Karya Tembaga 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
