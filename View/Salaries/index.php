<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <title>Title</title>
</head>
<body>

  <h1 class="title">Liste des salariés</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Salaire</th>
        <th scope="col">Modif.</th>
        <th scope="col">Supp.</th>
      </tr>
    </thead>
    <tbody>
      {% for item in allSalaries %}
      <tr>
        <td scope="row">{{ item.firstname }}</td>
        <td>{{ item.lastname }}</td>
        <td>{{ item.email }}</td>
        <td>{{ item.salaire }} €</td>
        <td><button type="submit" class="btn"><i class="fas fa-edit"></i></button></td>
        <td><button type="submit" class="btn"><i class="fas fa-trash"></i></button></td>
      </tr>
      {% endfor %}
    </tbody>
  </table>  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>