<!-- < # $session = session(); ?> -->


<?= $this->extend('templates/base') ?>

<?= $this->section('profile') ?>

<main id="main">

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">My Profile</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                My Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Single-->




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-3 ">
                <div class="form-outline mb-4">
                    <label class="form-label" for="firstname"> First name </label>
                    <input type="text" name="firstname" id="firstname" class="form-control" disabled value="<?php

                                                                                                            echo $profile_data->get('firstname');

                                                                                                            ?>" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="lastname">Username</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" disabled value="<?php

                                                                                                            echo $profile_data->get('username');

                                                                                                            ?> " />
                    <!-- <span class="text-danger"><# isset($validation) ? display_error($validation, 'lastname') : '' ?></span> -->

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="contact">User Id</label>
                    <input type="text" name="contact" id="contact" class="form-control" disabled value="<?php

                                                                                                        echo $profile_data->get('id');

                                                                                                        ?>" />
                    <!-- <span class="text-danger">
                            <# isset($validation) ? display_error($validation, 'contact' ) : '' ?>
                        </span> -->

                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Last Name</label>
                    <input type="text" name="username" id="username" class="form-control" disabled value="<?php

                                                                                                            echo $profile_data->get('lastname');

                                                                                                            ?> " />
                    <!-- <span class="text-danger"><# isset($validation) ? display_error($validation, 'username') : '' ?></span> -->

                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Email Address </label>
                    <input id="password" disabled value="<?php

                                                            echo $profile_data->get('email');

                                                            ?>" class="form-control" />
                    <!-- <span class="text-danger"><# isset($validation) ? display_error($validation, 'password') : '' ?></span> -->

                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password_confirm">Contact No </label>
                    <input id="password_confirm" disabled value="<?php

                                                                    echo $profile_data->get('contact');

                                                                    ?>" class="form-control" />
                    <!-- <span class="text-danger"><# isset($validation) ? display_error($validation, 'password_confirm') : '' ?></span> -->

                </div>


                <!-- <button type="submit" class="btn btn-b-n">Submit</button> -->
            </div>

        </div>
    </div>

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">My Properties</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center">

            <?php

            if (count($result) > 0) {

                $ct = 0;
                foreach ($result as $rs) {
                    $ct++;
            ?> <label><b> <u> Property <?php echo $ct; ?> </u></b> </label>
                    <div class="col">

                        <div class="form-outline mb-4">
                            <label class="form-label"> Property Title: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_title']; ?>">
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label"> City: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_city']; ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label"> Type: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_type']; ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label"> Area(in sq.ft.): </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_areasize']; ?>">
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-outline mb-4">
                            <label class="form-label"> Description: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_description']; ?>">
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label"> State: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_state']; ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label"> Status: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_status']; ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label"> Bedrooms: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_bedrooms']; ?>">
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-outline mb-4">
                            <label class="form-label"> Address: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_address']; ?>">
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label"> Pincode: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_zipcode']; ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label"> Price: </label>
                            <input class="form-control" type="text" disabled value="<?php echo $rs['property_price']; ?>">
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label"> Bathrooms: </label>
                            <input class="form-control" class="form-control" type="text" disabled value="<?php echo $rs['property_bathrooms']; ?>">
                        </div>
                    </div>
                    <hr>
            <?php
                }
            } else {
                echo "You Didn't Post any property";
            }

            // print_r($result);

            // print_r(count($result));



            ?>



        </div>
    </div>


</main>

<?= $this->endSection() ?>