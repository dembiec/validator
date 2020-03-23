# PHP / Validator

Tool was created for intuitive data validation.

## Installation

Use the git clone command to install the validator.

```bash
$ git clone https://github.com/dembiec/validator.git
```

## Usage

Using a validator and passing data for validation.

```php
<?php
use Validator\Validator;

$v = new Validator();
$v->make($foo)->require()->string();
$v->make($bar)->file()->extension(['jpg', 'pdf', 'png']);
```
Checking if an error occurred during validation.

```php
<?php

if ($v->existErrors()) {
    # code..
}
```

Showing errors or messages.

```php
<?php

$v->showErrors(); // returns error names array 

$v->errorMessages(); // returns error messages array
```

## Functions

| Function name | Accepted values | Description |
| ------------ | ------------ | ------------ |
| isChar() | string $var | The function takes a regular expression as a parameter and checks whether the given condition exists in the value passed. |
| lenChar() | int $var | The function accepts the number of characters parameter and checks whether the value has such a number of characters. |
| maxChar() | int $var | The function accepts the number of characters parameter and checks whether the value exceeds the maximum number of characters. |
| minChar() | int $var | The function accepts the number of characters parameter and checks whether the value exceeds the minimum number of characters. |
| dir() | - | The function checks if the given value is a directory. |
| extension() | mixed $var | The function accepts an array or value as a parameter and checks whether the value has the given extension. |
| file() | - | The function checks if the given value is a file. |
| maxSize() | int $var | The function accepts the maximum number of bytes as a parameter and checks whether the file exceeds it. |
| minSize() | int $var | The function accepts the minimum number of bytes as a parameter and checks whether the file exceeds it. |
| size() | int $var | The function takes the number of bytes as a parameter and checks whether the file has that number of bytes. |
| email() | - | The function checks if a given value is an email address. |
| ip() | - | The function checks if a given value is an ip address. |
| url() | - | The function checks if a given value is a URL. |
| checked() | - | The function checks if the box is checked. |
| confirm() | string $var | The function accepts the parameter and checks if the values are identical. |
| require() | - | The function checks if the value has been passed. |
| array() | - | The function checks if a given value is an array. |
| bool() | - | The function checks if a given value is a logical data type. |
| double() | - | The function checks if a given value is of the double type. |
| float() | - | The function checks if a given value is a floating point number. |
| int() | - | The function checks if a given value is an integer. |
| long() | - | The function checks if a given value is of the long type. |
| object() | - | The function checks if a given value is an object. |
| string() | - | The function checks if a given value is a string. |

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)