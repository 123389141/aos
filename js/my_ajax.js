function request(){
    //aja提交表单
        $.ajax({  
            type: "post",
            url: "http://aos.corp.elong.com/apus_web/DeployInstance/Run?metaId=11780",
            data: $("#form1").serialize(),
            success: function(data) {  
                alert("build success");  
            },  
            error: function(data) {  
                alert(data);  
            }  
        })  
}
request()
 