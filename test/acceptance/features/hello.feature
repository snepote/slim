Feature: Hello
  In order to see if hello page exists
  As a website user
  I need to be able to go to the hello page and see hello

  Scenario: See hello
    Given I am on "/hello"
    Then I should see "hello"

  Scenario: See hello seb
    Given I am on "/hello/seb"
    Then I should see "hello seb"