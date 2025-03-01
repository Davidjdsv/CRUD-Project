const INPUT_REGISTRAR = document.getElementById("input_registrar");

INPUT_REGISTRAR.addEventListener("click", () => {
    Swal.fire({
        title: "Nuevo registro añadido éxitosamente!",
        icon: "success",
        confirmButtonText: "Ok",
        allowOutsideClick: false
    })
});