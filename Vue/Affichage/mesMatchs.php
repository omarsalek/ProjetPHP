<head>
    <script src="https://kit.fontawesome.com/6440c9a3af.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body id="body">
<?php
$liste = $data["liste"];
if (!empty($liste)): ?>
    <div class="container">
        <div class="row-fluid ">
            <?php foreach ( $liste as $elements) : ?>
                <div id="idCard" >
                    <div class="card-columns-fluid" >
                        <div class="card  bg-light" >
                            <div id="imageMatch">
                                <img  src="./Vue/Affichage/Images/<?= $elements['Image'] ?>"  alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5><b><?php echo $elements['nomMatch']?></b></h5>
                                <p><?php echo $elements['lieu'] ?></b></p>
                                <p><?php echo $elements['dateMatch'] ?></b></p>
                                <p><?php echo $elements['heure'] ?></b> H</p>
                                <div id="buttonsMatch">
                                    <button type="submit" class="btn btn-info "><a id="consulterMatch" href='?module=ModMatchs&action=ConsulterMatch&id=<?= $elements['idMatch']?>'>Consulter</a></button>
                                    <button type="submit" class="btn btn-primary "><a id="discuterMatch" href='?module=ModDiscussion&action=DiscuterMatch&id=<?= $elements['idMatch']?>'>Discuter</a></button>
                                    <button id="buttonRetirer" type="submit" class="btn btn-danger "><a id="retirerMatch" href='?module=ModMatchs&action=RetirerParticipation&id=<?= $elements['idMatch']?>'>Retirer</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php else: ?>
    <div class="alert alert-danger mt-5">Vous avez participé a aucun match !</div>
<?php endif; ?>
</body>