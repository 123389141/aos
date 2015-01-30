<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AOS发布最新版</title>
		<style>.shubiao{cursor:pointer;}
		</style>
		<script type=text/javascript src="/aos/trainmis/js/jquery-1.8.3.min.js"></script>
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
					echo "<div align='center'><div class='shubiao' onclick = 'yanz(this);' href='".iconv('gb2312','utf-8',$a)."'><img src='wenjianjia.jpg'></div><p style='font-size:30px;color:green;position: relative;left:0px;top:-100px;'>".iconv('gb2312','utf-8',$a)."</p></div>";
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
1 文件夹必须以 D_ 开头，项目建议以节点名称命名，文件名不能包含中文。
2 trainmis请勿修改。
3 ...
		</pre>
		</div>
	</body>	
<script>
function yanz(obj){
	var a = $(obj).attr("href");
	var msg = "确定发布 "+a+" 下配置的所有节点吗？\n(打开页面直接发布)";
	if(a.indexOf("D_") == -1){
		if (confirm(msg)) {
			location.href = a;
		}
	}else{
		location.href = a;
	}
}
</script>
</html>