<style>
    .img_wrapper {
        position: relative;
        padding: 0;
        width:100px;
        display:block;
    }
    .text_effect {
        position: absolute;
        top: 0;
        color: white;
        background-color: black;
        width: 100px;
        height: 100px;
        font-size: 15px;
        text-align: center;
        z-index: 10;
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        word-break: break-word;
        word-spacing: normal;
        letter-spacing: normal;
    }
    .text_effect:hover {
        opacity:1;
    }

    img {
        z-index:1;
    }


</style>
<div id="main">
    <span class="text-catalog">CATALOG</span>
    <ul class="product">
        <?php
        if (!empty($data)) {

            foreach ($data as $key => $value) {
//                var_dump($value);
//                die;
                echo '  <li class="img_wrapper">
                        <a href="/welcome/release/' . $value['url'] . '">
                        <span class="text_effect">' . $value['release_title'] . '</span>
                        <img src="/assets/release_art/' . $value['art_url'] . '" width="99" height="100" alt="' . $value['release_title'] . '"></a>
                    </li>';
            }
        }
        ?>
<!--        <li><a href="#"><img src="images/img17.jpg" width="99" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img18.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img19.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img20.jpg" width="99" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img21.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img22.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img23.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img24.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img25.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img26.jpg" width="99" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img27.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img28.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img29.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img30.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img31.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img32.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img33.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img34.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img35.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img36.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img37.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img38.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img39.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img40.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img41.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img42.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img43.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img44.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img45.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img46.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img47.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img48.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img49.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img50.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img51.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img52.jpg" width="100" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img53.jpg" width="101" height="100" alt="image description"></a></li>
        <li><a href="#"><img src="images/img54.jpg" width="100" height="100" alt="image description"></a></li>-->
    </ul>
</div>