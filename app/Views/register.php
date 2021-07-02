<?= $this->extend('templates/base') ?>

<?= $this->section('register') ?>


<main id="main">


  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Register</h1>
            <span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos.</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Register
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Intro Single-->




  <div class="container">
    <div class="text-center my-1">
      <h1>Register</h1>
    </div>
    <?php if (!empty(session()->getFlashdata('fail'))) :  ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry! </strong><?= session()->getFlashdata('fail'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>
    <?php if (!empty(session()->getFlashdata('success'))) :  ?>
      <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <strong>Success! </strong><?= session()->getFlashdata('success'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>
    <form action="<?= base_url('Web/save_user') ?>" method="POST">
      <?= csrf_field(); ?>
      <div class="row justify-content-center">

        <div class="col-sm-3 ">
          <div class="form-outline mb-4">
            <label class="form-label" for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="<?= set_value('firstname') ?>" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'firstname') : '' ?></span>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="<?= set_value('lastname') ?>" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'lastname') : '' ?></span>

          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="email">Email address</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= set_value('email') ?>" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>

          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="contact">Contact</label>
            <input type="text" name="contact" id="contact" class="form-control" value="<?= set_value('contact') ?>" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'contact') : '' ?></span>

          </div>
        </div>
        <div class="col-sm-3 ">
          <div class="form-outline mb-4">
            <label class="form-label" for="username">User Name</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username') ?>" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>

          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>

          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="password_confirm">Confirm Password</label>
            <input type="password" name="password_confirm" id="password_confirm" class="form-control" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password_confirm') : '' ?></span>

          </div>


          <button type="submit" class="btn btn-b-n">Submit</button>
        </div>

      </div>

    </form>


    <div class="row mb-4">


      <div class="col text-center">

        <a href="<?= base_url('/login') ?>" class="link-primary">Already have an account?Login</a>
      </div>
    </div>

  </div>






</main>

<?= $this->endSection() ?>