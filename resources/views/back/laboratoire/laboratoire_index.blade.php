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
                <h3>Gestion des laboratoires</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Laboratoire</a></li>
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
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <a href="{{ route('laboratoire.new') }}" style="margin: 20px"  class="btn btn-primary mb-4 mr-2"><i class="flaticon-plus-fill mr-1"></i> Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Type de produit testé</th>
                                    <th>Description</th>
                                    <th>Date Création </th>
                                    <th class="text-center" >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $laboratoires as $laboratoire )
                                    <tr>
                                        <td>{{ $laboratoire->name }}</td>
                                        <td>
                                            @foreach($laboratoire->typeproduits as $type)
                                             {{ $type->name }},
                                            @endforeach
                                        </td>
                                        <td>{{ $laboratoire->description }}</td>
                                        <td>{{ $laboratoire->created_at }}</td>

                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="{{ route('laboratoire.edit',$laboratoire->id) }}" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="flaticon-edit-fill-2 bg-primary p-1 text-white br-6 mb-1"></i></a> </li>
                                                <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="flaticon-delete-can-fill-2 bg-danger p-1 text-white br-6 mb-1"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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

