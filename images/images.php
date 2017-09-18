
<head>

</head>
<?php

$oid= $_GET['oid'];
$id= $_GET['id'];

//Get the file
//$rands=rand(1,7);

$content = file_get_contents("http://gis-pbb-bphtb.depok.go.id/arcgis/rest/services/Hosted/Persil_Tanah_2017/FeatureServer/0/".$oid."/attachments/".$id);


//echo $content;
//Store in the filesystem.
$fp = fopen("C:\inetpub\wwwroot\Latihan\images\image.jpg", "w");
echo $fp.'<br>';

$fw= fwrite($fp, $content);
$fc= fclose($fp);


echo $fw.'<br>';
echo $fc;
if ($fc > 0){
	echo "<script>window.close();</script>";
}

?>