# Scandiweb-project
### The expected outcome of the test**

A web-app (accessible by an URL) containing two pages for:

1. Product list page
2. Adding a product page


## General coding requirements

These are the listed mandatory technical requirements:

- Utilize **OOP principles** to handle differences in type logic/behavior
    - Procedural PHP code is allowed exclusively to initialize your PHP classes. Rest logic should be placed within class methods.
    - For OOP you would need to demonstrate code structuring in meaningful classes that extend each other, so we would like to see an abstract class for the main product logic. Please take a look at the polymorphism provision.
    - Also, MySQL logic should be handled by objects with properties instead of direct column values. Please use setters and getters for achieving this and don't forget to use them for both save and display logic.
- Meet PSR standards ([https://www.php-fig.org](https://www.php-fig.org/))
- Avoid using conditional statements for handling differences in product types
    - This means you should avoid any if-else and switch-case statements which are used to handle any difference between products.
- Do not use different endpoints for different products types. There should be 1 general endpoint for product saving
- PHP: ^7.0, plain classes, no frameworks, OOP approach
- jQuery: optional
- jQuery-UI: prohibited
- Bootstrap: optional
- SASS: advantage
- MySQL: ^5.6 obligatory
