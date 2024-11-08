<?php
    if(isset($_POST['btnFirmar'])){
        if(password_verify($_POST['firma'], $_SESSION['password'])){
            echo "<script>
                        Swal.fire({
                        icon: 'success',
                        title: 'Solicitud de alta registrada',
                        text: 'Su folio es 24764',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                    }).then(function(result){
                        if(result.isConfirmed){
                            history.back();
                        }
                    });
                </script>";

            return;
        }else{
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Firma incorrecta',
                        text: 'La autorización de este proceso fue denegado.',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                    }).then(function(result){
                        if(result.isConfirmed){
                            history.back();
                        }
                    });
                </script>";

            return;
        }
    }
?>

<div class="p-5 rounded-3 shadow-lg bg-white mt-5">
    <form name="form_alta" action="index.php?controller=bienes&action=save" method="post">
        <h2 class="h4 fw-bold text-dark mb-2 text-center text-uppercase">Formulario de alta</h2>

        <section class="py-2">
            <h3 class="h5 fw-bold text-dark mb-2">Espacio de búsqueda</h3>
            <div class="mb-2 row align-items-center">
                <label for="ct" class="form-label col-2">Centro de trabajo</label>
                <select name="ct" class="form-select focus-ring focus-ring-danger border col" id="ct">
                    <option selected value="23DCT0001R">23DCT0001R: CBTIS 214</option>
                </select>

                <label for="area" class="form-label col-2">Área</label>
                <select name="area" class="form-select focus-ring focus-ring-danger border col" id="area">
                    <option value=""></option>
                    <option>Servicios escolares</option>
                    <option>Dirección</option>
                </select>
            </div>
        </section>

        <section class="py-2">
            <h3 class="h5 fw-bold text-dark mb-2">CABMS</h3>
            <div class="mb-2 row align-items-center">
                <label for="familia" class="form-label col-2">Familia</label>
                <select name="familia" class="form-select focus-ring focus-ring-danger border col" id="familia">
                    <option value=""></option>
                    <option value="I180000">I180000: Equipo de Cómputo</option>
                </select>

                <label for="variable" class="form-label col-2 text-break">Variable</label>
                <select name="variable" class="form-select focus-ring focus-ring-danger border col" id="variable">
                    <option value=""></option>
                    <option value="056">Video-Proyector</option>
                    <option value="058">Memoria Magnética</option>
                </select>
            </div>
        </section>

        <section class="py-2">
            <h3 class="h5 fw-bold text-dark mb-2">Entidad federativa</h3>
            <div class="mb-2 row align-items-center">
                <label for="estado" class="form-label col-2">Estado</label>
                <select name="estado" class="form-select focus-ring focus-ring-danger border col">
                    <option value="23" selected>23: Quintana Roo</option>
                </select>
            </div>
        </section>

        <section class="py-2">
            <h3 class="h5 fw-bold text-dark mb-2">Datos del bien</h3>
            <div class="mb-2 row align-items-center">
                <label for="descripcion" class="form-label col-3">Descripción</label>
                <input type="text" class="form-control focus-ring focus-ring-danger border col" id="descripcion"
                    name="descripcion">
            </div>
            <div class="mb-2 row align-items-center">
                <label for="valor" class="form-label col-2">Valor</label>
                <input type="number" class="form-control focus-ring focus-ring-danger border col" id="valor"
                    name="valor" min="0">

                <label for="documentacion" class="form-label col-3 text-break">Documentación de soporte</label>
                <input type="text" class="form-control focus-ring focus-ring-danger border col" id="documentacion"
                    name="documentacion">
            </div>

            <div class="mb-2 row align-items-center">
                <label for="forma_adq" class="form-label col-2 text-break">Forma de adquisición</label>
                <select name="forma_adq" class="form-select focus-ring focus-ring-danger border col" id="forma_adq">
                    <option value="">Adquisición por</option>
                    <option value="donacion">Donación</option>
                    <option value="compra">Compra directa</option>
                </select>

                <label for="fecha_adq" class="form-label col-3 text-break">Fecha de adquisición</label>
                <input type="date" name="fecha_adq" id="fecha_adq"
                    class="form-control focus-ring focus-ring-danger border col">
            </div>

            <div class="mb-2 row align-items-center justify-content-center">
                <label for="cantidad" class="form-label col-6 text-break">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad"
                    class="form-control focus-ring focus-ring-danger border col">
            </div>
        </section>

        <div class="d-flex justify-content-between">
            <button class="btn btn-dark">Agregar</button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#firma">Registrar</button>
        </div>
    </form>
</div>


<div class="modal fade" id="firma" tabindex="-1" aria-labelledby="firmaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="firma">Solicitud de alta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form name="form_firma" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="modal-body text-center">
                    <p class="h5 mb-4">Usted va a autorizar este proceso</p>
                    <div class="text-start">
                        <label for="firma" class="form-label">Firma electrónica</label>
                        <input type="password" class="form-control focus-ring focus-ring-danger border" id="firma"
                            name="firma" required>
                    </div>
                    <div class="form-text">
                        El proceso de firma proporciona validez oficial e informática a la información, por tal motivo,
                        no podrá ser modificada extraoficialmente.
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" name="btnFirmar">Firmar</button>
                </div>
            </form>
        </div>
    </div>
</div>