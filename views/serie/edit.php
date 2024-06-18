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

<h1>Edit Serie</h1>
    <form action="../../controllers/SerieController.php?action=update" method="post">
        <label>SerieID:</label><input type="text" name="serieID" value="<?php echo $_GET['serieID']; ?>"><br>
        <label>Serie Titel:</label><input type="text" name="serieTitel" value="<?php echo $_GET['serieTitel']; ?>"><br>
        <label>IMDB Link:</label><input type="text" name="imdbLink" value="<?php echo $_GET['imdbLink']; ?>"><br>
        <label>Actief:</label><input type="text" name="actief" value="<?php echo $_GET['actief']; ?>"><br>
        <input type="submit" value="Update">
    </form>

<!-- Main Content goes here - End -->

</main>
<?php include_once __DIR__ . '/../../include_sidebar.php'; ?>
</body>
</html>




