<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__.'/../src/Type.php';

    $server = 'mysql:host=localhost:8889;dbname=animal_shelter_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class TypeTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Type::deleteAll();
        // }

        function test_saveType()
        {
            $input_type = "cat";
            $test_type = new Type($input_type);
            $test_type->saveType();

        }
    }
?>
