@extends('layouts.index')
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

            {{-- card anime --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Anime Season ini ({{ getSeason() }} / 2023)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < count($animes); $i++)
                                        <li data-target="#carouselExampleControls" data-slide-to="{{ $i }}"
                                            class="{{ $i == 0 ? 'active' : '' }}"></li>
                                    @endfor
                                </ol>
                                <div class="carousel-inner">
                                    @for ($i = 0; $i < count($animes); $i++)
                                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                            <img src="{{ $animes[$i]['node']['main_picture']['medium'] }}"
                                                alt="{{ $animes[$i]['node']['title'] }}" class="d-block w-100"
                                                height="400">
                                            <div class="carousel-caption d-none d-md-block bg-dark">
                                                <h3><b>{{ $animes[$i]['node']['title'] }}</b></h3>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            {{-- card sapaan ramah --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    {{ warmGreeting() }}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
