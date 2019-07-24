$(document).ready(function() {

    $("#duyetcfs").click(function() {

        var list = "";
        $('input:checked').each(function() {
            list += $(this).data('id') + ",";
        });

        list = list.substring(0, list.length - 1);
        window.location = "./dang-tai/cfs/" + btoa(list);
    })
    $(".delete").click(function() {
        id = $(this).data('id');
            swal.fire({
                title: 'Bạn có chắc chứ?',
                text: "Bạn không thể hoàn tác thao tác này",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Chắc chắn!',
                cancelButtonText: 'Hủy!',
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: "ajax/xoa",
                        type: "post",
                        data: {
                            sign: signGlobal,
                            id: id
                        },
                        success: function(result) {
                            if (result.code == 200) {
                                swal.fire(
                                    'Thành công',
                                    result.msg,
                                    'success'
                                )
                                $("#row-" + id).remove();


                            } else {
                                swal.fire(
                                    'Đã xảy ra lỗi',
                                    result.msg,
                                    'error'
                                )
                            }
                        }
                    });
                }
            })

    })
})