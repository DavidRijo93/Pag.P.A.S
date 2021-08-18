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
      <td>Dra. Zoe Diplan</td>
      <td>--</td>
      <td>Dr. Ramses Caraballo</td>
      <td><button class="btn btn-primary" type="button">Agendar</button></td>
    </tr>
    <tr>
      <th scope="row">11:00 AM</th>
      <td>Dra. Ariadne Gomez</td>
      <td>--</td>
      <td>Dra. Johanna Rubio</td>
      <td><button class="btn btn-primary" type="button">Agendar</button></td>
    </tr>
    <tr>
      <th scope="row">12:00 PM</th>
      <td>Dra. Yudeily Trinidad</td>
      <td>--</td>
      <td>--</td>
      <td><button class="btn btn-primary" type="button">Agendar</button></td>
    </tr>
    <tr>
      <th scope="row">01:00 PM</th>
      <td>Dr. José Polanco</td>
      <td>--</td>
      <td>Dr. Emilio Luis</td>
      <td><button class="btn btn-primary" type="button">Agendar</button></td>
    </tr>
    <tr>
      <th scope="row">02:00 PM</th>
      <td>--</td>
      <td>--</td>
      <td>Dra. Yessica Mateo</td>
      <td><button class="btn btn-primary" type="button">Agendar</button></td>
    </tr>
    <tr>
      <th scope="row">03:00 PM</th>
      <td>Dr. Robert Santana</td>
      <td>--</td>
      <td>Dr. Robert Santana</td>
      <td><button class="btn btn-primary" type="button">Agendar</button></td>
    </tr>
  </tbody>
<caption></caption>
<caption style="color:#000;">Todos las consultas tienen un precio de $1000 con seguro y sin seguro $2000</caption>
</table>

   <?php
    include "../plantillas/footer.php"
   ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>