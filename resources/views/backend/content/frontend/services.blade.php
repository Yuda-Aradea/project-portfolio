@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio Settings / </span>Section - Services</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="d-flex justify-content-between mt-4 mx-4">
                        <div>
                            <h5 class="mt-2">Portfolio - My Services</h5>
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#services"><i class='bx bx-add-to-queue me-1'></i>Tambah
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
                                                <th>Name Service</th>
                                                <th>Icon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($services as $item)
                                            <tbody class="table-border-bottom-0">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td class="fs-4"><i class="{{ $item->icon }}"></i></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editServices{{ $item->id }}"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button type="button" class="btn ms-2 btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deletServices{{ $item->id }}"><i
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
    <div class="modal fade" id="services" tabindex="-1" data-bs-focus="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Services</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.services') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="nameBasic" class="form-label">Name Services</label>
                                <input type="text" id="nameBasic" class="form-control" name="title" required />
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="nameBasic" class="form-label">Icon</label>
                                <input type="text" id="nameBasic" class="form-control" name="icon" required />
                            </div>

                            <div class="col-md-12 mt-4 mb-4">
                                <label for="nameBasic" class="form-label">Deskripsi Service</label>
                                <textarea id="editor" name="description" class="form-control"></textarea>
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
    @foreach ($services as $item)
        <div class="modal fade" id="editServices{{ $item->id }}" tabindex="-1" data-bs-focus="false"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.services', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="nameBasic" class="form-label">Name Services</label>
                                    <input type="text" id="nameBasic" class="form-control" name="title" required
                                        value="{{ $item->title }}" />
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="nameBasic" class="form-label">Icon</label>
                                    <div class="d-flex justify-content-between">
                                        <div class="col-9">
                                            <input type="text" id="nameBasic" class="form-control" name="icon"
                                                required value="{{ $item->icon }}" />
                                        </div>
                                        <div class="col-2 fs-3">
                                            <i class="{{ $item->icon }}"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-4 mb-4">
                                    <label for="nameBasic" class="form-label">Deskripsi Portfolio</label>
                                    <textarea id="editor{{ $item->id }}" name="description" class="form-control">{!! $item->description !!}</textarea>
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

        <!-- Ckeditor -->
        <script src="{{ asset('backend/assets/ckeditor/ckeditor.js') }}"></script>

        <script>
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };
        </script>

        <script>
            CKEDITOR.replace("editor{{ $item->id }}", options);
            CKEDITOR.config.height = '15rem'
            CKEDITOR.config.clipboard_handleImages = false
        </script>
    @endforeach

    <!-- Modal Hapus category -->
    @foreach ($services as $item)
        <div class="modal fade" id="deletServices{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.services', $item->id) }}" method="post">
                            @csrf @method('DELETE')

                            <div class="row">
                                <div class="col">
                                    <p>Yakin ingin menghapus
                                        data
                                        <strong>{{ $item->title }} ?</strong>
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
