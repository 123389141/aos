<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AOS发布最新版本</title>
		<link rel="stylesheet" href="css/alert.css" >
	</head>
	<body>
		<iframe src="http://aos.corp.elong.com/sag/Aos/Index" frameborder="0" width="100%" height="100%"></iframe>

<div id="alert_div" style="position: absolute; z-index: 10001; top: 350px; left: 40%; visibility: visible;" class="W_layer">
 <div class="bg">
  <table cellspacing="0" cellpadding="0" border="0">
    <tr>
     <td style="width:280px;">
      <div class="content">
       <div class="title" style="cursor: move;"><span><?php echo "★".$_SERVER['REQUEST_URI'];?></span></div>
       <a title="关闭 返回AOS" class="W_close" href="http://aos.corp.elong.com/sag/Aos/Index"><b>×</b></a>
       <div class="detail layer_forward" >
        <div style="height:18px;"></div>
			<iframe id="iframe1" src="aos.php" frameborder="0"></iframe><br/>
			<a style="font-size:10px;color:green;font-weight:1110px">提示：当返回Json后发布成功。</a>
			<input type="button" name="Button" value="ReBuild" onclick="rebuild()">
			<a style="font-size:10px;color:green;font-weight:1110px" href ="../">返回上一页</a>
       </div>
      </div>
    </td>
   </tr>
  </table>
 </div>
</div>

		<script>
			function rebuild(){
				document.getElementById("iframe1").src="aos.php";
			}
		</script>
	</body>
</html>
