<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 08/11/18
 * Time: 17:01
 */

namespace Model;


class PersonnageManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'personnage';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
    /**
     * @param string $genre
     * @return array
     */
    public function selectAllCharactersWithGender() : array
    {
        $statement = $this->pdo->query("SELECT personnage.id, personnage.firstname, personnage.lastname, genre.sexe 
                                    FROM $this->table JOIN genre ON $this->table.genre_id = genre.id");
        $statement->setFetchMode(\PDO::FETCH_ASSOC);
        return $statement->fetchAll();
    }

    public function insert(Personnage $personnage):int
    {
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`firstname`,`lastname`,`genre_id`) VALUES (:firstname, :lastname, :genre_id)");
        $statement->bindValue('firstname', $personnage->getFirstName(), \PDO::PARAM_STR);
        $statement->bindValue('lastname', $personnage->getLastName(), \PDO::PARAM_STR);
        $statement->bindValue('genre_id', $personnage->getCivility(), \PDO::PARAM_INT);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}