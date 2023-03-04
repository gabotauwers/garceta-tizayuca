<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>

<body>
<a href="principaltipomaterial.php">"Inicio"</a>
<h1>Tu registro se a eliminado</h1>
<?php
include 'tmaterialDB.php';
$tma = new TmaterialDB();
$tma->EliminarTmaterial($_POST);

?>
</body>
</html>