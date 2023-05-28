@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio Settings / </span>Section - Skills</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio - Section Skills 1</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="{{ route('update.skill1') }}" method="post">
                            @csrf @method('patch')
                            <div class="row">
                                <hr class="mb-4">

                                <div class="mb-4 col-md-3">
                                    <label for="email" class="form-label">Title Skill</label>
                                    <input class="form-control" type="text" id="email" name="name"
                                        value="{{ $skill1->name }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Lama Menguasai Skill</label>
                                    <input class="form-control" type="text" id="email" name="title"
                                        value="{{ $skill1->title }}" />
                                </div>

                                <div class="mb-4 col-md-3">
                                    <label for="email" class="form-label">Icon</label>
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-10 col-11">
                                            <input class="form-control" type="text" id="email" name="icon"
                                                value="{{ $skill1->icon }}" />
                                        </div>
                                        <i class="{{ $skill1->icon }} ms-2 fs-3"></i>
                                    </div>
                                </div>

                                <div class="mb-4 col-md-2">
                                    <label for="email" class="form-label"></label>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mt-0 mt-md-2">Save
                                            changes</button>
                                    </div>
                                </div>


                                <div class="col-md-12 mt-4 mb-4">
                                    <div class="d-flex justify-content-between mt-3 mb-3">
                                        <div>
                                            <h5 class="mt-2">{{ $skill1->name }} Details Skill</h5>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                                data-bs-target="#skill1"><i class='bx bx-add-to-queue me-1'></i>Tambah
                                                Data</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive text-nowrap ">
                                        <table class="table table-striped table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">No</th>
                                                    <th>Nama Skill</th>
                                                    <th>Persentase Skill</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($skill1_detail as $item)
                                                <tbody class="table-border-bottom-0">
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->percentage }}%</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editSkill1{{ $item->id }}"><i
                                                                class="bx bx-edit-alt"></i></button>
                                                        <button type="button" class="btn ms-2 btn-sm btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deletSkill1{{ $item->id }}"><i
                                                                class="bx
                                                        bx-trash"></i></button>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio - Section Skills 2</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="{{ route('update.skill2') }}" method="post">
                            @csrf @method('patch')
                            <div class="row">
                                <hr class="mb-4">

                                <div class="mb-4 col-md-3">
                                    <label for="email" class="form-label">Title Skill</label>
                                    <input class="form-control" type="text" id="email" name="name"
                                        value="{{ $skill2->name }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Lama Menguasai Skill</label>
                                    <input class="form-control" type="text" id="email" name="title"
                                        value="{{ $skill2->title }}" />
                                </div>

                                <div class="mb-4 col-md-3">
                                    <label for="email" class="form-label">Icon</label>
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-10 col-11">
                                            <input class="form-control" type="text" id="email" name="icon"
                                                value="{{ $skill2->icon }}" />
                                        </div>
                                        <i class="{{ $skill2->icon }} ms-2 fs-3"></i>
                                    </div>
                                </div>

                                <div class="mb-4 col-md-2">
                                    <label for="email" class="form-label"></label>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mt-0 mt-md-2">Save
                                            changes</button>
                                    </div>
                                </div>


                                <div class="col-md-12 mt-4 mb-4">
                                    <div class="d-flex justify-content-between mt-3 mb-3">
                                        <div>
                                            <h5 class="mt-2">{{ $skill2->name }} Details Skill</h5>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-toggle="modal" data-bs-target="#skill2"><i
                                                    class='bx bx-add-to-queue me-1'></i>Tambah
                                                Data</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive text-nowrap ">
                                        <table class="table table-striped table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">No</th>
                                                    <th>Nama Skill</th>
                                                    <th>Persentase Skill</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($skill2_detail as $item)
                                                <tbody class="table-border-bottom-0">
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->percentage }}%</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editSkill2{{ $item->id }}"><i
                                                                class="bx bx-edit-alt"></i></button>
                                                        <button type="button"
                                                            class="btn ms-2 btn-sm btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deletSkill2{{ $item->id }}"><i
                                                                class="bx
                                                        bx-trash"></i></button>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Portfolio - Section Skills 3</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="{{ route('update.skill3') }}" method="post">
                            @csrf @method('patch')
                            <div class="row">
                                <hr class="mb-4">
                                <div class="mb-4 col-md-3">
                                    <label for="email" class="form-label">Title Skill</label>
                                    <input class="form-control" type="text" id="email" name="name"
                                        value="{{ $skill3->name }}" />
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="email" class="form-label">Lama Menguasai Skill</label>
                                    <input class="form-control" type="text" id="email" name="title"
                                        value="{{ $skill3->title }}" />
                                </div>

                                <div class="mb-4 col-md-3">
                                    <label for="email" class="form-label">Icon</label>
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-10 col-11">
                                            <input class="form-control" type="text" id="email" name="icon"
                                                value="{{ $skill3->icon }}" />
                                        </div>
                                        <i class="{{ $skill3->icon }} ms-2 fs-3"></i>
                                    </div>
                                </div>

                                <div class="mb-4 col-md-2">
                                    <label for="email" class="form-label"></label>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mt-0 mt-md-2">Save
                                            changes</button>
                                    </div>
                                </div>


                                <div class="col-md-12 mt-4 mb-4">
                                    <div class="d-flex justify-content-between mt-3 mb-3">
                                        <div>
                                            <h5 class="mt-2">{{ $skill3->name }} Details Skill</h5>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-toggle="modal" data-bs-target="#skill3"><i
                                                    class='bx bx-add-to-queue me-1'></i>Tambah
                                                Data</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive text-nowrap ">
                                        <table class="table table-striped table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">No</th>
                                                    <th>Nama Skill</th>
                                                    <th>Persentase Skill</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($skill3_detail as $item)
                                                <tbody class="table-border-bottom-0">
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->percentage }}%</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editSkill3{{ $item->id }}"><i
                                                                class="bx bx-edit-alt"></i></button>
                                                        <button type="button"
                                                            class="btn ms-2 btn-sm btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deletSkill3{{ $item->id }}"><i
                                                                class="bx
                                                        bx-trash"></i></button>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah skill1 detail -->
    <div class="modal fade" id="skill1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data {{ $skill1->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.detail.skill1') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Nama Skill</label>
                                <input type="text" id="nameBasic" class="form-control" name="name" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Persentase SKill</label>
                                <input type="number" id="nameBasic" class="form-control" name="percentage" required />
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

    <!-- Modal Edit Skill 1 detail -->
    @foreach ($skill1_detail as $item)
        <div class="modal fade" id="editSkill1{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.detail.skill1', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Nama Skill</label>
                                    <input type="text" id="nameBasic" class="form-control" name="name"
                                        value="{{ $item->name }}" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Persentase SKill</label>
                                    <input type="number" id="nameBasic" class="form-control" name="percentage"
                                        value="{{ $item->percentage }}" required />
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

    <!-- Modal Hapus Skill 1 detail -->
    @foreach ($skill1_detail as $item)
        <div class="modal fade" id="deletSkill1{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.detail.skill1', $item->id) }}" method="post">
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

    <!-- Modal tambah skill2 detail -->
    <div class="modal fade" id="skill2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data {{ $skill2->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.detail.skill2') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Nama Skill</label>
                                <input type="text" id="nameBasic" class="form-control" name="name" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Persentase SKill</label>
                                <input type="number" id="nameBasic" class="form-control" name="percentage" required />
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

    <!-- Modal Edit Skill 2 detail -->
    @foreach ($skill2_detail as $item)
        <div class="modal fade" id="editSkill2{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.detail.skill2', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Nama Skill</label>
                                    <input type="text" id="nameBasic" class="form-control" name="name"
                                        value="{{ $item->name }}" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Persentase SKill</label>
                                    <input type="number" id="nameBasic" class="form-control" name="percentage"
                                        value="{{ $item->percentage }}" required />
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

    <!-- Modal Hapus Skill 2 detail -->
    @foreach ($skill2_detail as $item)
        <div class="modal fade" id="deletSkill2{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.detail.skill2', $item->id) }}" method="post">
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

    <!-- Modal tambah skill3 detail -->
    <div class="modal fade" id="skill3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data {{ $skill3->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2">
                <div class="modal-body">
                    <form action="{{ route('store.detail.skill3') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Nama Skill</label>
                                <input type="text" id="nameBasic" class="form-control" name="name" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="nameBasic" class="form-label">Persentase SKill</label>
                                <input type="number" id="nameBasic" class="form-control" name="percentage" required />
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

    <!-- Modal Edit Skill 3 detail -->
    @foreach ($skill3_detail as $item)
        <div class="modal fade" id="editSkill3{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('update.detail.skill3', $item->id) }}" method="post">
                            @csrf @method('PATCH')

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Nama Skill</label>
                                    <input type="text" id="nameBasic" class="form-control" name="name"
                                        value="{{ $item->name }}" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-4">
                                    <label for="nameBasic" class="form-label">Persentase SKill</label>
                                    <input type="number" id="nameBasic" class="form-control" name="percentage"
                                        value="{{ $item->percentage }}" required />
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

    <!-- Modal Hapus Skill 3 detail -->
    @foreach ($skill1_detail as $item)
        <div class="modal fade" id="deletSkill3{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Delete Data Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="my-2">
                    <div class="modal-body">
                        <form action="{{ route('delete.detail.skill3', $item->id) }}" method="post">
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
