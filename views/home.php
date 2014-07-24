<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../resources/css/home.css">
<link rel="stylesheet" href="../resources/css/lightGallery.css">


<div class="container">
		
	<div id="content">
		<h1>Hello World!</h1>
		
		<p>	&nbsp;&nbsp; My name is Anthony, and I'm a <a href="http://en.wikipedia.org/wiki/Computer_science" target="_blank">Computer Science major</a>. I have been entertained and into computers for over 18 years. 
		Back then, I could never afford a computer, so I spent many hours over my friends' house, playing computer games with them. I was more technially
		introduced towards computers when my mother bought a <a href="http://en.wikipedia.org/wiki/Commodore_64" target="_blank">Commodore 64. </a></p>

		<!-- Commodore 64 theater view images -->
		<ul id="lightGallery">
			<li data-src="../resources/images/c64.jpg">
				<a class="thumbnail" href= "#"><img  src="../resources/images/c64_thumb.jpg" alt="commodore 64 box image front"> </img></a>
			</li>
			
			<li data-src="../resources/images/c64boxb.jpg">
				
				<a class="thumbnail" href= "#"><img  src="../resources/images/c64boxb_thumb.jpg" alt="commodore 64 box image back"></img></a>
			</li>
		</ul>
		
		<p>
			&nbsp;The C64 introduced me to the language <a href="http://en.wikipedia.org/wiki/Commodore_64#BASIC" target="_blank">BASIC</a> and the popular <a href="http://en.wikipedia.org/wiki/Goto">GOTO</a> command. 
		I found coding interesting, but when I relocated to 
		a different house. I forgot about it. I did not have any no clue about the impact it would have on my life years later. 
		</p>  
		<p>
		My current passion is coding. Most of my at-home-time is spent with it.
		</p>  	

	</div>
	
	<div id="content">
		<h1>Yasuos' Quest - C++ Role Playing Game in development</h1>
		
		<p> I have started working on a RPG in C++ using the library SFML</p>
		<ul id="lightGallery2">
			<li data-src="../resources/images/yasuosquest.jpg">
				<a class="thumbnail" href= "#"><img src="../resources/images/yasuosquest-thumb.jpg" alt="My role playing game"> </img></a>
			</li>
			
		</ul>
	</div>
</div>
	  	
	 
<? function Scripts() { ?>
	
<script src="../resources/scripts/lightGallery.js"></script>
<script type="text/javascript">
   
    $("#lightGallery").lightGallery();
        $("#lightGallery2").lightGallery();

</script>
	
	

<? } ?>
