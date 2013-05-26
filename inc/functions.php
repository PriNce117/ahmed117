<?php
function parsePageSignedRequest() {
    if (isset($_REQUEST['signed_request'])) {
      $encoded_sig = null;
      $payload = null;
      list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
      $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
      $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
      return $data;
    }
    return false;
  }
  if($_GET['si'] != "" || $signed_request = parsePageSignedRequest()) {
    if($signed_request->page->liked || $_GET['si'] != "") {
      $liked = true;
    }
  }
if ($liked != true){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>PriNce117</title></head>
<body style="overflow:hidden;"><div id="fb-root"></div>
<script type="text/javascript" src="http://connect.facebook.net/ro_RO/all.js"></script>
<script type="text/javascript">FB.init({ appId  : '<?=$app_id;?>', status : true,  cookie : true,  xfbml  : true  });   </script>	
<center><img style="width:668px;margin-bottom:15px;" src="img.jpg" /><br>
<iframe src="https://www.facebook.com/plugins/facepile.php?href=<?=$page_url;?>&amp;size=small&amp;width=900&amp;max_rows=4&amp;colorscheme=light&amp;appId=285852271465234" style="border:none; overflow:hidden; width:900px; height:100px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe><br>
<?=$ad_900x60;?></center>
</body>
</html>
<?
exit;}
?>