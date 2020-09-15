<?php 

require 'php/database.php';

if(!empty($_GET['id'])){
    $id = checkInput($_GET['id']);
}
$db = Database::connect();
$statement = $db->prepare('SELECT projets.id, projets.titre, projets.description, projets.sousTitre, projets.mockUp, projets.technologie1, projets.technologie2, projets.technologie3, projets.technologie4 
FROM projets WHERE projets.id= ?');
$statement->execute(array($id));
$projets = $statement->fetch();
Database::disconnect();

function checkInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>projet de formation</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/png" href="img/logoEd1.png"/>
    </head>
    <header>
        <?php include("php/navBar.php"); ?>
        <h2><?php echo $projets['titre']?></h2>
    </header>
    <body>
    
        <section id="main">
            <div class="container-fluid">
            <p class="sous-titre"> <?php echo $projets['sousTitre']; ?></p>
            <div class="row"> 
                    <div class="col-lg-5 offset-1">   
                        <p> <?php echo $projets['description']; ?></p>
                       <p class="techText">Technologies principales</p> <br>
                       <img src="<?php echo 'img/'. $projets['technologie1']; ?>" alt="tech utilisée 1" >
                       <img src="<?php echo 'img/'. $projets['technologie2']; ?>" alt="tech utilisée 2" >
                       <img src="<?php echo 'img/'. $projets['technologie3']; ?>" alt="tech utilisée 3" >
                       <img src="<?php echo 'img/'. $projets['technologie4']; ?>" alt="tech utilisée 4" >
                    </div>
                    <div class="col-lg-5">
                        <div class="mockUp">
                            <img src="<?php echo 'img/'. $projets['mockUp']; ?>" alt="mockup de l'application" width="800px" height="400px">
                        </div>
                    </div>   
                
                </div>
        </div>
        </section>
    
    <footer>
    <?php include("php/footer.php"); ?>
    </footer>
    </body>
</html>