<!-- Common Content goes here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobo Streaming Platform - Home Page</title>
    <link rel="stylesheet" href="../css/default.css">
</head>
<body>
    
<?php include_once __DIR__ . '/../include_header.php'; ?>
<main>
<!-- Main Content goes here - Start -->
    <H1 class="link-button">Welcome Admin! </H1>


<script>

var input = document.createElement("input");
input.setAttribute("type", "hidden");
input.setAttribute("name", "formSpType");
input.setAttribute("value", "admin");
input.setAttribute("id", "login_form_adminForm");
document.getElementById("login_form").appendChild(input);

</script>

    <!-- Main Content goes here - End -->
</main>
<?php include_once __DIR__ . '/../include_sidebar.php'; ?>
</body>
</html>