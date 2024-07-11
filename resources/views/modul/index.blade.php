@extends('layouts.mainlayout')

@section('body')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <a href="">
          <div class="card bg-warning">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Matematika</h2>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-4">
          <a href="">
          <div class="card bg-danger">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Bahasa Indonesia</h2>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-4">
          <a href="">
          <div class="card bg-primary">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Bahasa Inggris</h2>
            </div>
          </div>
          </a>
        </div>
      <div class="row">
        <div class="col-xl-4">
          <a href="">
          <div class="card bg-info">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Fisika</h2>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-4">
          <a href="">
          <div class="card bg-success">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Biologi</h2>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-4">
          <a href="">
          <div class="card bg-secondary">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Kimia</h2>
            </div>
          </div>
          </a>
        </div>
      </div> 
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

@endsection