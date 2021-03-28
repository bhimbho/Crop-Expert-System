<?php
include "includes/header.php";
DB::check();
?>
<div class="container-fluid mt-5">
	<div class="container p-4 mt-5 pt-5 mb-5">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="row">
                <h3>Which of the following Disease do you think aligns with what you're experiencing on sight? (*Select One*)</h3>
                <?php
                    $all_disease = $disease->all_disease();
                    foreach ($all_disease as $all_disease) {?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <a href="/expert-system.php?disease=<?= $all_disease->disease_id ?>"><span class="badge badge-success"><?= $all_disease->disease ?></span></a>
                            </div>
                            <div class="card-body">
                                <img src="images/disease/<?= $all_disease->image ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <p style="font-style: italic;">Note: Backward Channing decision process used</p>
                </div>
			</div>
			
		</div>
	</div>
</div>
<?php
include "includes/footer.php";
?>