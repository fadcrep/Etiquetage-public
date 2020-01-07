@extends('back.layouts.app')

@section('stylesheets')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/custom_dt_ordering_sorting.css') }}">
    <!-- END PAGE LEVEL STYLES -->

    <link href="{{ asset('back/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/select2/select2.min.css') }}">

@endsection

@section('body')
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Gestion des laboratoires</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Laboratoire</a></li>
                        <li class="active"><a href="#">Modification</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="statbox widget box box-shadow">

                    <div class="widget-header">

                        <h4> Modifier un laboratoire </h4>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div >
                            <form method="POST" action="{{ route('laboratoire.update',$laboratoire->id) }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">Nom</label>

                                    <div class="col-md-7">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $laboratoire->name }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="laboratoire" class=" col-md-3 col-form-label text-md-right ">Type de produit testé</label>
                                    <div class="col-md-7">
                                        <select  id="laboratoire" class="form-control basic" name="typeproduit[]" multiple="multiple"  required>
                                            <option value="" ></option>
                                            @foreach($types as $type)
                                                <option @if($laboratoire) @if(in_array($type->id, $laboratoire->typeproduits)) selected @endif @endif  value="{{ $type->id }}" > {{ $type->name }} </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-3 col-form-label text-md-right">Description</label>

                                    <div class="col-md-7">
                                        <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"  required autofocus>{{  $laboratoire->description  }}</textarea>

                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-7 offset-md-3">
                                        <a href="{{ route('type.list') }}" class="btn btn-dark">
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
    <script src="{{ asset('back/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('back/plugins/select2/custom-select2.js') }}"></script>
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

