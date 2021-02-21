<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<!-- Main Container -->
<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h4 font-w900 mt-2 mb-0 mb-sm-2">Diagnosis</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Diagnosis</li>
                        <li class="breadcrumb-item active" aria-current="page">All Diagnosis</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped js-dataTable-full" style="width: 100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jose Parker</td>
                            <td>jose@mail.com</td>
                            <td><a class="btn btn-info" href="view-diagnosis.php">View Diagnosis</a> <a class="btn btn-danger" href="">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
include "includes/footer.php";
?>