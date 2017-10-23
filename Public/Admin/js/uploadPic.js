/*上传图片*/
function upload(cls){
    if($("#form"+cls).length>0){

    }else{
        $("."+cls).wrap("<form id='form"+cls+"' action='/index.php/Admin/View/uploadPic?type="+cls+"' method='post' enctype='multipart/form-data'></form>");
    }

    $("#form"+cls).ajaxSubmit({
        dataType: 'json',
        beforeSend: function () {

        },
        uploadProgress: function (event, position, total, percentComplete) {

        },
        success: function (data) {
            if (data.result == 'true') {
                $('#'+cls+"_position").val(data.img);
                $('#'+cls+"_success").html('(上传成功)');
                $('#'+cls+"_see").attr('src','/Upload/'+data.img);
                layer.msg('上传成功!', {icon: 1, time: 1000});
                return false;
            } else {
                $('.'+cls).val("");
                layer.msg('上传失败!', {icon: 2, time: 1000});
                return false;
            }
        },
        error: function (xhr) {
            //var result = $.trim(xhr.responseText);//去掉字符串两端的空白
        }
    });
}
