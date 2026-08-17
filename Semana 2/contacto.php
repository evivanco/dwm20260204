<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina Principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>         
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>          
                <div class="collapse navbar-collapse" id="collapsibleNavbar">      
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Empresa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="empresa.php">Nuestra Empresa</a></li>
                                <li><a class="dropdown-item" href="#">Nuestro Equipo</a></li>
                                <li><a class="dropdown-item" href="#">Mision</a></li>
                            </ul>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li> 
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Acceder</button>
            </div>
        </nav>
        <!-- Container -->
        <div class="container-fluid bg-warning">
            <form action="empresa.php">
                <div class="mb-2 mt-2">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <label for="comment">Comentarios:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea> 
                <button type="submit" class="btn btn-primary mt-1">Enviar</button>                
            </form>
        </div>
        <!-- Footer -->
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 d-flex justify-content-center" 
                style="color:white"><strong>MiEmpresa@2026</strong></div>
                <div class="col-4"></div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Autenticar</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="empresa.php">
                            <div class="mb-2 mt-2">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="mb-2">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>
                            <div class="form-check mb-2">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login <i class="fa fa-check-circle"></i></button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>         
    </body>
</html>