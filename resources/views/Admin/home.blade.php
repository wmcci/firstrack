@extends('Admin.layout.app')


@section('heading', 'Panneau d\'administration ')
@section('main_section')

  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Toutes les Vidéos</h4>
                                </div>

                                @php
                                    $videos = DB::table('videos')->get();
                                @endphp


                                <div class="card-body">
                                   {{ count($videos) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Tous les fichiers</h4>
                                </div>

                                 @php
                                    $fichiers = DB::table('fichiers')->get();
                                @endphp
                                <div class="card-body">
                                   {{ count($fichiers) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Tous les contacts</h4>

                                @php
                                    $contacts = DB::table('contacts')->get();
                                @endphp
                                </div>
                                <div class="card-body">
                                   {{ count($contacts) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection



