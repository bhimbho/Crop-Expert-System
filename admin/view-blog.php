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
                <h1 class="flex-sm-fill font-size-h4 font-w900 mt-2 mb-0 mb-sm-2">View Blog</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">View Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">                 
        <div class="block block-rounded">
            <div class="block-content">
                <form action="be_forms_editors.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <label>Blog Title</label>
                        <input type="text" name="" class="form-control" value="font baba">
                    </div>
                    <div class="form-group">
                        <label>Blog Content</label>
                        <textarea id="js-ckeditor" name="ckeditor">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-block">Update Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include "includes/footer.php";
?>
