<!doctype html>
<html>
<?php $this->load->view('head'); ?>
<?php if($catalog_class=='catalog'){
            $pathext = "../";
        }
        else{
            
        $pathext='';}
        ?>
<body class="<?php echo $catalog_class; ?>">
    <div id="wrapper">
        <?php $this->load->view('header');?>
                <?php echo $body; ?>
        <?php $this->load->view('footer');?>
	</div>
</body>
</html>