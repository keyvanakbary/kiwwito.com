---
layout: post
title: "Construir un analizador léxico con JavaCC"
description: "Como crear un analizador léxico con JavaCC para un determinado lenguaje de programación"
locale: es
---

En la programación, un analizador léxico es la parte de un compilador o analizador (parser) que trata de descomponer el lenguaje proporcionado como entrada en tokens.

Un token es la unidad mínima con significado. Tokens habituales son los **identificadores**, **enteros**, **flotantes**, **constantes**, etc.

Para el desarrollo, utilizaremos una herramienta increíblemente útil, **JavaCC**. Mediante **expresiones regulares** podemos definir cómodamente los tokens de nuestro lenguaje.

### Sobre JavaCC:
JavaCC es una herramienta que generalmente se utiliza para generar analizadores léxicos y sintácticos (parsers) de una forma muy cómoda, actualmente se encuentra mantenida por Sun Microsystems y es muy robusta, eficiente y fiable. Puedes descargarla desde el <a href="http://javacc.java.net/">repositorio oficial</a> o mediante un <a href="http://eclipse-javacc.sourceforge.net/">plugin para Eclipse</a>.

### Caso práctico, construir analizador léxico para un determinado lenguaje de programación:
Las especificaciones de nuestro lenguaje son:

 <span style="text-decoration: underline;">**Tokens: **</span>
<ul>
<li>**Constantes**:
<ul>
<li>**Cadenas**: Caracteres entrecomillados, ejemplo: "cadena"</li>
<li>**Enteros**: Números positivos, ejemplo: 234 o 0</li>
<li>**Lógicas**: TRUE y FALSE</li>
</ul>
</li>
<li>**Identificadores**: Todos los identificadores son una secuencia de letras (a-zA-Z) y números que obligatoriamente deben comenzar con una letra (y no un número). **Los identificadores que se refieran a cadenas terminarán en "$"**.</li>
<li>**Palabras reservadas:** En el lenguaje hay palabras reservadas que darán vida al lenguaje, estas serán: "**not, if, end, let, call, then, case, else, input, print, select y static**".</li>
<li>Además el lenguaje será "**case insensitive**" o lo que es lo mismo, un identificador llamado "id" apuntará al mismo lugar que "Id", "iD" o "ID". **De igual forma será para las palabras reservadas**.</li>
</ul>
### Código JavaCC (exparser.jj):
{% highlight java %}
options {
  IGNORE_CASE = true;
}
PARSER_BEGIN(ExampleParser)

  public class ExampleParser {
    //Ejecución del analizador
    public static void main ( String args [ ] ) {

      //Inicialización del analizador
      ExampleParser parser;

      if(args.length == 0){
        System.out.println ("ExampleParser: Leyendo de la entrada estandar ...");
        parser = new ExampleParser(System.in);
      }
      else if(args.length == 1){
        System.out.println ("ExampleParser: Leyendo de fichero " + args[0] + " ..." );
        try {
          parser = new ExampleParser(new java.io.FileInputStream(args[0]));
        }
        catch(java.io.FileNotFoundException e) {
          System.out.println ("ExampleParser: El fichero " + args[0] + " no ha sido encontrado.");
          return;
        }
      }
      else {
        System.out.println ("ExampleParser:  Debes utilizarlo de una de las siguientes formas:");
        System.out.println ("         java ExampleParser < fichero");
        System.out.println ("Or");
        System.out.println ("         java ExampleParser fichero");
        return ;
      }
      try {
        compilador.Start();
        System.out.println ("ExampleParser: La entrada ha sido leida con éxito.");
      }
      catch(ParseException e){
        System.out.println ("ExampleParser: Ha ocurrido un error durante el análisis.");
        System.out.println (e.getMessage());
      }
      catch(TokenMgrError e){
        System.out.println ("ExampleParser: Ha ocurrido un error.");
        System.out.println (e.getMessage());
      }
    }
  }
PARSER_END(ExampleParser)

//ESTRUCTURAS Y CARACTERES DE ESCAPE
SKIP : {
 " "
|  "\t"
|  "\n"
|  "\r"
|  <"rem" (~["\n","\r"])* ("\n" | "\r" | "\r\n")>
}
//TOKENS ESTÁTICOS
TOKEN : {
 <INTEGER_CONSTANT: (<DIGIT>)+>
|  <LOGIC_CONSTANT: "true" | "false" | "-1">
|  <STRING_CONSTANT: "\"" ( ~["\"","\\","\n","\r"] | "\\" ( ["n","t","b","r","f","\\","\'","\""] | ( ["\n","\r"] | "\r\n")))* "\"">
|  <#DIGIT: ["0"-"9"]>
}
//PALABRAS RESERVADAS
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
//TOKEN IDENTIFICADOR
TOKEN : {
 <IDENTIFIER: <LETTER>(<LETTER>|<DIGIT>)*(["$"])?>
|  <#LETTER: (["a"-"z","A"-"Z"])>
}

//UNIDAD PRINCIPAL
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

Para compilar este fichero, se debe hacer con "**javacc**" y posteriormente con "**javac**":

{% highlight bash %}
$ javacc exparser.jj
$ javac *.java
{% endhighlight %}

Para ejecutar el programa:


    $ java ExampleParser fichero

Recuerda que este programa es un analizador léxico, no trata de comprobar las estructuras del lenguaje ni compilará el fichero en código binario. Puedes seguir desarrollando el código y acabar construyendo un compilador o un parser (analizador).
