<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-1571">
	<div class="container">
		<div class="grid-container grid-content">
		<!-- 1 -->
		<div class="box-box">
			<!-- hình -->
			<div class="img-ao">
				<span class="plus1">
					<a href="#">
						<img src="http://<?php echo $url_path ?>/images/ao.jpg" alt="hinh1" >
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
		<!-- 2 -->
		<div class="box-box">
			<!-- hình -->
			<div class="img-ao">
				<span class="plus2">
					<a href="#">
						<img src="http://<?php echo $url_path ?>/images/ao.jpg" alt="hinh1" >
					</a>
				</span>
			</div>
			<div class="text-h3">
				<h3>
					<a href="#">What accessories You really need?</a>
				</h3>
			</div>
			<div class="entry-meta">
				<span class="category-link" >
					<a href="#">Accessories, </a> <a href="#">Trends</a>
				</span>
					<a href="#">March 22, 2020</a>
			</div>
			<div class="read-story">
				<span>
					<a href="#">Read story</a>
					<i class="fa fa-play" aria-hidden="true"></i>
				</span>				
			</div>
		</div>
		<!-- 3 -->
		<div class="box-box">
			<div class="img-ao">
				<span class="plus3">
					<a href="#">
						<img src="http://<?php echo $url_path ?>/images/ao.jpg" alt="hinh1" >
					</a>
				</span>
			</div>
			<div class="text-h3">
				<h3>
					<a href="#">Spring footwear 2020</a>
				</h3>
			</div>
			<div class="entry-meta">
				<span class="category-link" >
					<a href="#">Shop the look, </a> <a href="#">Trends</a>
				</span>
					<a href="#">March 22, 2020</a>
			</div>
			<div class="read-story">
				<span>
					<a href="#">Read story</a>
					<i class="fa fa-play" aria-hidden="true"></i>
				</span>				
			</div>
		</div>
		<!-- 4 -->
		<div class="box-box">
			<div class="img-ao">
				<span class="plus4">
					<a href="#">
						<img src="http://<?php echo $url_path ?>/images/ao.jpg" alt="hinh1" >
					</a>
				</span>
			</div>
			<div class="text-h3">
				<h3>
					<a href="#">Maecenas vitae leo pretium​</a>
				</h3>
			</div>
			<div class="entry-meta">
				<span class="category-link" >
					<a href="#">Skin care, </a> <a href="#">Trends</a>
				</span>
					<a href="#">March 20, 2020</a>
			</div>
			<div class="read-story">
				<span>
					<a href="#">Read story</a>
					<i class="fa fa-play" aria-hidden="true"></i>
				</span>				
			</div>
		</div>
	</div>
</div>
	
</div>

