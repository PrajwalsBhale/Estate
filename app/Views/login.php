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
    <div class="row justify-content-center">
      <div class="col-xl-5 col-md-8">
        <form class="rounded-5  p-5">
          <h1>Login</h1>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3">
                  Remember me
                </label>
              </div>
            </div>

            <div class="col text-center">
              <!-- Simple link -->
              <a href="#!" class="link-primary">Forgot password?</a>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-b-n">Sign in</button>
        </form>
      </div>
    </div>
  </section>










</main>

<?= $this->endSection() ?>