    <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
        data-col="2-columns">

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title">Doctors List</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Doctors</a>
                                    </li>
                                    <li class="breadcrumb-item active">All Doctors
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right col-md-6 col-12">
                        <div class="btn-group float-md-right" role="group"
                            aria-label="Button group with nested dropdown">
                            <button
                                class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1"
                                id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item"
                                    href="card-bootstrap.html">Cards</a><a class="dropdown-item"
                                    href="component-buttons-extended.html">Buttons</a></div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <div id="doctors-list">
                        <div class="row match-height">
                            @forelse ($data['collection'] as $item)
                                <div class=" col-xl-3 col-lg-4 col-md-6 pb-2">
                                    <div class="card">
                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-1.png') }}"
                                            alt=""
                                            class="card-img-top img-fluid rounded-circle w-25 mx-auto mt-1">
                                        <div class="card-body">
                                            <h6 class="card-title font-large-1 mb-0 text-center">Phil Gray</h6>
                                            <p class="card-text card font-medium-1 text-center mb-0">Dentist</p>
                                            <p class="font-small-3 mb-2 text-center">(D.D.S)</p>
                                            <p class="font-small-3 text-center"><i class="ft-briefcase"></i> Oral
                                                surgery
                                                specialist</p>

                                        </div>
                                        <div class="card-footer mx-auto">
                                            <a href="hospital-book-appointment.html"
                                                class="btn btn-outline-danger btn-sm">Book
                                                Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                @include('admin.partials.no_data')
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END: Content-->
    </body>
