@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio Settings / </span>Section - Testimonials
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="d-flex justify-content-between mt-4 mx-4">
                        <div>
                            <h5 class="mt-2">Portfolio - Testimonials</h5>
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#testimonials"><i class='bx bx-add-to-queue me-1'></i>Tambah
                                Data</button>
                        </div>
                    </div>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="table-responsive text-nowrap ">
                                    <table class="table table-striped table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">No</th>
                                                <th>Name Customer</th>
                                                <th>Title</th>
                                                <th>Photo</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($testi as $item)
                                            <tbody class="table-border-bottom-0">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td><img src="{{ asset($item->photos) }}" class="rounded-circle"
                                                        alt="" style="width: 40px"></td>
                                                <td>{{ $item->date }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editTestimonials{{ $item->id }}"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button type="button" class="btn ms-2 btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deletTestimonials{{ $item->id }}"><i
                                                            class="bx
                                                        bx-trash"></i></button>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah Category -->
    <div class="modal fade" id="testimonials" tabindex="-1" data-bs-focus="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Testimonials</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.testimonials') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="nameBasic" class="form-label">Nama Customer</label>
                                <input type="text" id="nameBasic" class="form-control" name="name" required />
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="nameBasic" class="form-label">Title</label>
                                <input type="text" id="nameBasic" class="form-control" name="title" required />
                            </div>

                            <div class="col-md-6">
                                <label for="firstName" class="form-label">Customer Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder"
                                            class="btn btn-primary text-white">
                                            <i class="ri-image-add-line"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photos" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 mt-3 mb-4" id="holder"><img src="" alt=""
                                            style="width: 200px" class="rounded"></div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="nameBasic" class="form-label">Tanggal</label>
                                <input type="text" id="nameBasic" class="form-control" name="date" required />
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="email" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Portfolio -->
    @foreach ($testi as $item)
        <div class="modal fade" id="editTestimonials{{ $item->id }}" tabindex="-1" data-bs-focus="false"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Testimonials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.testimonials', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="nameBasic" class="form-label">Nama Customer</label>
                                    <input type="text" id="nameBasic" class="form-control" name="name" required
                                        value="{{ $item->name }}" />
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="nameBasic" class="form-label">Title</label>
                                    <input type="text" id="nameBasic" class="form-control" name="title"
                                        value="{{ $item->title }}" required />
                                </div>

                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">Customer Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm{{ $item->id }}" data-input="thumbnail{{ $item->id }}"
                                                data-preview="holder{{ $item->id }}"
                                                class="btn btn-primary text-white">
                                                <i class="ri-image-add-line"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail{{ $item->id }}" class="form-control" type="text"
                                            name="photos" value="{{ $item->photos }}" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 mt-3 mb-4" id="holder{{ $item->id }}"><img
                                                src="{{ asset($item->photos) }}" alt="" style="width: 200px"
                                                class="rounded">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="nameBasic" class="form-label">Tanggal</label>
                                    <input type="text" id="nameBasic" class="form-control" name="date" required
                                        value="{{ $item->date }}" />
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="email" class="form-label">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $item->description }}</textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- File Manager -->
        <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
        <script>
            $("#lfm{{ $item->id }}").filemanager('file');
        </script>
    @endforeach

    <!-- Modal Hapus category -->
    @foreach ($testi as $item)
        <div class="modal fade" id="deletTestimonials{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Testimonials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.testimonials', $item->id) }}" method="post">
                            @csrf @method('DELETE')

                            <div class="row">
                                <div class="col">
                                    <p>Yakin ingin menghapus
                                        data
                                        <strong>{{ $item->name }} ?</strong>
                                    </p>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
