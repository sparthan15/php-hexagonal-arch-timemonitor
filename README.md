# Time Monitor app

This is an lightweight application that allow to manage time, when people start to work and when people leave.
It structured with an Hexagonal Architecture, allowing test every layer independently

## Installation

Domain and application layer need [PHPUnit 9.5](https://phpunit.readthedocs.io/en/9.5/), so you need to install de dependencies for every layer, go into every layer folder 

```bash
composer install
```

## Running test
Hexagonal Architecture allow to test every layer independetly, so that to test each layer you need to run code below into the root folder
```
 .\domain\vendor\bin\phpunit domain/test --testdox
```
```
 .\application\vendor\bin\phpunit domain/test --testdox
```
## Author
Charlie Gamboa Hernandez

## License
[MIT](https://choosealicense.com/licenses/mit/)