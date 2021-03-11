<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- ESTILOS DE BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- ESTILOS PERSONALES -->

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="card mt-5 w-50 p-5 m-auto">
                <div class="logo text-center mb-3">
                    <img src="http://unicolombo.edu.co/app/uploads/2020/12/Logo-Unicolombo-pagina-web.png" alt="">
                </div>
                <form action="" method="post">
                    <div class="select mt-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tipo de usuario</option>
                            <option value="empleado">Empleado</option>
                            <option value="coordinador">Coordinador</option>
                          </select>
                    </div>

                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Nombre</label>
                    </div>

                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="submit mt-4 text-center">
                     <a class="btn btn-primary"  href="Pagprin.html">Ingresar</a>
           
                    </div>

                </form>
                <div class="botones mt-5">
                    <div class="row">
                        <div class="col text-center">
                            <a class="btn btn-danger"  href="Pagusu.html">Registrar como Usuario</a>
                        </div>
                        <div class="col text-center">
                            <a class="btn btn-danger"  href="Pagadmin.html">Registrar como Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>