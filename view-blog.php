<?php
include "includes/header.php";
$post = $content->get_contents_single($_GET['blog_id']);
?>
<div class="container-fluid mb-5">
	<div class="row banner">
		<div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
			<h2 class="text-white text-uppercase font-weight-bold">expert corner</h2>
			<hr style="width: 10%; border: 2px solid white; margin-top: 0">
		</div>
	</div>
	<div class="row blog-block mt-5">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12 blog-content">
					<div class="card">
						<div class="card-body">
							<div class="row">
							<?php
								if($post == NULL) {?>
									<div class="col-md-8 p-0">
									<h2>Requested Content doesn't exist!</h2>
									</div>
								<?php }
								else{?>
								<div class="col-md-12 p-0">
									<img src="images/blog_images/<?= $post->content_image ?>" alt="blog image" class="" width="100%" height="300px">
								</div>
								<div class="col-md-12 mt-4">
									<h4 class="text-uppercase mb-3"><?= $post->title ?></h4>
									<p><?= $post->content ?></p>
									<p class="blog-footer"><span><i class="far fa-calendar"></i> <?= $post->date_created ?></span>  <span class="float-right"><i class="fas fa-user"></i> Posted by <?= $post->admin_username ?></span></p>
								</div>
								<?php }?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 blog-sidebar">
			<h4 class="text-uppercase">recent posts</h4>
			<hr style="width: 15%; border: 2px solid #0D1C1E">
			<ul class="ml-3">
			<?php
				$recent = $content->recent_content();
				if(is_array($recent)){
				foreach ($recent as $recent) {?>
				
					<li class=""><a href="view-blog.php?blog_id=<?= $recent->content_id?>"><?= $recent->title?></a></li>
			<?php }} ?>
			</ul>
			<div class="row mt-5">
				<div class="col-md-10 offset-md-1 sidebar-carousel">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="images/background-1.png" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/background-2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/background-3.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
Include "includes/footer.php";
?>