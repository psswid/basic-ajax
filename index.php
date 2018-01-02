<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AJAX simple Search Engine</title>
  <script>
  function showName(str) {
    if (str.length==0) {
      document.getElementById("txtName").innerHTML="";
      return;
    }
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("txtName").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","frameworks.php?fname="+str,true);
    xmlhttp.send();
  }
  </script>
  </head>
  <body>
  <h2>PHP MVC Frameworsk - Search Engine</h2>

  <p><b>Type first letter of the PHP MVC Framework</b></p>

  <form action="index.php" method="post">
    <p><input type="text" size="40" id='txtHint' onkeyup="showName(this.value)"></p>
  </form>
  <p>Matches: <span id="txtName"></span></p>

</body>
</html>
