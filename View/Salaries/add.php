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

  <h1 class="title">Ajouter un salarié</h1>

  <form>
  <div class="form-group">
    <label for="formFirstname">Prénom</label>
    <input type="text" class="form-control" id="formFirstname" placeholder="Prénom">
    <label for="formLastname">Nom</label>
    <input type="text" class="form-control" id="formLastname" placeholder="Nom">
    <label for="formEmail">Adresse email</label>
    <input type="email" class="form-control" id="formEmail" placeholder="adresse@mail.com">
    <label for="formSalary">Salaire mensuel</label>
    <input type="number" class="form-control" id="formSalary" placeholder="1000">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Ajouter un salarié</button>
</form> 

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>