<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <title></title>
	  <script src="http://code.jquery.com/jquery-latest.js">

		$(document).ready(function(){
    $(".items").slideUp();
    $(".button a").click(function(event){
        $(this).parents(".document").children(".items").slideToggle();
        event.preventDefault;
    });
});
	
	</script>
  </head>
  <body>
    <div id="repeater">
      <div class="document">
        <div class="title">Document 1</div>
          <div class="button"><a href="#">+</a></div>
          <div class="items">Items</div>
      </div>
      <div class="document">
        <div class="title">Document 2</div>
        <div class="button"><a href="#">+</a></div>
         <div class="items">Items</div>
      </div>
      <div class="document">
        <div class="title">Document 3</div>
        <div class="button"><a href="#">+</a></div>
        <div class="items">Items</div>
      </div>
    </div>
  </body>

  
  <style>
  {
    height: 20px;
    border: 1px solid black;
    width: 200px;
    padding: 10px;
}
.document .title
{
    float:left;
}
.document .button
{
    float:right;
}
  
  </style>
</html>