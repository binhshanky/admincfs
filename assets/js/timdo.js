$(document).ready(function(){
   
    $("#duyetcfs").click(function(){
        
        var list = "";
        $('input:checked').each(function() {
            list += $(this).data('id') + ",";
        });
        
        list = list.substring(0, list.length - 1);
        window.location = "./dang-tai/timdo/"+btoa(list);
    })
})