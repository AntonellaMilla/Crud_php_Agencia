<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <h1 class="text-center p-3">CRUD de Colaboradores</h1>
    <div class="container-fluid row">

        <form class="col-4 p-3">
            <h3 class="text-center text-secondary"> Registro de personas</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" > 
            </div>


                        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo" > 
            </div>


                        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Puesto</label>
                <input type="text" class="form-control" name="puesto" > 
            </div>

                        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" > 
            </div>


                        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fecha" > 
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>



        </form>

<div class= "col-8 p-4">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">CARGO</th>
      <th scope="col">PUESTO</th>
            <th scope="col">EDAD</th>

                  <th scope="col">FECHA DE INGRESO</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>

</div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>