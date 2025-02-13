@extends('welcome')

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USA</title>
    
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @section('content')

    <nav class="navbar navbar-expand-lg navbar-light w-auto mx-auto bg-light border border-1">
        <div class="container position-relative">
            <a class="navbar-brand fs-3 fw-bold" href="{{ route('home') }}">Legal & Accounting Directory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto">
                    <!-- USA & Canada Button -->
                    <a href="#" class="btn btn-dark ms-3 text-light">USA</a>
                    <a href="#" class="btn btn-dark ms-3 text-light">Canada</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Search Bar -->
        <form class="d-flex">
            <input class="form-control me-2 h-50 d-inline-block w-75" type="search" placeholder="Search firms..." aria-label="Search">
            <button type="button" class="btn btn-dark ms-4 text-light h-50 d-inline-block" data-bs-toggle="offcanvas" data-bs-target="#filterSidebar">Filters</button>
            <button type="button" class="btn btn-dark ms-4 text-light h-50 d-inline-block" data-bs-toggle="modal" data-bs-target="#addFirmModal">Add Firm</button>
        </form>
    </div>


    <div class="container">
        <!-- Modal for Add Firm -->
        <div class="modal fade" id="addFirmModal" tabindex="-1" aria-labelledby="addFirmModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addFirmModalLabel">Add New Firm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firmName" class="form-label">Firm Name</label>
                                    <input type="text" class="form-control" id="firmName">
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" id="country">
                                        <option selected>USA</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="state" class="form-label">State/Province</label>
                                    <input type="text" class="form-control" id="state">
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city">
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <label class="form-label">Specialties</label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="corporateLaw">
                                        <label class="form-check-label" for="corporateLaw">Corporate Law</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="itLaw">
                                        <label class="form-check-label" for="itLaw">IT Law</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="financialAccounting">
                                        <label class="form-check-label" for="financialAccounting">Financial Accounting</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="taxAccounting">
                                        <label class="form-check-label" for="taxAccounting">Tax Accounting</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="businessLaw">
                                        <label class="form-check-label" for="businessLaw">Business Law</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="regulatoryCompliance">
                                        <label class="form-check-label" for="regulatoryCompliance">Regulatory Compliance</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-md-6">
                                    <label for="size" class="form-label">Size</label>
                                    <select class="form-select" id="size">
                                        <option selected>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-dark">Add Firm</button>
                    </div>
                </div>
            </div>
        </div>



            <!-- Filter Sidebar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="filterSidebar" aria-labelledby="filterSidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="filterSidebarLabel">Filters</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form>
                    <div class="mb-3">
                        <label for="specialty" class="form-label">Specialty</label>
                        <select class="form-select" id="specialty">
                            <option selected>Select specialty</option>
                            <option>Corporate Law</option>
                            <option>IT Law</option>
                            <option>Financial Accounting</option>
                            <option>Tax Accounting</option>
                            <option>Business Law</option>
                            <option>Regulatory Compliance</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <select class="form-select" id="size">
                            <option selected>Select size</option>
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="state" class="form-label">State/Province</label>
                        <select class="form-select" id="state">
                            <option selected>Select state/province</option>
                            <option>New York</option>
                            <option>California</option>
                            <option>Texas</option>
                            <option>Ontario</option>
                            <option>British Columbia</option>
                        </select>
                    </div>

                    <button type="reset" class="btn btn-outline-dark w-100">Clear Filters</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection