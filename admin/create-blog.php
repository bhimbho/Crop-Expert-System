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
                <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Create Blog</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
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
            <?php
                if(isset($_POST['add_blog'])){
                    $response = DB::fileUploadImage('../images/blog_images/','file');
                    if(in_array($response, ["Supply Parameter [1] with a valid POST filename", "File too Large", "File Unknown", "Sorry Upload Image files | File Uploaded wasnt an image", "File not uploaded"])){
                        echo '<div class="alert alert-danger">'.$response.'</div>';
                    }
                    else{
                        if($content->store_content($_POST['title'],$_POST['content'],$response)){
                            echo '<div class="alert alert-success">Content Created Successfully</div>';
                        }
                        else{
                            echo '<div class="alert alert-danger">Content Cannot be created</div>';
                        }
                    }
                }
            ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Blog Image</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Blog Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Blog title">
                    </div>
                    <div class="form-group">
                        <label>Blog Content</label>
                        <textarea id="js-ckeditor" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-block" name="add_blog">Add Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include "includes/footer.php";
?>
