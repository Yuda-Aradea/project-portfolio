@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-center row">
                        <div class="col-sm-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-primary fs-2 mt-4">Hi Welcome {{ Auth::user()->name }} 🎉</h5>
                                <p class="mb-4 mt-4">
                                    Semoga harimu selalu menyenangkan, mari kita mulai membangun portfolio ini!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mt-md-4 mb-md-4 mb-4">
                            <img src="{{ asset('upload/computer.jpg') }}" alt="" style="width: 200px;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
