@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio Settings / </span>Section - Home</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio Section Home</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="{{ route('store.section.home') }}" id="formAccountSettings" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="row">
                                <hr class="mb-4">

                                <div class="mb-4 col-md-6">
                                    <label for="email" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="email" name="name"
                                        value="{{ $home->name }}" />
                                </div>

                                <div class="mb-4 col-md-6">
                                    <label for="email" class="form-label">Title</label>
                                    <input class="form-control" type="text" id="email" name="title"
                                        value="{{ $home->title }}" />
                                </div>

                                <div class="mb-4 col-md-12">
                                    <label for="email" class="form-label">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $home->description }}</textarea>
                                </div>


                                <div class="mb-4 col-md-6">
                                    <label for="firstName" class="form-label">Home Background <small
                                            class="text-lowercase">*for dekstop
                                            view</small></label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm2" data-input="thumbnail2" data-preview="holder2"
                                                class="btn btn-primary text-white">
                                                <i class="ri-image-add-line"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail2" class="form-control" type="text"
                                            value="{{ $home->home_bg }}" name="home_bg" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 mt-3" id="holder2"><img src="{{ asset($home->home_bg) }}"
                                                alt="" style="width: 200px" class="rounded"></div>
                                    </div>
                                </div>

                                <div class="mb-4 col-md-6">
                                    <label for="firstName" class="form-label">Home Image <small class="text-lowercase">*for
                                            mobile
                                            view</small></label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                class="btn btn-primary text-white">
                                                <i class="ri-image-add-line"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text"
                                            value="{{ $home->photo_mobile }}" name="photo_mobile" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 mt-3" id="holder"><img
                                                src="{{ asset($home->photo_mobile) }}" alt="" style="width: 200px"
                                                class="rounded"></div>
                                    </div>
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Messenger</label>
                                    <input class="form-control" type="text" id="email" name="messenger"
                                        value="{{ $home->messenger }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Whatsapp</label>
                                    <input class="form-control" type="text" id="email" name="whatsapp"
                                        value="{{ $home->whatsapp }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ $home->email }}" />
                                </div>


                            </div>
                            <div class="mt-2 text-end">
                                <button type="reset" class="btn btn-outline-secondary me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary ">Save changes</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
