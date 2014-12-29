<?php  
$ch = curl_init();  
$timeout = 5;  
$url='http://aos.corp.elong.com/apus_web/DeployInstance/GetVersions?nodeId=12489&moduleName=/hotel/train&allowThreeVersion=true&allowFourVersion=true';  
curl_setopt ($ch, CURLOPT_URL,$url);  
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
$file_contents = curl_exec($ch);  
curl_close($ch);
$arr=explode('"',$file_contents); 
$maxver=$arr[7]; 
?>

<form id="form1" action="http://aos.corp.elong.com/apus_web/DeployInstance/Run?metaId=11780" method="post">
	<table>
		<tr><td>节点:</td><td><textarea style="height:30px;color:green;font-size:18px" name="nodeId">12489</textarea><br/></td></tr>
		<tr><td>版本:</td><td><textarea style="height:30px;color:green;font-size:18px" name="version"><?php echo $maxver?></textarea><br/></td></tr>
		<tr><td>类型:</td><td><textarea style="height:30px;color:green;font-size:18px" name="deployType">module</textarea><br/></td></tr>
	</table>
	<img src="images/jdt.gif">
</form>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/my1.js"></script>
