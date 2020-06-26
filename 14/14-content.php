<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-14">
	<div class="container">
		<div class="content">
			<!-- Phần đầu -->
			<div class="descript-reiew">
				<ul class="choose-text">
					<li><a href="#">Description</a></li>
					<li><a href="#">Review(<span>1</span>)</a></li>
					<li></li>
				</ul>
			</div>

			<!-- Phần nội dung -->
			<div class="content-min">
				<h2>1 review for Jin Xuan</h2>
				<div class="grid-container">
					<div class="image-icon"><img src="http://<?php echo $url_path ?>/images/icon.png" alt="#"></div>
	  				<div class="text-icon"> 
	  					<span><a href="#">Amanda Johnson</a> - July 4, 2018</span> 
	  					<span class="star">
	  						<i class="fa fa-star"></i>
		  					<i class="fa fa-star"></i>
		  					<i class="fa fa-star"></i>
		  					<i class="fa fa-star"></i>
		  					<i class="fa fa-star"></i>
	  					</span>
	  				</div>
	  				<!-- thẻ div này được dùng để không cho thẻ div sau chảy lên -->
	  				<div></div>
	  				 
	  				<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  				quis nostrud exercitation ullamco laboris nisi ut</p>
				</div>
				<div class="your-rate">
					<h3>Add a review</h3>
					<p>Your email address will not be published. Required field are marked *</p>
					<p class="your-star"><strong>You rating</strong></p>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<div class="form-email">
						<form action="/action_page.php">
							<label for="fname"><strong>Email *</strong></label>
							<input type="text" id="fname" name="fname">
					  		<input type="checkbox">
					    
					    <p><strong>Save my name, email, and website in this browser for the next time I comment.</strong></p>

					    <input type="submit" value="Submit">
					  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>