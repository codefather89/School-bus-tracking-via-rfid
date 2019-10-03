<?php require_once('config.php') ?>

<?php require_once('includes/public_functions.php') ?>

<?php require_once('board.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<?php require_once('includes/head_section.php') ?>
	<title>School Bus | Home </title>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include('includes/navbar.php') ?>
		<!-- // navbar -->
        <!-- banner -->
        <?php include('includes/banner.php') ?>
        
          <?php include('form1.php') ?>

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Location</h2>
			<hr>
			<!-- more content still to come here ... -->
            <?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['username'] ?></h3>
				<div class="info">
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include('includes/footer.php') ?>