@extends('admin.layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical') }}-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gra') }}dient.css">
@endsection


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Basic Forms</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                            </li>
                            <li class="breadcrumb-item active">Basic Forms
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1"
                        id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item"
                            href="card-bootstrap.html">Cards</a><a class="dropdown-item"
                            href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">Project Info</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Basic Search Profiles</p>
                                    </div>
                                    <form class="form">
                                        <div class="form-body">

                                            {{-- personal info --}}

                                            <h4 class="form-section"><i class="ft-user"></i>{{ __('Personal Information') }}</h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">{{ __('Gender') }}</label>
                                                        {!! Form::select('gender', $genders_array, request()->gender ?? null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('--Select Any--'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">{{ __('Age Range') }}</label>
                                                        {!! Form::select('gender', $genders_array, request()->gender ?? null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('--Select Any--'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">{{ __('Blood Group') }}</label>
                                                        {!! Form::select('blood_group', $blood_groups_array, request()->blood_group ?? null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('--Select Any--'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">{{ __('Marital Status') }}</label>
                                                        {!! Form::select('marital_statuses', $marital_statuses_array, request()->marital_status ?? null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('--Select Any--'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- religion --}}


                                            <h4 class="form-section"><i class="ft-user"></i>{{ __('Religion') }}</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ __('Religion') }}</label>
                                                        {!! Form::select('religion', $religions_array, request()->religion ?? null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('--Select Any--'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mazhab">{{ __('Mazhab') }}</label>
                                                        {!! Form::select('mazhab', $mazhabs_array, request()->mazhab ?? null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('--Select Any--'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> {{ __('Cancel') }}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{ __('Search') }}
                                                </button>
                                            </div>
                                            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
<!-- END: Content-->
