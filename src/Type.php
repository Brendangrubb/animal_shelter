<?php
    class Type
    {
        private $type_of_animal;

        function __construct($type_of_animal)
        {
            $this->type_of_animal = $type_of_animal;
        }

        function setType($new_type_of_animal)
        {
            $this->type_of_animal = (string) $new_type_of_animal;
        }

        function getType()
        {
            return $this->type_of_animal;
        }

        function saveType()
        {
            $GLOBALS['DB']->exec("INSERT INTO types (type_of_animal) VALUES ('{$this->getType()}')");
        }

        static function getAll()
        {
            $returned_types = $GLOBALS['DB']->query("SELECT * FROM type;");
            $types = array();
            foreach ($returned_types as $type) {
                $type = $type_of_animal['type_of_animal'];
                $new_type_of_animal = new Type($type);
                array_push($types, $new_type_of_animal);
            }
            return $types;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM types;");
        }
    }



?>
