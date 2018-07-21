function Addmydata(){
    var name = $('#nm').val();
    var address = $('#ad').val();
    var emailad = $('#em').val();
    
$.ajax({
    type: "POST",
    url: "server.php?p=add",
    data: "nm="+name+"&ad="+address+"&em="+emailad,
    success: function () {
        viewmydatas();
    }
});

}

function viewmydatas(){
    $.ajax({
        type: "GET",
        url: "server.php",
        success: function (response) {
            $('tbody').html(response);
        }
    });

}
function deletemyDatas(str) {
    var validate = confirm("Are you sure to delete this data?");
    if(validate == true){
        var id = str;
        $.ajax({
            type: "GET",
            url: "server.php?p=del",
            data: "id="+id,
            success: function (data) {
                viewmydatas();
            }
        });
    }else{
        viewmydatas();
    }
        
    
    
 }

 function Updatemydatas(str){

    var id = str;
    var name = $('#nme'+str).val();
    var emailad = $('#ema'+str).val();
    var address = $('#adr'+str).val();
    $.ajax({
        type: "POST",
        url: "server.php?p=edit",
        data: "nme="+name+"&adr="+address+"&ema="+emailad+"&id="+id,
        success: function (data) {
            viewmydatas();
        }
    });
 }
 