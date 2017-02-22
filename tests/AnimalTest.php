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

        // function test_saveAnimal()
        // {
        //     $input_name = "Fido";
        //     $input_gender = "Male";
        //     $input_breed = "German Shepherd";
        //     $input_admin_date = '2017-12-12';
        //     $test_animal = new Animal($input_name, $input_gender, $input_breed, $input_admin_date);
        //     $test_animal->saveAnimal();
        //     // $returned_results = $GLOBALS['DB']->query("SELECT * FROM animals;");
        //     $this->assertEquals($test_animal, $returned_results);
        // }
        //
        function test_getAll()
        {
            $name = "Fido";
            $gender = "Male";
            $input_breed = "German Shepherd";
            $admin_date = '2017-12-12';
            $test_animal = new Animal($name, $gender, $input_breed, $admin_date);
            $test_animal->saveAnimal();

            $name2 = "Lassie";
            $gender2 = "Female";
            $input_breed2 = "Collie";
            $admin_date2 = '2016-10-10';
            $test_animal2 = new Animal($name2, $gender2, $input_breed2, $admin_date2);
            $test_animal2->saveAnimal();

            $result = Animal::getAll();

            $this->assertEquals([$test_animal, $test_animal2], $result);
        }
        //
        // function test_deleteAll()
        // {
        //     $name = "Fido";
        //     $gender = "male";
        //     $test_animal = new Animal($name);
        //     $test_animal->saveAnimal();
        //
        //     $name2 = "Lassie";
        //     $gender = "female";
        //     $test_animal2 = new Animal($name2);
        //     $test_animal2->saveAnimal();
        //
        //     Animal::deleteAll();
        //     $result = Animal::getAll();
        //
        //     $this->assertEquals([], $result);
        // }


    }

?>
