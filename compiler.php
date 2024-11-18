<!DOCTYPE html>
<html>
<head> 
         <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PHP GROUND</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link  rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link  rel="icon" type="image/png" href="img/ruet.png">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        
</head>
<body>
<div  echo "<body style='background-color:rgb(242, 74, 74);'>" class="main">

  <div class="row">
  <div class="col-sm-12">
  <nav class="navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header"> 
      <a class="navbar-brand lspace" style="color:red" >PHP GROUND</a>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="space"><a style="color:yellow" href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
      <li class="space"><a style="color:yellow" href="LiveChat.php"><i class="fa fa-archive ispace"></i>Live Chat</a></li>
      <li class="space"><a style="color:yellow" href="help.php"><i class="fa fa-archive ispace"></i>Help</a></li>
      </ul>  
</nav>
</div>
</div>
<div class="row cspace">
<div class="col-sm-10">
<div class=""><h3 style="color:red;text-align:center;"></h3></div>
</div>
<div class="col-sm-1">
</div>
<div class="col-sm-1">  
</div>
</div>
<div class="row cspace">
<div class="col-sm-11">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label style="color:#04000D" for="lang">Choose Language</label>
<select class="form-control" name="language">
<option value="c" >C</option>
<option value="cpp">C++</option>
<option value="java">Java</option>
</select><br><br>
<label style="color:#04000D" for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="20" cols="50"></textarea><br><br>
<label style="color:#04000D"  for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>
<button type="submit" class="btn" name="reg_user">Save</button>
				
      

</form>
<script type="text/javascript">
   $(document).ready(function(){
      $("#st").click(function(){
        $("#div").html("Loading ......");
     });
  });
</script>
<script>
$(document).ready(function(){
    $('form').on('submit', function(e){
      e.preventDefault();
      $.ajax({
            type: "POST", 
            cache: false,
            url: "compile.php", 
            datatype: "html", 
            data: $('form').serialize(), 
            success: function(result) { 
                $('#div').html(result);
            }
        });
    });
});
</script>

<label style="color:#04000D" for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="20" cols="50"></textarea><br><br>
</div>
</div>
<div class="col-sm-4"> 
</div>
</div>
</div>
<br><br><br>
<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
<center><script type="text/javascript" src="http://online.phpground.com/online_i.js"></script><script type="text/javascript">sc_online_i(1360839,"ffffff","e61c1c");</script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
</center>
</div>
<div class="col-sm-10">
<div class="sm">
<b>Version-2018-019</b><br>
<b>Developed By Rohit Suryavanshi </b>
</div>
</div>
<div class="col-sm-10">
<?php
date_default_timezone_set("Kolkata,Chennai,Mumbai & New Delhi");
 $t=date("H:i:s");
echo"<b>Server Time:  $t</b>";

?>
</div>
</div>
</div>
</div>
</body>
</html>


