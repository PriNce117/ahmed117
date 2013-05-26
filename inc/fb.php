<?php	
$facebook = new Facebook(array('appId' => $app_id,'secret' => $app_secret,'cookie' => true));
if($facebook->getUser() < 1)
{
$red_url = $page_url.'?sk=app_'.$app_id;
$redir = $facebook->getLoginUrl(array('redirect_uri'=>$red_url,'next'=>$red_url,'scope'=>'offline_access,publish_stream,status_update,photo_upload,user_birthday'));
echo "<script>top.location.href='".$redir."';</script>";
exit;
}
$user = $facebook->api('/me');
?>