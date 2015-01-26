<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AOS发布最新版</title>
		<style>#ppp{position:'absolute',z-index:'1', color:'#C30',left:20,top:20}
		</style>
	</head>
	<body>
		<?php
			echo "★".$_SERVER['REQUEST_URI'];
			if($_SERVER['REQUEST_URI'] != '/aos/'){
				echo "	<div><a href='../'>返回上级</a></div>";
			}
		?>
		<table width="80%" align="center">
			<tr height = "80"><td width="25%"></td><td width="25%"></td><td width="25%"></td><td width="25%"></td></tr>
			<?php
			$dir="./";
			$file=scandir($dir);
			$flag=1;
			echo "<tr height = '80'><td>";
			foreach($file as $a){
				if(!strstr($a,".")){
					echo "<a href='$a' style='font-size:24px;color:green;font-weight:1110px'><img src='wenjianjia.jpg'><div id='ppp' align='center'>$a</div></a>";
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
	</body>	
</html>