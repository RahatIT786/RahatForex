<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">All Request Sell Forex</h3>
                {{-- <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul> --}}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Sell Forex</h4>
                            @if (session()->has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('message') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Delete</th>


                                        </tr>
                                    <tbody>
                                        @foreach ( $sellforex as $sell)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $sell->name }}</td>
                                                <td>
                                                    <a href="tel:{{ $sell->mobile }}" class="contact-link">
                                                        <i class="fa-solid fa-phone phone-icon"></i>
                                                    </a>
                                                    <a href="https://wa.me/{{ $sell->mobile }}" class="contact-link"
                                                        target="_blank">
                                                        <i class="fa-brands fa-whatsapp whatsapp-icon"></i>
                                                    </a>

                                                    {{ $sell->mobile }}

                                                </td>

                                                <td>
                                                    <a href="mailto:{{ $sell->email }}">
                                                        <i class="fa-solid fa-envelope phone-icon"></i> </a>
                                                    {{ $sell->email }}
                                                </td>

                                                <td>
                                                    <i wire:click="delete({{ $sell->id }})"
                                                        wire:loading.attr="disabled"
                                                        class="fa-solid fa-trash text-danger"></i>
                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                                {{-- <div class="mt-4 d-flex justify-content-end">
                                    {{ $Forexmoney->links('pagination::bootstrap-5') }}
                                </div> --}}


                            </div>
                        </div>
                    </div>
                </div>
                {{-- // this css use for pagination --}}
                <style>
                    /* Pagination container styling */
                    .pagination {
                        display: flex;
                        justify-content: flex-end;
                        /* Align to the right */
                        align-items: center;
                        padding: 10px 0;
                        list-style: none;
                        margin: 0;
                        border-radius: 50px;
                        background-color: #f9f9f9;
                    }

                    /* Style for individual pagination items */
                    .pagination li {
                        margin: 0 5px;
                    }

                    /* Style pagination links (normal state) */
                    .pagination li a,
                    .pagination li span {
                        color: #fff;
                        background-color: #3498db;
                        /* Primary color */
                        border: 1px solid #3498db;
                        padding: 8px 16px;
                        border-radius: 50px;
                        font-size: 16px;
                        text-decoration: none;
                        transition: all 0.3s ease;
                        font-weight: bold;
                    }

                    /* Hover effect for pagination links */
                    .pagination li a:hover,
                    .pagination li span:hover {
                        background-color: #2980b9;
                        border-color: #2980b9;
                        transform: translateY(-2px);
                    }

                    /* Active page styling */
                    .pagination li.active span {
                        background-color: #2ecc71;
                        /* Active color */
                        border-color: #2ecc71;
                        color: #fff;
                        font-size: 18px;
                        /* Slightly larger font */
                    }

                    /* Disabled page styling */
                    .pagination li.disabled span {
                        color: #ccc;
                        background-color: #e0e0e0;
                        pointer-events: none;
                    }

                    /* Next and Previous button styling */
                    .pagination .page-item:first-child a,
                    .pagination .page-item:last-child a {
                        background-color: #f1f1f1;
                        color: #3498db;
                        border-radius: 50px;
                    }

                    /* Hover for first and last buttons */
                    .pagination .page-item:first-child a:hover,
                    .pagination .page-item:last-child a:hover {
                        background-color: #3498db;
                        color: #fff;
                        transform: translateY(-2px);
                    }

                    /* Add shadow effect for visual enhancement */
                    .pagination li a,
                    .pagination li span {
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    /* Hover shadow effect */
                    .pagination li a:hover,
                    .pagination li span:hover {
                        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
                    }
                </style>

                {{-- end of the pagination --}}
                <style>
                    /* Make the link text white */
                    .contact-link {
                        color: black;
                        text-decoration: none;
                    }

                    /* Change phone icon color */
                    .phone-icon {
                        color: #3498db;
                        /* Blue */
                        margin-right: 8px;
                        font-size: 1.5rem;
                    }

                    /* Change WhatsApp icon color */
                    .whatsapp-icon {
                        color: #25D366;
                        /* WhatsApp green */
                        margin-right: 8px;
                        font-size: 1.5rem;
                    }
                </style>

            </div>
        </div>
    </div>
</div>

