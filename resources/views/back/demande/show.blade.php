@extends('back.layouts.app')

@section('stylesheets')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/custom_dt_ordering_sorting.css') }}">
    <!-- END PAGE LEVEL STYLES -->
    <link href="{{ asset('back/assets/css/ui-kit/tabs-accordian/custom-accordions.css') }}" rel="stylesheet" type="text/css" />


@endsection

@section('body')
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Demandes de test en loboratoire</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="#"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Demandes</a></li>
                        <li class="active"><a href="#">Affichage</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="statbox widget box box-shadow">

                    <div class="widget-header">

                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                                <h4>Détails de la demande </h4>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 col-12 text-right">

                                @if($demande->status =='encours')
                                    @labo
                                        <button type="button" class="btn btn-primary btn-rounded m-4" data-toggle="modal" data-target="#exampleModal">
                                            Donner un résultat
                                        </button>
                                    @endlabo
                                @endif
                                    @if($demande->statusidc == "attente")
                                        @inspecteur
                                        <button type="button" class="btn btn-primary btn-rounded m-4" data-toggle="modal" data-target="#setamende">
                                            Donner une amende
                                        </button>
                                        @endinspecteur
                                    @endif

                                    @if(($demande->status == "Négatif") && ($demande->statusidc =='encours'))
                                        @aberme
                                        <button type="button" class="btn btn-primary btn-rounded m-4" data-toggle="modal" data-target="#setattente">
                                            Soumettre à l'inspecteur
                                        </button>
                                        @endaberme
                                    @endif


                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                        <h4> Demandeur </h4>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Nom
                            </div>
                            <div class="col-md-6 col-form-label">
                                <strong> {{ $demande->nomdemandeur }}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Prénom
                            </div>
                            <div class="col-md-6 col-form-label">
                                <strong> {{ $demande->prenomdemandeur }}</strong>
                            </div>
                        </div>

                       {{-- <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Statut de la demande
                            </div>
                            <div class="col-md-6 col-form-label">
                                @if($demande->status == 'encours')
                                    <span class="badge badge-warning shadow-none badge-pill">En cours</span>
                                @else
                                    <span class="badge badge-success shadow-none badge-pill">Validée</span>
                                @endif
                            </div>
                        </div>--}}

                        <hr>
                        <h4> Produit </h4>

                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Importateur
                            </div>
                            <div class="col-md-6 col-form-label">
                                <strong>  {{ $demande->importateur }}</strong>
                            </div>
                        </div>
                        @if($demande->guceref)
                            <div class="form-group row">
                                <div class="col-md-4 col-form-label text-md-right">
                                    Référence GUCE
                                </div>
                                <div class="col-md-6 col-form-label">
                                    <strong>  {{ $demande->guceref }}</strong>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Type de produit
                            </div>
                            <div class="col-md-6 col-form-label">
                                <strong>  {{ $demande->typeproduit->name }}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Marque
                            </div>
                            <div class="col-md-6 col-form-label">
                                <strong> {{ $demande->marque }}</strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Modèle
                            </div>
                            <div class="col-md-6 col-form-label">
                                <strong> {{ $demande->modele }}</strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                Laboratoire
                            </div>
                            <div class="col-md-6 col-form-label">
                                <strong>
                                    {{   $demande->laboratoire->name }}
                                </strong>
                            </div>
                        </div>

                        <h4> Résultat </h4>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                <h4>Résultat :</h4>
                            </div>

                            <div class="col-md-6 col-form-label">
                                @if($demande->status == "encours")
                                    <span class="badge badge-warning shadow-none badge-pill">En cours de validation par le labo </span>
                                @elseif($demande->status == 'amende')
                                    <h4 style="color: red" >Amendé à ( {{ $demande->amende->montant }} F) </h4>

                                @else
                                    <h4 @if($demande->status == 'Positif') style="color: green" @else style="color: red" @endif > {{ $demande->status }} </h4>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                                <h4>Amende :</h4>
                            </div>

                            <div class="col-md-6 col-form-label">
                                @if($demande->statusidc == "encours")
                                    <h4 style="color: green" >Pas d'amende </h4>
                                @elseif($demande->statusidc == 'amende')
                                    <h4 style="color: red" >Amendé à ( {{ $demande->amende->montant }} F) </h4>
                                @elseif($demande->statusidc == 'attente')
                                    <span class="badge badge-warning shadow-none badge-pill"> En attente de l'inspecteur</span>

                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        @if($demande->status == 'encours' )
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Résultat du test</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="" method="POST" enctype="multipart/form-data" action="{{ route('demande.validation',$demande->id) }}" id="dropzone-file-area-one">
                            @csrf
                            <div class="row ">
                                <div class="col-md-12 text-center">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6> Sélectionnez un élément pour soumettre le résultat . </h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="modele" class="col-md-3 col-form-label text-md-right">Résultat</label>

                                        <div class="col-md-8">
                                            <select id="laboratoire" class="form-control basic" name="resultat"  required>
                                                <option value="" ></option>
                                                <option value="Positif" >Positif</option>
                                                <option value="Négatif" >Négatif</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="modele" class="col-md-3 col-form-label text-md-right">Fichier</label>

                                        <div class="col-md-8">
                                            <input name="file" required type="file" class="form-control-file form-control{{ $errors->has('profil') ? ' is-invalid' : '' }}" id="exampleFormControlFile1">
                                            @if ($errors->has('file'))
                                                <p  style="color: red" role="alert">
                                                    <strong>{{ $errors->first('file') }}</strong>
                                                </p>
                                            @endif
                                        </div>
                                    </div>



                                    <button type="submit" style="margin: 20px"  class="btn btn-primary btn-rounded mb-4 mr-2"> Enregister </button>


                                    {{--<button type="submit" style="margin: 20px"  class="btn btn-primary btn-rounded mb-4 mr-2"><i class="flaticon-download-1"></i> Envoyer le fichier </button>
                                --}}
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($demande->status  =='Négatif')
            <div class="modal fade" id="setattente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Soumettre a l'inspecteur du commerce</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="" method="POST" enctype="multipart/form-data" action="{{ route('demande.attente',$demande->id) }}" id="dropzone-file-area-one">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-12 text-center">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4> Voulez-vous soumettre cette demande à l'inspecteur du commerce ? . </h4>
                                            </div>
                                        </div>
                                        <br>

                                        <button type="submit" style="margin: 20px"  class="btn btn-primary btn-rounded mb-4 mr-2"> Soumettre </button>

                                        {{--<input name="file" type="file" class="form-control-file form-control{{ $errors->has('profil') ? ' is-invalid' : '' }}" id="exampleFormControlFile1">
                                        @if ($errors->has('file'))
                                            <p  style="color: red" role="alert">
                                                <strong>{{ $errors->first('file') }}</strong>
                                            </p>
                                        @endif--}}
                                        {{--<button type="submit" style="margin: 20px"  class="btn btn-primary btn-rounded mb-4 mr-2"><i class="flaticon-download-1"></i> Envoyer le fichier </button>--}}
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($demande->statusidc  =='attente')
            <div class="modal fade" id="setamende" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Donner une amende  </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="" method="POST" enctype="multipart/form-data" action="{{ route('demande.amende',$demande->id) }}" id="dropzone-file-area-one">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-12 text-center">


                                        <br>
                                        <div class="form-group row">
                                            <label for="montant" class="col-md-3 col-form-label text-md-right">Montant</label>

                                            <div class="col-md-8">
                                                <input id="montant" type="number" class="form-control" name="montant"  required autofocus>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="description" class="col-md-3 col-form-label text-md-right">Description</label>

                                            <div class="col-md-8">
                                                <textarea id="description" type="number" class="form-control" name="description" rows="5" required autofocus></textarea>
                                            </div>

                                        </div>


                                        <button type="submit" style="margin: 20px"  class="btn btn-primary btn-rounded mb-4 mr-2"> Enregister </button>

                                     </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection

@section('javascripts')
    <script src="{{ asset('back/assets/js/ui-kit/ui-accordions.js') }}"></script>
    <script src="{{ asset('back/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#default-ordering').DataTable( {
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }, "order": [[ 3, "desc" ]],
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
        } );
    </script>
    <script>
        @if(Session::has('success'))
        $(function() {
            toastr.success('<b> {{ Session::get('success') }} </b>',
                toastr.options = {
                    "debug": false,
                    "positionClass": "toast-top-right",
                    "onclick": "#",
                    "fadeIn": 300,
                    "fadeOut": 1000,
                    "timeOut": 5000,
                });
        });
        @endif
    </script>
@endsection

