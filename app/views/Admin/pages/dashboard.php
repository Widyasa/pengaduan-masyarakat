<div class="col-lg-10 col-12 content-wrapper ">
    <div class="container">
        <div class="content-section pt-5 px-4">
            <div class="topbar-content d-flex flex-row justify-content-between">
                <p class="fs-2 fw-semibold">Dashboard Page</p>
                <div class="d-lg-none hamburger-wrapper d-flex text-white align-self-center">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="main-content-dashboard d-flex flex-column pt-4">
                <div class="top-main-content-dashboard row gy-3">
                    <?php if ($_SESSION['id_level']===1) : ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-dashboard-wrapper">
                                <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                    <div class="card-dashboard-name d-flex flex-column p-2">
                                        <p class="card-dashboard-desc ">Total Citizens</p>
                                        <p class="card-dashboard-value fs-3 fw-bold "><?=$data['countCitizen']?> <span class="fs-6">Citizens</span></p>
                                    </div>
                                    <div class="img-card-dashboard-wrapper">
                                        <img src="{{asset('img/dashboard/total-activity.svg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class=" <?php if ($_SESSION['id_level']===1){?>col-lg-3<?php } else{ ?> col-lg-4 <?php }?> col-md-6 col-12">
                        <div class="card card-dashboard-wrapper">
                            <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                <div class="card-dashboard-name d-flex flex-column p-2">
                                    <p class="card-dashboard-desc ">Total Critics</p>
                                    <p class="card-dashboard-value fs-3 fw-bold "><?php if ($_SESSION['id_level']===1){echo $data['countCritics'];} else{ echo $data['countCriticsById'];} ?> <span class="fs-6">Critics</span></p>
                                </div>
                                <div class="img-card-dashboard-wrapper">
                                    <img src="{{asset('img/dashboard/activity-finished.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="<?php if ($_SESSION['id_level']===1){?>col-lg-3<?php } else{ ?> col-lg-4 <?php }?> col-md-6 col-12">
                        <div class="card card-dashboard-wrapper">
                            <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                <div class="card-dashboard-name d-flex flex-column p-2">
                                    <p class="card-dashboard-desc ">Total Feedback</p>
                                    <p class="card-dashboard-value fs-3 fw-bold "><?php if ($_SESSION['id_level']===1){echo $data['countFeedback'];} else{ echo $data['countFeedbackById'];} ?>  <span class="fs-6">Critics</span></p>
                                </div>
                                <div class="img-card-dashboard-wrapper">
                                    <img src="{{asset('img/dashboard/total-income.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="<?php if ($_SESSION['id_level']===1){?>col-lg-3<?php } else{ ?> col-lg-4 <?php }?> col-md-6 col-12">
                        <div class="card card-dashboard-wrapper">
                            <div class="card-body card-dashboard-content d-flex flex-row justify-content-between">
                                <div class="card-dashboard-name d-flex flex-column p-2">
                                    <p class="card-dashboard-desc ">Unfeedback Critics</p>
                                    <p class="card-dashboard-value fs-3 fw-bold "><?php if ($_SESSION['id_level']=== 1){echo $data['countUnFeedbackCritic'];} else{ echo $data['countUnFeedbackCriticById'];} ?>   <span class="fs-6">Critics</span></p>
                                </div>
                                <div class="img-card-dashboard-wrapper">
                                    <img src="{{asset('img/dashboard/total-target.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mid-main-content-dashboard row gy-4 pb-5 pt-4">
                    <div class="col-12">
                        <div class="card card-chart">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-column chart-header">
                                    <p class="display-4">Selamat Datang <?=$_SESSION['username']?></p>
                                    <p class="fs-3 pt-3">Klik Tombol dibawah untuk melihat keluhan terbaru</p>
                                    <div class="pt-3">
                                        <a href="<?=BASEURL?>critics" class="btn btn-color">See Critics</a>
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


