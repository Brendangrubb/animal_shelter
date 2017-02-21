<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__.'/../src/Animal.php';

    $server = 'mysql:host=localhost:8889;dbname=animal_shelter_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class AnimalTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Animal::deleteAll();
        }
        function test_saveAnimal()
        {
            $input_name = "Fido";
            $test_Animal = new Animal($input_name);
            $test_Animal->saveAnimal();

            $result_name = '';
            $returned_results = $GLOBALS['DB']->query("SELECT * FROM animals;");
            foreach ($returned_results as $result) {
                $result_name = $result['name'];
            }
            $this->assertEquals($input_name, $result_name);
        }

        function test_getAll()
        {
            $name = "Fido";
            $test_animal = new Animal($name);
            $test_animal->saveAnimal();

            $name2 = "Lassie";
            $test_animal2 = new Animal($name2);
            $test_animal2->saveAnimal();

            $result = Animal::getAll();

            $this->assertEquals([$test_animal, $test_animal2], $result);
        }
        
        function test_deleteAll()
        {
            $name = "Fido";
            $test_animal = new Animal($name);
            $test_animal->saveAnimal();

            $name2 = "Lassie";
            $test_animal2 = new Animal($name2);
            $test_animal2->saveAnimal();

            Animal::deleteAll();
            $result = Animal::getAll();

            $this->assertEquals([], $result);
        }


    }

?>
