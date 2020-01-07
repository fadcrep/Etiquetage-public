@php
    $users = ['users.list','users.new','users.edit','users.store','users.update'];
    $importations = ['importation.list','importation.new','importation.edit','importation.store','importation.update'];
    $autorisations = ['autorisation.list','autorisation.new','autorisation.edit','autorisation.store','autorisation.update'];
    $demandes = ['demande.list','demande.new','demande.edit','demande.store','demande.update','demande.show'];
    $dashboard = ['dashboard'];
    $types = ['type.list','type.new','type.edit','type.store','type.update'];
    $labos = ['laboratoire.list','laboratoire.new','laboratoire.edit','laboratoire.store','laboratoire.update'];

@endphp

<div class="sidebar-wrapper sidebar-theme  ">

    <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
            <li class="nav-item d-flex">
                <a href="{{ route('dashboard') }}" class="navbar-brand">
                    <img src="{{ asset('back/assets/img/logo.svg') }}" class="img-fluid" alt="logo">
                </a>
                <p class="border-underline"></p>
            </li>
            <li class="nav-item theme-text">
                <a href="{{ route('dashboard') }}" class="nav-link">
                <h6 style="margin-top: 12px;margin-bottom: 12px"> PNEE</h6>
                </a>
            </li>
        </ul>


        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">

                <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">

                    <li class="@if(in_array(Route::getCurrentRoute()->getName() , $dashboard ))active @endif">
                        <a href="{{ route('dashboard') }}"> <i class="flaticon-computer-4"></i> Tableau de bord </a>
                    </li>
                    <li class="@if(in_array(Route::getCurrentRoute()->getName() , $demandes))active @endif">
                        <a href="{{ route('demande.list') }}"> <i class="flaticon-notes-5"></i> Tests en laboratoire </a>
                    </li>
                    @aberme
                    <li class="@if(in_array(Route::getCurrentRoute()->getName() , $autorisations))active @endif">
                        <a style="font-size: 12px" href="{{ route('autorisation.list') }}"> <i class="flaticon-file"></i> Autorisation d'importer </a>
                    </li>
                    <li class="@if(in_array(Route::getCurrentRoute()->getName() , $importations))active @endif">
                        <a href="{{ route('importation.list') }}"> <i class="flaticon-shuffle-bold"></i> Importations réelles </a>
                    </li>
                    <li class="@if(in_array(Route::getCurrentRoute()->getName() , $types))active @endif">
                        <a href="{{ route('type.list') }}"> <i class="flaticon-menu-line-3"></i> Types Produit </a>
                    </li>

                    <li class="@if(in_array(Route::getCurrentRoute()->getName() , $labos))active @endif">
                        <a href="{{ route('laboratoire.list') }}"> <i class="flaticon-medical-box"></i> Laboratoires </a>
                    </li>
                    @endaberme
                    @admin
                    <li class="@if(in_array(Route::getCurrentRoute()->getName() , $users))active @endif">
                        <a href="{{ route('users.list') }}"> <i class="flaticon-user-11"></i> Utilisateurs </a>
                    </li>
                    @endadmin


                </ul>
            </li>
        </ul>
    </nav>

</div>
