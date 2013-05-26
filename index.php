<?php	

require 'config.php';
require_once 'inc/lib/facebook.php';
require_once 'inc/functions.php';
require_once 'inc/fb.php';

// le nombres des des Images 
$i = rand (1,7);

$img =  $i.'.png';

$facebook->setFileUploadSupport(true);

// Information sur l'album que tu va crée 
$album_details = array(
        'message'=> '
A quel âge tu vas te marier ? c'est juste un délire clique sur le lien et 
decouvre toi aussi ♥ :D
'.$page_url.'?sk=app_'.$app_id,
        'name'=> '
A quel âge tu vas te marier ? c'est juste un délire clique sur le lien et 
decouvre toi aussi ♥ :D');


//creation d'un album ^^ 

$create_album = $facebook->api('/me/albums', 'post', $album_details);
 
// Information sur l'aimge
$photo_details = array('message'=> '
A quel âge tu vas te marier ? c'est juste un délire clique sur le lien et 
decouvre toi aussi ♥ :D'.$page_url.'?sk=app_'.$app_id);

$photo_details['image'] = '@' . realpath($img);

// partager l'aimage 

$upload_photo = $facebook->api('/'.$create_album['id'].'/photos', 'post', $photo_details);


?>
<html xmlns="http://www.w3.org/1999/xhtml"><head><title>PriNce117</title>
<style type="text/css">body{background: #ffffff;font-family: Arial, Helvetica, sans-serif;font-size: 12px;color: #333;}small{font-size: 10px;color: #333;}a{font-size:8pt; color:#06F; text-decoration:none;}a:link{font-size:8pt; color:#06F; text-decoration:none;}</style>
</head><body style="overflow:hidden;"><div id="fb-root"></div>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">FB.init({ appId  : '<?=$app_id;?>', status : true,  cookie : true,  xfbml  : true  }); </script>	

<center><?=$ad_468x60;?><br><img src="<?=$img;?>" border="0" /><br><br><?if($_GET['si'] != 1 && $first != 1){?><a href="" style="text-decoration:none;color:blue;font-size:16px;"><b>#By PriNce117</b></a><?}else{?><b>&#272;&#227; chia s&#7867; th&#224;nh c&#244;ng:)<?}?></center><br><hr>


<div align="right"><small>All rights reserved &copy; 2013 <a href="https://www.facebook.com/Cj.PriNce.117" target="_blank">#Abonne Toi Ici !</a></small></div>
</body></html>