<?= $this->extend('templates/base') ?>

<?= $this->section('home') ?>

<?= $this->include('partials/carousal') ?>


<main id="main">
<?= $this->include('partials/services') ?>
<?= $this->include('partials/property_home') ?>
<?= $this->include('partials/agent_home') ?>
<?= $this->include('partials/latest_property_home') ?>
<?= $this->include('partials/testimonials.php') ?>





</main>
 
<?= $this->endSection() ?>


