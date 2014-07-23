Feature: Index Json
  In order to see if api works
  As a website user
  I need to see valid JSON response

Scenario: Valid simple JSON response
  Given I am on "/json"
  Then the response status code should be 200
  And the response should contain "{\"message\":\"is valid\"}"