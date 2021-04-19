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
        <!-- <div class="block block-rounded">
            <div class="block-content block-content-full d-flex justify-content-end">
                <a href="create-blog.php" class="btn btn-info rounded-0 px-5">Add Blog</a>
            </div>
        </div> -->
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-md-12">
                    <?php
                include "error.php";
            ?>
                    <?php
                    $solution = $survey->get_single_survey_knowledge($_GET['solution_id']);
                        if(isset($_POST['update'])){
                            $solution = $_POST['solution'];
                            if($survey->update_inference($solution,$_GET['solution_id'])){
                               $_SESSION['msg'] = "Inference Updated Successfully";
                            }
                            else{
                                $_SESSION['msg'] ="Inference Cannot be created</div>";
                            }
                            echo "<script>window.location.href = 'survey_knowledge_base.php' </script>";
                        }

                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Inference/Knowledge</label>
                            <textarea type="text" name="solution" id="editor" class="form-control" placeholder="Blog title"><?= $solution->solution ?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="update">Update Inference</button>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-12">
                   
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "includes/footer.php";
?>
