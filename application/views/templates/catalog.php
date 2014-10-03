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
	</div>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55401592-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>