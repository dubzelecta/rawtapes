<?php
// print_r($data['itunes_link']);
//die;
?>
<div id="main">
    <h1 class="text-catalog">CATALOG</h1>
    <div class="photo-holder">
        <img src="/assets/release_art/<?php echo $data['art_url']; ?>" width="454" height="455" alt="image description">
    </div>
    <div id="content">
        <h1><?php echo $data['release_title']; ?></h1>
        <span class="ablum-info">By <a href="/welcome/artist/<?php echo $data['url']; ?>"><?php echo $data['name']; ?></a></span>
        <div class="play-area">
            <?php echo '<iframe style="border: 0; width: 100%; height: 42px;" src="http://bandcamp.com/EmbeddedPlayer/album='.$data['bandcamp_link'].'/size=small/bgcol=333333/linkcol=0f91ff/artwork=none/transparent=true/" seamless=""></iframe>'; ?>
        </div>

        <div class="btns-area">
            <a href="<?php echo $data['bandcamp_album_link']; ?>">Buy in Shop</a>
            <a href="<?php echo $data['itunes_link']; ?>" class="itunes">Buy on iTunes</a>
        </div>
        <div class="txt-holder">
            <?php echo $data['description']; ?>
        </div>
        <div class="txt-holder add">
<!--            <p>Summer. Degrees rise to over 25 C and the best place to cool off is in the air conditioned studio. Wary of being outside for too long, cats like A7 and Guadaloop end up having longer sessions than ever, propelling them to record as much music as possible.</p>
            <p>Thus comes to you "Stay Low", the 2nd Raw Tapes X A7 collab, continuing the 1st one with Plusga, "Blasphemy".
                This time A7 picks 4 beats by Guadaloop, which were intended for the upcoming Guadaloop in Africa album and rips them with his usual colorful, tenacious lyrics. Having Beno and Nomok as frequent guests in the studio contributed even more to the mood and helped polish this sleek 4 track release. </p>-->
        </div>
    </div>
</div>