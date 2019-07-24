$(document).ready(function(){
    $("#fixmatcuoi").click(function(){
        var nd = $("#confession").val();
        regex = [/(\)+)/g, /(\(+)/g];
        nd = nd.replace(regex[0], ")");
        nd = nd.replace(regex[1], "(");
        $("#confession").val(nd);
    })
    $("#complete").click(function(){
        swal.fire({
            title: 'Bạn có chắc chứ?',
            text: "Bạn không thể hoàn tác thao tác này",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Chắc chắn!',
            cancelButtonText: 'Hủy!',
            reverseButtons: true
        }).then(function(result){
            if (result.value) {
                $.ajax({
                        url : "ajax/hoan-tat",
                        type : "post",
                        data : {
                            sign: signGlobal,
                            cfsdd: listGlobal
                        },
                        success : function (result){
                            if(result.code == 200){
                                    swal.fire({
                                        title: 'Đã hoàn tất',
                                        text: result.msg,
                                        type: 'success',
                                        showCancelButton: true,
                                        confirmButtonText: 'Hoàn tất'
                                    }).then(function(result) {
                                        window.location = "./duyet-confession";
                                    });
                                
                            } else {
                                swal.fire(
                                    'Đã xảy ra lỗi',
                                    result.msg,
                                    'error'
                                )
                            }
                        }
                    });
                
            } else {
                if (result.dismiss === 'cancel') {
                    swal.fire(
                        'Đã hủy',
                        'Thao tác đã bị hủy bỏ',
                        'error'
                    )
                }
            }
        });
    })
})