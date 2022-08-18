const formulario = document.getElementById('formulario');
const registro = document.getElementById('registro-vacio');
const registroLogrado = document.getElementById('registro-logrado');
const msgError = document.getElementById('msg-error-alert');
const nombre = formulario.nombre.value;
const dni = formulario.dni.value;
const telefono = formulario.telefono.value;
const correo = formulario.correo.value;
formulario.addEventListener('submit', (e) => {
    var today = new Date();
        // obtener la fecha y la hora
        var now = today.toLocaleString();
        e.preventDefault();     
        fetch('https://sheet.best/api/sheets/bad4fb61-c352-437b-b518-49a0e38e992d', {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                "Nombre y apellidos": formulario.nombre.value,
                "DNI": formulario.dni.value,
                "Telefono": formulario.telefono.value,
                "Correo": formulario.correo.value,
                "Origen": formulario.origen.value,
                "Fecha":now
            }),
        })
        registro.classList.remove('activo');
        registroLogrado.classList.add('activo');
})