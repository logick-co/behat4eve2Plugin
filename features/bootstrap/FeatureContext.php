<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

namespace behat4eve2Plugin\features\bootstrap;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
    * @Given a behat installation
    */
    public function aBehatInstallation()
    {
        $t = sfContext::getInstance()->getUser()->getId();

        PHPUnit_Framework_Assert::assertEquals(1, $t);
    }

    /**
    * @When I launch a Test
    */
    public function iLaunchATest()
    {
        PHPUnit_Framework_Assert::assertTrue(true);
    }

    /**
    * @Then it is successful
    */
    public function itIsSuccessful()
    {
        PHPUnit_Framework_Assert::assertTrue(true);
    }

    /**
    * @Then PHPUnit works too
    */
    public function phpunitWorksToo()
    {
        PHPUnit_Framework_Assert::assertTrue(true);
    }
}
