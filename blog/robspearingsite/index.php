<!DOCTYPE html>
<html>
<head>
<title>Composer Robert Spearing - Blog</title>
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Official website of composer Robert Spearing">

<META NAME="OWNER" CONTENT="robspearing@hotmail.com">
<META NAME="AUTHOR" CONTENT="Robert Spearing">
<META NAME="RATING" CONTENT="General">
<meta name="robots" CONTENT="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" type="text/css" href="cssreset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href=" <?php bloginfo('stylesheet_url');?> " rel="stylesheet" type="text/css" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<?php wp_head(); ?>
</head>
<body>
	<div class="page">
		<div class="header">
			<h1>
			Robert Spearing
			</h1>
			<ul class="nav">
				<li><a href="../index.html" title="Home">Home</a></li>
				<li><a href="../biography.html" title="Biography">Biography</a></li>
				<li><a href="../interview.html" title="Interview with the composer">Interview</a></li>
				<li><a href="../listen.html" title="Listen online">Listen</a></li>
				<li><a class="current-tab" href="/blog" title="Blog">Blog</a></li>
				<li><a href="../music.html" title="Music by Robert Spearing">Orders & Catalogue</a></li>
				<li><a href="../contact.html" title="Contact the composer">Contact</a></li>
			</ul>
		</div>
		<div class="content">
			
			<div class="text">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				
				
				<header class="entry-header">
				<h3><a href="<?php the_permalink();?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s'), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
				<div class="date"><?php the_date(); ?></div>
				</header>
				
				<div class="blogpost"><?php the_content(); ?>  
					<div class="posted">Posted by <?php the_author(); ?></div>
				</div>
				
			
				</article>
				<?php endwhile; endif; ?>
			</div>
			<div class="sidebar">
			<h2>Rob Spearing's Blog</h2>
				<img src=" <?php bloginfo('template_directory');?>/images/rh_barn_photo_summer.jpg"/ width="226x">
			<div class="welcome">Welcome to my new blog! <br>I will be providing regular updates on my latest work and future plans.</div>
			
			<!--
			<h4>Recent Posts</h4>

		<ul>
			<li>Post title</li>
			<li>Post title</li>
		</ul>
		<h4>Categories</h4>
		<ul>
			<li>category</li>
			<li>category</li>
		<ul>
			-->
			</div>
			
			
		</div>
		<!--<div class="footer">
			<h3>Quick Links</h3>
			<ul>
				<li><a href="contact.html">Contact the Composer</a></li>
				<li><a href="avail_music.html">Order Sheet Music</a></li>
			</ul>
		</div>-->
	</div>
	<div class="footer">
	&#169;
	<script type="text/javascript">
	var d = new Date()
	document.write(d.getFullYear())
	</script>
	Robert Spearing, all rights reserved
	</div>
	<?php wp_footer(); ?>
</body>