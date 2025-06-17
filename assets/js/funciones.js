//ojo para usar los modales cambiar data-overlay(en boton),id(en el modal),data-overlay(en el icono equis)
// function frmUsuario(){
//     document.getElementById("slide-down-animated-modal").classList.toggle("hidden");
// }

//eliminar usuario
function deluser(){
    Swal.fire({
  title: '<div style="color:#00AEEF; font-size: 22px; font-weight: bold;">¿Estas seguro DE ELIMINAR?</div>',
  html: `
    <div style="color: #333333; font-size: 16px; margin-top: 10px;">
      El usuario no se eliminará, solo se <b>Inactivará</b>!
    </div>
  `,
  icon: 'warning',
  iconColor: '#f59e0b', // Color del icono
  background: '#eaf6ff', // Fondo azul claro
  showCancelButton: true,
  confirmButtonText: 'Si cambiar de estado',
  cancelButtonText: 'Cancelar',
  buttonsStyling: false,
  customClass: {
    confirmButton: '',
    cancelButton: ''
  },
  didOpen: () => {
    const confirmBtn = Swal.getConfirmButton();
    const cancelBtn = Swal.getCancelButton();

    // Estilos para el botón de confirmar
    confirmBtn.style.backgroundColor = '#f59e0b';
    confirmBtn.style.color = '#ffffff';
    confirmBtn.style.border = 'none';
    confirmBtn.style.padding = '10px 20px';
    confirmBtn.style.borderRadius = '8px';
    confirmBtn.style.fontWeight = '600';
    confirmBtn.style.fontSize = '14px';
    confirmBtn.style.marginRight = '10px';
    confirmBtn.style.cursor = 'pointer';

    // Estilos para el botón de cancelar
    cancelBtn.style.backgroundColor = '#0f5b82';
    cancelBtn.style.color = '#ffffff';
    cancelBtn.style.border = 'none';
    cancelBtn.style.padding = '10px 20px';
    cancelBtn.style.borderRadius = '8px';
    cancelBtn.style.fontWeight = '600';
    cancelBtn.style.fontSize = '14px';
    cancelBtn.style.cursor = 'pointer';
  }
});
};

//btn eliminar usuario de integrantes consolidador
function delIntegrantes(){
    Swal.fire({
  title: '<div style="color:#00AEEF; font-size: 22px; font-weight: bold;">¿Estas seguro DE ELIMINAR?</div>',
  html: `
    <div style="color: #333333; font-size: 16px; margin-top: 10px;">
      El integrante no se eliminará, solo se <b>Inactivará</b>!
    </div>
  `,
  icon: 'warning',
  iconColor: '#f59e0b', // Color del icono
  background: '#eaf6ff', // Fondo azul claro
  showCancelButton: true,
  confirmButtonText: 'Si cambiar de estado',
  cancelButtonText: 'Cancelar',
  buttonsStyling: false,
  customClass: {
    confirmButton: '',
    cancelButton: ''
  },
  didOpen: () => {
    const confirmBtn = Swal.getConfirmButton();
    const cancelBtn = Swal.getCancelButton();

    // Estilos para el botón de confirmar
    confirmBtn.style.backgroundColor = '#f59e0b';
    confirmBtn.style.color = '#ffffff';
    confirmBtn.style.border = 'none';
    confirmBtn.style.padding = '10px 20px';
    confirmBtn.style.borderRadius = '8px';
    confirmBtn.style.fontWeight = '600';
    confirmBtn.style.fontSize = '14px';
    confirmBtn.style.marginRight = '10px';
    confirmBtn.style.cursor = 'pointer';

    // Estilos para el botón de cancelar
    cancelBtn.style.backgroundColor = '#0f5b82';
    cancelBtn.style.color = '#ffffff';
    cancelBtn.style.border = 'none';
    cancelBtn.style.padding = '10px 20px';
    cancelBtn.style.borderRadius = '8px';
    cancelBtn.style.fontWeight = '600';
    cancelBtn.style.fontSize = '14px';
    cancelBtn.style.cursor = 'pointer';
  }
});
};
// boton eliminar grupo
function delGrupo(){
    Swal.fire({
  title: '<div style="color:#00AEEF; font-size: 22px; font-weight: bold;">¿Estas seguro DE ELIMINAR?</div>',
  html: `
    <div style="color: #333333; font-size: 16px; margin-top: 10px;">
      El grupo no se eliminará, solo se <b>Inactivará</b>!
    </div>
  `,
  icon: 'warning',
  iconColor: '#f59e0b', // Color del icono
  background: '#eaf6ff', // Fondo azul claro
  showCancelButton: true,
  confirmButtonText: 'Si cambiar de estado',
  cancelButtonText: 'Cancelar',
  buttonsStyling: false,
  customClass: {
    confirmButton: '',
    cancelButton: ''
  },
  didOpen: () => {
    const confirmBtn = Swal.getConfirmButton();
    const cancelBtn = Swal.getCancelButton();

    // Estilos para el botón de confirmar
    confirmBtn.style.backgroundColor = '#f59e0b';
    confirmBtn.style.color = '#ffffff';
    confirmBtn.style.border = 'none';
    confirmBtn.style.padding = '10px 20px';
    confirmBtn.style.borderRadius = '8px';
    confirmBtn.style.fontWeight = '600';
    confirmBtn.style.fontSize = '14px';
    confirmBtn.style.marginRight = '10px';
    confirmBtn.style.cursor = 'pointer';

    // Estilos para el botón de cancelar
    cancelBtn.style.backgroundColor = '#0f5b82';
    cancelBtn.style.color = '#ffffff';
    cancelBtn.style.border = 'none';
    cancelBtn.style.padding = '10px 20px';
    cancelBtn.style.borderRadius = '8px';
    cancelBtn.style.fontWeight = '600';
    cancelBtn.style.fontSize = '14px';
    cancelBtn.style.cursor = 'pointer';
  }
});
};
