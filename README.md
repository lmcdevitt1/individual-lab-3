Context: This lab will introduce you to writing and running tests in Laravel. Testing ensures that your application behaves as expected, which is crucial for maintaining quality.

Tasks:

Local Setup. (prerequisite step):
Reuse the local setup done in previous lab.
Writing Tests:
Choose one of the following systems for your project in line with what you chose in previous lab. We are going to continue to build on top that project:
Library Management System: BookController
E-commerce Application: ProductController
Custom Application: ItemController
Create a new feature branch (e.g., feature/add-tests).
Write feature tests for the chosen controller to:
Test listing items without an ID.
Test retrieving a single item by ID.
Test handling invalid IDs with a 404 response.
Unit Testing the Model:
Write a unit test to verify the toString() method in the chosen model.
Running and Verifying Tests:
Run the tests and ensure they pass.
Check the code coverage report and aim for 100% coverage for the chosen controller and model.
Acceptance Criteria:

Testing environment is set up and tests can be run.
Feature tests for listing items, retrieving single item by ID, and handling invalid IDs are written.
Unit test for the model's toString() method is written.
All tests pass successfully.
Code coverage for the chosen controller and model is 100%.
Video Walkthrough: Demonstrating the process of writing and running tests, and reviewing the code coverage report.
