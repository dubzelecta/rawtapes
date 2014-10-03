<div id="content">
    <h1 class="text-contact">CONTACT</h1>
    <?php 
    foreach($contacts as $key => $value){
        echo '  <h2>'.$value['contact_type'].'</h2>
                <div class="info-holder">
                    <span>Contact <a href="mailto:'.$value['contact_email'].'">'.$value['contact_name'].'</a></span>
                    <em class="tel">'.$value['phone'].'</em>
                </div>';
    }
    ?>
</div>