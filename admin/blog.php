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
                <h1 class="flex-sm-fill font-size-h3 font-w900 mt-2 mb-0 mb-sm-2">Blogs</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Blogs</li>
                        <li class="breadcrumb-item active" aria-current="page">View Blogs</li>
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
            <div class="block-content block-content-full d-flex justify-content-end">
                <a href="create-blog.php" class="btn btn-info rounded-0 px-5">Add Blog</a>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-content block-content-full">
            <?php
                include "error.php";
            ?>
                <table class="table table-bordered table-striped js-dataTable-full" style="width: 100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Blog Title</th>
                            <th>Blog Image</th>
                            <th>Poster</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                        $count = 1;
                        $all_content = $content->get_contents();
                        if(is_array($all_content)){
                            foreach ($all_content as $all_content) {?>
                                <td><?= $count++ ?></td>
                                <td><?= $all_content->title ?></td>
                                <td><img src="../images/blog_images/<?= $all_content->content_image ?>" height="50px" alt=""></td>
                                <td><?= $all_content->admin_username ?></td>
                                <td><a class="btn btn-info" href="view-blog.php?blog_id=<?= $all_content->content_id?>">View</a> <a class="btn btn-danger" href="api/delete-blog.php?blog_id=<?= $all_content->content_id?>">Delete</a></td>
                            </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
include "includes/footer.php";
?>
