<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ForSaleByWeb - Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::to('/') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::to('/') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- DataTable styles -->
    <link href="{{ URL::to('/') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">

    <!-- Date time picker assets -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/bootstrap-datetimepicker.min.css">

    <!-- File Manager assets -->
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="sidebar-brand-text mx-3">ForSaleByWeb</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Super Admin Menu items -->
        @if(Auth::user()->role == 'superAdmin')

        <!-- Nav Item - Members Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users"></i>
                <span>Manage Users</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage Users</h6>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/users') }}">View Users</a>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/users/create') }}">Add User</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Invite Agent -->
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/superAdmin/invite-agent') }}">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Invite Agent</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Invite Agent -->
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/superAdmin/saved-listings') }}">
                <i class="fas fa-fw fa-building"></i>
                <span>Saved Listings</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Bookings & Showings Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBookingsAdmin" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users"></i>
                <span>Bookings & Showings</span>
            </a>
            <div id="collapseBookingsAdmin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Bookings & Showings</h6>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/view-bookings') }}">View Bookings</a>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/add-booking') }}">Add Booking</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Offers Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOffersSuperAdmin" aria-expanded="true" aria-controls="collapseOffersSuperAdmin">
                <i class="fas fa-fw fa-users"></i>
                <span>Manage Offers</span>
            </a>
            <div id="collapseOffersSuperAdmin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage Offers</h6>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/view-offers') }}">View Offers</a>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/make-offer') }}">Make Offer</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Offers Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRecommendationsSuperAdmin" aria-expanded="true" aria-controls="collapseRecommendations">
                <i class="fas fa-fw fa-users"></i>
                <span>Recommendations</span>
            </a>
            <div id="collapseRecommendationsSuperAdmin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Recommendations</h6>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/view-recommendations') }}">View Recommendations</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Trusted Service Providers Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTSPSuperAdmin" aria-expanded="true" aria-controls="collapseTSPSuperAdmin">
                <i class="fas fa-fw fa-users"></i>
                <span>Trusted Service Prov.</span>
            </a>
            <div id="collapseTSPSuperAdmin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Trusted Service Prov.</h6>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/view-trusted-service-providers') }}">View Providers</a>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/add-trusted-service-provider') }}">Add Provider</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Invite Agent -->
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/superAdmin/file-manager') }}">
                <i class="fas fa-fw fa-envelope"></i>
                <span>AWS File Manager</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - File Transfer Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFileTransfer" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-file"></i>
                <span>File Transfer</span>
            </a>
            <div id="collapseFileTransfer" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">File Transfer</h6>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/view-shared-files') }}">View Shared Files</a>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/send-file') }}">Send File</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Manage Blog Posts Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMngBlogPosts" aria-expanded="true" aria-controls="collapseMngBlogPosts">
                <i class="fas fa-fw fa-file"></i>
                <span>Manage Blog Posts</span>
            </a>
            <div id="collapseMngBlogPosts" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Blog Posts</h6>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/add-blog-post') }}">New Blog Post</a>
                    <a class="collapse-item" href="{{ URL::to('/superAdmin/view-blog-posts') }}">View Blog Posts</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        @endif

    <!-- Client Menu items -->
    @if(Auth::user()->role == 'client')

        <!-- Nav Item - Invite Agent -->
        <li class="nav-item">
            <a class="nav-link" href="/client/invite-agent">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Invite Agent</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Bookings & Showings Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBookings" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users"></i>
                <span>Bookings & Showings</span>
            </a>
            <div id="collapseBookings" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Bookings & Showings</h6>
                    <a class="collapse-item" href="{{ URL::to('/client/view-bookings') }}">View Bookings Page</a>
                    <a class="collapse-item" href="{{ URL::to('/client/request-booking') }}">Request a Booking</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Offers Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOffers" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users"></i>
                <span>Manage Offers</span>
            </a>
            <div id="collapseOffers" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage Offers</h6>
                    <a class="collapse-item" href="{{ URL::to('/client/view-offers') }}">View Offers</a>
                    <a class="collapse-item" href="{{ URL::to('/client/make-offer') }}">Make Offer</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Trusted Service Providers -->
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/client/view-trusted-service-providers') }}">
                <i class="fas fa-fw fa-link"></i>
                <span>Trusted Service Providers</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - File Transfer Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFileTransfer" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-file"></i>
                <span>File Transfer</span>
            </a>
            <div id="collapseFileTransfer" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">File Transfer</h6>
                    <a class="collapse-item" href="{{ URL::to('/client/view-shared-files') }}">View Shared Files</a>
                    <a class="collapse-item" href="{{ URL::to('/client/send-file') }}">Send File</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        @endif

    <!-- Agent/Worker Menu items -->
    @if(Auth::user()->role == 'worker')

        <!-- Nav Item -->
        <li class="nav-item">
            <a class="nav-link" href="/agent/view-clients-assigned">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>View Clients Assigned</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

    <!-- Nav Item - Offers Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRecommendations" aria-expanded="true" aria-controls="collapseRecommendations">
                <i class="fas fa-fw fa-users"></i>
                <span>Recommendations</span>
            </a>
            <div id="collapseRecommendations" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Recommendations</h6>
                    <a class="collapse-item" href="/agent/view-recommendations">View Recommendations</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Invite Agent -->
        <li class="nav-item">
            <a class="nav-link" href="/agent/invite-agent">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Invite Agent</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Offers Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTSP" aria-expanded="true" aria-controls="collapseTSP">
                <i class="fas fa-fw fa-users"></i>
                <span>Trusted Service Prov.</span>
            </a>
            <div id="collapseTSP" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Trusted Service Prov.</h6>
                    <a class="collapse-item" href="/agent/view-trusted-service-providers">View Providers</a>
                    <a class="collapse-item" href="/agent/add-trusted-service-provider">Add Provider</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - File Transfer Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFileTransfer" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-file"></i>
                <span>File Transfer</span>
            </a>
            <div id="collapseFileTransfer" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">File Transfer</h6>
                    <a class="collapse-item" href="/agent/view-shared-files">View Shared Files</a>
                    <a class="collapse-item" href="/agent/send-file">Send File</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    @endif

        <!-- Admin Menu items -->
        @if(Auth::user()->role == 'admin')

            <!-- Nav Item - Members Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Manage Users</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Users</h6>
                        <a class="collapse-item" href="{{ URL::to('/admin/view-users') }}">View Users</a>
                        <a class="collapse-item" href="{{ URL::to('/admin/add-user') }}">Add User</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Offers Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRecommendationsAdmin" aria-expanded="true" aria-controls="collapseRecommendationsAdmin">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Recommendations</span>
                </a>
                <div id="collapseRecommendationsAdmin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Recommendations</h6>
                        <a class="collapse-item" href="{{ URL::to('/admin/view-recommendations') }}">View Recommendations</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


                <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/admin/view-clients-assigned') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>View Clients Assigned</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Invite Agent -->
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/admin/invite-agent') }}">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Invite Agent</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Trusted Service Providers Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTSPAdmin" aria-expanded="true" aria-controls="collapseTSPAdmin">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Trusted Service Prov.</span>
                </a>
                <div id="collapseTSPAdmin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Trusted Service Prov.</h6>
                        <a class="collapse-item" href="{{ URL::to('/admin/view-trusted-service-providers') }}">View Providers</a>
                        <a class="collapse-item" href="{{ URL::to('/admin/add-trusted-service-provider') }}">Add Provider</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - File Transfer Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFileTransfer" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file"></i>
                    <span>File Transfer</span>
                </a>
                <div id="collapseFileTransfer" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">File Transfer</h6>
                        <a class="collapse-item" href="{{ URL::to('/admin/view-shared-files') }}">View Shared Files</a>
                        <a class="collapse-item" href="{{ URL::to('/admin/send-file') }}">Send File</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
        @endif

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            @if($notificationCount > 0 )
                                <span class="badge badge-danger badge-counter">{{ $notificationCount }}</span>
                            @endif
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            @if($allNotificationCount == 0)
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-bell text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold">No notifications</span>
                                    </div>
                                </a>
                            @endif

                            @foreach($notifications as $notification)
                                <a class="dropdown-item d-flex align-items-center" href="{{ URL::to('/notification') }}/{{ $notification->id }}">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-bell text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{ $notification->created_at }}</div>
                                        <span class="font-weight-bold">{{ json_decode($notification->data)->message }}</span>
                                    </div>
                                </a>
                            @endforeach
                            <a class="dropdown-item text-center small text-gray-500" href="/view-notifications">Show All Alerts</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong>{{ Auth::user()->name }}</strong></span>
                            <img class="img-profile rounded-circle" src="https://placehold.it/50x50/6d6da8/FFFFFF?text=AVATAR&color=red">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ URL::to('/settings') }}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ URL::to('/logout') }}" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>

            </nav>
            <!-- End of Topbar -->

@yield('page_content')

@include('layouts.loggedIn_footer')
