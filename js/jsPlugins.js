//para llamar a los plugins
$(window).on("load",function(){
	$('#slider').nivoSlider();
});

//para el formulario de envio de solicitudes.
document.getElementById('contactForm').addEventListener('submit', async function (e) {
    e.preventDefault(); // Evita recargar la página

    const formData = new FormData(this);
    const responseMessage = document.getElementById('responseMessage');

    try {
        const response = await fetch('./backend/send_email.php', {
            method: 'POST',
            body: formData,
        });
        const result = await response.json();

        if (result.status === "success") {
            // Mostrar mensaje de éxito
            responseMessage.textContent = "El correo se ha enviado de manera exitosa. Pronto nos pondremos en contacto con usted.";
            responseMessage.style.color = "green";
            this.reset(); // Reinicia el formulario
        } else {
            // Mostrar mensaje de error con detalles
            responseMessage.textContent = "Errores: " + result.errors.join(", ");
            responseMessage.style.color = "red";
        }
    } catch (error) {
        // Manejar errores inesperados
        responseMessage.textContent = "Hubo un error al procesar su solicitud. Inténtelo de nuevo más tarde.";
        responseMessage.style.color = "red";
    }
});
