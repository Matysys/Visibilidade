$(document).ready(function(){
 $('#criar').click(function(e){
     var nome = $("#nome").val();
     var senha = $("#senha").val();
     var senha2 = $("#senha2").val();
     var information = $("#infor").val();
    $.ajax({
        url : 'registrarx.php',
        method: "POST",
        data: {
        name: nome,
        info: information,
     	password: senha,
     	password2: senha2
        },
        dataType: "json"}).done(function(result){
        alert(result);
        });          
        
});


  $('#mudar').click(function(e){
    var alterar = $("input[name = 'ra']:checked").val();
    $.ajax({
        url : 'alterar.php',
        method: "POST",
        data: {
        alterari: alterar
        },
        dataType: "json"}).done(function(result){
            alert(result);
            location.reload();
          
        }); 

        
}); 


 $('#logout').click(function(e){
    $.ajax({
        url : 'sair.php',
        method: "POST",
        data: {
        logout: "1"
        },
        dataType: "json"}).done(function(result){
            window.location = "usuarios.php";
          
        });  

        
}); 


$('#login').click(function(e){
     var nome = $("#nome").val();
     var senha = $("#senha").val();
    $.ajax({
        url : 'logar.php',
        method: "POST",
        data: {
        name: nome,
     	password: senha
        },
        dataType: "json"}).done(function(result){
        	if(result != "OK"){
        	alert(result);
          }else{
          	window.location = "usuarios.php";
          }
        });          
        
});



});









