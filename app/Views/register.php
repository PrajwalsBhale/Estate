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
  </section><!-- End Intro Single-->


  <!-- <section class="container">
    <div class="row justify-content-center">
       <div class="col-xl-3 col-md-5">
         <div class="rounded-5 p-5">
          <h1 class="mb-5">Profile</h1>
         </div>
       </div>
      <div class="col-xl-5 col-md-8">
        <form class="rounded-5  p-5">
          <h1 class="mb-5">Register</h1>

          <div class="form-outline mb-4">
            <input type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">First Name</label>
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Last name</label>
          </div>

          <div class="form-outline mb-4">
            <input type="email" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Email address</label>
          </div>

          <div class="form-outline mb-4">
            <input type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
          </div>

          <div class="form-outline mb-4">
            <input type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Confirm Password</label>
          </div>

        

          <button type="submit" class="btn btn-b-n">Submit</button>
        </form>
      </div>
    </div>
  </section> -->


  <div class="container text-center">
    <h1>Register</h1>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-3 ">
        <div class="contain">
          <div class="wrapper">
            <div class="image">
              <img src="" alt="">
            </div>
            <div class="content">
              <div class="icon">
                <i class="fas fa-cloud-upload-alt"></i>
              </div>
              <div class="text">
                No file chosen, yet!
              </div>
            </div>
            <div id="cancel-btn">
              <i class="fas fa-times"></i>
            </div>
            <div class="file-name">
              File name here
            </div>
          </div>
          <button onclick="defaultBtnActive()" id="custom-btn">Choose a Profile</button>
          <input id="default-btn" type="file" hidden>
        </div>

      </div>


      <div class="col-sm-3 ">
          <form action="">
          <div class="form-outline mb-4">
            <input type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">First Name</label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Last Name</label>
          </div>
          <div class="form-outline mb-4">
            <input type="email" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Email address</label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Contact</label>
          </div>
        </div>
        <div class="col-sm-3 ">
          <div class="form-outline mb-4">
            <input type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
          </div>
          <div class="form-outline mb-4">
            <input type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Confirm Password</label>
          </div>
        <button type="submit" class="btn btn-b-n">Submit</button>

        </div>
          

      </form>

    </div>

  </div>







</main>

<?= $this->endSection() ?>