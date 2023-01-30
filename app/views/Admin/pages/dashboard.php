<div class="col-lg-10 col-12 content-wrapper ">
    <div class="container">
        <div class="content-section pt-5 px-4">
            <div class="topbar-content d-flex flex-row justify-content-between">
                <p class="fs-2 fw-semibold">Dashboard Page</p>
                <div class="search-input-wrapper d-lg-flex d-none flex-row gap-2">
                    <div class="d-flex search-icon-wrapper ps-3 bg-white h-100">
                        <i class="align-self-center fa-solid fs-14 fa-magnifying-glass grey-color"></i>
                    </div>
                    <input class="border-0 me-2 py-3 form-search"  type="search" placeholder="Search Activity" id="searchTransport" aria-label="Search">
                </div>
                <div class="d-lg-none hamburger-wrapper d-flex text-white align-self-center">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="main-content-dashboard d-flex flex-column pt-4">
                <div class="top-main-content-dashboard row gy-3">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-dashboard-wrapper">
                            <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                <div class="card-dashboard-name d-flex flex-column p-2">
                                    <p class="card-dashboard-desc ">Total Activities</p>
                                    <p class="card-dashboard-value fs-3 fw-bold ">09</p>
                                </div>
                                <div class="img-card-dashboard-wrapper">
                                    <img src="{{asset('img/dashboard/total-activity.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-dashboard-wrapper">
                            <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                <div class="card-dashboard-name d-flex flex-column p-2">
                                    <p class="card-dashboard-desc ">Activities Finished</p>
                                    <p class="card-dashboard-value fs-3 fw-bold ">04</p>
                                </div>
                                <div class="img-card-dashboard-wrapper">
                                    <img src="{{asset('img/dashboard/activity-finished.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-dashboard-wrapper">
                            <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                <div class="card-dashboard-name d-flex flex-column p-2">
                                    <p class="card-dashboard-desc ">Total Income</p>
                                    <p class="card-dashboard-value fs-3 fw-bold ">IDR. 500.000</p>
                                </div>
                                <div class="img-card-dashboard-wrapper">
                                    <img src="{{asset('img/dashboard/total-income.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-dashboard-wrapper">
                            <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                <div class="card-dashboard-name d-flex flex-column p-2">
                                    <p class="card-dashboard-desc ">Total Target</p>
                                    <p class="card-dashboard-value fs-3 fw-bold ">124</p>
                                </div>
                                <div class="img-card-dashboard-wrapper">
                                    <img src="{{asset('img/dashboard/total-target.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mid-main-content-dashboard row gy-4 pb-5 pt-4">
                    <div class="col-lg-6 col-12 ">
                        <div class="card card-chart">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-row chart-header justify-content-between">
                                    <p class="fs-4 fw-semibold">Activity Performance</p>
                                    <div class="dropdown">
                                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Last 1 Month
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item main-color" href="#">Action</a></li>
                                            <li><a class="dropdown-item main-color" href="#">Another action</a></li>
                                            <li><a class="dropdown-item main-color" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 px-3">
                                <canvas class="pt-4" id="myChart"></canvas>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6 col-12 ">
                        <div class="card card-chart">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-row chart-header justify-content-between">
                                    <p class="fs-4 fw-semibold">Target Activity  Today</p>
                                </div>
                                <div class="table-dashboard pt-4 px-3">
                                    <div class="top-table row px-2 py-3">
                                        <div class="col-lg-2 col-md-2 d-lg-flex d-md-flex d-none">No</div>
                                        <div class="col-lg-6 col-md-6 col-6">Activity</div>
                                        <div class="col-lg-4 col-md-4 col-6">Level</div>
                                    </div>
                                    <div class="content-table-grup ">
                                        <div class="content-table row px-2 py-3">
                                            <div class="col-lg-2 col-md-2 d-lg-flex d-md-flex d-none">1.</div>
                                            <div class="col-lg-6 col-md-6 col-6">Landing Barbershop</div>
                                            <div class="col-lg-4 col-md-4 col-6">Medium</div>
                                        </div>
                                        <div class="content-table row px-2 py-3">
                                            <div class="col-lg-2 col-md-2 d-lg-flex d-md-flex d-none">2.</div>
                                            <div class="col-lg-6 col-md-6 col-6">Web System Vote</div>
                                            <div class="col-lg-4 col-md-4 col-6">Hard</div>
                                        </div>
                                        <div class="content-table row px-2 py-3">
                                            <div class="col-lg-2 col-md-2 d-lg-flex d-md-flex d-none">3.</div>
                                            <div class="col-lg-6 col-md-6 col-6">Study Vue</div>
                                            <div class="col-lg-4 col-md-4 col-6">Hard</div>
                                        </div>
                                        <div class="content-table row px-2 py-3">
                                            <div class="col-lg-2 col-md-2 d-lg-flex d-md-flex d-none">4.</div>
                                            <div class="col-lg-6 col-md-6 col-6">Build Logo</div>
                                            <div class="col-lg-4 col-md-4 col-6">Medium</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
