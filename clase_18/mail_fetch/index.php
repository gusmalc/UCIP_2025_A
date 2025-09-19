<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Contacto</h1>



        <div id="aviso" class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Gracias por tu consulta</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


        <div class="row">
            <div class="col-12 col-md-6">
                <form method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">* Nombre</label>
                        <input type="text" class="form-control" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">* Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono (opcional)</label>
                        <input type="text" class="form-control" id="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="consulta" class="form-label">* Consulta</label>
                        <textarea class="form-control" id="consulta" rows="3" required></textarea>
                    </div>

                    <button id="btn_enviar" type="submit" class="btn btn-primary mb-3">ENVIAR</button>
                </form>
            </div>
            <div class="col-12 col-md-6">

            </div>
        </div>
    </div>
</body>


<script src="js/scripts.js"></script>
</html>