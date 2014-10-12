<?php
// var_dump($data);
//  die;
?>
<div id="main">
    <div class="photo-holder"><img src="/assets/artists_pic/<?php echo $data['profile_pic_url']; ?>" width="422" height="849" alt="image description"></div>
    <div id="content">
        <h1><?php echo $data['name']; ?></h1>
        <div class="txt-holder">
            <?php echo $data['bio']; ?>
        </div>
        <ul class="social-networks">
            <?php if(!empty($data['sound_cloud_url'])) {?><li><a href="<?php echo $data['sound_cloud_url']; ?>" class="ico" target="_blank"></a></li><?php } ?>
            <?php if(!empty($data['facebook_url'])) {?><li><a href="<?php echo $data['facebook_url']; ?>" class="facebook" target="_blank">facebook</a></li><?php } ?>
            <?php if(!empty($data['twitter_url'])) {?><li><a href="<?php echo $data['twitter_url']; ?>" class="twitter" target="_blank">twitter</a></li><?php } ?>
            <?php if(!empty($data['instagram_url'])) {?><li><a href="<?php echo $data['instagram_url']; ?>" class="instagram" target="_blank">Instagram</a></li><?php } ?>
        </ul>
        <div class="releases-holder">
            <h2>Releases:</h2>
            <ul class="releases">
                <?php
                if (isset($artist_releases) && is_array($artist_releases)) {
                    foreach ($artist_releases as $key => $artist_release) {
                        echo '<li><iframe style="border: 0; width: 270px; height: 270px;" 
                        src="http://bandcamp.com/EmbeddedPlayer/album=' . $artist_release['bandcamp_link'] . '/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" 
                        seamless=""></iframe></li>';
                    }
                }
                if (isset($otherArtistReleases) && is_array($otherArtistReleases)) {
                    
                    foreach ($otherArtistReleases as $key => $artist_release) {
                        echo '<li><iframe style="border: 0; width: 270px; height: 270px;" 
                        src="http://bandcamp.com/EmbeddedPlayer/album=' . $artist_release . '/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" 
                        seamless=""></iframe></li>';
                    }
                }
                ?>
            </ul>
        </div>
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