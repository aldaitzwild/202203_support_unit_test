<?php 

require_once './functions.php';

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class FunctionTest extends TestCase
{

    /**
     * @dataProvider multiplicationProvider
     */
    public function testMultiply($num1, $num2, $expectedResult) {
        //Act
            $result = multiply($num1, $num2);

        //Assert
        assertSame($expectedResult, $result);
    }

    public function multiplicationProvider() {
        return [
            [5, 8, 40],
            [3, 3, 9],
            [0, 0, 0],
            [10, 10, 100],
            [25, 4, 100],
        ];
    }

}