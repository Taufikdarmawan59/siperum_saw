
<div class="login-box bg-warning" style="border-radius: 20px 20px 20px 20px;">
  <div class="login-logo">
    <a href="assets/index2.html"><b>SIPERUM</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?= $this->session->flashdata('message'); ?>
      <form role="form" class="user" method="post" action="<?= base_url('auth'); ?>">
        <div class="input-group">
          <input type="text" class="form-control form-control-user" id="email" name="email" 
            placeholder="Enter Email Address..." value="<?= set_value ('email'); ?>">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <small>username : admin@gmail.com</small>
        </div>
        <div class="input-group ">
           <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <small>password : 12345678</small>
        </div>
        <div class="row">
           <div class="col-8">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck" onclick="myFunction()">
                    <label class="custom-control-label" for="customCheck">Show Password</label>
                  </div>
                </div>
          <!-- /.col -->
          <div class="col-4 m-auto">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <!-- <p>- OR -</p> -->
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script>
        function myFunction() {
            var x = document.getElementById('password');
            if (x.type === "password") {
               x.type = "text"; 
            }else {
                x.type = "password"
            }
        }
    </script>