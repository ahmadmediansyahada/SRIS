@extends('layouts.mainlayout')

@section('body')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Managemen Data Siswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Siswa</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <h5 class="card-title">Tabel Data Siswa</h5>
              <a href="{{route('students.add')}}" class="btn btn-success btn-sm"><i class="bi bi-plus-circle"></i> Tambah Data Siswa</a>
          </div>
          
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</a></tr>
                  </td>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Developer</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</a></tr>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Finance</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</a></tr>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>HR</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</a></tr>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Dynamic Division Officer</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</a></tr>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

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