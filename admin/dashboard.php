<?php
include "includes/header.php";
include "includes/sidebar.php";
?>

<main id="main-container">
    <div class="bg-image" style="background-image: url('assets/media/various/bg_dashboard.jpg');">
        <div class="bg-white-95">
            <div class="content content-full">
                <div class="row my-3">
                    <div class="col-md-12 d-md-flex align-items-md-center">
                        <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                            <h1 class="font-size-h4 mb-2">Dashboard</h1>
                            <p class="font-size-lg font-w400 text-muted mb-0">Welcome to your overview</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="d-flex align-items-center justify-content-between p-1">
                            <div class="mr-3">
                                <p class="text-muted mb-0">
                                    Users
                                </p>
                                <p class="font-size-h3 mb-0">
                                    680
                                </p>
                            </div>
                            <div>
                                <!-- Sparkline Dashboard Users Container -->
                                <span class="js-sparkline" data-type="line"
                                data-points="[640,630,660,640,660,650,670,680]"
                                data-width="90px"
                                data-height="40px"
                                data-line-color="#82b54b"
                                data-fill-color="transparent"
                                data-spot-color="transparent"
                                data-min-spot-color="transparent"
                                data-max-spot-color="transparent"
                                data-highlight-spot-color="#82b54b"
                                data-highlight-line-color="#82b54b"
                                data-tooltip-suffix="Users"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear" data-timeout="200">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="d-flex align-items-center justify-content-between p-1">
                            <div class="mr-3">
                                <p class="text-muted mb-0">
                                    Diagnosis
                                </p>
                                <p class="font-size-h3 mb-0">
                                    32
                                </p>
                            </div>
                            <div>
                                <!-- Sparkline Dashboard Tickets Container -->
                                <span class="js-sparkline" data-type="line"
                                data-points="[21,17,19,35,34,25,18,32]"
                                data-width="90px"
                                data-height="40px"
                                data-line-color="#e04f1a"
                                data-fill-color="transparent"
                                data-spot-color="transparent"
                                data-min-spot-color="transparent"
                                data-max-spot-color="transparent"
                                data-highlight-spot-color="#e04f1a"
                                data-highlight-line-color="#e04f1a"
                                data-tooltip-suffix="Tickets"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear" data-timeout="400">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="d-flex align-items-center justify-content-between p-1">
                            <div class="mr-3">
                                <p class="text-muted mb-0">
                                    Results
                                </p>
                                <p class="font-size-h3 mb-0">
                                    19
                                </p>
                            </div>
                            <div>
                                <!-- Sparkline Dashboard Projects Container -->
                                <span class="js-sparkline" data-type="line"
                                data-points="[17,19,15,12,13,14,18,19]"
                                data-width="90px"
                                data-height="40px"
                                data-line-color="#3c90df"
                                data-fill-color="transparent"
                                data-spot-color="transparent"
                                data-min-spot-color="transparent"
                                data-max-spot-color="transparent"
                                data-highlight-spot-color="#3c90df"
                                data-highlight-line-color="#3c90df"
                                data-tooltip-suffix="Projects"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="600">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="d-flex align-items-center justify-content-between p-1">
                            <div class="mr-3">
                                <p class="text-muted mb-0">
                                    Sales
                                </p>
                                <p class="font-size-h3 mb-0">
                                    256
                                </p>
                            </div>
                            <div>
                                 Sparkline Dashboard Sales Container 
                                <span class="js-sparkline" data-type="line"
                                data-points="[268,225,236,262,259,280,232,256]"
                                data-width="90px"
                                data-height="40px"
                                data-line-color="#343a40"
                                data-fill-color="transparent"
                                data-spot-color="transparent"
                                data-min-spot-color="transparent"
                                data-max-spot-color="transparent"
                                data-highlight-spot-color="#343a40"
                                data-highlight-line-color="#343a40"
                                data-tooltip-suffix="Sales"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</div>
</main>
<?php
include "includes/footer.php";
?>
