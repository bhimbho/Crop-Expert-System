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
                        if(isset($_POST['add'])){
                            $crop = $_POST['crop'];
                            $cassava = $_POST['cassava'];
                            $knowledge = $_POST['knowledge'];
                            $stage = $_POST['stage'];
                            $survey->save_inference($crop,$cassava,$stage,$knowledge);
                        }

                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Crop Type</label>
                            <select name="crop" id="" class="form-control" required>
                                <option value="">Select Stage</option>
                                <?php
                                    $all_crops = $survey->get_all_crops();
                                    foreach ($all_crops as $all_crops) {?>
                                        <option value="<?= $all_crops->crop_id ?>"><?= $all_crops->crop ?></option>
                                    <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Cassava Type</label>
                            <select name="cassava" id="" class="form-control" required>
                                <option value="">Select Type</option>
                                <?php
                                    $cassava = $survey->get_all_cassava_varieties();
                                    foreach ($cassava as $cassava) {?>
                                        <option value="<?= $cassava->cassava_id ?>"><?= $cassava->cassava ?></option>
                                    <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Stage</label>
                            <select name="stage" id="" class="form-control" required>
                                <option value="">Select Stage</option>
                                <option value="0">Pre-Planting Stage</option>
                                <option value="1">Planting Stage</option>
                                <option value="2">Post-Planting Stage</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Inference/Knowledge</label>
                            <textarea type="text" name="knowledge" id="editor" class="form-control" placeholder="Blog title"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="add">Add Inference</button>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-12">
                    <?php
                include "error.php";
            ?>
                <table class="table table-bordered table-striped js-dataTable-full" style="width: 100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Crop</th>
                            <th>Cassava Type</th>
                            <th>Stage</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                        $count = 1;
                        $all_content = $survey->get_all_survey_knowledge();
                        $process = ['Pre-planting', 'Planting', 'Post-Planting'];
                        if(is_array($all_content)){
                            foreach ($all_content as $all_content) {?>
                                <td><?= $count++ ?></td>
                                <td><?= $all_content->crop ?></td>
                                <td><?= $all_content->cassava ?></td>
                                <td><?= $process[$all_content->stage] ?></td>
                                <td><a class="btn btn-info" href="view-survey-knowledge.php?knowledge_id=<?= $all_content->solution_id?>">View</a> <a class="btn btn-danger" href="api/delete-survey-inference.php?knowledge_id=<?= $all_content->solution_id?>">Delete</a></td>
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
