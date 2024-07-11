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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ringkasan Pendaftaran Siswa</h5>

              <section class="section">
                <class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="nama-lengkap"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="jenis-kelamin"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="tanggal-lahir"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="email"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">No Handphone</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="no-handphone"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="alamat"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Asal Sekolah</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="asal-sekolah"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Foto</label>
                          <div class="col-sm-9">
                            <img id="foto" src="" alt="Foto" class="img-fluid"/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Nama Orang Tua</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="nama-orang-tua"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Email Orang Tua</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="email-orang-tua"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">No Handphone Orang Tua</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="no-handphone-orang-tua"></p>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                          <div class="col-sm-9">
                            <p class="form-control-plaintext" id="alamat-orang-tua"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </class>

                <!-- Vertically centered Modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                  Simpan
                </button>
                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <i class="bi bi-check-circle me-1"></i>
                          <h4 class="alert-heading">Data Berhasil Disimpan!</h4>
                          <hr>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Ekspor PDF</button>
                        <button type="button" class="btn btn-primary">Selesai</button>
                      </div>
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->
  
        
    </section>
  </main>

@endsection