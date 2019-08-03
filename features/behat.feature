Feature: Test behat installation
    In order to test the installation of behat
    As a developper
    I want to launch a successful test

Scenario: Test behat
    Given a behat installation
    When I launch a Test
    Then it is successful
    And PHPUnit works too
