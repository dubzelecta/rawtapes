<!doctype html>
<html>
    <?php $this->load->view('head'); ?>
    <body class="<?php if (isset($catalog_class)) {
        echo $catalog_class;
    } ?>">
        <div id="wrapper">
            <?php $this->load->view('header'); ?>
            <div id="main">
                <div id="content">
                    <?php echo $body; ?>
                    <?php // print_r($data); ?>
                </div>
                <aside id="sidebar">
                    <!--                            <div class="side-widget">
                                                    <h2 class="text-release">LATEST RELEASE</h2>
                                                    <img src="/assets/images/img4.jpg" width="302" height="87" alt="image description">
                                                    <div class="holder">
                                                        <span class="name">Rejoicer - Recollection</span>
                                                        <a href="#" class="listen">listen now</a>
                                                    </div>
                                                </div>-->
                    <div class="side-widget">
                        <h2 class="text-mixture">LATEST MIXTURE</h2>
                        <?php echo $this->latest_mixtape; ?>
                    </div>
                    <div class="side-widget">
                        <div class="text-artist"><h2>LATEST ARTIST</h2></div>
                        <?php
                        echo "<a href='/welcome/artist/".$this->random_artist['url']."'>";
                        ?>
                        <img src="/assets/random_artists_pic/<?php echo $this->random_artist['random_artist_pic']; ?>" width="301" height="87" alt="image description">
                        <?php echo "</a>"; ?>
                        <!--<span class="<?php // echo $this->random_artist['name'];  ?>"><?php // echo  $this->random_artist['name'];  ?></span>-->
                    </div>
                    <!--				<div class="side-widget">
                                                            <h2 class="text-shop">shop</h2>
                                                            <ul class="products">
                                                                    <li>
                                                                            <img src="/assets/images/img11.jpg" width="145" height="87" alt="image description">
                                                                            <h3>slipmats</h3>
                                                                            <div class="details"><span class="price">$15</span> <a href="http://rawtapes.bandcamp.com/merch/raw-tapes-slipmats-5" class="buy">buy</a></div>
                                                                    </li>
                                                                    <li>
                                                                            <img src="/assets/images/img12.jpg" width="146" height="87" alt="image description">
                                                                            <h3>T Shirts</h3>
                                                                            <div class="details"><span class="price">$15</span> <a href="http://rawtapes.bandcamp.com/merch/buttering-trio-toast-shirts" class="buy">buy</a></div>
                                                                    </li>
                                                            </ul>
                                                    </div>-->
                    <div class="side-widget last">
                        <strong class="title">upcoming events</strong>
                        <ul class="infos">

                            <?php
                            if ($this->events) {
                                foreach ($this->events as $key => $value) {
                                    $classActive = 'class="active"';
                                    if ((($key % 2) == 0)) {
                                        $classActive = '';
                                    }
                                    echo '  <li ' . $classActive . '>
                                                            <time datetime="' . $value['event_date'] . '">' . date("m/d", strtotime($value['event_date'])) . '</time>
                                                            <div class="info-holder"><span><a href="http://' . $value['event_link'] . '" target="_blank">' . $value['event_title'] . '</a></span></div>
                                                            </li>';
                                }
                            } else {
                                echo '<li>TBA</li>';
                            }
                            ?>
                        </ul>
                        <!--<a href="#" class="more">-More-</a>-->
                    </div>
                </aside>
            </div>
        <?php $this->load->view('footer'); ?>
        </div>

<script type="text/javascript">
    console.log(';asdasasdasd');
$(document).ready(function() {
	$("div#aposts").jPages({
	    containerID : "posts",
	    perPage: 3
  	});
        
        $('.artistMain img').hover(
        function(){
            $(this).attr('src','/assets/artists_hover_text/'+$(this).attr('otherimage'));
        }
         ,
         function(){
             $(this).attr('src','/assets/artists_header_text/'+$(this).attr('mainimage'));
         }
        );
        });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55401592-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>