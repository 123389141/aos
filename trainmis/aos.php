<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AOS发布最新版本</title>
		<script src="js/jquery-1.8.3.min.js"></script>
	</head>
	<body>
	</body>
</html>

<?php
	require_once "config.php";
	//设置要发布的节点
	$arrnodeId=explode('|',NODEID);
	$arrmoduleName=explode('|',MODULENAME);
	$arrmetaId=explode('|',METAID);
	
	if(count($arrnodeId) == count($arrmoduleName) && count($arrmoduleName) == count($arrmetaId)){
		for($i=0;$i<count($arrnodeId);$i++){
			$nodeId = $arrnodeId[$i];  			//节点ID,将光标置于aos左侧节点上边，则titel显示节点ID
			$moduleName = $arrmoduleName[$i];   //模块名,在aos右侧列表
			$metaId = $arrmetaId[$i];  			//模块ID,在aos右侧列表
			runMore($nodeId,$moduleName,$metaId,$i);
		}
	}else{
		echo "配置文件配置有问题，请检查配置文件！";
	}


function runMore($nodeId,$moduleName,$metaId,$i){
	$ch = curl_init();  
	$timeout = 5;  
	$url="http://aos.corp.elong.com/apus_web/DeployInstance/GetVersions?nodeId=$nodeId&moduleName=$moduleName&allowThreeVersion=false&allowFourVersion=true";  
	curl_setopt ($ch, CURLOPT_URL,$url);  
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
	$file_contents = curl_exec($ch);  
	$arr=explode('"',$file_contents); 
	$maxver=$arr[7];
	curl_close($ch);
	
	echo "<div style='margin:5px auto;padding:5px;border:solid 1px green ; '>";
	echo "<font color='red'>★</font><font color='blue'>节点：".$nodeId."　模块：".$metaId." 发布结果为:</font>";
	echo "<form id='form{$i}' style='display:none;' action='http://aos.corp.elong.com/apus_web/DeployInstance/Run?metaId=$metaId' method='post' target='iframename{$i}'><textarea name='nodeId'>$nodeId</textarea><textarea name='version'>$maxver</textarea><textarea name='deployType'>module</textarea></form>";
	echo "<iframe width = '100%' height = '51px' name='iframename{$i}' style='di1splay:none;'>11</iframe>";
	echo "<script>$('#form{$i}').submit();</script>";
	echo "</div>";

}
 
?>
			