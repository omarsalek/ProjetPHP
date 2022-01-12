<?php
$liste = $data["liste"];
if (!empty($liste)): ?>
<div class="container mt-5">
    <table class="table table-striped borderStyleTable">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Supprimer Ami</th>
            <th scope="col">Message</th>
            <th scope="col">Invitation Match</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($liste as $value): ?>
            <tr>
                <td><?= $value['nom'] ?> </td>
                <td><?= $value['prenom']?></td>
                <td><button type="submit" class="btn btn-danger "><a id="supprimerAmi" href='?module=ModAmis&action=RetirerAmi&id=<?= $value['idUtilisateur']?>'>Retirer</a></button></td>
                <td><button type="submit" class="btn btn-info "><a id="envoyerMessage" href='?module=ModAmis&action=EnvoyerMessage&id=<?= $value['idUtilisateur']?>'>Messsage</a></button></td>
                <td><button type="submit" class="btn btn-warning "><a id="inviterMatch" href='?module=ModAmis&action=InviterMatch&id=<?= $value['idUtilisateur']?>'>Inviter</a></button></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <div class="alert alert-danger mt-5">Vous posséder aucun Amis</div>
    <?php endif; ?>
</div>