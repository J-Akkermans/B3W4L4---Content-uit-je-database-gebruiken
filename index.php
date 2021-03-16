<?php  
include'includes/header.php';
include'includes/footer.php';

include 'dbconnection.php';


if (empty($_GET['id'])) {
  $id = 1;
}else{
  $id = $_GET['id'];
}
    $sth = $pdo->query( "SELECT `Onderwerp` ,`Description`, `Image`
    FROM `onderwerpen` WHERE id='$id'" );
    $row = $sth->fetch();
    $onderwerp = $row['Onderwerp'];
    $desc = $row['Description'];
    $img = $row['Image'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
</head>
<body>
	<?php
  echo $header;
  ?><!-- laad hier via php je header in (vanuit je includes map) -->
	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <main>
    <section>
    <h1><?php echo $onderwerp;?></h1>
    <p><?php echo $desc; ?>    </p>
    </section>
        <img src="<?php echo $img?>" alt="Image">
</main>
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php
  echo $footer;
  ?>

</body>
</html>