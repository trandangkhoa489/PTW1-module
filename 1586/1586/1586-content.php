<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-1586">
    <div class="container">
        <div class="row">
            <div class="col-md-3 img-contain"></div>
            <div class="col-md-3 num-text">
		<div class="text-lorem">
                    <span>Medical face care</span>
                    <p>Lorem glavrida opsum - porta dui quis imperdiet consectetur. Vivamus tincidunt, turpis non pulvinar.</p>
		</div>
            </div>
            <div class="col-md-3 img-contain"></div>
            <div class="col-md-3 num-text">
		<div class="text-lorem">
                    <span>Medical face care</span>
                    <p>Lorem glavrida opsum - porta dui quis imperdiet consectetur. Vivamus tincidunt, turpis non pulvinar.</p>
		</div>
            </div>
        </div>
        <!--4 phan duoi-->
          <div class="row">
            <div class="col-md-3 num-text">
		<div class="text-lorem">
                    <span>Medical face care</span>
                    <p>Lorem glavrida opsum - porta dui quis imperdiet consectetur. Vivamus tincidunt, turpis non pulvinar.</p>
		</div>
            </div>
            <div class="col-md-3 img-contain">
            </div>
            <div class="col-md-3 num-text">
		<div class="text-lorem">
                    <span>Medical face care</span>
                    <p>Lorem glavrida opsum - porta dui quis imperdiet consectetur. Vivamus tincidunt, turpis non pulvinar.</p>
		</div>
            </div>
            <div class="col-md-3 img-contain">
            </div>
        </div>
    </div>
</div>

