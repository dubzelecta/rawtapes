<h1 class="text-blog">BLOG</h1>
<?php
if (!empty($data)) {
    foreach ($data as $key => $value) {
        echo '<div class="post">';
        echo '<h2>' . $value['post_title'] . '</h2>';
//        echo '<img src="/assets/post_pics/' . $value['post_pic'] . '" width="692" height="483" alt="image description">';
        echo (isset($value['text']))?$value['text']:'';
//        echo '<div class="play-area">';
//        echo $value['bandcamp_link'];
        echo '</div>';
    }
}
?>

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