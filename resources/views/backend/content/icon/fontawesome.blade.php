@extends('backend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Components /</span> Icons - Font Awesome</h4>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Solid</h4>
                        <p class="card-title-desc mb-2">Use <code>&lt;i class="fas fa-ad"&gt;&lt;/i&gt;</code> <span
                                class="badge bg-success">v 5.13.0</span>.</p>
                        <div class="row icon-demo-content" id="solid">
                        </div>
                    </div> <!-- end card-body -->
                </div><br> <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Regular</h4>
                        <p class="card-title-desc mb-2">Use <code>&lt;i class="far fa-address-book"&gt;&lt;/i&gt;</code>
                            <span class="badge bg-success">v 5.13.0</span>.
                        </p>
                        <div class="row icon-demo-content" id="regular">
                        </div>
                    </div> <!-- end card-body -->
                </div><br> <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Brands</h4>
                        <p class="card-title-desc mb-2">Use <code>&lt;i class="fab fa-500px"&gt;&lt;/i&gt;</code> <span
                                class="badge bg-success">v 5.13.0</span>.</p>
                        <div class="row icon-demo-content" id="brand">
                        </div>
                    </div> <!-- end card-body -->
                </div><br> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
