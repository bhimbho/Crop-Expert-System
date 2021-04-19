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
                <h1 class="flex-sm-fill font-size-h3 font-w900 mt-2 mb-0 mb-sm-2">Question List</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Question List</li>
                        <li class="breadcrumb-item active" aria-current="page">View Question List</li>
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
                    <div class="col-md-4">
                    <?php
                        if(isset($_POST['add'])){
                           
                                if($disease->add_question($_POST['question'], $_GET['disease_id'])){
                                    echo '<div class="alert alert-success">Question Created Successfully</div>';
                                }
                                else{
                                    echo '<div class="alert alert-danger">Question Cannot be created</div>';
                                }
                        }

                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Question</label>
                           <input type="text" class="form-control" name="question">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="add">Add Question</button>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-8">
                    <?php
                include "error.php";
            ?>
                <table class="table table-bordered table-striped js-dataTable-full" style="width: 100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Question</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                        $count = 1;
                        $all_content = $disease->all_disease_questions($_GET['disease_id']);
                        if(is_array($all_content)){
                            foreach ($all_content as $all_content) {?>
                                <td><?= $count++ ?></td>
                                <td><?= $all_content->question ?></td>
                                <td><a class="btn btn-danger" href="api/delete-disease-question.php?question_id=<?= $all_content->question_id?>&disease_id=<?= $_GET['disease_id']?>">Delete</a></td>
                            </tr>
                        <?php }}?>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "includes/footer.php";
?>
