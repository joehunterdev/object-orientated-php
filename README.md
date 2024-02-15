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

### Autoloading 🔄

### Traits 🧩

### Static Keyword, Static Methods and Late Static Binding 📌

### Error Handling With Exceptions ❗

### Quiz 4: Organizing Object Oriented Code 📝

### Composer - Install 3rd Party Packages 📦

### Installing MySQL on your computer 🛠️

### Introduction to PHP Data Objects (PDO) 📚

### PDO Practice 🎯
 
---

### Introduction to testing 🧪

### Introduction to PHPUnit 🧪

### Testing objects 🧪

### Setup, tear down, and testing errors and exceptions 🧪

### Test doubles and mocking objects 🧪

### Introduction to test driven development 🧪

### Test driven development part 2 🧪

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

## Revision
    - Closure functions
    - Abstract classes and methods
    - Uml diagrams
    - Dependency injection

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
