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
            <li><a href="<?php echo $data['sound_cloud_url']; ?>" class="ico" target="_blank"></a></li>
            <li><a href="<?php echo $data['facebook_url']; ?>" class="facebook" target="_blank">facebook</a></li>
            <li><a href="<?php echo $data['twitter_url']; ?>" class="twitter" target="_blank">twitter</a></li>
            <li><a href="<?php echo $data['instagram_url']; ?>" class="instagram" target="_blank">Instagram</a></li>
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
                ?>
            </ul>
        </div>
    </div>
</div>