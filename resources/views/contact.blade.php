@extends('layouts.app')
@section('content')


<!-- success -->
<div class="container col-12 mb-2 mt-5">
  <div class="">
  @if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!-- /success -->
<!-- error -->
  @error('name')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Gagal terkirim | pesan minimal 5 karakter </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
@enderror
@error('message')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Gagal terkirim | nama minimal 3 karakter </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
@enderror
  </div>
</div>
  <!-- /error -->

<section class="vh-95" style="z-index:-5;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-12">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-4 col-lg-5 d-none d-md-block">
              <img src="{{ asset('img/mail-removebg-preview.png') }}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-8 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form action="{{ route('contact.send')}}" method="post">
                 @csrf

                  <div class="d-flex align-items-center mb-3 pb-1 ">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0" align="center">Contact</span>
                  </div>

                  <!-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5> -->

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Nama </label>
                    <input type="text" id="form2Example17" name="name" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Email </label>
                    <input type="email" id="form2Example27" name="email" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Pesan </label>
                    <textarea id="message" name="message" cols="20" rows="5" class="form-control form-control-lg"></textarea>
                  </div>

                  <div class="pt-1 mb-2 d-flex justify-content-center align-items-center">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Kirim</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection