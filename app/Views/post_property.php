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
            <form action="#">
              <div class="pf-title">
                <h4>Title</h4>
                <input type="text" placeholder="Your Title*">
              </div>

              <div class="pf-location">
                <h4>Property Location</h4>
                <div class="location-inputs">
                  <input type="text" placeholder="Address">
                  <input type="text" placeholder="Neighborhood">
                  <input type="text" placeholder="City">
                  <input type="text" placeholder="State">
                  <input type="text" placeholder="Country">
                  <input type="text" placeholder="Posta Code / Zip">
                </div>
              </div>

              <div class="pf-type">
                <h4>Property type</h4>
                <div class="type-item">
                  <label for="pt-apart">Apartment
                    <input type="checkbox" id="pt-apart">
                    <span class="checkbox"></span>
                  </label>
                  <label for="pt-house">House
                    <input type="checkbox" id="pt-house">
                    <span class="checkbox"></span>
                  </label>
                  <label for="pt-off">Office
                    <input type="checkbox" id="pt-off">
                    <span class="checkbox"></span>
                  </label>
                  <label for="pt-villa">Villa
                    <input type="checkbox" id="pt-villa">
                    <span class="checkbox"></span>
                  </label>
                  <label for="pt-store">Store
                    <input type="checkbox" id="pt-store">
                    <span class="checkbox"></span>
                  </label>
                  <label for="pt-rest">Resturent
                    <input type="checkbox" id="pt-rest">
                    <span class="checkbox"></span>
                  </label>
                </div>
              </div>
              <div class="pf-status">
                <h4>Property status</h4>
                <div class="status-item">
                  <label for="ps-rent">For rent
                    <input type="checkbox" id="ps-rent">
                    <span class="checkbox"></span>
                  </label>
                  <label for="ps-sale">For sale
                    <input type="checkbox" id="ps-sale">
                    <span class="checkbox"></span>
                  </label>
                </div>
              </div>
              <div class="pf-feature-price">
                <h4>Featured Price</h4>
                <div class="fp-inputs">
                  <input type="text" placeholder="Price">
                  <input type="text" placeholder="Second Price ( Optional )">
                  <input type="text" placeholder="After Price Label (ex: monthly)">
                </div>
              </div>
              <div class="pf-feature">
                <h4>Property Features</h4>
                <div class="features-list">
                  <div class="feature-item">
                    <label for="air">Air conditioning
                      <input type="checkbox" id="air">
                      <span class="checkbox"></span>
                    </label>
                    <label for="lundry">Laundry
                      <input type="checkbox" id="lundry">
                      <span class="checkbox"></span>
                    </label>
                    <label for="refrigerator">Refrigerator
                      <input type="checkbox" id="refrigerator">
                      <span class="checkbox"></span>
                    </label>
                    <label for="washer">Washer
                      <input type="checkbox" id="washer">
                      <span class="checkbox"></span>
                    </label>
                  </div>
                  <div class="feature-item">
                    <label for="barbeque">Barbeque
                      <input type="checkbox" id="barbeque">
                      <span class="checkbox"></span>
                    </label>
                    <label for="lawn">Lawn
                      <input type="checkbox" id="lawn">
                      <span class="checkbox"></span>
                    </label>
                    <label for="sauna">Sauna
                      <input type="checkbox" id="sauna">
                      <span class="checkbox"></span>
                    </label>
                    <label for="wifi">Wifi
                      <input type="checkbox" id="wifi">
                      <span class="checkbox"></span>
                    </label>
                  </div>
                  <div class="feature-item">
                    <label for="dryer">Dryer
                      <input type="checkbox" id="dryer">
                      <span class="checkbox"></span>
                    </label>
                    <label for="microwave">Microwave
                      <input type="checkbox" id="microwave">
                      <span class="checkbox"></span>
                    </label>
                    <label for="pool">Swimming Pool
                      <input type="checkbox" id="pool">
                      <span class="checkbox"></span>
                    </label>
                    <label for="window">Window Coverings
                      <input type="checkbox" id="window">
                      <span class="checkbox"></span>
                    </label>
                  </div>
                  <div class="feature-item">
                    <label for="gym">Gym
                      <input type="checkbox" id="gym">
                      <span class="checkbox"></span>
                    </label>
                    <label for="shower">OutdoorShower
                      <input type="checkbox" id="shower">
                      <span class="checkbox"></span>
                    </label>
                    <label for="tv">Tv Cable
                      <input type="checkbox" id="tv">
                      <span class="checkbox"></span>
                    </label>
                    <label for="villa">Villa
                      <input type="checkbox" id="villa">
                      <span class="checkbox"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="pf-feature-image">
                <h4>Featured Image</h4>
                <div class="feature-image-content">
                  <div class="image-uploader"><input type="file" id="images-1624612104881" name="images[]" accept=".jpg,.jpeg,.png,.gif,.svg" multiple="multiple">
                    <div class="uploaded"></div>
                    <div class="upload-text"><i class="fa fa-cloud-upload"></i><span>Drag &amp; Drop files here or click to browse</span></div>
                  </div>
                </div>
              </div>
              <div class="pf-property-details">
                <h4>Property details</h4>
                <div class="property-details-inputs">
                  <input type="text" placeholder="Property ID">
                  <input type="text" placeholder="Area Size ( Only digits )">
                  <input type="text" placeholder="Size Prefix">
                  <input type="text" placeholder="Bedrooms">
                  <input type="text" placeholder="Bathrooms">
                  <input type="text" placeholder="Garages">
                  <input type="text" placeholder="Garages Size">
                  <input type="text" placeholder="Year Built">
                  <input type="text" placeholder="Virtual Tour Video URL">
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