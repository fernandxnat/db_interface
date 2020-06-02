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
                         title:"Usuario y/o Password incorrectas",
                     });
                   }else{
                       Swal.fire({
                           type:"success",
                           title:"Conexión exitosa, Bienvenidx",
                           confirmButtonColor: '#edca1c',
                           confirmButtonText:'Ingresar'
                       }).then((result) => {
                           if(result.value){
                               window.location.href = "vistas/pag_inicio.php";
                           }
                       })
                       
                   }
               }
           });
       }
});