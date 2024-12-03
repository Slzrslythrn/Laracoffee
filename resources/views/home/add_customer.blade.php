@extends('/layouts.main')

@push('css-dependencies')
<link rel="stylesheet" type="text/css" href="/css/product.css" />
@endpush

@push('scripts-dependencies')
<script src="/js/product.js" type="module"></script>
@endpush

@section('content')
<div class="container-fluid p-4" style="background: #eee;">

  @include('partials/breadcumb')

  <div class="row flex-lg-nowrap">

    <div class="col">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="#" class="active nav-link">Form of {{ $title }}</a></li>
                </ul>
                <div class="tab-content pt-3">
                  <div class="tab-pane active">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                              <!-- Form -->
                              <form action="/home/add_customer" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="fullname">Full Name</label>
                                <input class="form-control @error('full_name') is-invalid @enderror" type="text"
                                  id="full_name" name="full_name" placeholder="Enter Fullname"
                                  value="{{ old('full_name') }}">
                                @error('full_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                              <!-- Form -->
                              <form action="/home/add_customer" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="username">UserName</label>
                                <input class="form-control @error('username') is-invalid @enderror" type="text"
                                  id="username" name="username" placeholder="Enter Username"
                                  value="{{ old('username') }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                              <!-- Form -->
                              <form action="/home/add_customer" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="email">E-Mail</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                  id="email" name="email" placeholder="Enter E-mail"
                                  value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                              <!-- Form -->
                              <form action="/home/add_customer" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="password">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                  id="password" name="password" placeholder="Enter Password"
                                  value="{{ old('password') }}">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="col-lg-12 mb-3">
                            <div class="custom-file">
                              <label class="custom-file-label" for="image">Profile Picture</label> <br>
                              <img class="img-account-profile mb-2 d-block" id="image-preview" width="150"
                                alt="Default Product Image" src="{{ asset('storage/' . env('IMAGE_PRODUCT')) }}">
                              <input type="file" class="custom-file-input" id="image" name="image">
                              @error('image')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                              <div class="form-group">
                                <!-- Form -->
                                <form action="/home/add_customer" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <label for="phone">Phone</label>
                                  <input class="form-control @error('phone') is-invalid @enderror" type="number"
                                    id="phone" name="phone" placeholder="Enter phone"
                                    value="{{ old('phone') }}">
                                  @error('phone')
                                  <div class="text-danger">{{ $message }}</div>
                                  @enderror
                              </div>
                            </div> 
                            <div class="form-group">
                              <label for="gender">Gender</label>
                              <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                                <option value="">Select Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                              </select>
                              @error('gender')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="role">Role</label>
                              <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
                                <option value="">Select Role</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Customer</option>
                              </select>
                              @error('role')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3"
                                id="alamat" name="alamat"
                                placeholder="Enter Alamat">{{ old('alamat') }}</textarea>
                              @error('alamat')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <a class="btn btn-primary mx-3" href="/product">Back to Customer List</a>
                        <button class="btn btn-primary" type="submit">Add Customer</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
