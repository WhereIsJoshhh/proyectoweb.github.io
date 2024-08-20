<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="card shadow-lg">
                    <div class="card-title text-center border-bottom">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <form action="loginBD.php" method="POST">
                            <div class="mb-4">
                                <label for="" class="form-label">Ingrese usuario:</label>
                                <input type="text" name="txtUsuario" class="form-control">
                            </div>
                            
                            <div class="mb-4">
                                <label for="" class="form-label">Ingrese la Contraseña:</label>
                                <input type="password" name="txtContraseña" class="form-control">
                            </div>
                            <div class="d-grid">
                                <button type="submith" class="btn btn-primary">Ingresar</button>
                            </div>
                           
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    
</body>
</html>