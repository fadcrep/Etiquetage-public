    @extends('back.layouts.app')

@section('stylesheets')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/custom_dt_ordering_sorting.css') }}">
    <!-- END PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/bootstrap-select/bootstrap-select.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/dropzone/basic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/file-upload/file-upload-with-preview.css') }}">

    <link href="" rel="stylesheet" type="text/css" />
    <link href="" rel="stylesheet" type="text/css" />

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
                        <li class="active"><a href="#">Importer un fichier</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="statbox widget box box-shadow">

                    <div class="widget-header">

                        <h4> Importer le des importations</h4>
                    </div>
                    <div class="widget-content widget-content-area text-center">

                        <div class=" layout-spacing">
                            <div class="statbox widget box box-shadow">

                                    <form class="" method="POST" enctype="multipart/form-data" action="{{ route('importation.import') }}" id="dropzone-file-area-one">
                                        @csrf
                                        <div class="row ">
                                            <div class="col-md-12 text-center">
                                                <input name="excelfile" type="file" class="form-control-file form-control{{ $errors->has('profil') ? ' is-invalid' : '' }}" id="exampleFormControlFile1">
                                                @if ($errors->has('excelfile'))
                                                    <p  style="color: red" role="alert">
                                                        <strong>{{ $errors->first('excelfile') }}</strong>
                                                    </p>
                                                @endif
                                                <a href="{{ route('importation.list') }}" class="btn btn-dark">
                                                    <i class="flaticon-back-arrow"> </i> Retour
                                                </a>
                                                <button type="submit" style="margin: 20px"  class="btn btn-primary mb-4 mr-2"><i class="flaticon-download-1"></i> Envoyer le fichier </button>

                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                       {{-- <div class="row">

                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header widget-heading">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>File Upload With Preview</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Single File Upload</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file" >
                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Multiple File Upload</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="custom-file-container" data-upload-id="mySecondImage">
                                            <label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file" >
                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>--}}

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('javascripts')
    <script src="{{ asset('back/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('back/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>


    <script src="{{ asset('back/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('back/plugins/dropzone/custom-dropzone.js') }}"></script>
    <script src="{{ asset('back/plugins/file-upload/file-upload-with-preview.js') }}"></script>

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

