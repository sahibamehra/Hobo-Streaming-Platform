<!-- Common Content goes here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Series</title>
    <link rel="stylesheet" href="../../css/default.css">
</head>
<body>
    
<?php include_once __DIR__ . '/../../include_header.php'; ?>
<main>
<!-- Main Content goes here - Start -->


<h1>Create Serie</h1>
    <form action="../../controllers/SerieController.php?action=create" method="post">
        <label>SerieID:</label><input type="text" name="serieID"><br>
        <label>Serie Titel:</label><input type="text" name="serieTitel"><br>
        <label>IMDB Link:</label><input type="text" name="imdbLink"><br>
        <label>Actief:</label><input type="text" name="actief"><br>
        <input type="submit" value="Create">
    </form>

<!-- Main Content goes here - End -->

</main>
<?php include_once __DIR__ . '/../../include_sidebar.php'; ?>
</body>
</html>




