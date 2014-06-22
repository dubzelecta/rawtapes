<header id="header" class="open-close">
			<div class="holder">
				<strong class="logo"><a href="/">RAW TAPES</a></strong>
				<strong class="artists"><a class="opener" href="#">artists</a></strong>
				<nav class="sub-nav">
					<ul>
						<li><a href="/" class="blog">blog</a></li>
						<li><a href="/welcome/catalog" class="catalog">catalog</a></li>
						<li><a href="http://rawtapes.bandcamp.com/"  target="_blank" class="shop">shop</a></li>
						<li><a href="/welcome/contact" class="contact">contact</a></li>
					</ul>
				</nav>
				<ul class="social-networks">
					<li><a href="https://www.facebook.com/Raw.Tapes" target="_blank" class="facebook">facebook</a></li>
					<li><a href="https://twitter.com/Raw_Tapes" target="_blank" class="twitter">twitter</a></li>
					<li><a href="https://soundcloud.com/raw-tapes" target="_blank" class="ico"></a></li>
				</ul>
			</div>
			<ul class="artist-list slide">
                            <?php foreach($this->artist_links as $key => $value){
                                echo '<li><a href="/welcome/artist/'.$value['url'].'" ><img src="/assets/artists_header_text/'.$value['header_text_url'].'" /></a></li>';
                            }
                            ?>
				
<!--				<li><a href="#" class="buttering">buttering trio</a></li>
				<li><a href="#" class="citizen">citizen kane</a></li>
				<li><a href="#" class="cohenbeats">cohenbeats</a></li>
				<li><a href="#" class="dubz">dubz</a></li>
				<li><a href="#" class="galo">galo</a></li>
				<li class="remove-sep"><a href="#" class="jengo">jengo</a></li>
				<li><a href="#" class="kerendun">kerendun</a></li>
				<li><a href="#" class="luqman">luqman</a></li>
				<li><a href="#" class="mad">mad steve</a></li>
				<li><a href="#" class="mesh">mesh</a></li>
				<li><a href="#" class="mo">mo rayon</a></li>
				<li><a href="#" class="play">play dead</a></li>
				<li class="remove-sep"><a href="#" class="plusga">plusga</a></li>
				<li><a href="#" class="radixx">radixx</a></li>
				<li><a href="#" class="rejoicer">rejoicer/guadloop</a></li>
				<li class="remove-sep"><a href="#" class="sinez">sinez</a></li>-->
			</ul>
		</header>