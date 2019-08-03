<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

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
        PHPUnit_Framework_Assert::assertTrue(true);
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
