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
        function test_saveAnimal()
        {
            $input_name = "Fido";
            $test_Animal = new Animal($input_name);
            $test_Animal->saveAnimal();

            $result_name = '';
            $returned_results = $GLOBALS['DB']->query("SELECT * FROM animals ORDER BY id ASC;");
            foreach ($returned_results as $result) {
                $result_name = $result['name'];
            }
            $this->assertEquals($input_name, $result_name);
        }
    }

?>
