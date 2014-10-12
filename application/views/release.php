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
        <span class="ablum-info">
            By <a href="/welcome/artist/<?php echo $data['url']; ?>"><?php echo $data['name']; ?></a>
            <?php
            $artists_num = (count($otherArtists) - 1);
            if(!empty($otherArtists)){echo " , ";
            foreach($otherArtists as $key => $value){
              echo   '<a href="/welcome/artist/'.$value["url"].'">'.$value["name"].'</a>';
              if($key != $artists_num){
                  if($key == ($artists_num - 1)){
                  echo " and ";                      
                  }
                  else{
                  echo " , ";
                  }
                  
              }
              
            }
            }
            ?>
        </span>
        <!--<div class="play-area">-->
        <div id="playlist">
            <?php echo '<iframe style="border: 0; width: 100%; height: 472px;" src="http://bandcamp.com/EmbeddedPlayer/album='.$data['bandcamp_link'].'/size=large/bgcol=ffffff/linkcol=0687f5/artwork=none/transparent=true/" seamless><a href="http://rawtapes.bandcamp.com/album/kalimist-k-boog">Kalimist K Boog by Kalimist K Boog</a></iframe>'; ?>
        </div>

        <div class="btns-area">
            <a href="<?php echo $data['bandcamp_album_link']; ?>">Buy in Shop</a>
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