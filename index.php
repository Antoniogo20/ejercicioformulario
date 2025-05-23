<!doctype html>
<html lang="es">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body data-bs-theme="dark">

    <div class="row justofy-content-center mt-4">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title">Formulario de contacto</h3>

                    <form action="enviar.php" method="post">
                    <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id=""  aria-describedby="helpId"  placeholder="Nombre"/>
                           
                        </div> 

                        <div class="mb-3">
                            <label for="" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id=""  aria-describedby="helpId"  placeholder="Telefono"/>
                           
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id=""  aria-describedby="helpId"  placeholder="Email"/>
                           
                        </div>   
                    
                    <div class="mb-3">
                            <label for="" class="form-label">Asunto</label>
                            <input type="text" class="form-control" name="asunto" id=""  aria-describedby="helpId"  placeholder="Asunto"/>
                           
                        </div>


                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" rows="5" class="form-control"></textarea>
                           
                        </div>
                        <button type="submit" class="btn btn-sucess">Enviar</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
        
    </div>
    
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
