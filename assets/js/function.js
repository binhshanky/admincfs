$(document).ready(function(){
    $("#fixmatcuoi").click(function(){
        var nd = $("#confession").val();
        regex = [/(\)+)/g, /(\(+)/g];
        nd = nd.replace(regex[0], ")");
        nd = nd.replace(regex[1], "(");
        $("#confession").val(nd);
    })
    
})