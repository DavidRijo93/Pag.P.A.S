<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PAS</title>
</head>
<body>
   <?php
   include "../plantillas/navbar.php"
   
   ?> 
 
</div>
   <br><br>
   <table class="table">
  <thead class="table-light">
  <tr>
      <th scope="col">HORARIO</th>
      <th scope="col">LUNES</th>
      <th scope="col">MARTES</th>
      <th scope="col">JUEVES</th>
      <th scope="col">Agendar</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">10:00 AM</th>
      <td>--</td>
      <td>Dra. Zoe Diplan </td>
      <td>Dr. Ramses Caraballo</td>
<td>
          <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     Agendar
      </button>

   <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agenda 10:00 AM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="../plantillas/pediatría.php">
              <h6>Doctores</h6>
            <input class="form-check-input"  type="radio" name="radia" id="doc110"  required>
            <label class="form-check-label" for="doc110" >Dr. Ramses Caraballo</label><br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc210">
            <label class="form-check-label" for="doc210">Dra. Zoe Diplan</label>
             <hr>
             <label for="dia">Dias</label>
             <select id="dia" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Seleciona tu dia</option>
                <option value="1" required>Lunes</option>
                <option value="2" required>Martes</option>
                <option value="3" required>Jueves</option>
              </select>
              <hr>
              <h6>Datos Personales</h6>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombres" id="nombre" placeholder="Nombre" class="form-control"  required>
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" placeholder="Apellido" class="form-control" required>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="email@sample.com" class="form-control" required>
              <label for="cell">Telefono</label>
              <input type="text" name="telefono" id="cell" placeholder="000-000-0000" class="form-control" required>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="agendar()">Agendar</button>
            </div>
          </form>
          

        </div>
      </div>
    </div>
</td>
    </tr>
    <tr>
      <th scope="row">11:00 AM</th>
      <td>Dra. Ariadne Gomez</td>
      <td>Dr. Kervin Sanchez</td>
      <td>Dra. Johanna Rubio</td>
      <td>          <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
     Agendar
      </button>

   <!-- Modal -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agenda 11:00 AM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="../plantillas/pediatría.php">
              <h6>Doctores</h6>
            <input class="form-check-input"  type="radio" name="radio" id="doc110"  required>
            <label class="form-check-label" for="doc110" >Dr. Ramses Caraballo</label><br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc210">
            <label class="form-check-label" for="doc210">Dra. Zoe Diplan</label>
             <hr>
             <label for="dia">Dias</label>
             <select id="dia" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Seleciona tu dia</option>
                <option value="1" required>Lunes</option>
                <option value="2" required>Martes</option>
                <option value="3" required>Jueves</option>
              </select>
              <hr>
              <h6>Datos Personales</h6>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombres" id="nombre" placeholder="Nombre" class="form-control"  required>
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" placeholder="Apellido" class="form-control" required>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="email@sample.com" class="form-control" required>
              <label for="cell">Telefono</label>
              <input type="text" name="telefono" id="cell" placeholder="000-000-0000" class="form-control" required>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="agendar()">Agendar</button>
            </div>
          </form>
          

        </div>
      </div>
    </div>
  </td>
    </tr>
    <tr>
      <th scope="row">12:00 PM</th>
      <td>Dra. Yudeily Trinidad</td>
      <td>--</td>
      <td>--</td>
      <td>           <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
     Agendar
      </button>

   <!-- Modal -->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agenda 12:00 AM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="../plantillas/pediatría.php">
              <h6>Doctores</h6>
            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="doc110"  required>
            <label class="form-check-label" for="doc110" >Dr. Ramses Caraballo</label><br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc210">
            <label class="form-check-label" for="doc210">Dra. Zoe Diplan</label>
             <hr>
             <label for="dia">Dias</label>
             <select id="dia" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Seleciona tu dia</option>
                <option value="1" required>Lunes</option>
                <option value="2" required>Martes</option>
                <option value="3" required>Jueves</option>
              </select>
              <hr>
              <h6>Datos Personales</h6>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombres" id="nombre" placeholder="Nombre" class="form-control"  required>
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" placeholder="Apellido" class="form-control" required>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="email@sample.com" class="form-control" required>
              <label for="cell">Telefono</label>
              <input type="text" name="telefono" id="cell" placeholder="000-000-0000" class="form-control" required>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="agendar()">Agendar</button>
            </div>
          </form>
          

        </div>
      </div>
    </div>
  </td>
    </tr>
    <tr>
      <th scope="row">01:00 PM</th>
      <td>--</td>
      <td>Dr. José Polanco</td>
      <td>Dr. Emilio Luis</td>
      <td>          <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
     Agendar
      </button>

   <!-- Modal -->
    <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agenda 01:00 PM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="../plantillas/pediatría.php" >
              <h6>Doctores</h6>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc110"  required>
            <label class="form-check-label" for="doc110" >Dr. Ramses Caraballo</label><br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc210" required>
            <label class="form-check-label" for="doc210">Dra. Zoe Diplan</label>
             <hr>
             <label for="dia">Dias</label>
             <select id="dia" class="form-select form-select-sm" aria-label=".form-select-sm example" >
                <option selected>Seleciona tu dia</option>
                <option value="1" required>Lunes</option>
                <option value="2" required>Martes</option>
                <option value="3" required>Jueves</option>
              </select>
              <hr>
              <h6>Datos Personales</h6>
              <label for="nombre">Nombre</label>
              <input type="text" name="" id="nombre" placeholder="Nombre" class="form-control" required>
              <label for="apellido">Apellido</label>
              <input type="text" name="" id="apellido" placeholder="Apellido" class="form-control" required>
              <label for="email">Email</label>
              <input type="email" name="" id="email" placeholder="email@sample.com" class="form-control" required>
              <label for="cell">Telefono</label>
              <input type="text" name="" id="cell" placeholder="000-000-0000" class="form-control" required>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="agendar()">Agendar</button>
            </div>
          </form>
          

        </div>
      </div>
    </div></td>
    </tr>
    <tr>
      <th scope="row">02:00 PM</th>
      <td>--</td>
      <td>--</td>
      <td>Dra. Yessica Mateo</td>
      <td>          <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     Agendar
      </button>

   <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agenda 02:00 PM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="../plantillas/pediatría.php" >
              <h6>Doctores</h6>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc110"  required>
            <label class="form-check-label" for="doc110" >Dr. Ramses Caraballo</label><br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc210" required>
            <label class="form-check-label" for="doc210">Dra. Zoe Diplan</label>
             <hr>
             <label for="dia">Dias</label>
             <select id="dia" class="form-select form-select-sm" aria-label=".form-select-sm example" >
                <option selected>Seleciona tu dia</option>
                <option value="1" required>Lunes</option>
                <option value="2" required>Martes</option>
                <option value="3" required>Jueves</option>
              </select>
              <hr>
              <h6>Datos Personales</h6>
              <label for="nombre">Nombre</label>
              <input type="text" name="" id="nombre" placeholder="Nombre" class="form-control" required>
              <label for="apellido">Apellido</label>
              <input type="text" name="" id="apellido" placeholder="Apellido" class="form-control" required>
              <label for="email">Email</label>
              <input type="email" name="" id="email" placeholder="email@sample.com" class="form-control" required>
              <label for="cell">Telefono</label>
              <input type="text" name="" id="cell" placeholder="000-000-0000" class="form-control" required>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="agendar()">Agendar</button>
            </div>
          </form>
          

        </div>
      </div>
    </div></td>
    </tr>
    <tr>
      <th scope="row">03:00 PM</th>
      <td>Dr. Robert Santana</td>
      <td>Dr. Robert Santana</td>
      <td>Dr. Robert Santana</td>
      <td>          <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     Agendar
      </button>

   <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agenda 03:00 PM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="../plantillas/pediatría.php" >
              <h6>Doctores</h6>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc110"  required>
            <label class="form-check-label" for="doc110" >Dr. Ramses Caraballo</label><br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="doc210" required>
            <label class="form-check-label" for="doc210">Dra. Zoe Diplan</label>
             <hr>
             <label for="dia">Dias</label>
             <select id="dia" class="form-select form-select-sm" aria-label=".form-select-sm example" >
                <option selected>Seleciona tu dia</option>
                <option value="1" required>Lunes</option>
                <option value="2" required>Martes</option>
                <option value="3" required>Jueves</option>
              </select>
              <hr>
              <h6>Datos Personales</h6>
              <label for="nombre">Nombre</label>
              <input type="text" name="" id="nombre" placeholder="Nombre" class="form-control" required>
              <label for="apellido">Apellido</label>
              <input type="text" name="" id="apellido" placeholder="Apellido" class="form-control" required>
              <label for="email">Email</label>
              <input type="email" name="" id="email" placeholder="email@sample.com" class="form-control" required>
              <label for="cell">Telefono</label>
              <input type="text" name="" id="cell" placeholder="000-000-0000" class="form-control" required>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="agendar()">Agendar</button>
            </div>
          </form>
          

        </div>
      </div>
    </div></td>
    </tr>
  </tbody>
<caption></caption>
<caption style="color:#000;">Todos las consultas tienen un precio de $1500 con seguro y sin seguro $3000</caption>
</table>

    <?php
   include "../plantillas/footer.php"
   
   ?> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Alert de la agenda -->
<script src="../js/main.js"></script>
</body>
</html>