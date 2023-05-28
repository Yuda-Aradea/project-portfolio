@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="{{ route('store.profile') }}" id="formAccountSettings" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <input type="hidden" name="old_image" value="{{ $user->photos }}">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ asset($user->photos) }}" alt="user-avatar" class="d-block rounded"
                                    height="100" width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" name="photos" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
                                    <p class="text-muted mb-0">Allowed JPG,JPEG, GIF or PNG. Max size of 2MB</p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <hr class="mb-4">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="firstName" name="name"
                                        value="{{ $user->name }}" autofocus />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ $user->email }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">ID (+62)</span>
                                        <input type="text" id="phoneNumber" name="phone_number" class="form-control"
                                            value="{{ $user->phone_number }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $user->address }}" />
                                </div>
                            </div>
                            <div class="mt-2 text-end">
                                <button type="reset" class="btn btn-outline-secondary me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary ">Save changes</button>

                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Account -->
            </div>
        </div>

        {{-- Update password --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header mb-2">Update Password</h5>
                    <div class="card-body">

                        {{-- @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible " role="alert">
                                    {{ $error }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endforeach
                        @endif --}}


                        <form method="post" action="{{ route('update.password') }}">
                            @csrf @method('PATCH')

                            <div class="row mb-4 align-items-center mt-4">
                                <div class="col-md-2">
                                    <label for="firstName" class="form-label">Current Password</label>
                                </div>
                                <div class="form-password-toggle col-md-4">
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password"
                                            class="form-control @if (Session::has('password')) ? is-invalid : '' @endif @error('current_password') is-invalid @enderror"
                                            name="current_password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text showPassword cursor-pointer"><i
                                                class="bx bx-hide"></i></span>

                                        {{-- Error jika password tidak sama dengan database --}}
                                        @if (Session::has('password'))
                                            <div class="invalid-feedback">
                                                current password is not match!
                                            </div>
                                        @endif

                                        {{-- Error validate current__password --}}
                                        @error('current_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- end row --}}

                            <div class="row mb-4 align-items-center">
                                <div class="col-md-2">
                                    <label for="firstName" class="form-label">New Password</label>
                                </div>
                                <div class="form-password-toggle col-md-4">
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            name="new_password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text showPassword cursor-pointer"><i
                                                class="bx bx-hide"></i></span>

                                        {{-- Error validate new__password --}}
                                        @error('new_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- end row --}}

                            <div class="row mb-4 align-items-center">
                                <div class="col-md-2">
                                    <label for="firstName" class="form-label">Confirmation Password</label>
                                </div>
                                <div class="form-password-toggle col-md-4">
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password"
                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                            name="confirm_password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text showPassword cursor-pointer"><i
                                                class="bx bx-hide"></i></span>

                                        {{-- Error validate confirm__password --}}
                                        @error('confirm_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- end row --}}
                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
