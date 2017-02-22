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

        function test_getAll()
        {
            $input_type = "cat";
            $test_type = new Type($input_type);
            $test_type->saveType();

            $input_type2 = "dog";
            $test_type2 = new Type($input_type2);
            $test_type2->saveType();

            $result = Type::getAll();

            $this->assertEquals([$test_type, $test_type2], $result);
        }
    }
?>
