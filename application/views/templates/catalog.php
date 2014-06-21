<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1003" />
	<meta name="MobileOptimized" content="1003" />
	<title>RawTapes</title>
        <?php if($catalog_class=='catalog'){
            $pathext = "../";
        }
        else{
            
        $pathext='';}
        ?>
	<link href="/assets/css/all.css" media="all" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="/assets/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.main.js"></script>
	<script type="text/javascript" src="/assets/js/ie.js"></script>
</head>
<body class="<?php echo $catalog_class; ?>">
    <div id="wrapper">
        <?php $this->load->view('header');?>
                <?php echo $body; ?>
        <?php $this->load->view('footer');?>
	</div>
</body>
</html>