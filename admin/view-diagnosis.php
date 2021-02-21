<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<main id="main-container">
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h4 font-w900 mt-2 mb-0 mb-sm-2">Diagnosis</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Diagnosis</li>
                        <li class="breadcrumb-item active" aria-current="page">View Diagnosis</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <h6>Username: Font</h6>
                <h5>Diagnosis Details</h5>
                <table class="table table-bordered table-striped js-dataTable-full" style="width: 100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Questions</th>
                            <th>Responses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Are your crops getting black?</td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
                <h5 class="mt-4">Recommendation</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</main>
<?php
include "includes/footer.php";
?>