<?= $this->extend('templates/base') ?>

<?= $this->section('login') ?>


<main id="main">


  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Login</h1>
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
                Login
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->


  <section class="container">
    <div class="text-center my-1">
      <h1>Login</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-xl-5 col-md-8">
      <?php if (!empty(session()->getFlashdata('fail'))) :  ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry! </strong><?= session()->getFlashdata('fail'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>
    
        <form action="<?= base_url('Web/check') ?>" method="POST" class="rounded-5  p-5">
      <?= csrf_field(); ?>
           
          <!-- username input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username') ?>"/>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>

          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>

          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">


            <div class="col text-center">
              <!-- Simple link -->
              <a href="<?= base_url('/register') ?>" class="link-primary">Haven't registered?Click here</a>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-b-n">Login</button>
        </form>
      </div>
    </div>
  </section>










</main>

<?= $this->endSection() ?>