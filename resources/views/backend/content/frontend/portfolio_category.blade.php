@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio Settings / </span>Section - Portfolio</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="d-flex justify-content-between mt-4 mx-4">
                        <div>
                            <h5 class="mt-2">Portfolio - Category</h5>
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#category"><i class='bx bx-add-to-queue me-1'></i>Tambah
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
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($category as $item)
                                            <tbody class="table-border-bottom-0">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editCategory{{ $item->id }}"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button type="button" class="btn ms-2 btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deletCategory{{ $item->id }}"><i
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
    <div class="modal fade" id="category" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Kategory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.portfolio.category') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Nama Kategory</label>
                                <input type="text" id="nameBasic" class="form-control" name="name" required />
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

    <!-- Modal Edit Category -->
    @foreach ($category as $item)
        <div class="modal fade" id="editCategory{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.portfolio.category', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Nama Skill</label>
                                    <input type="text" id="nameBasic" class="form-control" name="name"
                                        value="{{ $item->name }}" required />
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
    @endforeach

    <!-- Modal Hapus category -->
    @foreach ($category as $item)
        <div class="modal fade" id="deletCategory{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.portfolio.category', $item->id) }}" method="post">
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
