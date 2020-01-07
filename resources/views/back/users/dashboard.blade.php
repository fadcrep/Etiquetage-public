@extends('back.layouts.app')

@section('stylesheets')

@endsection

@section('body')
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Tableau de bord</h3>
            </div>
        </div>

        <div class="row layout-spacing ">

            {{--<div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <a href="#">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-sales-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Parcelles</p>
                                <p class="widget-numeric-value"></p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">Détails</p>
                    </div>
                </div>
                </a>
            </div>


            <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <a href="#">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-order-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-shuffle-bold"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Mutations</p>
                                <p class="widget-numeric-value"></p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">Détails</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-0 mb-4">
                <a href="#">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-customer-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-user-1"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Propriétaires</p>
                                <p class="widget-numeric-value"></p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2"> Détails</p>
                    </div>
                </div>
                </a>
            </div>--}}
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <a href="{{ route('demande.list') }}">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-income-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-notes-5"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Demandes</p>
                                <p class="widget-numeric-value">{{ $demandes->count() }}</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">Détails</p>
                    </div>
                </div>
                </a>
            </div>

            @aberme
            <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <a href="{{ route('importation.list') }}">
                    <div class="widget-content-area  data-widgets br-4">
                        <div class="widget  t-order-widget">
                            <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-shuffle-bold"></i>
                                </div>
                                <div class="media-body text-right">
                                    <p class="widget-text mb-0">Importations</p>
                                    <p class="widget-numeric-value">{{ $importations->count() }}</p>
                                </div>
                            </div>
                            <p class="widget-total-stats mt-2">Détails</p>
                        </div>
                    </div>
                </a>
            </div>
            @endaberme

        </div>

    </div>
@endsection

@section('javascripts')

@endsection

