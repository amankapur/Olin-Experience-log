<!DOCTYPE html>
<html>
<head>
  <style>
      p { background:yellow; }
      </style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
  <button id="show">Show it</button>
  <button id="hide">Hide it</button>
      <p style="display: none">Hello  2</p>
<script>
    $("#show").click(function () {
    $("p").show("slow");
    });
    
$("#hide").click(function () {
  $("p").hide(2000);
});

</script>

</body>
</html>