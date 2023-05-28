@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio Settings / </span>Section - About Me</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio Section About Me</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="{{ route('store.section.about') }}" id="formAccountSettings" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="row">
                                <hr class="mb-4">

                                <div class="mb-4 col-md-6">
                                    <label for="email" class="form-label">Title</label>
                                    <input class="form-control" type="text" id="email" name="title"
                                        value="{{ $about->title }}" />
                                </div>

                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">About Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm2" data-input="thumbnail2" data-preview="holder2"
                                                class="btn btn-primary text-white">
                                                <i class="ri-image-add-line"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail2" class="form-control" type="text"
                                            value="{{ $about->about_img }}" name="about_img" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 mt-3" id="holder2"><img src="{{ asset($about->about_img) }}"
                                                alt="" style="width: 200px" class="rounded"></div>
                                    </div>
                                </div>

                                <div class="mb-4 col-md-12">
                                    <label for="email" class="form-label">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="4">{{ $about->description }}</textarea>
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Experience</label>
                                    <input class="form-control" type="text" id="email" name="experience"
                                        value="{{ $about->experience }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Completed</label>
                                    <input class="form-control" type="text" id="email" name="completed"
                                        value="{{ $about->completed }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">support</label>
                                    <input class="form-control" type="text" id="support" name="support"
                                        value="{{ $about->support }}" />
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

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio About Me - Qualification</h5>
                    <!-- Account -->
                    <div class="card-body">

                        <div class="row">
                            <hr class="mb-4">

                            <div class="col-md-12">
                                <div class="d-flex justify-content-between mt-3 mb-3">
                                    <div>
                                        <h5 class="mt-2">Educations</h5>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-secondary" data-bs-toggle="modal"
                                            data-bs-target="#education"><i class='bx bx-add-to-queue me-1'></i>Tambah
                                            Data</button>
                                    </div>
                                </div>
                                <div class="table-responsive text-nowrap ">
                                    <table class="table table-striped table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">No</th>
                                                <th>Nama Sekolah / Universitas</th>
                                                <th>Jurusan</th>
                                                <th>Tahun Kelulusan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($education as $item)
                                            <tbody class="table-border-bottom-0">

                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->years }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#editEducation{{ $item->id }}"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button class="btn ms-2 btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deletEducation{{ $item->id }}"><i
                                                            class="bx
                                                        bx-trash"></i></button>

                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                            <hr class="mt-5">
                            <div class="col-md-12 mt-2 mb-4">
                                <div class="d-flex justify-content-between mt-3 mb-3">
                                    <div>
                                        <h5 class="mt-2">Experience</h5>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-secondary" data-bs-toggle="modal"
                                            data-bs-target="#experience"><i class='bx bx-add-to-queue me-1'></i>Tambah
                                            Data</button>
                                    </div>
                                </div>
                                <div class="table-responsive text-nowrap ">
                                    <table class="table table-striped table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">No</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Jabatan</th>
                                                <th>Tahun Bekerja</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($experience as $item)
                                            <tbody class="table-border-bottom-0">

                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->years }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editExperience{{ $item->id }}"><i
                                                            class="bx bx-edit-alt"></i></button>
                                                    <button class="btn ms-2 btn-sm btn-outline-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deletExperience{{ $item->id }}"><i
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


    <!-- Modal tambah education -->
    <div class="modal fade" id="education" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.education') }}" method="post">
                        @csrf
                        <input type="hidden" name="category" value="education">
                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Nama Sekolah / Universitas</label>
                                <input type="text" id="nameBasic" class="form-control" name="name" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Jurusan</label>
                                <input type="text" id="nameBasic" class="form-control" name="title" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Tahun Kelulusan</label>
                                <input type="text" id="nameBasic" class="form-control" name="years" required />
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

    <!-- Modal Edit education -->
    @foreach ($education as $item)
        <div class="modal fade" id="editEducation{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data Education</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.education', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Nama Sekolah / Universitas</label>
                                    <input type="text" id="nameBasic" class="form-control" name="name"
                                        value="{{ $item->name }}" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Jurusan</label>
                                    <input type="text" id="nameBasic" class="form-control" name="title"
                                        value="{{ $item->title }}" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Tahun Kelulusan</label>
                                    <input type="text" id="nameBasic" class="form-control" name="years"
                                        value="{{ $item->years }}" required />
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

    <!-- Modal Hapus education -->
    @foreach ($education as $item)
        <div class="modal fade" id="deletEducation{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Data Education</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.education', $item->id) }}" method="post">
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

    <!-- Modal tambah experience -->
    <div class="modal fade" id="experience" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.experience') }}" method="post">
                        @csrf
                        <input type="hidden" name="category" value="experience">
                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Nama Perusahaan</label>
                                <input type="text" id="nameBasic" class="form-control" name="name" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Jabatan</label>
                                <input type="text" id="nameBasic" class="form-control" name="title" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Tahun Bekerja</label>
                                <input type="text" id="nameBasic" class="form-control" name="years" required />
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

    <!-- Modal Edit experience -->
    @foreach ($experience as $item)
        <div class="modal fade" id="editExperience{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.experience', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Nama Perusahaan</label>
                                    <input type="text" id="nameBasic" class="form-control" name="name"
                                        value="{{ $item->name }}" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Jabatan</label>
                                    <input type="text" id="nameBasic" class="form-control" name="title"
                                        value="{{ $item->title }}" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Tahun Bekerja</label>
                                    <input type="text" id="nameBasic" class="form-control" name="years"
                                        value="{{ $item->years }}" required />
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

    <!-- Modal Hapus experience -->
    @foreach ($experience as $item)
        <div class="modal fade" id="deletExperience{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.experience', $item->id) }}" method="post">
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
