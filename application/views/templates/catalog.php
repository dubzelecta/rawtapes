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
        <script type="text/javascript">
    $(window).load(function(){
        $('.artistMain img').hover(
        function(){
            $(this).attr('src','/assets/artists_hover_text/'+$(this).attr('otherimage'));
        }
         ,
         function(){
             $(this).attr('src','/assets/artists_header_text/'+$(this).attr('mainimage'));
         }
        );
        $('#loadingModal').toggle();
        $('ul.product').fadeIn('slower',function(){
            
            
            
        });
        
    });

</script>
</body>
</html>