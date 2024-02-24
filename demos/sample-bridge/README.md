## Sample Bridge

Sample bridge like splice poc

- Test driven development
- UML diagram & unit testing
- Full comments and documentation 
- Do type hinting and return type hinting
- Sidebar Debug would be nice
- [x] Retrieve sample object


 
Library: a class to handle all library data amd some basic methods for getting certain types of samplse making the list navigatable etc
Filehandler: all this does is searches a folder returns an array of  raw sample data and caches it for speed
Sample: This class is an actaul sample object that takes the library data (a lot of structured sample data)
Player: this will ulitmatley play the sample 


Interface: You could define an interface for any classes that have a common set of methods. For example, if you have different types of FileHandler classes (e.g., AudioFileHandler, VideoFileHandler), you could define a FileHandlerInterface with methods like searchFolder, returnData, cacheData.

Dependency Injection: You could use dependency injection to provide the FileHandler and Player instances to the Library class. This would make your Library class more flexible and easier to test.
 
Singleton Pattern: If the Player class represents a resource that should have exactly one instance (e.g., a single audio output device), you could use the Singleton pattern.

Composition: As you've described, the Library class could be composed of multiple Sample objects. This is a good example of the "composition over inheritance" principle.

 