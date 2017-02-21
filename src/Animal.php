<?php
    class Animal
    {

            private $name;

            function __construct($name)
            {
                $this->name = $name;
            }

            function setName($new_name)
            {
                $this->name = (string) $new_name;
            }

            function getName()
            {
                return $this->name;
            }

            function saveAnimal()
            {
                $GLOBALS['DB']->exec("INSERT INTO animals (name) VALUES ('{$this->getName()}');");
            }

            static function getAll()
            {
                $returned_animals = $GLOBALS['DB']->query("SELECT * FROM animals;");
                $animals = array();
                foreach ($returned_animals as $animal) {
                    $name = $animal['name'];
                    $new_animal = new Animal($name);
                    array_push($animals, $new_animal);
                }
                return $animals;
            }

    }


?>
