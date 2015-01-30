<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AOS发布最新版</title>
		<style>#ppp{position:'absolute',z-index:'1', color:'#C30',left:20,top:20}
		</style>
	</head>
	<body>	
		<div style="width:80%;position: absolute; z-index: 10001;  left: 100px; visibility: visible;">
		<?php
			echo "★".$_SERVER['REQUEST_URI'];
			if($_SERVER['REQUEST_URI'] != '/aos/'){
				echo "	<div style='position: absolute; z-index: 10001;  left: 50%; visibility: visible;'><a href='../'>返回上级</a></div>";
			}
		?>
		</div>
		<table width="80%" align="center">
			<tr height = "80"><td width="25%"></td><td width="25%"></td><td width="25%"></td><td width="25%"></td></tr>
			<?php
			$dir="./";
			$file=scandir($dir);
			$flag=1;
			echo "<tr height = '80'><td>";
			foreach($file as $a){
				if(!strstr($a,".")){
					echo "<a href='".iconv('gb2312','utf-8',$a)."' style='font-size:24px;color:green;font-weight:1110px'><img src='wenjianjia.jpg'><div id='ppp' align='center'>".iconv('gb2312','utf-8',$a)."</div></a>";
					echo "</td><td>";
				}
				else{
					continue;
				}
				if($flag == 4){
					$flag = 0;
					echo "</td></tr><tr height = '80'><td>";
				}
				$flag = $flag + 1;
			}
				echo "</td></tr>";
			?>
		</table>
		<div style="position: absolute; z-index: 10001;  left: 100px; visibility: visible;">
		<pre>
使用说明和规范：
1 文件夹必须以 D 开头，项目建议以节点名称命名，文件名不能包含中文。
2 trainmis请勿修改。
3 ...
		</pre>
		</div>
	</body>	
</html>