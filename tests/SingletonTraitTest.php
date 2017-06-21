<?php

namespace elementary\core\Singleton\Test;

use elementary\core\Singleton\SingletonTrait;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \elementary\core\Singleton\SingletonTrait
 */
class SingletonTraitTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return  MockObject|SingletonTrait
     */
    protected function buildMock()
    {
        return $this->getMockBuilder(SingletonTrait::class)->setMethods(null)->getMockForTrait();
    }

    /**
     * @test
     * @covers ::me()
     */
    public function me()
    {
        fwrite(STDOUT, "\n". __METHOD__);

        $firstInstance = Singleton::me();
        $secondInstance = Singleton::me();

        $this->assertEquals(get_class($firstInstance), get_class($secondInstance));

        $str = 'should exists in next getInstance()';
        $firstInstance->fooBar = $str;
        $this->assertEquals($str, $secondInstance->fooBar);
    }
}

class Singleton
{
    use SingletonTrait;
}