
<html>

<head>

<title>Demo</title>

<style type="text/css">

	
	h1 {
			color:#03C;
			position: relative;
			}

			
			
div#wn	{ 

    position:absolute; 
	top: 150px; right: 300px;
    width:310px; height:500px;

    overflow:hidden;	

	}
</style>

<script src="./dw_event.js" type="text/javascript"></script>

<script src="./dw_scroll.js" type="text/javascript"></script>

<script src="./scroll_controls.js" type="text/javascript"></script>

<script type="text/javascript">



function init_dw_Scroll() {

    var wndo = new dw_scrollObj('wn', 'lyr1');

    wndo.setUpScrollControls('scrollLinks');

}



// if code supported, link in the style sheet and call the init function onload

if ( dw_scrollObj.isSupported() ) {

    //dw_Util.writeStyleSheet('css/scroll.css');

    dw_Event.add( window, 'load', init_dw_Scroll);

}



</script>

</head>

<body>



<h1>Olin Experience Log</h1>







<div id="wn">

    <div id="lyr1">

						<a class="image" href="./week1.html" onMouseOver="image1.src ='./week1.png'"; onMouseOut= "image1.src = './olinday1.jpg' "; >
						<img name="image1" src="./olinday1.jpg" border=2 width = "300" height="250" ></a>


						<a class="image" href="./week2.html" onMouseOver="image2.src='./week21.png'" onMouseOut="image2.src='./week2.jpg'" >
						<img name="image2" src="./week2.jpg" border=2 width = "300" height="250" ></a>
						
						<a class="image" href="./week3.html" onMouseOver="image3.src='./week31.png'" onMouseOut="image3.src='./week3.jpg'" >
						<img name="image3" src="./week3.jpg" border=2 width = "300" height="250" ></a>
						
						<a class="image" href="./week4.html" onMouseOver="image4.src='./week41.png'" onMouseOut="image4.src='./week4.jpg'" >
						<img name="image4" src="./week4.jpg" border=2 width = "300" height="250" ></a>
					
						<a class="image" href="./bonus.html" onMouseOver="goal.src='./bonus.png'" onMouseOut="goal.src='./bonus.jpg'" >
						<img name="goal" src="./bonus.jpg" border=2 width = "300" height="250" ></a>
			
    </div>

</div>  <!-- end wn div -->





<!-- border attribute added to reduce support questions on the subject. 

    If you like valid strict markup, remove and place a img {border:none;} spec in style sheet -->

<div id="scrollLinks">

    <a class="mouseover_up" href="#"><img src="./images/tri-up.gif" alt="" border="0" /></a>

    <a class="mouseover_down" href="#"><img src="./images/tri-dn.gif" alt="" border="0" /></a>

</div>






</body>

</html>

