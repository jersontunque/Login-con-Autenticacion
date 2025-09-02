<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="w-25 mt-5 mx-auto border border-primary rounded-5 p-5">
        <form action="" method="POST">
        <label class="form-label">Usuario</label>
        <input class="form-control" type="text" name="nombre" required>
        <br>
        <label class="form-label">Email</label>
        <input class="form-control" type="email" name="email" required>
        <br>
        <label class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contraseña" required>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <button class="btn btn-primary" type="submit" name="enviar_crear">Crear cuenta</button>
            </form>
            <a href="./index.php" class="text-decoration-none">Regresar</a>
        </div>


        <?php  if(isset($envio)) :?>
            <div>
                <?php echo $envio;?>
            </div>
            <?php endif;?>
    </div>








































    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>