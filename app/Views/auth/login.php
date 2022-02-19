   <!-- Log In page -->
   <?= view('Myth\Auth\Views\_message_block') ?>
   <div class="row vh-100 d-flex justify-content-center align-items-center">
   	<div class="col-lg-5 h-100 d-sm-none d-none d-lg-block">
   		<div class="bg-login"></div>
   	</div>
   	<div class="col-lg-7 col-sm-12">
   		<div class="card-body">
   			<div class="row">
   				<div class="col-lg-12 mx-auto">
   					<div class="p-form">
   						<div class="card-body p-0 ">
   							<div class=" text-center p-3">
   								<h4 class="mt-3 mb-1 fw-semibold font-18 text-main">Sign in to the Bobil</h4>
   								<p class="text-muted  mb-0">Enter your details below.</p>
   							</div>
   						</div>
   						<div class="card-body pt-0">
   							<form class="my-4" action="<?= route_to('login') ?>" method="post">
   								<?= csrf_field() ?>
   								<?php if ($config->validFields === ['email']) : ?>
   									<div class="form-group mb-2">
   										<label class="form-label" for="username"><?= lang('Auth.email') ?></label>
   										<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="username" name="login" placeholder="<?= lang('Auth.email') ?>">
   										<div class="invalid-feedback">
   											<?= session('errors.login') ?>
   										</div>
   									</div>
   								<?php else : ?>
   									<div class="form-group mb-2">
   										<label class="form-label" for="login"><?= lang('Auth.emailOrUsername') ?></label>
   										<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="login" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
   										<div class="invalid-feedback">
   											<?= session('errors.login') ?>
   										</div>
   									</div>
   								<?php endif; ?>
   								<!--end form-group-->

   								<div class="form-group">
   									<label class="form-label" for="userpassword"><?= lang('Auth.password') ?></label>
   									<input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" id="userpassword" placeholder="<?= lang('Auth.password') ?>">
   									<div class="invalid-feedback">
   										<?= session('errors.password') ?>
   									</div>
   								</div>
   								<!--end form-group-->

   								<div class="form-group row mt-3">
   									<?php if ($config->allowRemembering) : ?>
   										<div class="col-sm-6" hidden>
   											<div class="form-check form-switch form-switch-success">
   												<input class="form-check-input" type="checkbox" id="customSwitchSuccess">
   												<label class="form-check-label" for="customSwitchSuccess" <?php if (old('remember')) : ?> checked <?php endif ?>><?= lang('Auth.rememberMe') ?></label>
   											</div>
   										</div>
   									<?php endif; ?>

   									<!--end col-->
   									<div class="col-sm-12 text-end " hidden>
   										<a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
   									</div>
   									<!--end col-->
   								</div>
   								<!--end form-group-->

   								<div class="form-group mb-0 row">
   									<div class="col-12">
   										<div class="d-grid mt-3">
   											<button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
   										</div>
   									</div>
   									<!--end col-->
   								</div>
   								<!--end form-group-->
   							</form>
   							<!--end form-->
   							<!-- <div class="m-3 text-center text-muted">
   								<p class="mb-0">Don't have an account ? <a href="<?= base_url('register') ?>" class="text-primary ms-2">Sign Up</a></p>
   							</div> -->
   						</div>
   						<!--end card-body-->
   					</div>
   					<!--end card-->
   				</div>
   				<!--end col-->
   			</div>
   			<!--end row-->
   		</div>
   	</div>
   	<!--end col-->
   	<!--end row-->
   </div>
   <!--end container-->