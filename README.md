# Object-Oriented Programming in PHP 📘

This repository contains materials and exercises for a course on Object-Oriented Programming (OOP) in PHP. The course covers several key concepts in OOP, including constructors, inheritance, and visibility.

Based in 4 pillars of OOP: Encapsulation, Abstraction, Inheritance and Polymorphism.

## Course Contents 📚

### Constructors 🏗️

In PHP, a constructor is a special "magic" method that is automatically called when an object is created. It's typically used to initialize the properties of the object. In this course, you'll learn how to define and use constructors in your PHP classes.

### Inheritance 🎁

Inheritance is a fundamental concept in OOP that allows you to define a new class based on an existing class. This allows you to reuse code and create more specialized classes based on general ones. This course will teach you how to use inheritance in PHP to create more efficient and organized code.

### Visibility 👁️

Visibility in PHP OOP refers to the accessibility of properties and methods in a class. There are three levels of visibility:

- Public: The property or method can be accessed from anywhere, both inside and outside of the class.
- Protected: The property or method can only be accessed from within the class itself or any classes that extend it.
- Private: The property or method can only be accessed from within the class itself.

In this course, you'll learn how to use these different levels of visibility to control access to your code.

### Encapsulation + Getters and Setters 📦

- Funcionality is all defined in one place
- Defined logically where data is kept
- Data inside the object cant be modified outside the object

### Abstraction 🎭

- To provide an interface that is simple as possible
- The process of hiding the complex implementation details and showing only the necessary features of the object.

---

### Properties Deep Dive 🏠

    - `::` Scope Resolution Operator

### Magic Methods 🎩

    - Like the `__toString` method is called when an object is used in a string context.
    - Getters and Setters can have property names passed to get around multiple method calls

### Abstract Classes 📜

    - An abstract class is a class that **cannot be instantiated on its own** and is typically used as a base class for other classes.

    - The abstract class provides properties and funciontality which is shared by all the classes that inherit from it.

### Abstract Methods 🖋️

        - Declared in an abstract class implementation is provided by the classes that inherit from the abstract class.

        - if class extends three dimensions shape aka abstract it must implement the abstract method `getVolume`
        - Good for:
            - You want to provide a common interface for different classes
            - You want to enforce certain methods to be implemented by the child class
            - You are designing a large functional unit by using the Template Method patter

### Interfaces 🤝

    - Default implementation of a method in an interface

### Polymorphism 🔄

    - Objects that can take on many forms
        - an instance of an object that can take more than one type is polymorphic
    - Injecting this single type is not as usefull `public function updateStockFromFile(string $path, CsvFileReader $fileReader): array`
    - Using `instanceof` we can check if the object is of a certain type

### Quiz 3: Knowledge check three 📝

---

### Namespaces 📚

- Allwow for better organization by goruping classes that work together
- Allow same name to be used for more than one class
- `namespace Database\Mysql;` declare a class withing a namespace
- `use namespace as ` when getting in to duplication of class names

### Autoloading 🔄

- Dont forget now in PHP you can define the **property itself with the scope in parameter**
- `public function __construct(public string $databaseUrl = 'mysql://localhost:3306/dbname')`
- Autoloading gets around a tone of requires and their ordering
- **spl** Standard PHP Library
- You can createe you own autoloader by mapping filenames into namespace
- this will the n reduce the level of code you have to write when you need a class
- **FQN** Fully Qualified Name
- You can ofcourse use other classes into your classes that have came from external sources

### Traits 🧩

- Add different functionaly to classes
- Imagine a logger function that we would like to share across classes.
- **You cant inherit from multiple parents in php**
- `use LoggeableTrait` this goes **inside the class**
- if the same method is defined in the class that one will take presidence

### Static Keyword, Static Methods and Late Static Binding 📌

- Calling of the class rather than the object `Attendee::doSomething`
- an be called directly on the class itself, **without needing to instantiate** an object of the class

- Late Static referes to the class being called not the mthod being defined
- You may want to call the object on parent class

### Error Handling With Exceptions ❗

- Expceptions are thrown
- Try Catch will help you handle these exception.
    - line
    - file
    - message
- When adding custom exceptions use `BadJsonException extends \Exception` so php will go looking in the namespace for it. 
- Call custom multiple exceptions in your catch.
- Exeptions can be grouped using `|` like a catch all catch (FileNotFoundException $e | BadJsonException $e )
- The `final` keyword can be used to handle stuff that needs to be done at the end. Closing db connection or unlinking a file thats open or something

### Quiz 4: Organizing Object Oriented Code 📝

### Composer - Install 3rd Party Packages 📦

### Installing MySQL on your computer 🛠️

### Introduction to PHP Data Objects (PDO) 📚

### PDO Practice 🎯

---

### Introduction to testing 🧪

    - VSCODE: PHPUnit for VSCode

### Introduction to PHPUnit 🧪

    - The PHPUnit testing framework is a great way to test your PHP code. It provides a simple and easy-to-use interface for writing and running tests, and it's widely used in the PHP community.
    - `$ composer require --dev phpunit/phpunit`
    - Naming tests is important
    - For assertsions we can extend the `PHPUnit\Framework\TestCase` class
    - Detecting Tests:
     - naming methods as `tests` or in will help php unit discover tests
     - `phpunit --testdox` will show the test names
     - DocBlock
     - To run a test `php vendor/bin/phpunit tests/ExampleAssertionsTest.php --colors`
     - `--filter the_cart_tax_value_can_be_changed_statically` to run a single test
        -

### Testing objects 🧪

    - Simply call your object and test the methods inside your test method
    1. phpunit.xml file can be used to configure the tests this goes in the root
    2. `<phpunit colors="true" bootstrap="vendor/autoload.php">` add colors and autoload classes
    3. Dont forget to configure in composer.json `"autoload": `
    4. `composer dump-autoload -o` to update the autoload file -optimized
    5. Then you can simply run `./vendor/bin/phpunit --verbose`
        - This sshoudl result in a cache file in the vendor folder
        - Disable cache  cacheResult="false" in the phpunit.xml file
    - A Single file:  `php vendor/bin/phpunit tests/CartTest.php` to see the test names
    - displayDetailsOnTestsThatTriggerDeprecations="true"
    - -debug --verbose

    ```
    <?xml version="1.0" encoding="UTF-8"?>
        <phpunit colors="true" bootstrap="vendor/autoload.php">
        <testsuites>
            <testsuite name="basic">
                <directory>tests</directory>
            </testsuite>
        </testsuites>
        </phpunit>
    ```

### Setup, tear down, and testing errors and exceptions 🧪

    - This can run on the wholeapp, folders or on a test by test basis
    - You can make setup dry by using hte setUp method
    - Dont forget arrangement is important. The order of your tests in case of implementing static for example.
    - We can levarage tearDown() method to reset everthing after each run
    - Testing exceptions:  `$this->expectException(TypeError::class);`
    - Use `composer require symfony/var-dumper --dev` to dump variables in a more readable way by Adam Wathan (tailwindcss creator) meanig you can just `dd(exception)`

### Test doubles and mocking objects 🧪

    - Mocking is creating objects that simulate the behavior of real objects sending emails or api requests.
    - ` /tests` for all in the folder
    - we can also group them for example in a group called db `/tests --group db` || even exclude ` --exclude-group db`

### Introduction to test driven development 🧪

    - Write the test first
    - And go about writing the code to pass the test
    - Be weary of 1 / true values in the test in assert equals. assertSame = identical
    - TDD will help you think more about the code and have you write only the code you need
    - Run your tests often and inmedediate "no class found" is it that stupid ? This could help detect errors early
    - Refactor tests first as you see fit like renaming methods etc.
    - in the example we have passed a user object

    - `phpunit --testdox` to see the test names
    - `composer require --dev phpunit/phpunit symfony/var-dumper`
    - `composer dump-autoload -o`

---

### Final Keyword 📚

### Cloning Objects 📚

### Serializing Objects 📚

### Anonymous Classes 📚

### Comparing Objects 📚

---

### Array Revision 📚

### ArrayAccess - Access objects like they are arrays 📚

### Iterator - Iterate over an object like it is an array 📚

### IteratorAggregate - Select a custom iterator to iterate over an object 📚

### ArrayObject - the all-in-one solution 📚

---

## Tips 📝

- Don't worry too much about configuration details. The focus of this course is on understanding and applying OOP concepts.
- Spend most of your time on the exercises. The best way to learn programming is by doing, so make sure to practice what you learn in the lessons.
- Use oop and uml together to understand the concepts better
- Sketchout in comments first before writing the code
- Use `composer require symfony/var-dumper --dev` to dump variables in a more readable way

More usefull ways: - `$this->fail('A TypeError was not thrown');` - `$this->assertStringStartsWith(`

## Revision

    - Closure functions
    - Abstract classes and methods
    - Uml diagrams
    - Dependency injection
    - VSCode PHPUnit Sidebar

PHP

OOP

Learning-PHP

PHP-Course

Constructors

Inheritance

Visibility

Encapsulation

Abstraction

Polymorphism

PHPUnit

PDO

Namespaces

Autoloading

Traits

Error-Handling

MySQL

Composer

Testing-PHP

Test-Driven-Development
