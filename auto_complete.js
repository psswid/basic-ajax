
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
