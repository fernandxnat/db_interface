$('#formLogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val()); 
    
    if(usuario.length == "" || password==""){
        Swal.fire({
            type:'warning',
            title: "Necesita ingresar un usuario y/o contraseña",
        });
        return false;
       }else{
           $.ajax({
               url:"bd/login.php",
               type:"POST",
               datatype:"json",
               data: {usuario:usuario , password:password},
               success:function(data){
                   if(data=="null"){
                     Swal.fire({
                         type:'error',
                         title:"Usuario y/o contraseña incorrectas",
                     });
                   }else{
                       Swal.fire({
                           type:"success",
                           title:"Conexión exitosa, Bienvenido",
                           showConfirmButton: false,
                           timer:1500,
                       }).then(function()  {
                           
                               window.location.href = "vistas/pag_inicio.php";
                           
                       })
                       
                   }
               }
           });
       }
});