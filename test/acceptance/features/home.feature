Feature: Home
  In order to see if homepage is available
  As a website user
  I need to be able to go to the homepage and find the text home

  Scenario: Search for title
    Given I am on "/"
    Then I should see "home"