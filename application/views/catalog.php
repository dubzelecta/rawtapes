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

    .magicText{
        float:left;
        text-align: left;
        font-size: 11px;line-height: 14px;width: 100%;word-wrap: break-word;word-break: break-word;
        padding:5px;
        font-weight:bold;
        width:90%;
    }
    .artistName{
        /*padding:10px;*/
        float:left;
        width:100%;
        font-style: italic;
        text-align: left;
        font-weight:100;
        /*padding:10px;*/
    }
    .loadingModal{
        /*left: 50%;*/
        position: relative;
        /*top: 50%;*/
        width:100%;
    }
    .loadingModal img{
        width: 97px;
        left: 48%;
        position: relative;
    }
</style>
<div id="main">
    <span class="text-catalog">CATALOG</span>
    <ul class="product" style="display:none;">
        <?php
        if (!empty($data)) {
            foreach ($data as $key => $value) {
//
                echo '  
                    <li class="img_wrapper">
                        <a href="/welcome/release/' . $value['url'] . '">
                        <span class="text_effect" alt="' . $value['release_title'] . '"><span class="magicText"><span class="artistName">' . $value['artist_name'] . ' - </span>' . $value['release_title'] . '</span></span>
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
    <div id="loadingModal" class="loadingModal" ><img src="/assets/images/rawtapes_loader.gif" /></div>
</div>
<!--<div id="loadingModal" class="loadingModal" style="width:100%;height:200px;text-align:center;top:100px;position:relative;"><img src="/assets/images/smallajaxloader.gif" /></div>-->
<!--<div id="loadingModal" class="loadingModal" ><img src="/assets/images/smallajaxloader.gif" /></div>-->
<script type="text/javascript">
    console.log('asdasd');
    console.log($('img'));
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