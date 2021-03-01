<?php
include "includes/header.php";
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
			<?php
				$contents = $content->get_contents();
				if(is_array($contents)){
				foreach ($contents as $contents) {?>
				
				<div class="col-md-12 blog-content">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-2">
									<img src="images/blog_images/<?= $contents->content_image?>" alt="blog image" class="img-fluid">
								</div>
								<div class="col-md-10">
									<a href="view-blog.php?blog_id=<?= $contents->content_id?>" class="text-uppercase h5"><?= $contents->title ?></a>
									<p><?= substr($contents->content,0,250)." ..."  ?></p>
									<p class="blog-footer"><span><i class="far fa-calendar"></i> <?= $contents->date_created ?></span> <span><i class="fas fa-eye"></i> 110 Views</span> <span class="float-right"><i class="fas fa-user"></i> <?= $contents->admin_username ?></span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }}
				else{
					echo "<h3>No Content Yet!</h3>";
				}
				?>
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