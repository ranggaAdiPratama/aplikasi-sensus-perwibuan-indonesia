@extends('layouts.index')
@push('style')
    @include('components.styles.packages.datatables')
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            {{-- card --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <button class="btn btn-secondary my-3" type="button" onclick="add()">
                        <i class="fas fa-plus"></i> Tambah Data
                    </button>
                    <table id="table" class="table table-hover table-striped table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Nilai</th>
                            <th>KKM</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('script')
    @include('components.scripts.packages.datatables')
    @include($script)
@endpush
