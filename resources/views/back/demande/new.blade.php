    @extends('back.layouts.app')

@section('stylesheets')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/custom_dt_ordering_sorting.css') }}">
    <!-- END PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/bootstrap-select/bootstrap-select.min.css') }}">

@endsection

@section('body')
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Demandes de test en loboratoires</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="#"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Demandes de test</a></li>
                        <li class="active"><a href="#">Ajout</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="statbox widget box box-shadow">

                    <div class="widget-header">

                        <h4> Nouvelle demande de test</h4>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div >
                            <form method="POST" action="{{ route('demande.store') }}" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group row">
                                    <label for="nomd" class="col-md-3 col-form-label text-md-right">Demandeur</label>

                                    <div class="col-md-4">
                                        <input id="nomdemandeur" type="text" class="form-control" placeholder="Nom" name="nomdemandeur" value="" required autofocus>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="prenomdemandeur" type="text" class="form-control" placeholder="Prénom" name="prenomdemandeur" value="" required autofocus>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="importateur" class="col-md-3 col-form-label text-md-right">Importateur</label>

                                    <div class="col-md-8">
                                        <input id="importateur" type="text" class="form-control" name="importateur"  required autofocus>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="marque" class="col-md-3 col-form-label text-md-right">Référence GUCE</label>

                                    <div class="col-md-8">
                                        <input id="guceref" type="text" class="form-control" name="guceref"   autofocus>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="type" class=" col-md-3 col-form-label text-md-right ">Type de produit</label>
                                    <div class="col-md-8">
                                        <select  id="typeproduit" class="form-control basic" name="typeproduit_id"  required>
                                            <option value="" ></option>
                                            @foreach($types as $type)
                                            <option value="{{ $type->id }}" >{{ $type->name }}</option>
                                           @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="laboratoire" class=" col-md-3 col-form-label text-md-right ">Laboratoire</label>
                                    <div class="col-md-8">
                                        <select  id="laboratoire" class="form-control basic" name="laboratoire_id"  required>
                                            <option value="" ></option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marque" class="col-md-3 col-form-label text-md-right">Marque</label>

                                    <div class="col-md-8">
                                        <input id="marque" type="text" class="form-control" name="marque" value="" required autofocus>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="modele" class="col-md-3 col-form-label text-md-right">Modèle</label>

                                    <div class="col-md-8">
                                        <input id="modele" type="text" class="form-control" name="modele" value="" required autofocus>
                                    </div>

                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-3">
                                        <a href="{{ route('demande.list') }}" class="btn btn-dark">
                                            <i class="flaticon-back-arrow"> </i> Retour
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                           <i class="flaticon-check"> </i> Enregister
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('javascripts')
    <script src="{{ asset('back/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('back/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
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
        $('#autre').hide();
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

      {{--  $('#laboratoire').on('change', function() {
            if(this.value == 0){
                $('#autre').show();
            }else{
                $('#autre').hide();
            }

        });
--}}
        $('#typeproduit').on('change', function() {

            var laboarray = {!! json_encode($laboarray) !!};


            var laboratoire = $("#laboratoire");
            laboratoire.empty(); // remove old options
            $.each(laboarray[this.value], function(value,text) {
                laboratoire.append($("<option></option>")
                    .attr("value", value).text(text));
            });
            laboratoire.trigger('click');

        });


    </script>

@endsection

