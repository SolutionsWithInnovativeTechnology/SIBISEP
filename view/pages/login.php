<main class="d-flex flex-column align-items-center">
    <form name="formu-acceso" action="controller/login.controller.php" method="post">

        <h1 class="mb-4 text-center fw-bold">Acceso a usuarios</h1>

        <div class="input-group mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="user" placeholder="Usuario" name="user" autocomplete="off" required>
                <label for="user">Usuario</label>
            </div>
            <div class="input-group-text border">
                <i class="bi bi-person-circle" style="color: black;"></i>
            </div>
        </div>


        <div class="input-group mb-3">
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password"
                    autocomplete="off" required>
                <label for="password">Contraseña</label>
            </div>
            <button type="button" class="btn btn-outline-secondary border" onclick="showPassword()" name="mostrarPassword">
                <i class="bi bi-eye-slash-fill" id="iconPassword"></i>
            </button>
        </div>


        <div class="form-text mb-3 text-center">Campos sensibles a mayúsculas y minúsculas</div>

        <input type="submit" value="Entrar" class="btn btn-primary w-100">

    </form>
</main>