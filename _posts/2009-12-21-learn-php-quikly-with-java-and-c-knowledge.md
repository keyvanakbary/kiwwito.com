---
layout: post
title: "Learn PHP quikly with Java and C knowledge "
description: "If you alredy know about C and Java, learning PHP can be too easy"
redirect_from: /article/learn-php-quikly-with-java-and-c-knowledge/
locale: en
---

PHP Object Oriented is like than Java and procedimental form like C.  The previous knoledge of one of those can save a lot of PHP learning time.
### PHP OO is like Java:
**In Java:**

{% highlight java %}
//Abstract class
abstract MyAbstractClass {
  abstract public int myAbstractMethod ();
  abstract protected int myAbstractMethod2 ();

  /**
  * Class constructor
  */
  public MyAbstractClass (int number) {}
  /**
  * Static Method
  */
  public static void myStaticMethod () {}
  /**
  * Normal method
  */
  public void myMethod () {}
}

//Interface
interface MyInterface {
  abstract private int myInterfaceMethod();
}

//Class with inheritance and interface implementation
class MyClassWithInheritanceAndInterface extends MyAbstractClass implements MyInterface {
  public int myAbstractMethod () {}
  protected int myAbstractMethod2 () {}
  private int MyInterfaceMethod () {}

  public MyClassWithInheritanceAndInterface () {
    //Call to parent contructor
    super();
    //Call to a static method
    MyAbstractClass.myStaticMethod();
    //Call to a parent method
    this.myMethod();
    //Also super.myMethod()
  }
}
{% endhighlight %}

**In**** PHP:**

{% highlight php startinline %}
//Abstract class
abstract MyAbstractClass {
  abstract public function myAbstractMethod ();
  abstract protected function myAbstractMethod2 ();

  /**
  * Class constructor
  */
  public __construct ($number) {}
  /**
  * Static Method
  */
  public static function myStaticMethod () {}
  /**
  * Normal method
  */
  public function myMethod () {}
}

//Interface
interface MyInterface {
  abstract private function myInterfaceMethod();
}

//Class with inheritance and interface implementation
class MyClassWithInheritanceAndInterface extends MyAbstractClass implements MyInterface {
  public int myAbstractMethod () {}
  protected int myAbstractMethod2 () {}
  private int MyInterfaceMethod () {}

  public __construct () {
    //Call to parent contructor
    parent::__construct();
    //Call to a static method
    MyAbstractClass::myStaticMethod();
    //Call to a parent method
    this->myMethod();
    //Also parent::myMethod() or self::miMethod()
  }
}
{% endhighlight %}

### Procedural programming very similar to C:
PHP procedural programming is slightly different from C. A hello world example in C is like:

{% highlight c %}
//Files/libraries inclusion
#include <stdio.h>

//Main function
int main (int argc,char **argv)
{
   printf("Hello world\n");
   return 0;
}
{% endhighlight %}

**in PHP:**

{% highlight php startinline %}
//Main function
function main () {
  echo "Hello world\n";
  return 0;
}
//Main execution
main();

{% endhighlight %}

### Main differences:
<ul>
<li>In PHP all vars are prefixed with the '$' dollar character</li>
<li>PHP is a very low or simply not typed, is not neccesary var typing</li>
<li>In PHP the constructor method must be called "**__construct**"</li>
<li>In PHP all methods and procedures must have in it's definition the "**function**" reserved word</li>
<li>In PHP the method access (from OO) will be provided by the "->" operator</li>
<li>In PHP the access for the parent method is provided by "parent::" or "$this->"</li>
<li>In PHP all static methods must be accessed by the "**::**" operator.</li>
<li>In PHP files/libraries inclusions are maded by "include" or "require" functions</li>
<li>There are no auto-executable functions in PHP (like Java or C "main" style), you must call them explicitly</li>
</ul>