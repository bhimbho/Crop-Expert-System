<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<main id="main-container">
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h4 font-w900 mt-2 mb-0 mb-sm-2">User Details</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active" aria-current="page">User's Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <h5>User Details</h5>
                <?php
                    $farmer_details = $farmer->single_farmer($_GET['farmer_id']);
                ?>
                <p>Fullname: <?= $farmer_details->firstname.' '.$farmer_details->lastname ?></p>
                <p>Email: <?= $farmer_details->email ?></p>
                <p>Phone: <?= $farmer_details->phone ?></p>
                <p>Farm Address: <?= $farmer_details->farm_address ?></p>
                <p>Gender: <?= $farmer_details->gender ?></p>
            </div>
        </div>
    </div>
</main>
<?php
include "includes/footer.php";
?>