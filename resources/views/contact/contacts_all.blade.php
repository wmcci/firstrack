@extends('Admin.layout.app')


@section('heading', 'Tous les contacts')

@section('all_contacts')


    <div class="section-body">
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">


                <div class="table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                            <tr>
                                                <th>N° Contact</th>
                                                <th>Nom</th>
                                                <th>Prenoms</th>
                                                <th>Adresse mail</th>
                                                <th>Numéro de Tel</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            @php
                                                $i = 1;
                                                $contacts = DB::table('contacts')->get();
                                            @endphp

                                            <tbody>


                                        @foreach ($contacts as $con )
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $con->nom }}</td>
                                                <td>{{ $con->prenoms }} </td>
                                                <td>{{ $con->email }}</td>
                                                <td>{{ $con->numTel }}</td>
                                                <td class="pt_10 pb_10">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Détail</button>
                                                    <a href="{{ route('delete_contact', $con->id) }}" class="btn btn-danger" onClick="return confirm('Voulez-vous supprimer ce contact?');">Supprimer</a>
                                                </td>
                                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Le Détail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Nom & Prénoms</label></div>
                                                                    <div class="col-md-8">{{ $con->nom }} {{ $con->prenoms }}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Le message</label></div>
                                                                    <div class="col-md-8">{{ $con->message }}</div>
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
