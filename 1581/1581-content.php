<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-1581">
	<div class="grid-container grid-content">
		<div>
			<h1>Fashion</h1>
			<a href="#" class="browse">						
			<span class="category">
				<span class="text-fas">Browse category</span>
				<span class="icon-arrow-right"><i class="fa fa-long-arrow-right"></i></span>
			</span>
			</a>
		</div>

		<div>
			<!-- hình -->
			<div class="img-ao">
				<a href="#">
					<img src="http://<?php echo $url_path ?>/images/yellow.jpg" alt="hinh1" >
				</a>
			</div>
			<!-- text -->
			<div class="text-h3">
				<h3>
					<a href="#">My favourite S/S 2020 pieces on sale</a>
				</h3>
			</div>
			<div class="entry-meta">
				<span class="category-link" >
					<a href="#">Fashion advice, </a> <a href="#">Shop the look</a>
				</span>
					<a href="#">April 29, 2020</a>
			</div>
			<!-- button read story -->
			<div class="read-story">
				<span>
					<a href="#">Read story</a>
					<i class="fa fa-play" aria-hidden="true"></i>
				</span>				
			</div>
		</div>

		<div>
			<!-- hình -->
			<div class="img-ao">
				<span class="yellow1">
					<a href="#">
						<img src="http://<?php echo $url_path ?>/images/yellow.jpg" alt="hinh1" >
					</a>
				</span>
			</div>
			<!-- text -->
			<div class="text-h3">
				<h3>
					<a href="#">My favourite fashion trends 2020</a>
				</h3>
			</div>
			<div class="entry-meta">
				<span class="category-link" >
					<a href="#">Fashion advice, </a> <a href="#">Trends</a>
				</span>
					<a href="#">March 23, 2020</a>
			</div>
			<!-- button read story -->
			<div class="read-story">
				<span>
					<a href="#">Read story</a>
					<i class="fa fa-play" aria-hidden="true"></i>
				</span>				
			</div>
		</div>

		<div>
			<!-- hình -->
			<div class="img-ao">
				<span class="yellow1">
					<a href="#">
						<img src="http://<?php echo $url_path ?>/images/yellow.jpg" alt="hinh1" >
					</a>
				</span>
			</div>
			<!-- text -->
			<div class="text-h3">
				<h3>
					<a href="#">What accessories You really need?</a>
				</h3>
			</div>
			<div class="entry-meta">
				<span class="category-link" >
					<a href="#">Accessorie, </a> <a href="#">Trends</a>
				</span>
					<a href="#">March 22, 2020</a>
			</div>
			<!-- button read story -->
			<div class="read-story">
				<span>
					<a href="#">Read story</a>
					<i class="fa fa-play" aria-hidden="true"></i>
				</span>				
			</div>
		</div>

	</div>
</div>

