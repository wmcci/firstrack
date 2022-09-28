@extends('Admin.layout.app')


@section('heading', 'Tous les fichiers')

@section('all_files')


    <div class="section-body">
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">


                <div class="table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                            <tr>
                                                <th>N° Fichier</th>
                                                <th>Description Fchier</th>
                                                <th>Lien Fichier</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>



                                             @php
                                                $i = 1;
                                                $files =  DB::table('fichiers')->get();
                                                // dd($files->fichier)
                                             @endphp

                                            @foreach ($files as $fich)

                                            <tbody>
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$fich->description}}</td>
                                                 {{-- <td><a href="{{URL::asset("uploads/$fich->fichier")) }}" target="_blank">Fichier</a></td> --}}
                                                 <td><a href="{{asset('storage/'.$fich->fichier) }}" target="_blank">Fichier</a></td>

                                                <td class="pt_10 pb_10">
                                                    {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Detail</button> --}}
                                                    <a href="{{ route('delete_fichier', $fich->id) }}" class="btn btn-danger" onClick="return confirm('Voulez vous vraiment supprimer ce fichier?');">Supprimer</a>
                                                </td>
                                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                                    <div class="col-md-8">Laptop</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Description</label></div>
                                                                    <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>

                                            </tbody>

                                             @endforeach
                                        </table>
                                    </div>


              </div>
            </div>
         </div>
    </div>



@endsection
