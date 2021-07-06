<?= $this->extend('templates/base') ?>

<?= $this->section('post_property') ?>

<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Post Property</h1>
            <span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus amet. Et esse sed omnis inventore hic culpa.</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Post Property
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- Property Submit Section Begin -->
  <section class="property-submit-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="property-submit-form">
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
            <form action="<?= base_url('/Web/post_property') ?>" enctype="multipart/form-data" method="POST">
              <div class="pf-title">
                <h4>Title</h4>
                <div class="text-danger"><?= isset($validation) ? display_error($validation, 'title') : '' ?></div>
                <input type="text" name="title" placeholder="Your Title* (eg. name of your house)" value="<?= set_value('title') ?>" />
              </div>
              <div class="pf-title">
                <h4>Description</h4>
                <div class="text-danger"><?= isset($validation) ? display_error($validation, 'description') : '' ?></div>
                <textarea type="text" name="description" style="height: 100px; width: 300px;" placeholder="Enter Description"><?= set_value('description') ?></textarea>
              </div>

              <div class="pf-location">
                <h4>Property Location</h4>
                <div class="location-inputs">
                  <div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'address') : '' ?></div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'city') : '' ?></div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'state') : '' ?></div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'country') : '' ?></div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'zipcode') : '' ?></div>
                  </div>
                  <input type="text" name="address" placeholder="Address" value="<?= set_value('address') ?>" />
                  <input type="text" name="city" placeholder="City" value="<?= set_value('city') ?>" />
                  <input type="text" name="state" placeholder="State" value="<?= set_value('state') ?>" />
                  <input type="text" name="country" placeholder="Country" value="<?= set_value('country') ?>" />
                  <input type="text" name="zipcode" placeholder="Postal Code / Zip" value="<?= set_value('zipcode') ?>" />
                </div>
              </div>

              <div class="pf-type">
                <h4>Property type</h4>
                <div class="fp-inputs">
                  <div class="text-danger"><?= isset($validation) ? display_error($validation, 'property_type') : '' ?></div>
                  <input type="text" name="property_type" placeholder="Apartment/House/Office/Villa/Store/Resturent" value="<?= set_value('property_type') ?>" />
                </div>
              </div>
              <div class="pf-status">
                <h4>Property status</h4>
                <div class="fp-inputs">
                  <div class="text-danger"><?= isset($validation) ? display_error($validation, 'property_status') : '' ?></div>
                  <input type="text" name="property_status" placeholder="Rent/Sale" value="<?= set_value('property_status') ?>" />
                </div>
              </div>
              <div class="pf-feature-price">
                <h4>Featured Price</h4>
                <div class="fp-inputs">
                  <div class="text-danger"><?= isset($validation) ? display_error($validation, 'price') : '' ?></div>
                  <input type="text" name="price" placeholder="Price in Rupees" value="<?= set_value('price') ?>" />
                </div>
              </div>
              <div class="pf-feature">
                <h4>Property Features</h4>
                <div class="fp-inputs">
                  <div class="text-danger"><?= isset($validation) ? display_error($validation, 'features') : '' ?></div>
                  <input type="text" name="features" placeholder="Any features you want to mention" value="<?= set_value('features') ?>" />
                </div>
              </div>
              <div class="pf-feature-image">
                <h4>Featured Image</h4>
                <div class="text-danger"><?= isset($validation) ? display_error($validation, 'image') : '' ?></div>
                <div class="feature-image-content">
                  <input type="file" name="image" accept=".jpg,.jpeg,.png">
                </div>
              </div>

              <div class="pf-property-details">
                <h4>Property details</h4>
                <div class="property-details-inputs">
                  <div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'areasize') : '' ?></div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'bed') : '' ?></div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'bath') : '' ?></div>
                    <div class="text-danger"><?= isset($validation) ? display_error($validation, 'garage') : '' ?></div>
                  </div>
                  <input type="text" name="areasize" placeholder="Area Size" value="<?= set_value('areasize') ?>" />
                  <input type="text" name="bed" placeholder="Bedrooms" value="<?= set_value('bed') ?>" />
                  <input type="text" name="bath" placeholder="Bathrooms" value="<?= set_value('bath') ?>" />
                  <input type="text" name="garage" placeholder="Garages" value="<?= set_value('garage') ?>" />
                </div>
                <button type="submit" class="btn btn-b-n">Submit Property</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->endSection() ?>