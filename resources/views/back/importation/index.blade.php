@extends('back.layouts.app')

@section('stylesheets')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/custom_dt_ordering_sorting.css') }}">
    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('body')
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Gestion des importations </h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="#"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Importations</a></li>
                        <li class="active"><a href="#">Liste</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="statbox widget box box-shadow">

                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                                <h4> Liste des importations </h4>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                                <a href="{{ route('importation.new') }}" style="margin: 20px"  class="btn btn-primary mb-4 mr-2 float-right"><i class="flaticon-download-1"></i> Importer un fichier </a>
                            </div>
                        </div>

                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Importateur</th>
                                    <th>Descritption</th>
                                    <th>Quantité</th>
                                    <th>N° série</th>
                                    <th>Provenance</th>
                                    <th>Volume</th>
                                    <th>Classe énergetique</th>
                                    <th>Résultat laboratoires</th>
                                    <th>Certificat de conformité</th>
                                    <th>Modèle etiquette énergie </th>
                                    <th>Echantillonnage aléatoire</th>
                                    <th>Etiquette</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $importations as $importation )
                                    <tr>
                                        <td> {{ $importation->date }}</td>
                                        <td> {{ $importation->importateur }}</td>
                                        <td> {{ $importation->description }}</td>
                                        <td> {{ $importation->quantite }}</td>
                                        <td> {{ $importation->nserie }}</td>
                                        <td> {{ $importation->provenance }}</td>
                                        <td> {{ $importation->classe }}</td>
                                        <td> {{ $importation->resultats }}</td>
                                        <td> {{ $importation->certificat }}</td>
                                        <td> {{ $importation->modele }}</td>
                                        <td> {{ $importation->echantiollonnage }}</td>
                                        <td> {{ $importation->modele }}</td>
                                        <td> {{ $importation->modele }}</td>
                                        <td>
                                            <a  href= "#exampleModal"  data-toggle="modal" data-target="#exampleModal">
                                                Cliquez ici
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                              
                            </table>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Etiquette énergétique</h5>

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('back/assets/img/etiquette-3.png') }}" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('javascripts')
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

