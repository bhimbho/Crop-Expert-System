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
                <h1 class="flex-sm-fill font-size-h3 font-w900 mt-2 mb-0 mb-sm-2">Disease</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Disease</li>
                        <li class="breadcrumb-item active" aria-current="page">View Disease</li>
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
                            $response = DB::fileUploadImage('../images/disease/','file');
                            if(in_array($response, ["Supply Parameter [1] with a valid POST filename", "File too Large", "File Unknown", "Sorry Upload Image files | File Uploaded wasnt an image", "File not uploaded"])){
                                echo '<div class="alert alert-danger">'.$response.'</div>';
                            }
                            else{
                                if($disease->add_disease($_POST['disease'],$response)){
                                    echo '<div class="alert alert-success">Disease Created Successfully</div>';
                                }
                                else{
                                    echo '<div class="alert alert-danger">Disease Cannot be created</div>';
                                }
                            }
                        }

                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Disease Image</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Cassava Type</label>
                           <input type="text" class="form-control" name="disease">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="add">Add Disease</button>
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
                            <th>Image</th>
                            <th>Disease</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                        $count = 1;
                        $all_content = $disease->all_disease();
                        if(is_array($all_content)){
                            foreach ($all_content as $all_content) {?>
                                <td><?= $count++ ?></td>
                                <td><img src="../images/disease/<?= $all_content->image ?>" style="height: 40px;;"></td>
                                <td><?= $all_content->disease ?></td>
                                <td><a class="btn btn-info" href="disease_question_list.php?disease_id=<?= $all_content->disease_id?>">View Questions</a> <a class="btn btn-danger" href="api/delete-disease.php?disease_id=<?= $all_content->disease_id?>">Delete</a></td>
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
