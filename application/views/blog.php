<h1 class="text-blog">BLOG</h1>
    
<div id="posts">
        
    <?php
if (!empty($data)) {

    foreach ($data as $key => $value) {
        if(isset($value['artist_name'])){$artist_name = $value['artist_name'].' - ';}else{
        $artist_name='';};
        $linkToOpenTag = "";
        $linkToCloseTag = "";
        if (isset($value['url'])) {
            $linkToOpenTag = "<a href='/welcome/release/" . $value['url'] . "'>";
            $linkToCloseTag = "</a>";
        }
        echo '<div class="post">';
        echo '<h2> '.$artist_name. $value['post_title'] . '</h2>';
        if (isset($value['release_date'])) {
            echo $linkToOpenTag;
            echo '<img src="/assets/release_art/' . $value['post_pic'] . '" width="100%" height="100%" alt="image description">';
            echo $linkToCloseTag;
            echo '<div class="play-area">';
//            echo '<iframe style="border: 0; width: 100%; height: 42px;" src="http://bandcamp.com/EmbeddedPlayer/album='.$value['bandcamp_link'].'/size=small/bgcol=333333/linkcol=0f91ff/artwork=none/transparent=true/" seamless=""></iframe>';
            echo '<iframe style="border: 0; width: 100%; height: 42px;" src="http://bandcamp.com/EmbeddedPlayer/album=' . $value['bandcamp_link'] . '/size=small/bgcol=ffffff/linkcol=0687f5/artwork=none/transparent=true/" seamless></iframe>';
//            echo $value['bandcamp_link'];
            echo '</div>';
        } else {
            echo (isset($value['text'])) ? $value['text'] : '';
        }
        echo '</div>';
    }
    
}
?>
    </div>
<div id="aposts"></div>

<!--<div  class="post">
        <h2>Calowood (Vol. 1) - Yuka</h2>
    <img src="assets/images/img2.jpg" width="692" height="483" alt="image description">
    <div class="play-area">
        <a href="#"><img src="assets/images/img55.png" width="30" height="10" alt="image descrption"></a>
        <a href="#" class="btn-play">play button</a> <span class="name"><a href="#">Blink Kick EP</a></span>
    </div>
</div >
<div  class="post">
    <h2>Calowood (Vol. 1) - Yuka</h2>
    <img src="assets/images/img2.jpg" width="692" height="483" alt="image description">
    <div class="play-area">
        <a href="#"><img src="images/img55.png" width="30" height="10" alt="image descrption"></a>
        <a href="#" class="btn-play">play button</a> <span class="name"><a href="#">Blink Kick EP</a></span>
    </div>
</div >
<div  class="post last">
    <h2>Calowood (Vol. 1) - Yuka</h2>
    <img src="assets/images/img2.jpg" width="692" height="483" alt="image description">
    <div class="play-area">
        <a href="#"><img src="assets/images/img55.png" width="30" height="10" alt="image descrption"></a>
        <a href="#" class="btn-play">play button</a> <span class="name"><a href="#">Blink Kick EP</a></span>
    </div>
</div >-->

<!--				<ul class="pagination">
                                        <li class="prev-page"><a href="#">next</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="next-page"><a href="#">next</a></li>
                                </ul>-->