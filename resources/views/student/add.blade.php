@extends('layouts.mainlayout')

@section('body')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pendaftaran Siswa Baru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/dashboard/students">Siswa</a></li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pendaftaran Siswa Baru</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Nama Lengkap</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <div class="row md-6"> 
                    <div class="form-floating">
                      <input type="date" class="form-control" id="floatingDate" placeholder="Tanggal Lahir">
                      <label for="floatingDate">Tanggal Lahir</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">E-mail</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Nomor Handphone</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password Akun</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Konfirmasi Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Alamat</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City">
                      <label for="floatingCity">Asal Sekolah</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input class="form-control" type="file" id="floatingformFile">
                    <label for="floatingformFile">Upload Foto</label>
                  </div>
                </div>
              </form><!-- End floating Labels Form -->
              <h5 class="card-title">Data Orang Tua Siswa</h5>
              <form class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Nama Orang Tua Siswa</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">E-mail</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Nomor Handphone</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Alamat</label>
                  </div>
                </div>
              </form><!-- End floating Labels Form -->
            </div>
          </div>
        </div>
        
        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Program Belajar</h5>
              <!-- Advanced Form Elements -->
              <form>
                <div class="row mb-5 align-items-center">
                  <label class="col-sm-2 col-form-label">Kelas</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="btn-check" id="btn-check-7" autocomplete="off">
                      <label class="btn btn-primary" for="btn-check-7">7</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="btn-check" id="btn-check-8" autocomplete="off">
                      <label class="btn btn-primary" for="btn-check-8">8</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="btn-check" id="btn-check-9" autocomplete="off">
                      <label class="btn btn-primary" for="btn-check-9">9</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="btn-check" id="btn-check-10" autocomplete="off">
                      <label class="btn btn-danger" for="btn-check-10">10</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="btn-check" id="btn-check-11" autocomplete="off">
                      <label class="btn btn-danger" for="btn-check-11">11</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="btn-check" id="btn-check-12" autocomplete="off">
                      <label class="btn btn-danger" for="btn-check-12">12</label>
                    </div>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
          <div class="d-grid gap-2 mt-3">
            <a href="{{route('students.confirm')}}" class="btn btn-success">Berikutnya</a>
            </a>
          </div>
        </div>
        
      </div>
    </section>
  </main>

@endsection