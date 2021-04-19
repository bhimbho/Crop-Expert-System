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
                <h1 class="flex-sm-fill font-size-h3 font-w900 mt-2 mb-0 mb-sm-2">Survey Notes</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Survey Notes</li>
                        <li class="breadcrumb-item active" aria-current="page">View Survey Notes</li>
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
                           
                                $notes->save_notes($_POST['note'],$_POST['cassava_id']);
                                //     echo '<div class="alert alert-success">Inference Created Successfully</div>';
                                // }
                                // else{
                                //     echo '<div class="alert alert-danger">Inference Cannot be created</div>';
                                // }
                        }

                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Note</label>
                           <textarea name="note" id="editor" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Crop</label>
                           <select name="cassava_id" class="form-control">
                                <option value="">--Select Crop--</option>
                                <?php
                                    $crop_list = $survey->get_all_cassava_varieties();
                                    foreach ($crop_list as $crop_list) {?>
                                        <option value="<?= $crop_list->cassava_id ?>"><?= $crop_list->cassava ?></option>
                                    <?php }?>
                           </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="add">Add Note</button>
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
                            <th>Solution</th>
                            <th>Disease</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                        $count = 1;
                        $notes = new Notes;
                        $all_notes = $notes->get_all_notes();
                        if(is_array($all_notes)){
                            foreach ($all_notes as $all_notes) {?>
                                <td><?= $count++ ?></td>
                                <td><?= $all_notes->notes ?>></td>
                                <td><?= $all_notes->cassava ?></td>
                                <td><a class="btn btn-danger" href="api/delete-notes.php?note_id=<?= $all_notes->note_id?>">Delete</a></td>
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
