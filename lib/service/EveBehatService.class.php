<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class EveBehatService extends TestCase implements Context
{
  public function __construct()
  {
    
    require_once(dirname(__FILE__).'/../../../../config/ProjectConfiguration.class.php');

    $configuration = ProjectConfiguration::getApplicationConfiguration('default', 'dev', true);
    sfContext::createInstance($configuration);
    
  }
}
