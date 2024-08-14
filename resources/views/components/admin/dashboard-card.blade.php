@foreach ($statisics as $item)
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#" data-target="#today{{ $loop->iteration }}" data-bs-toggle="ta">Today</a></li>
                    <li><a class="dropdown-item" href="#" data-target="#month{{ $loop->iteration }}" data-bs-toggle="ta">This Month</a></li>
                    <li><a class="dropdown-item" href="#" data-target="#year{{ $loop->iteration }}" data-bs-toggle="ta">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="today{{ $loop->iteration }}">
                        <h5 class="card-title">Number of blogs <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-text-paragraph"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $item['today'] }} <span style="font-size: 20px">blogs</span></h6>
                                {{-- <span class="text-success small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="month{{ $loop->iteration }}">
                        <h5 class="card-title">Number of blogs <span>| Month</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-text-paragraph"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $item['month'] }} <span style="font-size: 20px">blogs</span></h6>
                                {{-- <span class="text-success small pt-1 fw-bold">10%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="year{{ $loop->iteration }}">
                        <h5 class="card-title">Number of blogs <span>| Year</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-text-paragraph"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $item['year'] }} <span style="font-size: 20px">blogs</span></h6>
                                {{-- <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
