function frmLogin(e){
    e.preventDefault()
    const usuario = document.getElementById('usuario');
    const password = document.getElementById('password');

    if(usuario.value==""){
        Swal.fire({
            icon: 'error',
            title: 'USUARIO',
            text: 'Ingrese su Usuario',
            timer: 8000,
            customClass:{
            confirmButton: 'btn btn-primary',
            confirmButtonText: 'Aceptar'            
              },
              buttonsStyling:true
        })
    }else if(password.value==""){
        Swal.fire({
            icon: 'error',
            title: 'CONTRASEÑA',
            text: 'Ingrese su Contraseña',
            timer: 8000,
             customClass:{
            confirmButton: 'btn btn-primary',
            confirmButtonText: 'Aceptar'
              },
              buttonsStyling:true
          })
    }else{
        const url = base_url + "Integrantes/validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){
                console.log("Respuesta del servidor:", this.responseText);

                const res = JSON.parse(this.responseText);
                if(res=="ok"){
                    window.location=base_url+"Dashboard";
                }else{
                    document.getElementById("alerta").classList.remove("hidden");
                    document.getElementById("alerta").innerHTML=res;
                }
            }
        }
    }
}