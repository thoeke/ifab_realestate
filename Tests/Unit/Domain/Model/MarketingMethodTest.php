<?php
namespace Ifabrik\IfabRealEstate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class MarketingMethodTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealEstate\Domain\Model\MarketingMethod
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealEstate\Domain\Model\MarketingMethod();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}
