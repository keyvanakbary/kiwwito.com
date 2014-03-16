---
layout: post
title: "Build a lexical analyzer with JavaCC"
description: "How to create a lexical analyzer with JavaCC for a defined programming language"
locale: en
---

In programming, a lexical analyzer is the part of a compiler or a parser that break the input language into tokens.

A token is the minimal meaning component. Common tokens are **identifiers**, **integers**, **floats**, **constants**, etc.

For building it, we are going to use an incredible useful tool, **JavaCC**. With simple **regular expressions** we can define our language tokens.

### About JavaCC:
JavaCC is a tool usually used for parsers and is actually maintained by Sun Microsystems. Is very simple, efficient and safe. You can freely download it from the <a href="http://javacc.java.net/">official website</a> or like a <a href="http://eclipse-javacc.sourceforge.net/">Eclipse plugin</a>.

### Practical case, build a lexical analyzer for a determined defined language:
Our language specifications are:
<span style="text-decoration: underline;">**Tokens: **</span>
<ul>
<li>**Constants**:
<ul>
<li>**Strings**: Characters between quotes, example: "cadena"</li>
<li>**Integers**: Positive numbers, example: 234 o 0</li>
<li>**Logicals**: TRUE and FALSE</li>
</ul>
</li>
<li>**Identifiers**: All the identifiers are a sequence of letters (a-zA-Z) and numbers that must start with a letter (and not a number). The **identifiers that refers to strings must end with a dollar** ($).</li>
<li>**Reserved words**: In the language are some reserved words that refers to programming structures that brings to life the language. Those are "**not, if, end, let, call, then, case, else, input, print, select, and static**".</li>
<li>Also, the language is **case insensitive**, that is, an identifier named "id" refers to the same point that another called "Id", "iD" or "ID". The same methodology for reserved words.</li>
</ul>
### JavaCC code (exparser.jj):
{% highlight java %}
options {
  IGNORE_CASE = true;
}
PARSER_BEGIN(ExampleParser)

  public class ExampleParser {
    //Parser execution
    public static void main ( String args [ ] ) {

      //Parser initialization
      ExampleParser parser;

      if(args.length == 0){
        System.out.println ("ExampleParser: Reading input ...");
        parser = new ExampleParser(System.in);
      }
      else if(args.length == 1){
        System.out.println ("ExampleParser: Reading the file " + args[0] + " ..." );
        try {
          parser = new ExampleParser(new java.io.FileInputStream(args[0]));
        }
        catch(java.io.FileNotFoundException e) {
          System.out.println ("ExampleParser: The file " + args[0] + " was not found.");
          return;
        }
      }
      else {
        System.out.println ("ExampleParser:  You must use one of the following:");
        System.out.println ("         java ExampleParser < file");
        System.out.println ("Or");
        System.out.println ("         java ExampleParser file");
        return ;
      }
      try {
        compilador.Start();
        System.out.println ("ExampleParser: The input was readed sucessfully.");
      }
      catch(ParseException e){
        System.out.println ("ExampleParser: There was an error during the parse.");
        System.out.println (e.getMessage());
      }
      catch(TokenMgrError e){
        System.out.println ("ExampleParser: There was an error.");
        System.out.println (e.getMessage());
      }
    }
  }
PARSER_END(ExampleParser)

//STRUCTURES AND CHARACTERS TO SCAPE
SKIP : {
 " "
|  "\t"
|  "\n"
|  "\r"
|  <"rem" (~["\n","\r"])* ("\n" | "\r" | "\r\n")>
}
//STATIC TOKENS
TOKEN : {
 <INTEGER_CONSTANT: (<DIGIT>)+>
|  <LOGIC_CONSTANT: "true" | "false" | "-1">
|  <STRING_CONSTANT: "\"" ( ~["\"","\\","\n","\r"] | "\\" ( ["n","t","b","r","f","\\","\'","\""] | ( ["\n","\r"] | "\r\n")))* "\"">
|  <#DIGIT: ["0"-"9"]>
}
//RESERVED WORDS
TOKEN : {
 <NOT: "not">
|  <IF: "if">
|  <END: "end">
|  <SUB: "sub">
|  <LET: "let">
|  <CALL: "call">
|  <THEN: "then">
|  <CASE: "case">
|  <ELSE: "else">
|  <INPUT: "input">
|  <PRINT: "print">
|  <SELECT: "select">
|  <STATIC: "static">
}
//IDENTIFIER TOKEN
TOKEN : {
 <IDENTIFIER: <LETTER>(<LETTER>|<DIGIT>)*(["$"])?>
|  <#LETTER: (["a"-"z","A"-"Z"])>
}

//MAIN UNIT
void Start () : {}
{
  (
    INTEGER_CONSTANT | STRING_CONSTANT | LOGIC_CONSTANT |
    NOT | IF | END | SUB | LET | CALL | THEN | CASE | ELSE | INPUT | PRINT | SELECT | STATIC |
    IDENTIFIER
  )*
  <EOF>
}
{% endhighlight %}

For compiling this file you have to use "**javacc**" and after "**javac**":

{% highlight bash %}
$ javacc exparser.jj
$ javac *.java
{% endhighlight %}

For executing the program:


    $ java ExampleParser file

Remember that the previous code is for the lexical analyzer, it not try to check the programming structures or compiling it to binary code, it only break the input into tokens. However, you can follow the development and make a compiler or a parser.