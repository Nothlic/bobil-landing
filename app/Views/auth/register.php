   <!-- Log In page -->
   <div class="row vh-100 d-flex justify-content-center align-items-center">
       <div class="col-lg-5 h-100">
           <div class="bg-register"></div>
       </div>
       <div class="col-lg-7 col-sm-12">
           <div class="card-body">
               <div class="row">
                   <div class="col-lg-12 mx-auto">
                       <div class="p-form">
                           <div class="card-body p-0 ">
                               <div class=" text-center p-3">
                                   <h4 class="mt-3 mb-1 fw-semibold font-18 text-main">Welcome To Bobil</h4>
                                   <p class="text-muted  mb-0">Let’s get your all set up, so you can begin to make your first order!</p>
                               </div>
                           </div>
                           <div class="card-body pt-0">
                               <form class="my-4" action="<?= route_to('register') ?>" method="post">
                                   <?= csrf_field() ?>
                                   <div class="form-group mb-2">
                                       <label class="form-label" for="email"><?= lang('Auth.email') ?></label>
                                       <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="email" name="email" placeholder="<?= lang('Auth.email') ?>">
                                       <div class="invalid-feedback">
                                           <?= session('errors.email') ?>
                                       </div>
                                   </div>

                                   <div class="form-group mb-2">
                                       <label class="form-label" for="username"><?= lang('Auth.username') ?></label>
                                       <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username" placeholder="<?= lang('Auth.username') ?>">
                                       <div class="invalid-feedback">
                                           <?= session('errors.username') ?>
                                       </div>
                                   </div>
                                   <!--end form-group-->

                                   <div class="form-group mb-2">
                                       <label class="form-label" for="userpassword"><?= lang('Auth.password') ?></label>
                                       <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" id="userpassword" placeholder="<?= lang('Auth.password') ?>">
                                       <div class="invalid-feedback">
                                           <?= session('errors.password') ?>
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="form-label" for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                       <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" id="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                       <div class="invalid-feedback">
                                           <?= session('errors.pass_confirm') ?>
                                       </div>
                                   </div>
                                   <!--end form-group-->

                                   <!--end form-group-->

                                   <div class="form-group mb-0 mt-3 row">
                                       <div class="col-12">
                                           <div class="d-grid mt-3">
                                               <button class="btn btn-primary" type="submit">Sign Up <i class="fas fa-sign-in-alt ms-1"></i></button>
                                           </div>
                                       </div>
                                       <!--end col-->
                                   </div>
                                   <!--end form-group-->
                               </form>
                               <!--end form-->
                               <div class="m-3 text-center text-muted">
                                   <p class="mb-0">Already have an account? <a href="<?= base_url('login') ?>" class="text-primary ms-2"><?= lang('Auth.signIn') ?></a></p>
                               </div>
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