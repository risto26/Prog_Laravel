<!-- resources/views/articoli/add.blade.php -->
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aggiungi Articolo</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/
bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<form action="{{ route('articolo.update', $articolo->id) }}" method="post">
    @csrf
    <label>nome</label>
    <input type="text" name="nome"> <br>
    <label>descrizione</label>
    <input type="text" name="descrizione"><br>
    <input type="submit" value="modifica">
</form>
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.
js" crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.m
in.js" crossorigin="anonymous"></script>
</body>
</html>