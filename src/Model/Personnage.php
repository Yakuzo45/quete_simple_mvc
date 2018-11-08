<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 08/11/18
 * Time: 17:25
 */

namespace Model;


class Personnage
{
    /**
     * Class Personnage
     *
     */

    private $id;

    private $lastname;

    private $firstname;
    /**
     * @var bool
     */
    private $civility;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName(): string
    {
        return $this->firstname;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setFirstName($firstname): Personnage
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName(): string
    {
        return $this->lastname;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setLastName($lastname): Personnage
    {
        $this->lastname = $lastname;

        return $this;
    }


}