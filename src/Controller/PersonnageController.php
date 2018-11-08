<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 08/11/18
 * Time: 17:00
 */

namespace Controller;


use Model\Personnage;
use Model\PersonnageManager;

class PersonnageController extends AbstractController
{
    public function index()
    {
        $personnageManager = new PersonnageManager($this->getPdo());
        $personnages = $personnageManager->selectAllCharactersWithGender();


        return $this->twig->render('Item/items.html.twig', ['personnages' => $personnages]);
    }

    public function add()
    {
        $personnageManager = new PersonnageManager($this->getPdo());
        $personnage = new Personnage();

        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(empty($_POST['firstname'])) {
                $errors[] = 'Votre prénom doit etre renseigné !';
            }
            if(empty($_POST['lastname'])) {
                $errors[] = 'Votre nom doit etre renseigné !';

            }
            if(empty($_POST['civilite'])) {
                $errors[] = 'Votre civilité doit etre renseigné !';

            }
            if (empty($errors)) {
                $personnage->setFirstName($_POST['firstname']);
                $personnage->setLastName($_POST['lastname']);
                $personnage->setCivility($_POST['civilite']);
                $personnageManager->insert($personnage);
            }
        }


        return $this->twig->render('Personnage/add.html.twig', ['errors' => $errors]);
    }
}