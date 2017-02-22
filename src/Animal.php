<?php
    class Animal
    {

            private $name;
            private $gender;
            private $breed;
            private $admin_date;

            function __construct($name, $gender, $breed, $admin_date)
            {
                $this->name = $name;
                $this->gender = $gender;
                $this->breed = $breed;
                $this->admin_date = $admin_date;
            }

            function setName($new_name)
            {
                $this->name = (string) $new_name;
            }

            function getName()
            {
                return $this->name;
            }

            function setGender($new_gender)
            {
                $this->gender = (string) $new_gender;
            }

            function getGender()
            {
                return $this->gender;
            }

            function setBreed($new_breed)
            {
                $this->breed = (string) $new_breed;
            }

            function getBreed()
            {
                return $this->breed;
            }

            function setDate($new_admin_date)
            {
                $this->admin_date = (string) $new_admin_date;
            }

            function getDate()
            {
                return $this->admin_date;
            }

            function saveAnimal()
            {
                $GLOBALS['DB']->exec("INSERT INTO animals (name, gender, breed, date_of_admittance) VALUES ('{$this->getName()}', '{$this->getGender()}', '{$this->getBreed()}', '{$this->getDate()}');");


                //
                // $GLOBALS['DB']->exec("INSERT INTO animals (gender) VALUES ('{$this->getGender()}');");
            }

            static function getAll()
            {
                $returned_animals = $GLOBALS['DB']->query("SELECT * FROM animals;");
                $animals = array();
                foreach ($returned_animals as $animal) {
                    $name = $animal['name'];
                    $gender = $animal['gender'];
                    $breed = $animal['breed'];
                    $admin_date = $animal['date_of_admittance'];
                    $new_animal = new Animal($name, $gender, $breed, $admin_date);
                    array_push($animals, $new_animal);
                }
                return $animals;
            }

            static function deleteAll()
            {
                $GLOBALS['DB']->exec("DELETE FROM animals;");
            }

    }


?>
