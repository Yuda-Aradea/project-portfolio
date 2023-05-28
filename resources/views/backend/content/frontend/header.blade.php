@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio Settings / </span>Header</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio Header</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="{{ route('store.header') }}" id="formAccountSettings" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="row">
                                <hr class="mb-4">
                                <div class="mb-4 col-md-5">
                                    <label for="firstName" class="form-label">Favicon</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm3" data-input="thumbnail2" data-preview="holder"
                                                class="btn btn-primary text-white">
                                                <i class="ri-image-add-line"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail2" class="form-control" type="text"
                                            value="{{ $header->favicon }}" name="favicon" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 mt-3" id="holder"><img src="{{ asset($header->favicon) }}"
                                                alt="" style="width: 60px" class="rounded"></div>
                                    </div>
                                </div>

                                <div class="mb-4 col-md-2">
                                    <label for="email" class="form-label">Title</label>
                                    <input class="form-control" type="text" id="email" name="title"
                                        value="{{ $header->title }}" />
                                </div>

                                <div class="mb-4 col-md-1">
                                    <label for="email" class="form-label">Logo</label>
                                    <input class="form-control" type="text" id="email" name="logo"
                                        value="{{ $header->logo }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Copyright</label>
                                    <input class="form-control" type="text" id="email" name="copyright"
                                        value="{{ $header->copyright }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Facebook Url</label>
                                    <input class="form-control" type="text" id="email" name="facebook"
                                        value="{{ $header->facebook }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Instagram Url</label>
                                    <input class="form-control" type="text" id="email" name="instagram"
                                        value="{{ $header->instagram }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Twitter Url</label>
                                    <input class="form-control" type="text" id="email" name="twitter"
                                        value="{{ $header->twitter }}" />
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
