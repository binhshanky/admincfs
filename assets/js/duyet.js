$(document).ready(function(){
   
    $("#duyetcfs").click(function(){
        
        var list = "";
        $('input:checked').each(function() {
            list += $(this).data('id') + ",";
        });
        
        list = list.substring(0, list.length - 1);
        window.location = "./dang-tai/cfs/"+btoa(list);
    })
    $(".delete").click(function(){
        id = $(this).data('id');
        $.ajax({
            url : "ajax/complete.php",
            type : "post",
            data : {
                sign: signGlobal,
                id: id
            },
            success : function (result){
                if(result.code == 200){
                        swal.fire(
                            'Thành công',
                            result.msg,
                            'success'
                        )
                    
                } else {
                    swal.fire(
                        'Đã xảy ra lỗi',
                        result.msg,
                        'error'
                    )
                }
            }
        });
    })
})