function validarForm(formulario) {
    if(formulario.palabra.value.length==0) 
    { //¿Tiene 0 caracteres?
        formulario.palabra.focus();  // Damos el foco al input
        alert('Debes rellenar este campo'); 
        return false; 
     }
     return true;
 }   