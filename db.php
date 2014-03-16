<?php

return array(
  array('id'=>'9','title_es'=>'Php memoria agotada','title_en'=>'Php memory exhausted','slug_es'=>'php-memoria-agotada','slug_en'=>'php-memory-exhausted','description_es'=>'Que significa éste habitual error y como resolverlo','description_en'=>'What is the meaning of this error and how to solve it','content_es'=>'&lt;h3&gt;Problema&lt;/h3&gt;
Si alguna vez, al ejecutar un script php te lanza un error fatal con un mensaje parecido a &quot;&lt;strong&gt;Fatal error: allowed memory size of X bytes exhausted&lt;/strong&gt;”, no te preocupes, la causa y solución son muy sencillas. Éste error salta cuando tratas de utilizar más memoria que la configurada como máxima posible en los archivos de configuración.&lt;br /&gt;
&lt;h3&gt;Solución&lt;/h3&gt;
Para remediarlo puedes editar el php.ini del cliente con el que te de problemas (CLI o CGI) y buscar la variable &quot;&lt;strong&gt;memory_limit&lt;/strong&gt;&quot; y asignarle mayor tamaño o también puedes ejecutar por consola (CLI) el script php que desees y modificar en tiempo de ejecución la variable del ini a tus necesidades:
&lt;pre class=&quot;bash&quot;&gt;$ php -d memory_limit=512M script.php&lt;/pre&gt;','content_en'=>'&lt;h3&gt;Problem&lt;/h3&gt;
If at any time, when you try to launch a php script it raises a fatal error with a message like &quot;&lt;strong&gt;Fatal error: allowed memory size of X bytes exhausted&lt;/strong&gt;&quot;, don\'t worry, the cause and solution are easy.&lt;br /&gt;This error raises when you try to allocate more memory than it was configured in the configuration files.&lt;br /&gt;
&lt;h3&gt;Solution&lt;/h3&gt;
In order to solve it, you can edit the php.ini client-side file (CLI or CGI) and search and increase the &quot;&lt;strong&gt;memory_limit&lt;/strong&gt;&quot; var or you can also modify it\'s value in real time throught the command line with the &quot;-d&quot; flag. Something like: &quot;php -d memory_limit=512M script.php&quot;&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-10-26 18:39:48','updated_at'=>'2013-08-24 18:08:45','visits'=>'1634','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-10-05','is_published'=>'1','updated_note'=>''),
  array('id'=>'10','title_es'=>'Lanzamiento kiwwito.com','title_en'=>'Kiwwito.com launched!','slug_es'=>'lanzamiento-kiwwito-com','slug_en'=>'kiwwito-com-launched','description_es'=>'Despues de dos meses de arduo trabajo... ¡Por fín!','description_en'=>'After few months of hard work... Finally launched!','content_es'=>'Hoy por fin, y después de un largo desarrollo (dos mesecitos) lanzo a producción la nueva y totalmente rediseñada versión de kiwwito.com que aparte de incorporar nuevas secciones como &quot;portafolio&quot; y &quot;proyectos&quot; añade nuevas mejoras como la aceleración de respuesta del servidor gracias a la capa de caché dinámica de la web.&lt;br /&gt;','content_en'=>'Today after few months finally I have launched in production the new and totally redesigned version of kiwwito.com. It integrates new sections like &quot;portfolio&quot; and &quot;proyects&quot; and new functionalities like cache acceleration server response layer.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-11-04 10:53:47','updated_at'=>'2013-08-24 02:44:56','visits'=>'727','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-10-04','is_published'=>'1','updated_note'=>''),
  array('id'=>'11','title_es'=>'Desactivar corrección automática en eclipse','title_en'=>'Disable spell checking in eclipse','slug_es'=>'desactivar-correccion-automatica-en-eclipse','slug_en'=>'disable-spell-checking-in-eclipse','description_es'=>'Como desactivar la corrección automática de texto en Eclipse','description_en'=>'How to disable text spell checking in Eclipse','content_es'=>'En una nueva instalación de Eclipse IDE viene habilitada por defecto la corrección del idioma en los comentarios que intercalamos en el código fuente (habitualmente Java). Normalmente, aparte de ralentizar nuestra escritura suele incomodar porque utilizamos vocablos específicos o directamente porque no hay ningún paquete de nuestro idioma instalado.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Para desactivar la corrección de idioma:&lt;/strong&gt;&lt;br /&gt;Window-&amp;gt;Preferences :: General-&amp;gt;Editor-&amp;gt;Text Editors-&amp;gt;Spelling&lt;br /&gt;Ahora desactiva la casilla de &quot;Enable spell checking&quot;','content_en'=>'In a new instalation of Eclipse IDE, the spell checking in the comments that we insert into our code (normally Java) its enabled by default. This slows down the writing and usually bothers because we use specific words or we have not installed our language package.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;For disabling spell checking:&lt;/strong&gt;&lt;br /&gt;Window-&amp;gt;Preferences :: General-&amp;gt;Editor-&amp;gt;Text Editors-&amp;gt;Spelling&lt;br /&gt;Now, uncheck the box &quot;Enable spell checking&quot;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-11-09 18:13:25','updated_at'=>'2013-08-24 19:16:45','visits'=>'17320','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-11-09','is_published'=>'1','updated_note'=>''),
  array('id'=>'12','title_es'=>'Restaurar GRUB','title_en'=>'Restore GRUB','slug_es'=>'restaurar-grub','slug_en'=>'restore-grub','description_es'=>'Como restaurar GRUB de una forma sencilla y cómoda','description_en'=>'How to restore GRUB without problems','content_es'=>'&lt;h3&gt;Primer paso, grabar la ISO de Super Grub Disk&lt;/h3&gt;
Es necesario utilizar la consola para restaurar Grub, una buena opción es descargar un cargador de arranque automático  en cd que si nos reconozca nuestra instalación de linux. Descargamos la ISO y la grabamos en un CD virgen.&lt;br /&gt;&lt;a href=&quot;http://www.supergrubdisk.org/index.php?pid=5&quot; target=&quot;_blank&quot;&gt;Descargar imagen cd-rom Super Grub Disk&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;
&lt;h3&gt;Iniciar linux con Super Grub Disk&lt;/h3&gt;
Introducimos el cd y lo seleccionamos como opción de arranque en el boot del sistema. Cuando se arranque Super Grub Disk (en el arranque), seleccionamos &lt;strong&gt;GNU/Linux&lt;/strong&gt;, asi iniciará nuestra distribución como antes.&lt;br /&gt;&lt;br /&gt;
&lt;h3&gt;Restaurando Grub&lt;/h3&gt;
Una vez dentro de linux, ejecutamos en la consola como administrador grub:
&lt;pre class=&quot;bash&quot;&gt;grub&lt;/pre&gt;
Dentro del Grub, buscamos en que partición se encuentra:
&lt;pre class=&quot;bash&quot;&gt;grub&amp;gt; find /boot/grub/stage2&lt;/pre&gt;
Con los datos que nos hayan salido hdx,y (por ejemplo: (hd0,4)) instalamos grub:
&lt;pre class=&quot;bash&quot;&gt;grub&amp;gt; root (hdx,y)
grub&amp;gt; setup (hdx)&lt;/pre&gt;
Salimos de Grub y la próxima vez que reiniciemos lo tendremos instalado&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;grub&amp;gt; quit&lt;/pre&gt;','content_en'=>'&lt;h3&gt;First step, burn into a CD the Super Grub Disk ISO&lt;/h3&gt;
It\'s necessary use the command line for restoring Grub, a good option is download a automatic boot loader that can recognize our linux installation. After downloading the iso, we have to burn it into a CD:&lt;br /&gt;&lt;a href=&quot;http://www.supergrubdisk.org/index.php?pid=5&quot; target=&quot;_blank&quot;&gt;Download Super Grub Disk ISO cd-rom image&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;
&lt;h3&gt;Init linux with Super Grub Disk&lt;/h3&gt;
Insert the burned cd and select it like an option in the boot. When Super Grub Disk starts (in the boot) select &lt;strong&gt;GNU/Linux&lt;/strong&gt;, now it will launch our linux distro.&lt;br /&gt;&lt;br /&gt;
&lt;h3&gt;Restoring Grub&lt;/h3&gt;
Once you enter linux, execute into the command line and with root privileges:
&lt;pre class=&quot;bash&quot;&gt;grub&lt;/pre&gt;
In the Grub, we search where is it real location:
&lt;pre class=&quot;bash&quot;&gt;grub&amp;gt; find /boot/grub/stage2&lt;/pre&gt;
With the info hdx,y displayed (for example: (hd0,4)) we are going to install Grub:
&lt;pre class=&quot;bash&quot;&gt;grub&amp;gt; root (hdx,y)
grub&amp;gt; setup (hdx)&lt;/pre&gt;
Exit Grub, the next time you reboot your system, it will be installed.&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;grub&amp;gt; quit&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-11-09 19:00:25','updated_at'=>'2013-08-24 18:43:15','visits'=>'1251','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-11-11','is_published'=>'1','updated_note'=>''),
  array('id'=>'13','title_es'=>'Lorem ipsum','title_en'=>'Lorem ipsum','slug_es'=>'lorem-ipsum','slug_en'=>'lorem-ipsum','description_es'=>'¿Que es el lorem ipsum?','description_en'=>'What is Lorem Ipsum?','content_es'=>'&lt;a href=&quot;http://getlorem.com/&quot;&gt;&lt;strong&gt;Lorem ipsum&lt;/strong&gt;&lt;/a&gt; es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. Es el texto mas usado como relleno de prototipos.&lt;br /&gt;&lt;br /&gt;Al estar escrito en un lenguaje clásico (el más usado está derivado del latín clásico) suele despertar curiosidad saber qué significa. Sin embargo el significado del texto no tiene importancia debido a que si un texto es legible, los usuarios suelen centrarse en lo que dice el texto y no en el diseño, que es el objetivo en este caso.&lt;br /&gt;&lt;br /&gt;La principal cualidad de éste texto es que facilita unas condiciones  idoneas como texto de relleno, posee una distribución de letras similar al inglés y además el uso de otro idioma (latín) obliga al lector a centrarse en el diseño, el contenido del texto no es importante.&lt;br /&gt;
&lt;h3&gt;Getlorem.com&lt;/h3&gt;
Aunque hay múltiples generadores de textos, el más agradable, intuitivo, funcional y rápido es &lt;a href=&quot;http://getlorem.com/&quot; target=&quot;_blank&quot;&gt;Getlorem&lt;/a&gt;. Entre otros, permite generar imágenes y PDF\'s (además del habitual texto). Además está internacionalizado a múltiples idiomas como el inglés, frances, alemán y muchos más.&lt;br /&gt;','content_en'=>'In publishing and graphic design, &lt;a href=&quot;http://getlorem.com/&quot;&gt;&lt;strong&gt;lorem ipsum&lt;/strong&gt;&lt;/a&gt; is the name given to commonly used placeholder text (filler text) to demonstrate the graphic elements of a document or visual presentation, such as font, typography, and layout. The lorem ipsum text, which is typically a nonsensical list of semi-Latin words, is a hacked version of a Latin text by Cicero, with words/letters omitted and others inserted, but not proper Latin.&lt;br /&gt;&lt;br /&gt;As nonsense (not actual Latin), the text is not italicized. The text often begins as, &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit&quot;.&lt;br /&gt;&lt;br /&gt;Even though using &quot;lorem ipsum&quot; often arouses curiosity because of its resemblance to classical Latin, it is not intended to have meaning. Where text is visible in a document, people tend to focus on the textual content rather than upon overall presentation, so publishers use lorem ipsum when displaying a typeface or design elements and page layout in order to direct the focus to the publication style and not the meaning of the text.&lt;br /&gt;
&lt;h3&gt;Getlorem.com&lt;/h3&gt;
There are multiple text generators but the most beautiful, intuitive, funcional and fast is &lt;a href=&quot;http://getlorem.com/&quot; target=&quot;_blank&quot;&gt;Getlorem&lt;/a&gt;. Under multiple options you can generate images and PDF\'s (also dummy text). The site is internationalized into a lot of languages like spanish, french, german and much more.&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>'5bbaa5b51a71507442560505668be38894e979ff.jpg','created_at'=>'2009-11-15 17:37:33','updated_at'=>'2013-08-24 02:07:22','visits'=>'1189','via_url'=>'','download_url'=>'','url'=>'http://getlorem.com/','info_url'=>'','published_at'=>'2009-11-15','is_published'=>'1','updated_note'=>''),
  array('id'=>'14','title_es'=>'Hamachi, partidas no visibles en red local','title_en'=>'Hamachi, invisible games in games with LAN','slug_es'=>'hamachi-partidas-no-visibles-en-red-local','slug_en'=>'hamachi-invisible-games-in-games-with-lan','description_es'=>'Como solucionar el problema de partidas invisibles con Hamachi','description_en'=>'How to solve the invisible LAN games problems with Hamachi','content_es'=>'Windows prioriza el acceso a las recursos de red, esto es, &lt;strong&gt;si hamachi no tiene la prioridad suficiente para acceder a la red, no será capaz de sincronizar con el resto de integrantes de tu red virtual&lt;/strong&gt; en hamachi y ello provocará que, aunque paradógicamente puedas ver, realizar ping, examinar e incluso chatear con tus compañeros, no puedas ver las partidas que se creen en red local o las que tu mismo crees no sean accesibles por el resto de miembros. Incrementar la prioridad de hamachi respecto a los recursos de red es muy sencillo. &lt;br /&gt;&lt;br /&gt;Accedemos desde el &quot;&lt;strong&gt;Panel de control&lt;/strong&gt;&quot; a &quot;&lt;strong&gt;Conexiones de red&lt;/strong&gt;&quot; y  una vez dentro, elegimos del menu superior, la opcion de &quot;&lt;strong&gt;Opciones avanzadas&lt;/strong&gt;&quot; y seguidamente &quot;&lt;strong&gt;Configuración avanzada&lt;/strong&gt;&quot;:&lt;img src=&quot;/uploads/images/full/eb78d3a6988a59f4fb4d7b1fc3333a1bec0b2824.jpg&quot; alt=&quot;&quot; /&gt; Ahora simplemente selecciona de la lista que aparece a &quot;&lt;strong&gt;Hamachi&lt;/strong&gt;&quot; y sube a éste en la lista mediante el boton de la derecha con el dibujo de flecha hacia arriba. Probablemente tengas que reiniciar para asegurar los cambios. &lt;img src=&quot;/uploads/images/full/e2e1a906387fbe36193baf2c29371805d812de41.jpg&quot; alt=&quot;&quot; /&gt;','content_en'=>'Windows priority access to network resources, that is, &lt;strong&gt;if hamachi hasn\'t a sufficient priority to access the network, it will not be able to synchronize with other members of your virtual network&lt;/strong&gt; in hamachi paradoxically you can see, ping, monitor and even chat with your mates, but you can not see the items that are created in local network. Increasing the priority of hamachi on network resources is very simple.&lt;br /&gt;&lt;br /&gt;Access from &quot;&lt;strong&gt;Control panel&lt;/strong&gt;&quot; to &quot;&lt;strong&gt;Network connections&lt;/strong&gt;&quot; and once inside, we choose the top menu, the option of &quot;&lt;strong&gt;Advanced settings&lt;/strong&gt;&quot;  and then &quot;&lt;strong&gt;Advanced configuration&lt;/strong&gt;&quot;:&lt;img src=&quot;/uploads/images/full/eb78d3a6988a59f4fb4d7b1fc3333a1bec0b2824.jpg&quot; alt=&quot;&quot; /&gt;Now just select from the list on &quot;&lt;strong&gt;Hamachi&lt;/strong&gt;&quot; and rise up to the list using the button to the right with the drawing up arrow. You may need to reboot to ensure the changes:&lt;img src=&quot;/uploads/images/full/e2e1a906387fbe36193baf2c29371805d812de41.jpg&quot; alt=&quot;&quot; /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-11-18 23:35:14','updated_at'=>'2013-08-23 11:50:33','visits'=>'1969','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-11-18','is_published'=>'1','updated_note'=>''),
  array('id'=>'15','title_es'=>'Estafa en la reventa de dominios','title_en'=>'Fraud in domains selling','slug_es'=>'estafa-en-la-reventa-de-dominios','slug_en'=>'fraud-in-domains-selling','description_es'=>'Cuando pongas en venta tu domininio, es posible que intenten estafarte','description_en'=>'When you decide sell your domain, is possible that someone try to cheat yourself','content_es'=>'Cuando uno tiene dominios inactivos, es posible que considere la opción de venderlos o ponerlos en parking, es algo habitual. Cuando se pone en venta un dominio, esta nueva condidición es publicada o bien en la web donde hayas decidido buscar nuevos compradores o en webs de terceros afiliadas a ésta última. Esto es para atraer el máximo número de compradores hacia tu dominio (Las webs que te ayudan a vender tu dominio se llevan una comisión, de ahí su interés). Hasta aquí todo normal. De lo que no estamos tan habituados es de que es posible que alguien intente estafarnos en la venta de nuestro dominio.&lt;br /&gt;
&lt;h3&gt;En que consiste la estafa&lt;/h3&gt;
&lt;strong&gt;Alguien contacta contigo&lt;/strong&gt; vía email (fuera de la jurisdicción de la página web donde decidiste publicar la nueva condición de venta de tu dominio) y se muestra muy interesado por tu dominio, el primer paso es pedirte una estimación del valor de tu dominio, &lt;strong&gt;¿Por cuanto estás dispuesto a vender tu dominio?&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;Una vez comunicas el precio por el cual estás dispuesto a ceder tu dominio, &lt;strong&gt;el posible comprador se muestra interesado&lt;/strong&gt; (es decir, dispuesto a comprartelo por el precio que has remitido). Pero, &lt;strong&gt;te pide un certificado de valoración de tu dominio&lt;/strong&gt; justificandose como que no quiere arriesgarse y que quiere comprar sobre seguro,  puede parecer normal, dado que hay empresas completamente légitimas que se encargan de estimar el valor de tu dominio para orientar a vendedor y comprador, pero no nos dejemos engañar, el posible comprador a través de enlaces a foros y blogs &lt;strong&gt;intentará inducirte a solicitar el certificado de una empresa en concreto&lt;/strong&gt;, solo le valdrá un certificado de valoración de la empresa a la cual el siempre remite.&lt;br /&gt;&lt;br /&gt;El problema y la estafa es que &lt;strong&gt;dicho certificado no es gratuito&lt;/strong&gt; y tiene un coste, puede variar desde los 14 a los 200 dolares. Cuando te gastes el dinero en el certificado y lo remitas al posible comprador, &lt;strong&gt;éste desaparecerá&lt;/strong&gt;, aportando un beneficio del 100% para la empresa encargada de suministrar certificados.','content_en'=>'When you have nonactive domains, is possible that you consider the option of sale or park it, is it normal. When a domain come for sale, the notice will be posted in the web which you used to sale it or in third party affiliated webs. This is for maximize the probability of sailing the domain (this helps you and also report a benefit to the web where you publish the notice of sale). At here, all good, the problem comes when somebody try to cheat yourself.&lt;br /&gt;
&lt;h3&gt;The fraud is&lt;/h3&gt;
Someone contacts with you via email (out of the jurisdiction of the website where you decided to publish the notice of sale) the buyer shows interest in the domain, the first step is asking you. &lt;strong&gt;How much it cost?&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;In the next step &lt;strong&gt;the possible buyer accept your prize&lt;/strong&gt;, but with one previous condition, &lt;strong&gt;the domain must be certified&lt;/strong&gt;. What does it mean? Easy, there are many legal companies that offers domain evaluation in order to guide the seller and the buyer. In our case is slightly different from the legal, the buyer insists in one of those. It justify with &lt;strong&gt;links to false forums or blogs&lt;/strong&gt;.&lt;br /&gt;&lt;br /&gt;The problem comes when you finally accept to bring him a certify, &lt;strong&gt;it have a cost&lt;/strong&gt;. The prize start from 14 to 200 dollars. When at the end you acquire it and resend to &lt;strong&gt;the possible buyer he will disappear&lt;/strong&gt;, producing a 100% benefit to the illegal certify business or a direct benefit to the fraudulent buyer.&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-11-28 14:44:05','updated_at'=>'2013-08-21 07:11:25','visits'=>'1039','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-11-28','is_published'=>'1','updated_note'=>''),
  array('id'=>'16','title_es'=>'Poner imagen a GRUB','title_en'=>'Add GRUB splash image','slug_es'=>'poner-imagen-a-grub','slug_en'=>'add-grub-splash-image','description_es'=>'Para mejorar la experiencia de usuario, nada mejor que poner una imágen personalizada','description_en'=>'To increase user experience, nothing better than add a grub splash image','content_es'=>'Cambiar o poner una imágen a GRUB es casi trivial. Para ello necesitamos dos herramientas instaladas en nuestro entorno linux:&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Convert:&lt;/strong&gt; Herramienta para conversion de imágenes a diferentes formatos, tamaños, etc.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Startupmanager:&lt;/strong&gt; Gestión gráfica de opciones de configuración GRUB.&lt;br /&gt;
&lt;h3&gt;Elige la imágen&lt;/h3&gt;
Busca la imágen que desees para poner de fondo en GRUB. No es necesario que tenga un formato específico o que tenga un determinado tamaño o profundiad de color.&lt;br /&gt;
&lt;h3&gt;Convierte la imágen a un formato compatible con GRUB&lt;/h3&gt;
Las imágenes que pueden aparecer en GRUB deben tener un formato, tamaño y profundidad de color específicos. Para transformar la imágen a una compatible, ejecuta el siguiente comando sobre la imágen que hayas elegido:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;convert imagen.jpg -resize 640x480! -colors 14 -depth 8 imagen.xpm.gz&lt;/pre&gt;
&lt;h3&gt;Configuramos GRUB con nueva imágen&lt;/h3&gt;
Una vez que tengamos la imágen preparada, debemos establecerla como imágen de fondo para GRUB mediante el programa de configuración de GRUB startupmanager.','content_en'=>'Changing or setting an image to GRUB is trivial. For it we need install two tools of our linux environment:&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Convert: &lt;/strong&gt;Useful tool for image process (format, size, etc.).&lt;br /&gt; &lt;br /&gt; &lt;strong&gt;Startupmanager:&lt;/strong&gt; Graphical Grub manager.&lt;br /&gt;
&lt;h3&gt;Selecting the image&lt;/h3&gt;
Look for the image that you want to be the GRUB background. Is not necessary search for a specific format, size or color deep.&lt;br /&gt;
&lt;h3&gt;Convert the image into a new GRUB compatible one&lt;/h3&gt;
The images that can be GRUB backgrounds must have a concrete format, size and color deep. For transforming the image to a new compatible one, you can use the convert tool as:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;convert image.jpg -resize 640x480! -colors 14 -depth 8 image.xpm.gz&lt;/pre&gt;
&lt;h3&gt;Configure GRUB with the new image&lt;/h3&gt;
Once we have the compatible image, we have to set it as the default GRUB background with startupmanager.&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-11-28 18:53:10','updated_at'=>'2013-08-24 05:22:23','visits'=>'1367','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-11-28','is_published'=>'1','updated_note'=>''),
  array('id'=>'17','title_es'=>'Interceptar tráfico de red con dsniff','title_en'=>'Intercepting net traffic with dsniff','slug_es'=>'interceptar-trafico-de-red-con-dsniff','slug_en'=>'intercepting-net-traffic-with-dsniff','description_es'=>'Mediante el uso de algunas herramientas, podemos interceptar el tráfico de nuestra red local mediante unos sencillos pasos','description_en'=>'Using some tools we can intercept data in our local network following simple steps','content_es'=>'&lt;h3&gt;Un poco de teoría&lt;/h3&gt;
La tabla ARP de nuestro computador funciona a modo de caché para acceder de forma rápida a direcciones IP que visitemos con frecuencia, normalmente el router será la única entrada cacheada que tengamos en dicha tabla dado que es este el que encamina nuestros paquetes IP hacia internet (hacia afuera).&lt;br /&gt;El router se auto-descubre en nuestra red con una señal que provoca que todos los equipos que pertenezcan a dicha red agregen de forma automática una entrada en su cache ARP para acceder así a internet.&lt;br /&gt;La peligrosidad de esta accion por defecto es que cualquier equipo puede hacerse pasar por router, esto es, convertirse en el que encamine nuestros paquetes IP de la red a la que pertenezca. Un router obviamente no analizará los paquetes IP pero un computador malicioso podría desencapsular los diferentes niveles de IP y extraer información no autorizada.
&lt;h3&gt;Que debemos saber&lt;/h3&gt;
&lt;strong&gt;Dirección ip del router:&lt;/strong&gt; La dirección IP del router en la red local al que estamos conectados nosotros y la víctima (router que encamina habitualmente hacia internet).&lt;br /&gt;&lt;strong&gt;Dirección ip de la víctima:&lt;/strong&gt; La dirección IP de la víctima en red local a la cual queremos envenenar su tabla ARP.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Solo podremos efectuar el ataque si estamos en la misma red&lt;/strong&gt; que router y víctima de forma local.&lt;br /&gt;
&lt;h3&gt;El ataque:&lt;/h3&gt;
Suponiendo que tengamos un equipo con linux y dsniff instalados, habilitamos encaminamiento en el núcleo del sistema:
&lt;pre class=&quot;bash&quot;&gt;sysctl -w net.ipv4.ip_forward=1&lt;/pre&gt;
Creamos dos procesos distintos para establecer una conexión entre dos computadores y nosotros:
&lt;pre class=&quot;bash&quot;&gt;arpspoof -i eth0 DIR_IP_ROUTER -t DIR_IP_VÍCTIMA&lt;/pre&gt;
&lt;pre class=&quot;bash&quot;&gt;arpspoof -i eth0 DIR_IP_VÍCTIMA -t DIR_IP_ROUTER&lt;/pre&gt;
Ahora podemos ejecutar tranquilamente &lt;strong&gt;Wireshark&lt;/strong&gt; (Analizador de paquetes) y observar cual es el contenido de los paquetes entre víctima y router.&lt;br /&gt;Dado que ésta técnica es exactamente lo que se denomina un &quot;&lt;strong&gt;&lt;em&gt;man in the middle&lt;/em&gt;&lt;/strong&gt;&quot; (estamos en medio del router y la víctima), no solo se puede averigüar información de los paquetes, sino que se pueden falsificar comunicaciónes seguras como HTTPS o SSH (habría que emular el servidor y comunicar la petición hacia internet).&lt;br /&gt;
&lt;h3&gt;Como evitarlo:&lt;/h3&gt;
Necesitamos saber la dirección hardware del router (MAC), para ello podemos consultar nuestra propia tabla arp y buscar en ella mediante la dirección del router nuestra dirección hardware.
&lt;pre class=&quot;bash&quot;&gt;$ arp&lt;/pre&gt;
Una vez obtenida, añadimos una entrada de caracter permanente (que tendrá prioridad sobre la cacheada temporalmente):
&lt;pre class=&quot;bash&quot;&gt;# arp -s DIR_IP_ROUTER DIR_HW_ROUTER&lt;/pre&gt;','content_en'=>'&lt;h3&gt;A bit of theory&lt;/h3&gt;
The ARP table functions as a cache for fast access to IP addresses  that you visit frequently, usually the router is the only entry that we have cached in the table because is the machine that routes the IP packages outwards. &lt;br /&gt; The router auto-discover itself in the network with a signal that causes that all the equipment in the network automatically add an entry in its ARP cache in order to access internet. &lt;br /&gt; The danger of this action by default is that any machine can pose as a router, that is, become the guide of our IP packets network to which it belongs. A router obviously not analyze IP packets, but a malicious computer could decapsulation different levels of IP and extract unauthorized information.&lt;br /&gt;
&lt;h3&gt;What we have to know&lt;/h3&gt;
&lt;strong&gt;Router IP Address:&lt;/strong&gt; The local area network IP address of the router  that we are connected to us and the victim. &lt;br /&gt;&lt;strong&gt;Ip address of the victim: &lt;/strong&gt;The victim local area network IP address to which we wish to poison their ARP table.&lt;br /&gt;
&lt;h3&gt;The attack&lt;/h3&gt;
Suposing we\'ve installed a linux with dsniff tool, we have to enable routing in system\'s kernel:
&lt;pre class=&quot;bash&quot;&gt;sysctl -w net.ipv4.ip_forward=1&lt;/pre&gt;
We have to create two different process for establishing a connection between the two machines (router and victim) and us:
&lt;pre class=&quot;bash&quot;&gt;arpspoof -i eth0 ROUTER_IP_ADDRESS -t VICTIM_IP_ADDRESS&lt;/pre&gt;
&lt;pre class=&quot;bash&quot;&gt;arpspoof -i eth0 VICTIM_IP_ADDRESS -t ROUTER_IP_ADDRESS
&lt;/pre&gt;
Now we can execute &lt;strong&gt;Wireshark&lt;/strong&gt; (Packet analyzer) and view what is the information encapsulated in the IP packets sended between router and victim.&lt;br /&gt;As this tecnique is like a &quot;&lt;em&gt;&lt;strong&gt;man in the middle&lt;/strong&gt;&lt;/em&gt;&quot; (We are between victim and router), we also can know SSL encrypted information like HTTPS or SSH protocols can offer, we only have to emulate a secure server.&lt;br /&gt;
&lt;h3&gt;How to prevent it&lt;/h3&gt;
First we have to know the router hardware address (MAC), for it we can search in our ARP table an address like router with:
&lt;pre class=&quot;bash&quot;&gt;arp&lt;/pre&gt;
Once we know the MAC, we have to add manually a permanent ARP entry with the next command:
&lt;pre class=&quot;bash&quot;&gt;arp -s ROUTER_IP_ADDRESS ROUTER_HW_ADDRESS&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-12-02 22:16:18','updated_at'=>'2013-08-23 23:48:52','visits'=>'1563','via_url'=>'','download_url'=>'http://monkey.org/~dugsong/dsniff/dsniff-2.3.tar.gz','url'=>'http://monkey.org/~dugsong/dsniff/','info_url'=>'http://blackspiral.org/docs/arp_spoofing.html','published_at'=>'2009-12-02','is_published'=>'1','updated_note'=>''),
  array('id'=>'18','title_es'=>'Configurar cache de ficheros desde Apache','title_en'=>'Configure file cache from Apache','slug_es'=>'configurar-cache-de-ficheros-desde-apache','slug_en'=>'configure-file-cache-from-apache','description_es'=>'Habilitar las directivas de cache desde el servidor Apache puede incrementar el rendimiento de forma sustancial','description_en'=>'Activate cache directives from Apache server can improve the loading perfornance','content_es'=>'Para habilitar la cache de elementos en el lado del cliente solo necesitamos tener instalado el &lt;strong&gt;mod_expires&lt;/strong&gt; en nuestro servidor &lt;strong&gt;Apache&lt;/strong&gt;. Una vez instalado dicho módulo, especificar una cache por defecto para todos los elementos accesibles a nuestro servidor es tan sencillo como escribir la siguiente directiva en la configuración httpd de nuestro sitio (&lt;em&gt;.htaccess&lt;/em&gt; o &lt;em&gt;httpd.conf&lt;/em&gt;):&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;ExpiresActive On
ExpiresDefault &quot;access plus 1 month&quot;&lt;/pre&gt;
&lt;sub&gt;* Especificamos expiración para todos los elementos de un més a partir de fecha de acceso.&lt;/sub&gt;&lt;br /&gt;&lt;br /&gt; Probablemente una directiva mejor, orientada a imágenes, css y js (elementos más pesados de la web) según tipo de fichero:&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;ExpiresActive On
ExpiresByType image/gif &quot;access plus 1 month&quot;
ExpiresByType image/jpeg &quot;access plus 1 month&quot;
ExpiresByType image/png &quot;access plus 1 month&quot;
ExpiresByType text/css &quot;access plus 24 hours&quot;
ExpiresByType text/javascript &quot;access plus 24 hours&quot;&lt;/pre&gt;','content_en'=>'To enable items cache in the client side only, you only need to have installed on your &lt;strong&gt;Apache&lt;/strong&gt; server the &lt;strong&gt;mod_expires&lt;/strong&gt; module. Once installed, specify a default cache for all elements accessed by our server is as easy as typing the following directive in the httpd configuration of our site (&lt;em&gt;.htaccess&lt;/em&gt; or &lt;em&gt;httpd.conf&lt;/em&gt;):&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;ExpiresActive On
ExpiresDefault &quot;access plus 1 month&quot;&lt;/pre&gt;
&lt;sub&gt;* One month expiration since the access for all elements.&lt;/sub&gt;&lt;br /&gt;&lt;br /&gt; Probably, a better directive for heavy web elements like images, CSS\'s and JS\'s based on the filetype:&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;ExpiresActive On
ExpiresByType image/gif &quot;access plus 1 month&quot;
ExpiresByType image/jpeg &quot;access plus 1 month&quot;
ExpiresByType image/png &quot;access plus 1 month&quot;
ExpiresByType text/css &quot;access plus 24 hours&quot;
ExpiresByType text/javascript &quot;access plus 24 hours&quot;&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-12-09 16:28:39','updated_at'=>'2013-08-24 01:54:13','visits'=>'1456','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'http://httpd.apache.org/docs/2.0/mod/mod_expires.html','published_at'=>'2010-09-08','is_published'=>'1','updated_note'=>''),
  array('id'=>'19','title_es'=>'Aprender PHP de forma rápida sabiendo Java y C','title_en'=>'Learn PHP quikly with Java and C knowledge ','slug_es'=>'aprender-php-de-forma-rapida-sabiendo-java-y-c','slug_en'=>'learn-php-quikly-with-java-and-c-knowledge','description_es'=>'Si ya conoces Java y C aprender PHP será como un juego de niños','description_en'=>'If you alredy know about C and Java, learning PHP can be too easy','content_es'=>'Dada la enorme similitud entre la programación Orientada a Objetos de PHP y Java y la programación procedimental de PHP a C, conociendo uno o ambos aprender PHP será un prácticamente un juego de niños.
&lt;h3&gt;Programación OO PHP muy similar a Java:&lt;/h3&gt;
&lt;strong&gt;En Java:&lt;/strong&gt;&lt;br /&gt;
&lt;pre class=&quot;java&quot;&gt;//Clase Abstracta
abstract MiClaseAbstracta {
  abstract public int miMetodoAbstracto ();
  abstract protected int miMetodoAbstracto2 ();

  /**
  * Constructor de clase
  */
  public MiClaseAbstracta (int numero) {}
  /**
  * Método estático
  */
  public static void miMetodoEstatico () {}
  /**
  * Método normal
  */
  public void miMetodo () {}
}

//Interfaz
interface MiInterfaz {
  abstract private int miMetodoDeInterfaz();
}

//Clase con herencia abstracta e interfaz
class MiClaseConHerenciaEInterfaz extends MiClaseAbstracta implements MiInterfaz {
  public int miMetodoAbstracto () {}
  protected int miMetodoAbstracto2 () {}
  private int miMetodoDeInterfaz() {}

  public MiClaseConHerenciaEInterfaz () {
    //Llamada al constructor del padre
    super();
    //Llamada a método estático
    MiClaseAbstracta.miMetodoEstatico();
    //Llamada a método padre
    this.miMetodo();
    //También super.miMetodo()
  }
}&lt;/pre&gt;
&lt;strong&gt;En PHP:&lt;/strong&gt;&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;//Clase Abstracta
abstract MiClaseAbstracta {
  abstract public function miMetodoAbstracto ();
  abstract protected function miMetodoAbstracto2 ();

  /**
  * Constructor de clase
  */
  public function MiClaseAbstracta ($numero) {}
  /**
  * Método estático
  */
  public static function miMetodoEstatico () {}
  /**
  * Método normal
  */
  public function miMetodo () {}
}

//Interfaz
interface MiInterfaz {
  abstract private function miMetodoDeInterfaz();
}

//Clase con herencia abstracta e interfaz
class MiClaseConHerenciaEInterfaz extends MiClaseAbstracta implements MiInterfaz {
  public function miMetodoAbstracto () {}
  protected function miMetodoAbstracto2 () {}
  private function miMetodoDeInterfaz() {}

  public __construct () {
    //Llamada al constructor del padre
    parent::__construct();
    //Llamada a método estático
    MiClaseAbstracta::miMetodoEstatico();
    //Llamada a método padre
    $this-&amp;gt;miMetodo();
    //Tambien parent::miMetodo() ó self::miMetodo()
  }
}&lt;/pre&gt;
&lt;h3&gt;Programación procedimental muy parecida a C&lt;/h3&gt;
Prácticamente no hay ningúna diferencia en la programación procedimental de PHP respecto a C. Así un hola mundo en C será:&lt;br /&gt;
&lt;pre class=&quot;c&quot;&gt;//Inclusión de archivos/librerías
#include &amp;lt;stdio.h&amp;gt;

//Función principal
int main (int argc,char **argv)
{
   //Impresión por pantalla y salida del programa
   printf(&quot;Hola mundo\\n&quot;);
   return 0;
}&lt;/pre&gt;
&lt;strong&gt;y en PHP:&lt;/strong&gt;&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;//Función principal
function main () {
  echo &quot;Hola mundo\\n&quot;;
  return 0;
}
//Ejecutamos main
main();
&lt;/pre&gt;
&lt;h3&gt;Principales diferencias:&lt;/h3&gt;
&lt;ul&gt;
&lt;li&gt;En PHP todas las &lt;strong&gt;variables&lt;/strong&gt; van precedidas con el caracter \'$\'&lt;/li&gt;
&lt;li&gt;PHP es un lenguaje muy poco o practicamente no tipado, no es necesaria la definición del tipo en la variable&lt;/li&gt;
&lt;li&gt;En PHP el método contructor en las clases es &quot;&lt;strong&gt;__construct&lt;/strong&gt;&quot;&lt;/li&gt;
&lt;li&gt;En PHP todos los métodos/procedimientos han de precederse con la palabra reservada &quot;&lt;strong&gt;function&lt;/strong&gt;&quot;&lt;/li&gt;
&lt;li&gt;En PHP el acceso a métodos de clases (de instancias de objetos) ha de ser con el operador &quot;&lt;strong&gt;-&amp;gt;&lt;/strong&gt;&quot;&lt;/li&gt;
&lt;li&gt;En PHP el acceso a los métodos del padre se pueden hacer con &quot;&lt;strong&gt;parent::&lt;/strong&gt;&quot; o &quot;&lt;strong&gt;$this-&amp;gt;&lt;/strong&gt;&quot;&lt;/li&gt;
&lt;li&gt;En PHP cualquier acceso estático se hace mediante el operador &quot;&lt;strong&gt;::&lt;/strong&gt;&quot;&lt;/li&gt;
&lt;li&gt;En PHP la inclusión de ficheros externos se realiza mediante la llamada a &quot;include&quot; o &quot;require&quot;&lt;/li&gt;
&lt;li&gt;En PHP no hay métodos autoejecutables (como el &quot;main&quot; de Java o C) se han de llamar explicitamente.&lt;/li&gt;
&lt;/ul&gt;','content_en'=>'PHP Object Oriented is like than Java and procedimental form like C.  The previous knoledge of one of those can save a lot of PHP learning time.
&lt;h3&gt;PHP OO is like Java:&lt;/h3&gt;
&lt;strong&gt;In Java:&lt;/strong&gt;&lt;br /&gt;
&lt;pre class=&quot;java&quot;&gt;//Abstract class
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
}&lt;/pre&gt;
&lt;strong&gt;In&lt;/strong&gt;&lt;strong&gt; PHP:&lt;/strong&gt;&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;//Abstract class
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
    this-&amp;gt;myMethod();
    //Also parent::myMethod() or self::miMethod()
  }
}&lt;/pre&gt;
&lt;h3&gt;Procedural programming very similar to C:&lt;/h3&gt;
PHP procedural programming is slightly different from C. A hello world example in C is like:&lt;br /&gt;
&lt;pre class=&quot;c&quot;&gt;//Files/libraries inclusion
#include &amp;lt;stdio.h&amp;gt;

//Main function
int main (int argc,char **argv)
{
   printf(&quot;Hello world\\n&quot;);
   return 0;
}&lt;/pre&gt;
&lt;strong&gt;in PHP:&lt;/strong&gt;&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;//Main function
function main () {
  echo &quot;Hello world\\n&quot;;
  return 0;
}
//Main execution
main();
&lt;/pre&gt;
&lt;h3&gt;Main differences:&lt;/h3&gt;
&lt;ul&gt;
&lt;li&gt;In PHP all vars are prefixed with the \'$\' dollar character&lt;/li&gt;
&lt;li&gt;PHP is a very low or simply not typed, is not neccesary var typing&lt;/li&gt;
&lt;li&gt;In PHP the constructor method must be called &quot;&lt;strong&gt;__construct&lt;/strong&gt;&quot;&lt;/li&gt;
&lt;li&gt;In PHP all methods and procedures must have in it\'s definition the &quot;&lt;strong&gt;function&lt;/strong&gt;&quot; reserved word&lt;/li&gt;
&lt;li&gt;In PHP the method access (from OO) will be provided by the &quot;-&amp;gt;&quot; operator&lt;/li&gt;
&lt;li&gt;In PHP the access for the parent method is provided by &quot;parent::&quot; or &quot;$this-&amp;gt;&quot;&lt;/li&gt;
&lt;li&gt;In PHP all static methods must be accessed by the &quot;&lt;strong&gt;::&lt;/strong&gt;&quot; operator.&lt;/li&gt;
&lt;li&gt;In PHP files/libraries inclusions are maded by &quot;include&quot; or &quot;require&quot; functions&lt;/li&gt;
&lt;li&gt;There are no auto-executable functions in PHP (like Java or C &quot;main&quot; style), you must call them explicitly&lt;/li&gt;
&lt;/ul&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-12-21 05:40:58','updated_at'=>'2013-08-24 07:07:15','visits'=>'1299','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-12-21','is_published'=>'1','updated_note'=>''),
  array('id'=>'20','title_es'=>'Expandir tamaño disco duro dinámico VirtualBox','title_en'=>'Expanding VirtualBox dynamic hard disks','slug_es'=>'expandir-tamano-disco-duro-dinamico-virtualbox','slug_en'=>'expanding-virtualbox-dynamic-hard-disks','description_es'=>'Como expandir discos dinámicos *.vdi','description_en'=>'How to expand *.vdi dinamic disks','content_es'=>'Aunque teóricamente no se puede expandir un disco dinámico *.vdi de VirtualBox, podremos conseguir nuestro objetivo mediante la clonación. Los pasos a seguir son:&lt;br /&gt;&lt;br /&gt;
&lt;h3&gt;Crear un nuevo disco duro virtual (dispositivo)&lt;/h3&gt;
Seleccionamos el tamaño del disco duro que queramos (será nuestro nuevo disco duro).&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;VBoxManage createhd –filename my_filename.vdi --size 50000 --remember&lt;/pre&gt;
&lt;br /&gt;
&lt;h3&gt;Clonar el antiguo disco duro al nuevo&lt;/h3&gt;
Esto es, se copiará el contenido del anterior disco duro al nuevo. Obteniendo como resultado un disco duro (el nuevo) con los contenidos del antiguo pero con un tamaño mayor.&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;VBoxManage clonehd old.vdi new.vdi --existing&lt;/pre&gt;
&lt;br /&gt;
&lt;h3&gt;Seleccionar el nuevo disco duro para la máquina virtual&lt;/h3&gt;
Para arrancar con el nuevo disco duro (que a efectos será igual que el anterior pero ampliado) debemos establecerlo:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;VBoxManage modifyvm MyVMName --hda none
VBoxManage modifyvm MyVMName --hda new.vdi&lt;/pre&gt;
Una vez que has hecho esto deberías expandir la partición. Los detalles de como expandir dicha partición quedan fuera de este tutorial, quizás un buen programa gratuito para poder hacerlo podría ser &lt;a href=&quot;http://gparted.sourceforge.net/&quot;&gt;Gparted&lt;/a&gt;.','content_en'=>'Although we can not expand a virtual dinamic hard drive (*.vdi) directly we can finally expand it through a cloning trick. The steps are:&lt;br /&gt;&lt;br /&gt;
&lt;h3&gt;Create a new virtual hard disk (new device)&lt;/h3&gt;
First create a new hard disk with the desired storage size (it will be the new hard disk).&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;VBoxManage createhd –filename my_filename.vdi --size 50000 --remember&lt;/pre&gt;
&lt;br /&gt;
&lt;h3&gt;Clone the old drive into the new one&lt;/h3&gt;
In order to have the same data (for example: OS) in the new hard drive we have to clone the previous and size limited one.&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;VBoxManage clonehd old.vdi new.vdi --existing&lt;/pre&gt;
&lt;br /&gt;
&lt;h3&gt;Configure the new one as the system default&lt;/h3&gt;
First remove the last one and then select the new created one as the default.&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;VBoxManage modifyvm MyVMName --hda none
VBoxManage modifyvm MyVMName --hda new.vdi&lt;/pre&gt;
Once you have done it, you will need to expand the disc. The details for do this are out of the scope of this article, probably a good way to do it is using a free program like &lt;a href=&quot;http://gparted.sourceforge.net/&quot;&gt;Gparted&lt;/a&gt;.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-12-21 14:57:39','updated_at'=>'2013-08-24 17:04:08','visits'=>'3292','via_url'=>'http://www.alittletothewright.com/2009/11/expanding-virtualbox-dynamic-vdis/','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-12-21','is_published'=>'1','updated_note'=>''),
  array('id'=>'21','title_es'=>'Apache, permiso denegado .htaccess','title_en'=>'Apache .htaccess permission denied','slug_es'=>'apache-permiso-denegado-htaccess','slug_en'=>'apache-htaccess-permission-denied','description_es'=>'Como resolver problema de acceso a un .htaccess no existente','description_en'=>'How to resolve the access to a non existent .htaccess','content_es'=>'Si establecemos la ruta a un servidor virtual fuera de la típica &quot;&lt;strong&gt;/var/www/vhosts&lt;/strong&gt;&quot;, debemos asegurarnos de apache puede acceder desde la raiz hasta la carpeta destino. Si apache no puede acceder a alguna carpeta entre la raiz y destino, podremos observar en los logs de apache algo como &quot;&lt;strong&gt;Permission denied: CARPETA_NO_ACCESIBLE/.htaccess pcfg_openfile: unable to check htaccess file, ensure it is readable&lt;/strong&gt;&quot;.&lt;br /&gt;&lt;br /&gt;Para solucionarlo basta con dar permisos &lt;strong&gt;755&lt;/strong&gt; a todas las carpetas por las que va a pasar Apache hasta llegar al destino. Si en la configuración de un servidor tenemos como &lt;strong&gt;DocumentRoot&lt;/strong&gt; &quot;&lt;strong&gt;/srv/www&lt;/strong&gt;&quot; basta con que &quot;&lt;strong&gt;/srv&lt;/strong&gt;&quot; y &quot;&lt;strong&gt;/srv/www&lt;/strong&gt;&quot; tengan permisos &lt;strong&gt;755&lt;/strong&gt;:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;chmod 755 /srv
chmod 755 /srv/www&lt;/pre&gt;','content_en'=>'If we choose another DocumentRoot location for any host configuration you must ensure that Apache have full access from the root to the destiny if not your browser will prompt a &quot;Permission denied&quot; and in the log file you can find a message like &quot;&lt;strong&gt;Permission denied: NO_ACCESIBLE_DIR/.htaccess pcfg_openfile: unable to check htaccess file, ensure it is readable&lt;/strong&gt;&quot;&lt;br /&gt;&lt;br /&gt;We can solve this problem setting a correct access permissions from the root to the destiny path. For example if we have a non accesible or a &lt;strong&gt;DocumentRoot&lt;/strong&gt; &quot;&lt;strong&gt;/var/www&lt;/strong&gt;&quot; problem we can solve it setting a &quot;&lt;strong&gt;/var&lt;/strong&gt;&quot; and &quot;&lt;strong&gt;/var/www&lt;/strong&gt;&quot; &lt;strong&gt;755&lt;/strong&gt; permissions:
&lt;pre class=&quot;bash&quot;&gt;chmod 755 /srv
chmod 755 /srv/www&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-12-29 14:43:18','updated_at'=>'2013-08-24 07:01:33','visits'=>'1671','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-12-29','is_published'=>'1','updated_note'=>''),
  array('id'=>'22','title_es'=>'Symfony, eliminar cache desde una acción','title_en'=>'Symfony, clear cache from an action','slug_es'=>'symfony-eliminar-cache-desde-una-accion','slug_en'=>'symfony-clear-cache-from-an-action','description_es'=>'Sencilla función PHP para poder eliminar la cache desde una acción','description_en'=>'Simply PHP function to remove the cache from an action','content_es'=>'Para eliminar la cache de una aplicación y un entorno determinado: &lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;/**
 * Eliminar cache según aplicación y entorno
 *
 * @param string $app aplicación
 * @param string $env entorno
 */
function clear_cache ($app, $env)
{
  $cacheDir = sfConfig::get(\'sf_cache_dir\').\'/\'. $app.\'/\'.$env.\'/\';

  //Eliminamos la cache
  $cache = new sfFileCache(array(\'cache_dir\' =&amp;gt; $cacheDir));
  $cache-&amp;gt;clean();
}&lt;/pre&gt;','content_en'=>'For application and environment clear cache: &lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;/**
 * Delete cache for application and environment
 *
 * @param string $app aplicación
 * @param string $env entorno
 */
function clear_cache ($app, $env)
{
  $cacheDir = sfConfig::get(\'sf_cache_dir\').\'/\'. $app.\'/\'.$env.\'/\';

  //Clear cache
  $cache = new sfFileCache(array(\'cache_dir\' =&amp;gt; $cacheDir));
  $cache-&amp;gt;clean();
}&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2009-12-30 04:03:44','updated_at'=>'2013-08-24 15:38:07','visits'=>'2946','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2009-12-30','is_published'=>'1','updated_note'=>NULL),
  array('id'=>'23','title_es'=>'Como saber bits Linux','title_en'=>'How to know bits Linux','slug_es'=>'como-saber-bits-linux','slug_en'=>'how-to-know-bits-linux','description_es'=>'Como conocer la arquitectura de nuestro Sistema Operativo linux (32 o 64 bits)','description_en'=>'How to know our Linux Operative System arquitecture  (32 o 64 bits)','content_es'=>'A veces es útil saber que arquitectura sigue nuestro Linux, por ejemplo, puede que hayamos instalado una versión de 32 bits en un computador de 64 bits.&lt;br /&gt;Para saber si nuestra distribución es de 64 o 32 bits basta con ejecutar el siguiente comando:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;uname -m&lt;/pre&gt;
Si la respuesta es&quot;x86_64&quot; nuestro Linux es 64 bits, en caso contrario (i686) será de 32 bits.','content_en'=>'Sometimes is useful to know what is our installed arquitecture, we might installed a 32 bits Ubuntu in a 64 bits computer arquitecture.&lt;br /&gt;For know our Linux arquitecture we only have to execute the next command:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;uname -m&lt;/pre&gt;
If the response is &quot;x86_64&quot; our Linux is a 64 bits system, otherwise (i686) is a 32 bits.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-01-18 15:42:32','updated_at'=>'2013-08-22 14:03:02','visits'=>'963','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-01-18','is_published'=>'1','updated_note'=>''),
  array('id'=>'24','title_es'=>'Restaurar GRUB2','title_en'=>'Restore GRUB2','slug_es'=>'restaurar-grub2','slug_en'=>'restore-grub2','description_es'=>'Como restaurar GRUB 2 si no tenemos acceso a la partición','description_en'=>'How to restore GRUB 2 without if we cannot acess the partition','content_es'=>'Si hacemos una instalción nueva de Windows o cualquier otro sistema operativo es posible que machaque el contenido de cargador de arranque (en nuestro caso GRUB). Para restaurarlo es necesario cargar un cargador de arranque externo (por ejemplo en un CD, podemos seguir las indicaciones &lt;a href=&quot;/articulo/restaurar-grub&quot;&gt;aquí&lt;/a&gt;). Para GRUB 2 los pasos a seguir para su restauración son diferentes que para GRUB 1. Para restaurarlo, ejecuta:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;update-grub
grub-install /dev/sda&lt;/pre&gt;','content_en'=>'If we made a new instalation of Windows or another operative system is possible that the MBR (boot charger, in our case, GRUB) be removed. For restore it first we have to charge another charger (in a CD for example, follow the steps &lt;a href=&quot;/article/restore-grub&quot;&gt;here&lt;/a&gt;). For GRUB 2, the steps to follow are slighly different than for GRUB 1. For restore:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;update-grub
grub-install /dev/sda&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-01-19 06:42:50','updated_at'=>'2013-08-24 05:12:01','visits'=>'948','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-01-19','is_published'=>'1','updated_note'=>''),
  array('id'=>'26','title_es'=>'Redirigir "dominio" a "www.dominio" con Apache','title_en'=>'Redirect "domain" to "www.domain" with Apache','slug_es'=>'redirigir-dominio-a-www-dominio-con-apache','slug_en'=>'redirect-domain-to-www-domain-with-apache','description_es'=>'Configurar ficheros Apache para redirigir peticiones del tipo "domino" a "www.dominio"','description_en'=>'Configure Apache files for redirect requests like "domain" to "www.domain"','content_es'=>'Se debe crear/modificar el fichero &lt;strong&gt;.htaccess&lt;/strong&gt; en la raiz del dominio que al menos debe contener las siguientes líneas de código:&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;RewriteEngine on
RewriteCond %{HTTP_HOST} ^dominio\\.com
RewriteRule ^(.*)$ http://www.dominio.com/$1 [R=permanent,L]&lt;/pre&gt;','content_en'=>'Must create/modify the file &lt;strong&gt;.htaccess&lt;/strong&gt; in the domain root directory wich also must have the following apache configuration lines:&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;RewriteEngine on
RewriteCond %{HTTP_HOST} ^domain\\.com
RewriteRule ^(.*)$ http://www.domain.com/$1 [R=permanent,L]&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-02-02 05:42:22','updated_at'=>'2013-08-24 09:15:34','visits'=>'1066','via_url'=>'http://www.codigomaestro.com/apache/redirigir-dominio-en-apache','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-02-02','is_published'=>'1','updated_note'=>''),
  array('id'=>'27','title_es'=>'Redirigir a conexión segura https en Apache','title_en'=>'Redirect to a secure connection in Apache','slug_es'=>'redirigir-a-conexion-segura-https-en-apache','slug_en'=>'redirect-to-a-secure-connection-in-apache','description_es'=>'Mediante unas sencillas reglas para el mod_rewrite de Apache podemos redirigir el acceso a ficheros o carpetas a una conexión segura https','description_en'=>'Through simple rules for the mod_rewrite of Apache we can redirect file o directory access to a secure connection https','content_es'=>'Redirigir una solicitud de acceso a un determinado fichero o directorio, es tan sencillo como incluir las siguientes líneas al fichero Apache &lt;strong&gt;.htaccess&lt;/strong&gt; en la raiz de nuestro directorio web:&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;RewriteCond %{SERVER_PORT} !^443$
RewriteCond %{REQUEST_URI} ^/fichero$
RewriteRule ^(.*)$ https://www.dominio.com/$1 [L,R]&lt;/pre&gt;
Esto sencillamente redireccionará cualquier petición del fichero &quot;fichero&quot; (por ejemplo) mediante el protocolo HTTP (cualquier acceso por un puerto que no sea 443) a una URL HTTPS de la forma &quot;https://www.dominio.com/fichero&quot;&lt;br /&gt;','content_en'=>'Redirect the request for a file or directory is easy as include the following lines into the web root &lt;strong&gt;.htaccess&lt;/strong&gt; Apache file:&lt;br /&gt;
&lt;pre class=&quot;apache&quot;&gt;RewriteCond %{SERVER_PORT} !^443$
RewriteCond %{REQUEST_URI} ^/file$
RewriteRule ^(.*)$ https://www.domain.com/$1 [L,R]&lt;/pre&gt;
This will redirect every request for the file &quot;file&quot; (for example) with HTTP protocol (any wich the access port different from 443) to another HTTPS secure URL similary to &quot;https://www.domain.com/file&quot;.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-02-05 04:27:23','updated_at'=>'2013-08-24 03:36:18','visits'=>'1293','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-02-05','is_published'=>'1','updated_note'=>''),
  array('id'=>'28','title_es'=>'Iniciar sesión servidor SSH sin contraseña','title_en'=>'SSH login without password','slug_es'=>'iniciar-sesion-servidor-ssh-sin-contrasena','slug_en'=>'ssh-login-without-password','description_es'=>'Como conectarse a un servidor mediante SSH sin introducir contraseña','description_en'=>'How to connect to a server through SSH without password','content_es'=>'A veces resulta molesto tener que introducir una y otra vez la contraseña para poder iniciar una conexión ssh con un servidor. Si quieres que el servidor reconozca tu identidad y no te pida contraseña:&lt;br /&gt;
&lt;h3&gt;Crea una contraseña cifrada en RSA&lt;/h3&gt;
Metete en tu directorio home&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd&lt;/pre&gt;
Si no existe, crea una carpeta llamada \'.ssh\'&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;mkdir .ssh&lt;/pre&gt;
Crea una contraseña en esa carpeta&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd .ssh/
ssh-keygen -t rsa -f pass&lt;/pre&gt;
Esto generará 2 claves, una pública y otra privada una que será \'pass\' y otro \'pass.pub\', \'pass\' es nuestra clave privada que jamás debe salir de vuestro ordenador. \'pass.pub\' es la clave pública que debemos importar a la máquina que queremos que nos reconozca.&lt;br /&gt;
&lt;h3&gt;Crea authorized_keys en tu servidor&lt;/h3&gt;
Establece una conexion con el servidor al que deseas importar tu clave&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;ssh SERVIDOR&lt;/pre&gt;
Si no existe, crea una carpeta \'.ssh\' en el home y dentro de ella un archivo llamado \'authorized_keys\'&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd
mkdir .ssh
touch .ssh/authorized_keys&lt;/pre&gt;
&lt;h3&gt;Importa tu clave al servidor&lt;/h3&gt;
Sin cerrar la terminal anterior, abre otra terminal y copia tu clave pública que esta dentro de tu maquina (no en el servidor):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;vim .ssh/pass.pub&lt;/pre&gt;
Selecciona todo el contenido y dale a \'Copiar\'&lt;br /&gt;Ahora abre la terminal de antes (En la que estás logeado en el servidor) (Si la has cerrado vuelve a logearte)&lt;br /&gt;Edita el archivo authorized_keys y pega tu clave publica (la que as copiado), cierra sesion.&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;vim .ssh/authorized_keys
exit&lt;/pre&gt;
&lt;h3&gt;Importa tu clave al gestor ssh&lt;/h3&gt;
Estando en tu máquina local:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd
ssh-add .ssh/pass&lt;/pre&gt;
Ya podrás acceder a tu servidor sin tener que poner password.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Importante: &lt;/strong&gt;Si la clave es externa (Como es nuestro caso) cada vez que se inicie el gestor (Es decir, cada vez que reiniciemos, apagemos...) , hemos de repetir el paso 4 para importar nuestra identidad. Algunos sistemas como Ubuntu incluyen todas las identidades de forma automática en el inicio de sesión.&lt;br /&gt;','content_en'=>'Sometimes connecting to a server with SSH is very tedious, enter the password at anytime is boring.&lt;br /&gt;
&lt;h3&gt;Create a RSA password&lt;/h3&gt;
Go to your home&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd&lt;/pre&gt;
If not exist, create a directory named \'.ssh\'&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;mkdir .ssh&lt;/pre&gt;
Create a password in that directory&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd .ssh/
ssh-keygen -t rsa -f pass&lt;/pre&gt;
This will generate 2 keys, one public and another private, \'pass.pub\' and \'pass\'. \'pass\' is our private key, this means that we have not to share it, \'pass.pub\' is our public key and is the key that we have to export to the server.&lt;br /&gt;
&lt;h3&gt;Create the authorized_keys file in your server&lt;/h3&gt;
Connect with the server that you want to connect without password through SSH (o another protocol):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;ssh SERVER&lt;/pre&gt;
If not exist, create a directory called \'.ssh\' in your home, and then, into it another file named \'authorized_keys\':&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd
mkdir .ssh
touch .ssh/authorized_keys&lt;/pre&gt;
&lt;h3&gt;Import your password to the server&lt;/h3&gt;
Don\'t close the console, open a new one and copy the public key (the content of the \'pass.pub\' file)&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;vim .ssh/pass.pub&lt;/pre&gt;
Select all the content and copy it (Ctrl+Shift+C)&lt;br /&gt;Now open the last console (where you stay logged into the server, if you had closed it, reconnect)&lt;br /&gt;Ahora abre la terminal de antes (En la que estás logeado en el servidor) (Si la has cerrado vuelve a logearte) and paste the public key into the authorized_keys file, after logout.&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;vim .ssh/authorized_keys
exit&lt;/pre&gt;
&lt;h3&gt;Import the key into the ssh agent&lt;/h3&gt;
In your local machine:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;cd
ssh-add .ssh/pass&lt;/pre&gt;
At this moment you can enter into the server without password.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Important: &lt;/strong&gt;If we have setted an external key (Like our case), every time that the agent inits (every time that we reboot the machine) we have to repeat the step 4 for correct identity import.&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-02-05 07:30:37','updated_at'=>'2013-08-22 00:41:21','visits'=>'1365','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-02-06','is_published'=>'1','updated_note'=>''),
  array('id'=>'29','title_es'=>'Ignorar carpetas y ficheros SVN','title_en'=>'Ignore directories and files SVN','slug_es'=>'ignorar-carpetas-y-ficheros-svn','slug_en'=>'ignore-directories-and-files-svn','description_es'=>'Mediante el uso de propiedades (propedit) podemos ignorar ficheros y directorios','description_en'=>'With file properties, we can ignore files and directories','content_es'=>'Ignorar directorios o ficheros es realmente sencillo con subversion (SVN), el comando para ello es el siguiente:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;svn propedit svn:ignore ./CARPETA_O_FICHERO_A_IGNORAR&lt;/pre&gt;
A continuación se abrirá nuestro editor por defecto para introducir los ficheros que debe ignorar; podemos hacer uso de expresiones regulares y ignorar todos los ficheros:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;*&lt;/pre&gt;
o podemos ignorar ficheros específicos:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;*_dev.php
*.jpg&lt;/pre&gt;','content_en'=>'Ignore files or entire directories is easy as executing the next line:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;svn propedit svn:ignore ./DIRECTORY_OR_FILE_TO_IGNORE&lt;/pre&gt;
At this moment, the default editor will be opened waiting to introduce the files or directory filenames that we want to ignore, we can ignore all files inserting a:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;*&lt;/pre&gt;
or we can ignore specific filenames:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;*_dev.php
*.jpg&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-02-10 17:32:49','updated_at'=>'2013-08-24 08:32:39','visits'=>'1030','via_url'=>'http://www.petefreitag.com/item/662.cfm','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-02-10','is_published'=>'1','updated_note'=>''),
  array('id'=>'30','title_es'=>'Cambiar directorio de trabajo SVN','title_en'=>'Change SVN working directory','slug_es'=>'cambiar-directorio-de-trabajo-svn','slug_en'=>'change-svn-working-directory','description_es'=>'Usando el comando switch podemos cambiar de directorio de trabajo','description_en'=>'Using the switch command we can change our working directory','content_es'=>'Si ya tenemos una copia local de trabajo y nos gustaría cambiar el emplazamiento a otro dentro del repositorio, podemos utilizar el comando &lt;strong&gt;switch&lt;/strong&gt;.&lt;br /&gt;
&lt;h3&gt;Ejemplo&lt;/h3&gt;
Si ya tenemos una copia de un repositorio que apunta a un directorio remoto llamado &quot;trunk&quot; (http://svn.dominio.com/repos/repositorio-x/trunk) pero deseamos trabajar en otro diferente dentro del repositorio, por ejemplo &quot;branches&quot; (http://svn.dominio.com/repos/repositorio-x/branches) debemos utilizar el comando switch de SVN en la raíz del repositorio:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;svn switch http://svn.dominio.com/repos/repositorio-x/branches&lt;/pre&gt;
Si por algún casual el mismo repositorio ha sido movido de lugar (por ejemplo a otro dominio) entonces debemos utilizar dicho comando con la opción &quot;&lt;strong&gt;--relocate&lt;/strong&gt;&quot;. Podemos tener el hipotético caso de tener una copia de cierto repositorio apuntando a un dominio1 que se ha movido a un dominio2, el comando para cambiar la raiz del repositorio entonces sería:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;svn switch --relocate http://svn.dominio1.com/repos/repositorio-x http://svn.dominio2.com/repos/repositorio-x&lt;/pre&gt;','content_en'=>'If we already have a working copy of a repository and we want to change the working directory to another into the repository, we can use the switch command.&lt;br /&gt;&lt;br /&gt;
&lt;h3&gt;Example&lt;/h3&gt;
If we have a working copy of a repository that points to a remote directory called &quot;trunk&quot; (http://svn.domain.com/repos/repository-x/trunk) but we want to work into another directory into the repository, for example &quot;branches&quot; (http://svn.domain.com/repos/repository-x/branches) we must use the SVN switch command in the root directory like:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;svn switch http://svn.domain.com/repos/repository-x/branches&lt;/pre&gt;
Other times we want to switch the repository URL (As the domain domain1 of the repository has changed to a new one domain 2) We can do this executing the switch command with the &quot;&lt;strong&gt;--relocate&lt;/strong&gt;&quot; option added as:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;svn switch --relocate http://svn.domain1.com/repos/repository-x http://svn.domain2.com/repos/repository-x&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-02-18 04:29:33','updated_at'=>'2013-08-24 08:43:36','visits'=>'1567','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-02-18','is_published'=>'1','updated_note'=>''),
  array('id'=>'31','title_es'=>'Regex en "buscar y reemplazar" para Gedit','title_en'=>'Regex in "search and replace" for Gedit','slug_es'=>'regex-en-buscar-y-reemplazar-para-gedit','slug_en'=>'regex-in-search-and-replace-for-gedit','description_es'=>'Aunque Gedit no soporta expresiones regulares, podemos instalar un plugin para ello','description_en'=>'Gedit don\'t support regular expressions, we can install a plugin for it','content_es'=>'Descarga el plugin de &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;a title=&quot;Descargar plugin regex gedit&quot; href=&quot;http://vaem.googlecode.com/files/gedit2_regex_replace_plugin.tar.gz&quot;&gt;google code&lt;/a&gt;&lt;/span&gt; o &lt;a href=&quot;/descarga/c9a069af9a46df0420e88650d1755bb3&quot;&gt;de kiwwito&lt;/a&gt; y extrae su contenido en &lt;strong&gt;&quot;~/.gnome2/gedit/plugins/&quot;&lt;/strong&gt;, si no existe esta ruta, creala.&lt;br /&gt;&lt;br /&gt;Activa el plugin (&lt;strong&gt;&quot;Editar&amp;gt;Preferencias&amp;gt;Complementos&quot;&lt;/strong&gt;) y reinicia Gedit. Ya lo tienes disponible. Para utilizarlo debes ir a &quot;&lt;strong&gt;Herramientas&amp;gt;Regex Search &amp;amp; Replace&quot;&lt;/strong&gt;.','content_en'=>'Download the plugin from &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;a title=&quot;Regex Search &amp;amp; Replace gedit plugin download&quot; href=&quot;http://vaem.googlecode.com/files/gedit2_regex_replace_plugin.tar.gz&quot;&gt;google code&lt;/a&gt;&lt;/span&gt; or &lt;a href=&quot;/download/c9a069af9a46df0420e88650d1755bb3&quot;&gt;from kiwwito&lt;/a&gt; extract the content under the directory &lt;strong&gt;&quot;~/.gnome2/gedit/plugins/&lt;/strong&gt;&quot; if not exist, create it.&lt;br /&gt;&lt;br /&gt;Activate the plugin (&lt;strong&gt;&quot;Edit&amp;gt;Preferences&amp;gt;Addons&quot;&lt;/strong&gt;) and restart Gedit.&lt;br /&gt;You have installed successful, for using it you must go to &quot;&lt;strong&gt;Tools&amp;gt;Regex Search &amp;amp; Replace&quot;&lt;/strong&gt; option.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-02-24 07:44:18','updated_at'=>'2013-08-24 21:04:38','visits'=>'1978','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'http://live.gnome.org/Gedit/Plugins','published_at'=>'2010-02-24','is_published'=>'1','updated_note'=>''),
  array('id'=>'32','title_es'=>'Crear un tema para symfony admin generator','title_en'=>'Create a theme for symfony admin generator','slug_es'=>'crear-un-tema-para-symfony-admin-generator','slug_en'=>'create-a-theme-for-symfony-admin-generator','description_es'=>'Podemos personalizar el admin generator de symfony con un tema','description_en'=>'We can create a theme to customize symfony admin generator interface','content_es'=>'Crear un tema para el &lt;strong&gt;admin generator&lt;/strong&gt; de Symfony desde cero es extremadamente complicado, es mucho mas fácil copiar el por defecto y personalizarlo a nuestro gusto. Para ello se puede seguir una serie de pasos:&lt;br /&gt;
&lt;h3&gt;Crea una estructura de directorios&lt;/h3&gt;
Crea en el directorio &quot;data&quot; de tu proyecto la carpeta &quot;generator&quot; y dentro de esta otra carpeta más que se llame &quot;sfPropelModule&quot;.&lt;br /&gt;
&lt;h3&gt;Copia el tema por defecto de symfony para el admin generator&lt;/h3&gt;
Vete a la raíz donde tengas instalado Symfony (puedes saberlo ejecutando el comando &quot;symfony -V&quot;) y copia la carpeta &quot;&lt;strong&gt;/lib/plugins/sfPropelPlugin/data/generator/sfPropelModule/admin&lt;/strong&gt;&quot; dentro del directorio creado en el primer paso (&quot;&lt;strong&gt;/data/generator/sfPropelModule/&lt;/strong&gt;&quot;).&lt;br /&gt;&lt;br /&gt;El nombre del tema será &quot;admin&quot; si quieres cambiarlo, cambia el nombre de la carpeta al que tu quieras.&lt;br /&gt;
&lt;h3&gt;Personaliza a tu gusto&lt;/h3&gt;
Ahora las plantillas copiadas se encontrarán en &quot;&lt;strong&gt;/data/generator/sfPropelModule/NOMBRE_TEMA/template/templates&lt;/strong&gt;&quot; solo tienes que modificarlas a tu gusto.&lt;br /&gt;
&lt;h3&gt;Establece el tema en generator.yml&lt;/h3&gt;
Para que el admin generator de Symfony seleccione dicho tema, es necesario que lo indiques en el fichero &lt;strong&gt;generator.yml&lt;/strong&gt; (dentro del &quot;&lt;strong&gt;config/&lt;/strong&gt;&quot; de tu módulo) con el atributo &quot;theme&quot; del siguiente modo:&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;generator:
  param:
    ...
    theme:NOMBRE_TEMA
    ...&lt;/pre&gt;','content_en'=>'Create a theme for Symfony admin generator from zero is extremely difficult. A more easy choice is to copy it from an existing default one. We can do it following the next steps:&lt;br /&gt;
&lt;h3&gt;Create the directory structure&lt;/h3&gt;
In your proyect &quot;data&quot; dir create another dir named &quot;generator&quot; and into it another one called &quot;sfPropelModule&quot;&lt;br /&gt;
&lt;h3&gt;Copy the default Symfony admin generator theme&lt;/h3&gt;
Go to the Symfony root dir (you can know it entering the command &quot;symfony -V&quot;) and copy the directory &quot;&lt;strong&gt;/lib/plugins/sfPropelPlugin/data/generator/sfPropelModule/admin&lt;/strong&gt;&quot; into the directory created in the first step (&quot;&lt;strong&gt;/data/generator/sfPropelModule/&lt;/strong&gt;&quot;).&lt;br /&gt;The name for the theme will be &quot;admin&quot; if you want to change it, rename the folder to the desired name.&lt;br /&gt;
&lt;h3&gt;Customize it&lt;/h3&gt;
Now the templates copied will be in &quot;/data/generator/sfPropelModule/THEME_NAME/templates/templates&quot; you only have to modify them.&lt;br /&gt;
&lt;h3&gt;Set the theme in generator.yml&lt;/h3&gt;
In order to set your theme to the Symfony admin generator, is it necessary to set it into the &lt;strong&gt;generator.yml &lt;/strong&gt;file (in the &quot;&lt;strong&gt;config/&lt;/strong&gt;&quot; directory of your module) with the attribute &quot;theme&quot; similar to:&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;generator:
  param:
    ...
    theme:THEME_NAME
    ...&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-02-28 17:48:38','updated_at'=>'2013-08-24 14:45:31','visits'=>'1808','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-03-07','is_published'=>'1','updated_note'=>NULL),
  array('id'=>'33','title_es'=>'Mejores IDE\'s PHP para Linux','title_en'=>'Best PHP IDE\'s for Linux','slug_es'=>'mejores-ide-s-php-para-linux','slug_en'=>'best-php-ide-s-for-linux','description_es'=>'Algunos de los mejores entornos de desarrollo PHP para Linux','description_en'=>'Some of the best developing environments for Linux','content_es'=>'Algunos de los mejores entornos de desarrollo disponibles para Linux y a mi juicio son:
&lt;h3&gt;Netbeans PHP&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/486772c9c9525c30767812a5558fc647a3844c46.png&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Características:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Rápido&lt;/li&gt;
&lt;li&gt;Integrado con symfony&lt;/li&gt;
&lt;li&gt;Integrado con SVN&lt;/li&gt;
&lt;li&gt;Autocompletado&lt;/li&gt;
&lt;li&gt;Soporte de CSS&lt;/li&gt;
&lt;li&gt;Soporte YAML&lt;/li&gt;
&lt;li&gt;Cómodo gestor de ficheros&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Instalación:&lt;/strong&gt; Descarga e instala &lt;a href=&quot;http://netbeans.org/downloads/start.html?platform=linux&amp;amp;lang=en&amp;amp;option=php&amp;amp;version=6.8&quot;&gt;Netbeans PHP&lt;/a&gt;
&lt;h3&gt;Eclipse con plugin PHP de Easyeclipse&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/00c63988c2967013d153de0cc6d63ba84a19f182.jpg&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Características:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Bastante lento&lt;/li&gt;
&lt;li&gt;Integrado con SVN Y CVS&lt;/li&gt;
&lt;li&gt;Autocompletado&lt;/li&gt;
&lt;li&gt;Cómodo gestor de ficheros&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Instalación:&lt;/strong&gt; Instala primero eclipse mediante tu gestor de descargas (pej: Synaptic o mediante &lt;a href=&quot;http://www.eclipse.org/downloads/&quot;&gt;descarga directa&lt;/a&gt;) y posteriormente descarga e instala &lt;a href=&quot;http://www.easyeclipse.org/site/plugins/phpeclipse.html&quot;&gt;el plugin de Easyeclipse&lt;/a&gt;
&lt;h3&gt;Gedit&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/63cc9bc24c63d8833acf02949951a63d1e10cbb9.png&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Características:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Básico&lt;/li&gt;
&lt;li&gt;Muy rápido&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Instalación:&lt;/strong&gt; Dado su amplio uso puedes utilizar tu gestor de paquetes preferido para instalarlo (pej: Synaptic)
&lt;h3&gt;Kate&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/422af7954c0027aafcbdcb9832bbddc45419de88.png&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Características:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Básico&lt;/li&gt;
&lt;li&gt;Muy rápido&lt;/li&gt;
&lt;li&gt;Cómodo gestor de ficheros&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Instalación:&lt;/strong&gt; Dado su amplio uso puedes utilizar tu gestor de paquetes preferido para instalarlo (pej: Synaptic)','content_en'=>'Some of the best developing environments for Linux are, under my judgment, the next:
&lt;h3&gt;Netbeans PHP&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/486772c9c9525c30767812a5558fc647a3844c46.png&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Features:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Fast&lt;/li&gt;
&lt;li&gt;Symfony integrated&lt;/li&gt;
&lt;li&gt;SVN integrated&lt;/li&gt;
&lt;li&gt;Autocomplete&lt;/li&gt;
&lt;li&gt;CSS support&lt;/li&gt;
&lt;li&gt;Yaml support&lt;/li&gt;
&lt;li&gt;Easy-use filesystem&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Installation:&lt;/strong&gt; Download and install &lt;a href=&quot;http://netbeans.org/downloads/start.html?platform=linux&amp;amp;lang=en&amp;amp;option=php&amp;amp;version=6.8&quot;&gt;Netbeans PHP&lt;/a&gt;
&lt;h3&gt;Eclipse with PHP Easyeclipse plugin&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/00c63988c2967013d153de0cc6d63ba84a19f182.jpg&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Features:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Slow&lt;/li&gt;
&lt;li&gt;SVN and CVS integrated&lt;/li&gt;
&lt;li&gt;Autocomplete&lt;/li&gt;
&lt;li&gt;Easy-use filesystem&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Installation:&lt;/strong&gt; Install first Eclipse with your favorite package manager program (for example: Synaptic or &lt;a href=&quot;http://www.eclipse.org/downloads/&quot;&gt;direct download&lt;/a&gt;) and after download and install &lt;a href=&quot;http://www.easyeclipse.org/site/plugins/phpeclipse.html&quot;&gt;Easyeclipse plugin&lt;/a&gt;
&lt;h3&gt;Gedit&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/63cc9bc24c63d8833acf02949951a63d1e10cbb9.png&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Features:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Basic&lt;/li&gt;
&lt;li&gt;Very fast&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Installation:&lt;/strong&gt; Due to the commonly use, you can download it from your favorite package manager program (for example: Synaptic)
&lt;h3&gt;Kate&lt;/h3&gt;
&lt;img src=&quot;/uploads/images/full/422af7954c0027aafcbdcb9832bbddc45419de88.png&quot; alt=&quot;&quot; /&gt; &lt;strong&gt;Features:&lt;/strong&gt;
&lt;ul&gt;
&lt;li&gt;Basic&lt;/li&gt;
&lt;li&gt;Very fast&lt;/li&gt;
&lt;li&gt;Easy-use filesystem&lt;/li&gt;
&lt;/ul&gt;
&lt;strong&gt;Installation:&lt;/strong&gt; Due to the commonly use, you can download it from your favorite package manager program (for example: Synaptic)','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-03-28 19:44:28','updated_at'=>'2013-08-24 19:45:20','visits'=>'1288','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-03-29','is_published'=>'1','updated_note'=>''),
  array('id'=>'34','title_es'=>'Acortar URL\'s mediante API j.mp o bit.ly con PHP','title_en'=>'Short URL\'s through j.mp or bit.ly API with PHP','slug_es'=>'acortar-url-s-mediante-api-j-mp-o-bit-ly-con-php','slug_en'=>'short-url-s-through-j-mp-or-bit-ly-api-with-php','description_es'=>'Como acortar URL\'s mediante el API de j.mp o bit.ly con una sencilla funcion PHP y cURL','description_en'=>'How to short URL\'s through j.mp or bit.ly API with a simple PHP function and cURL','content_es'=>'Primero, para utilizar el API de bit.ly, debes &lt;a href=&quot;http://j.mp/account/register&quot;&gt;registrarte&lt;/a&gt; y &lt;a href=&quot;http://bit.ly/account/your_api_key&quot;&gt;obtener una clave de api&lt;/a&gt;. Una vez hecho esto, mediante cURL podemos acortar una URL llamando a la siguiente sencilla función PHP:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;function acortarUrl ($url)
{
  $usuarioBitly = \'PRUEBA\';
  $claveAPI = \'CLAVE_API\';

  $ch = curl_init();

  //Opciones curl
  curl_setopt($ch, CURLOPT_URL, \'http://api.j.mp/v3/shorten?login=\' . $usuarioBitly . \'&amp;amp;apiKey=\' . $claveAPI .\'&amp;amp;uri=\' . htmlspecialchars($url) . \'&amp;amp;format=txt\');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //Ejecución
  $ret = curl_exec($ch);
  curl_close($ch);
  return $ret;
}&lt;/pre&gt;','content_en'=>'First, in order to use the bit.ly API, you must &lt;a href=&quot;http://j.mp/account/register&quot;&gt;sign up&lt;/a&gt; and &lt;a href=&quot;http://bit.ly/account/your_api_key&quot;&gt;get an api key&lt;/a&gt;. Once done, with cURL we can short a URL calling the next simple PHP function:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;function shortUrl ($url)
{
  $bitlyUser = \'TEST\';
  $apiKey = \'API_KEY\';

  $ch = curl_init();

  //cURL options
  curl_setopt($ch, CURLOPT_URL, \'http://api.j.mp/v3/shorten?login=\' . $bitlyUser . \'&amp;amp;apiKey=\' . $apiKey .\'&amp;amp;uri=\' . htmlspecialchars($url) . \'&amp;amp;format=txt\');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //Execution
  $ret = curl_exec($ch);
  curl_close($ch);
  return $ret;
}&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-04-02 19:21:56','updated_at'=>'2013-08-24 03:04:06','visits'=>'1665','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-04-03','is_published'=>'1','updated_note'=>''),
  array('id'=>'35','title_es'=>'Optimizar web con addon \'page speed\' para Firefox','title_en'=>'Optimize website with \'page speed\' Firefox addon','slug_es'=>'optimizar-web-con-addon-page-speed-para-firefox','slug_en'=>'optimize-website-with-page-speed-firefox-addon','description_es'=>'Acelera el tiempo de respuesta de tu servidor para servir páginas web con el addon \'page speed\' para Firefox','description_en'=>'Speed up your server page response with \'page speed\' addon for Firefox','content_es'=>'Para saber en que podemos mejorar nuestra página web para servirla más rápidamente a un internauta, podemos utilizar la increiblemente útil herramienta &quot;page speed&quot; de Google.&lt;br /&gt;&lt;br /&gt;Para ello necesitamos tener Firefox con el &lt;a href=&quot;https://addons.mozilla.org/es-ES/firefox/addon/1843&quot;&gt;addon Firebug&lt;/a&gt; instalado. Una vez que cumplamos con estos requisitos, solo tenemos que instalar el &lt;a href=&quot;http://code.google.com/intl/es-ES/speed/page-speed/download.html&quot;&gt;addon &quot;page speed&quot;&lt;/a&gt; y empezar a optimizar.','content_en'=>'If you want to know how you can optimize or speed up your server page response, you can use the incredibly useful tool &quot;page speed&quot; of Google.&lt;br /&gt;&lt;br /&gt;First, we must have installed Firefox with &lt;a href=&quot;https://addons.mozilla.org/en-EN/firefox/addon/1843&quot;&gt;Firebug addon&lt;/a&gt; installed. Once done, we only have to install &lt;a href=&quot;http://code.google.com/intl/en-EN/speed/page-speed/download.html&quot;&gt;&quot;page speed&quot; addon&lt;/a&gt; and start optimizing.&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>'768dee0729284f45eb004f32ccd658704813294a.jpg','created_at'=>'2010-04-03 12:19:58','updated_at'=>'2013-08-23 12:34:28','visits'=>'1176','via_url'=>'','download_url'=>'http://code.google.com/intl/es-ES/speed/page-speed/download.html','url'=>'http://code.google.com/intl/es-ES/speed/page-speed/index.html','info_url'=>'http://code.google.com/intl/es-ES/speed/page-speed/docs/using.html','published_at'=>'2010-04-03','is_published'=>'1','updated_note'=>''),
  array('id'=>'36','title_es'=>'Construir un analizador léxico con JavaCC','title_en'=>'Build a lexical analyzer with JavaCC','slug_es'=>'construir-un-analizador-lexico-con-javacc','slug_en'=>'build-a-lexical-analyzer-with-javacc','description_es'=>'Como crear un analizador léxico con JavaCC para un determinado lenguaje de programación','description_en'=>'How to create a lexical analyzer with JavaCC for a defined programming language','content_es'=>'En la programación, un analizador léxico es la parte de un compilador o analizador (parser) que trata de descomponer el lenguaje proporcionado como entrada en tokens.&lt;br /&gt;&lt;br /&gt;Un token es la unidad mínima con significado. Tokens habituales son los &lt;strong&gt;identificadores&lt;/strong&gt;, &lt;strong&gt;enteros&lt;/strong&gt;, &lt;strong&gt;flotantes&lt;/strong&gt;, &lt;strong&gt;constantes&lt;/strong&gt;, etc.&lt;br /&gt;&lt;br /&gt;Para el desarrollo, utilizaremos una herramienta increíblemente útil, &lt;strong&gt;JavaCC&lt;/strong&gt;. Mediante &lt;strong&gt;expresiones regulares&lt;/strong&gt; podemos definir cómodamente los tokens de nuestro lenguaje.&lt;br /&gt;
&lt;h3&gt;Sobre JavaCC:&lt;/h3&gt;
JavaCC es una herramienta que generalmente se utiliza para generar analizadores léxicos y sintácticos (parsers) de una forma muy cómoda, actualmente se encuentra mantenida por Sun Microsystems y es muy robusta, eficiente y fiable. Puedes descargarla desde el &lt;a href=&quot;http://javacc.java.net/&quot;&gt;repositorio oficial&lt;/a&gt; o mediante un &lt;a href=&quot;http://eclipse-javacc.sourceforge.net/&quot;&gt;plugin para Eclipse&lt;/a&gt;.&lt;br /&gt;
&lt;h3&gt;Caso práctico, construir analizador léxico para un determinado lenguaje de programación:&lt;/h3&gt;
Las especificaciones de nuestro lenguaje son:&lt;br /&gt;&lt;br /&gt; &lt;span style=&quot;text-decoration: underline;&quot;&gt;&lt;strong&gt;Tokens: &lt;/strong&gt;&lt;/span&gt;
&lt;ul&gt;
&lt;li&gt;&lt;strong&gt;Constantes&lt;/strong&gt;:
&lt;ul&gt;
&lt;li&gt;&lt;strong&gt;Cadenas&lt;/strong&gt;: Caracteres entrecomillados, ejemplo: &quot;cadena&quot;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Enteros&lt;/strong&gt;: Números positivos, ejemplo: 234 o 0&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Lógicas&lt;/strong&gt;: TRUE y FALSE&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Identificadores&lt;/strong&gt;: Todos los identificadores son una secuencia de letras (a-zA-Z) y números que obligatoriamente deben comenzar con una letra (y no un número). &lt;strong&gt;Los identificadores que se refieran a cadenas terminarán en &quot;$&quot;&lt;/strong&gt;.&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Palabras reservadas:&lt;/strong&gt; En el lenguaje hay palabras reservadas que darán vida al lenguaje, estas serán: &quot;&lt;strong&gt;not, if, end, let, call, then, case, else, input, print, select y static&lt;/strong&gt;&quot;.&lt;/li&gt;
&lt;li&gt;Además el lenguaje será &quot;&lt;strong&gt;case insensitive&lt;/strong&gt;&quot; o lo que es lo mismo, un identificador llamado &quot;id&quot; apuntará al mismo lugar que &quot;Id&quot;, &quot;iD&quot; o &quot;ID&quot;. &lt;strong&gt;De igual forma será para las palabras reservadas&lt;/strong&gt;.&lt;/li&gt;
&lt;/ul&gt;
&lt;h3&gt;Código JavaCC (exparser.jj):&lt;/h3&gt;
&lt;pre class=&quot;java&quot;&gt;options {
  IGNORE_CASE = true;
}
PARSER_BEGIN(ExampleParser)

  public class ExampleParser {
    //Ejecución del analizador
    public static void main ( String args [ ] ) {

      //Inicialización del analizador
      ExampleParser parser;

      if(args.length == 0){
        System.out.println (&quot;ExampleParser: Leyendo de la entrada estandar ...&quot;);
        parser = new ExampleParser(System.in);
      }
      else if(args.length == 1){
        System.out.println (&quot;ExampleParser: Leyendo de fichero &quot; + args[0] + &quot; ...&quot; );
        try {
          parser = new ExampleParser(new java.io.FileInputStream(args[0]));
        }
        catch(java.io.FileNotFoundException e) {
          System.out.println (&quot;ExampleParser: El fichero &quot; + args[0] + &quot; no ha sido encontrado.&quot;);
          return;
        }
      }
      else {
        System.out.println (&quot;ExampleParser:  Debes utilizarlo de una de las siguientes formas:&quot;);
        System.out.println (&quot;         java ExampleParser &amp;lt; fichero&quot;);
        System.out.println (&quot;Or&quot;);
        System.out.println (&quot;         java ExampleParser fichero&quot;);
        return ;
      }
      try {
        compilador.Start();
        System.out.println (&quot;ExampleParser: La entrada ha sido leida con éxito.&quot;);
      }
      catch(ParseException e){
        System.out.println (&quot;ExampleParser: Ha ocurrido un error durante el análisis.&quot;);
        System.out.println (e.getMessage());
      }
      catch(TokenMgrError e){
        System.out.println (&quot;ExampleParser: Ha ocurrido un error.&quot;);
        System.out.println (e.getMessage());
      }
    }
  }
PARSER_END(ExampleParser)

//ESTRUCTURAS Y CARACTERES DE ESCAPE
SKIP : {
 &quot; &quot;
|  &quot;\\t&quot;
|  &quot;\\n&quot;
|  &quot;\\r&quot;
|  &amp;lt;&quot;rem&quot; (~[&quot;\\n&quot;,&quot;\\r&quot;])* (&quot;\\n&quot; | &quot;\\r&quot; | &quot;\\r\\n&quot;)&amp;gt;
}
//TOKENS ESTÁTICOS
TOKEN : {
 &amp;lt;INTEGER_CONSTANT: (&amp;lt;DIGIT&amp;gt;)+&amp;gt;
|  &amp;lt;LOGIC_CONSTANT: &quot;true&quot; | &quot;false&quot; | &quot;-1&quot;&amp;gt;
|  &amp;lt;STRING_CONSTANT: &quot;\\&quot;&quot; ( ~[&quot;\\&quot;&quot;,&quot;\\\\&quot;,&quot;\\n&quot;,&quot;\\r&quot;] | &quot;\\\\&quot; ( [&quot;n&quot;,&quot;t&quot;,&quot;b&quot;,&quot;r&quot;,&quot;f&quot;,&quot;\\\\&quot;,&quot;\\\'&quot;,&quot;\\&quot;&quot;] | ( [&quot;\\n&quot;,&quot;\\r&quot;] | &quot;\\r\\n&quot;)))* &quot;\\&quot;&quot;&amp;gt;
|  &amp;lt;#DIGIT: [&quot;0&quot;-&quot;9&quot;]&amp;gt;
}
//PALABRAS RESERVADAS
TOKEN : {
 &amp;lt;NOT: &quot;not&quot;&amp;gt;
|  &amp;lt;IF: &quot;if&quot;&amp;gt;
|  &amp;lt;END: &quot;end&quot;&amp;gt;
|  &amp;lt;SUB: &quot;sub&quot;&amp;gt;
|  &amp;lt;LET: &quot;let&quot;&amp;gt;
|  &amp;lt;CALL: &quot;call&quot;&amp;gt;
|  &amp;lt;THEN: &quot;then&quot;&amp;gt;
|  &amp;lt;CASE: &quot;case&quot;&amp;gt;
|  &amp;lt;ELSE: &quot;else&quot;&amp;gt;
|  &amp;lt;INPUT: &quot;input&quot;&amp;gt;
|  &amp;lt;PRINT: &quot;print&quot;&amp;gt;
|  &amp;lt;SELECT: &quot;select&quot;&amp;gt;
|  &amp;lt;STATIC: &quot;static&quot;&amp;gt;
}
//TOKEN IDENTIFICADOR
TOKEN : {
 &amp;lt;IDENTIFIER: &amp;lt;LETTER&amp;gt;(&amp;lt;LETTER&amp;gt;|&amp;lt;DIGIT&amp;gt;)*([&quot;$&quot;])?&amp;gt;
|  &amp;lt;#LETTER: ([&quot;a&quot;-&quot;z&quot;,&quot;A&quot;-&quot;Z&quot;])&amp;gt;
}

//UNIDAD PRINCIPAL
void Start () : {}
{
  (
    INTEGER_CONSTANT | STRING_CONSTANT | LOGIC_CONSTANT |
    NOT | IF | END | SUB | LET | CALL | THEN | CASE | ELSE | INPUT | PRINT | SELECT | STATIC |
    IDENTIFIER
  )*
  &amp;lt;EOF&amp;gt;
}&lt;/pre&gt;
Para compilar este fichero, se debe hacer con &quot;&lt;strong&gt;javacc&lt;/strong&gt;&quot; y posteriormente con &quot;&lt;strong&gt;javac&lt;/strong&gt;&quot;:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ javacc exparser.jj
$ javac *.java&lt;/pre&gt;
Para ejecutar el programa:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ java ExampleParser fichero&lt;/pre&gt;
Recuerda que este programa es un analizador léxico, no trata de comprobar las estructuras del lenguaje ni compilará el fichero en código binario. Puedes seguir desarrollando el código y acabar construyendo un compilador o un parser (analizador).&lt;br /&gt;','content_en'=>'In programming, a lexical analyzer is the part of a compiler or a parser that break the input language into tokens.&lt;br /&gt;&lt;br /&gt;A token is the minimal meaning component. Common tokens are &lt;strong&gt;identifiers&lt;/strong&gt;, &lt;strong&gt;integers&lt;/strong&gt;, &lt;strong&gt;floats&lt;/strong&gt;, &lt;strong&gt;constants&lt;/strong&gt;, etc.&lt;br /&gt;&lt;br /&gt;For building it, we are going to use an incredible useful tool, &lt;strong&gt;JavaCC&lt;/strong&gt;. With simple &lt;strong&gt;regular expressions&lt;/strong&gt; we can define our language tokens.&lt;br /&gt;
&lt;h3&gt;About JavaCC:&lt;/h3&gt;
JavaCC is a tool usually used for parsers and is actually maintained by Sun Microsystems. Is very simple, efficient and safe. You can freely download it from the &lt;a href=&quot;http://javacc.java.net/&quot;&gt;official website&lt;/a&gt; or like a &lt;a href=&quot;http://eclipse-javacc.sourceforge.net/&quot;&gt;Eclipse plugin&lt;/a&gt;.&lt;br /&gt;
&lt;h3&gt;Practical case, build a lexical analyzer for a determined defined language:&lt;/h3&gt;
Our language specifications are:&lt;br /&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;&lt;strong&gt;Tokens: &lt;/strong&gt;&lt;/span&gt;
&lt;ul&gt;
&lt;li&gt;&lt;strong&gt;Constants&lt;/strong&gt;:
&lt;ul&gt;
&lt;li&gt;&lt;strong&gt;Strings&lt;/strong&gt;: Characters between quotes, example: &quot;cadena&quot;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Integers&lt;/strong&gt;: Positive numbers, example: 234 o 0&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Logicals&lt;/strong&gt;: TRUE and FALSE&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Identifiers&lt;/strong&gt;: All the identifiers are a sequence of letters (a-zA-Z) and numbers that must start with a letter (and not a number). The &lt;strong&gt;identifiers that refers to strings must end with a dollar&lt;/strong&gt; ($).&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;Reserved words&lt;/strong&gt;: In the language are some reserved words that refers to programming structures that brings to life the language. Those are &quot;&lt;strong&gt;not, if, end, let, call, then, case, else, input, print, select, and static&lt;/strong&gt;&quot;.&lt;/li&gt;
&lt;li&gt;Also, the language is &lt;strong&gt;case insensitive&lt;/strong&gt;, that is, an identifier named &quot;id&quot; refers to the same point that another called &quot;Id&quot;, &quot;iD&quot; or &quot;ID&quot;. The same methodology for reserved words.&lt;/li&gt;
&lt;/ul&gt;
&lt;h3&gt;JavaCC code (exparser.jj):&lt;/h3&gt;
&lt;pre class=&quot;java&quot;&gt;options {
  IGNORE_CASE = true;
}
PARSER_BEGIN(ExampleParser)

  public class ExampleParser {
    //Parser execution
    public static void main ( String args [ ] ) {

      //Parser initialization
      ExampleParser parser;

      if(args.length == 0){
        System.out.println (&quot;ExampleParser: Reading input ...&quot;);
        parser = new ExampleParser(System.in);
      }
      else if(args.length == 1){
        System.out.println (&quot;ExampleParser: Reading the file &quot; + args[0] + &quot; ...&quot; );
        try {
          parser = new ExampleParser(new java.io.FileInputStream(args[0]));
        }
        catch(java.io.FileNotFoundException e) {
          System.out.println (&quot;ExampleParser: The file &quot; + args[0] + &quot; was not found.&quot;);
          return;
        }
      }
      else {
        System.out.println (&quot;ExampleParser:  You must use one of the following:&quot;);
        System.out.println (&quot;         java ExampleParser &amp;lt; file&quot;);
        System.out.println (&quot;Or&quot;);
        System.out.println (&quot;         java ExampleParser file&quot;);
        return ;
      }
      try {
        compilador.Start();
        System.out.println (&quot;ExampleParser: The input was readed sucessfully.&quot;);
      }
      catch(ParseException e){
        System.out.println (&quot;ExampleParser: There was an error during the parse.&quot;);
        System.out.println (e.getMessage());
      }
      catch(TokenMgrError e){
        System.out.println (&quot;ExampleParser: There was an error.&quot;);
        System.out.println (e.getMessage());
      }
    }
  }
PARSER_END(ExampleParser)

//STRUCTURES AND CHARACTERS TO SCAPE
SKIP : {
 &quot; &quot;
|  &quot;\\t&quot;
|  &quot;\\n&quot;
|  &quot;\\r&quot;
|  &amp;lt;&quot;rem&quot; (~[&quot;\\n&quot;,&quot;\\r&quot;])* (&quot;\\n&quot; | &quot;\\r&quot; | &quot;\\r\\n&quot;)&amp;gt;
}
//STATIC TOKENS
TOKEN : {
 &amp;lt;INTEGER_CONSTANT: (&amp;lt;DIGIT&amp;gt;)+&amp;gt;
|  &amp;lt;LOGIC_CONSTANT: &quot;true&quot; | &quot;false&quot; | &quot;-1&quot;&amp;gt;
|  &amp;lt;STRING_CONSTANT: &quot;\\&quot;&quot; ( ~[&quot;\\&quot;&quot;,&quot;\\\\&quot;,&quot;\\n&quot;,&quot;\\r&quot;] | &quot;\\\\&quot; ( [&quot;n&quot;,&quot;t&quot;,&quot;b&quot;,&quot;r&quot;,&quot;f&quot;,&quot;\\\\&quot;,&quot;\\\'&quot;,&quot;\\&quot;&quot;] | ( [&quot;\\n&quot;,&quot;\\r&quot;] | &quot;\\r\\n&quot;)))* &quot;\\&quot;&quot;&amp;gt;
|  &amp;lt;#DIGIT: [&quot;0&quot;-&quot;9&quot;]&amp;gt;
}
//RESERVED WORDS
TOKEN : {
 &amp;lt;NOT: &quot;not&quot;&amp;gt;
|  &amp;lt;IF: &quot;if&quot;&amp;gt;
|  &amp;lt;END: &quot;end&quot;&amp;gt;
|  &amp;lt;SUB: &quot;sub&quot;&amp;gt;
|  &amp;lt;LET: &quot;let&quot;&amp;gt;
|  &amp;lt;CALL: &quot;call&quot;&amp;gt;
|  &amp;lt;THEN: &quot;then&quot;&amp;gt;
|  &amp;lt;CASE: &quot;case&quot;&amp;gt;
|  &amp;lt;ELSE: &quot;else&quot;&amp;gt;
|  &amp;lt;INPUT: &quot;input&quot;&amp;gt;
|  &amp;lt;PRINT: &quot;print&quot;&amp;gt;
|  &amp;lt;SELECT: &quot;select&quot;&amp;gt;
|  &amp;lt;STATIC: &quot;static&quot;&amp;gt;
}
//IDENTIFIER TOKEN
TOKEN : {
 &amp;lt;IDENTIFIER: &amp;lt;LETTER&amp;gt;(&amp;lt;LETTER&amp;gt;|&amp;lt;DIGIT&amp;gt;)*([&quot;$&quot;])?&amp;gt;
|  &amp;lt;#LETTER: ([&quot;a&quot;-&quot;z&quot;,&quot;A&quot;-&quot;Z&quot;])&amp;gt;
}

//MAIN UNIT
void Start () : {}
{
  (
    INTEGER_CONSTANT | STRING_CONSTANT | LOGIC_CONSTANT |
    NOT | IF | END | SUB | LET | CALL | THEN | CASE | ELSE | INPUT | PRINT | SELECT | STATIC |
    IDENTIFIER
  )*
  &amp;lt;EOF&amp;gt;
}&lt;/pre&gt;
For compiling this file you have to use &quot;&lt;strong&gt;javacc&lt;/strong&gt;&quot; and after &quot;&lt;strong&gt;javac&lt;/strong&gt;&quot;:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ javacc exparser.jj
$ javac *.java&lt;/pre&gt;
For executing the program:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ java ExampleParser file&lt;/pre&gt;
Remember that the previous code is for the lexical analyzer, it not try to check the programming structures or compiling it to binary code, it only break the input into tokens. However, you can follow the development and make a compiler or a parser.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-04-08 15:28:40','updated_at'=>'2013-08-24 07:43:07','visits'=>'2726','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-04-15','is_published'=>'1','updated_note'=>''),
  array('id'=>'37','title_es'=>'Obtener clave WEP WIFI con Aircrack','title_en'=>'Crack WIFI network\'s WEP password with Aircrack','slug_es'=>'obtener-clave-wep-wifi-con-aircrack','slug_en'=>'crack-wifi-network-s-wep-password-with-aircrack','description_es'=>'Como descifrar claves WEP WIFI con la suite Aircrack','description_en'=>'How to crack a WIFI network\'s WEP password with Aircrack suite','content_es'=>'El primer paso es &lt;a href=&quot;http://www.aircrack-ng.org/doku.php?id=downloads&amp;amp;DokuWiki=d66620079141170d5df90612b298008d&quot;&gt;descargar&lt;/a&gt; e instalar la suite Aircrack-ng.&lt;br /&gt;&lt;br /&gt;Para descifrar la clave WEP de una red wifi debemos seguir una serie de pasos:&lt;br /&gt;&lt;br /&gt;Cambiamos la dirección hardware (MAC) de nuestro equipo:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# ifconfig wlan0 down
# ifconfig wlan0 hw ether 00:11:22:33:44:55&lt;/pre&gt;
Comenzamos monitorización de paquetes en la interfaz wifi, para ello utilizamos la herramienta airmon-ng:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# airmon-ng start wlan0&lt;/pre&gt;
Descubrimos todas las redes wifi, de los datos que saldrán debemos fijarnos en la red que queremos atacar, probablemente aquella que tenga una mejor señal:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# airodump-ng wlan0&lt;/pre&gt;
Cuando ejecutemos el comando anterior, aparecerá una pantalla parecida a la siguiente:&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/bbdd5069a2c63a3aabf9b2ad26df7d528c53c542.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;Este paso solo sirve para averiguar todo lo que necesitamos saber para atacar la red que nos interesa (normalmente la más cercana, la que tiene un menor potencia, columna PWR). Solo nos fijaremos en los campos que hemos marcado como azulados, el &lt;strong&gt;BSSID&lt;/strong&gt; (dirección MAC del punto de acceso atacado), el &lt;strong&gt;PWR&lt;/strong&gt; (poder de la señal a menor valor mejor), el CH (canal), &lt;strong&gt;ENC&lt;/strong&gt; y &lt;strong&gt;CIPHER&lt;/strong&gt; (el tipo de seguridad, WEP para este tutorial)  y el &lt;strong&gt;ESSID&lt;/strong&gt; (nombre del punto de acceso).&lt;br /&gt;&lt;br /&gt;Una vez obtenidos los datos, podemos empezar a capturar paquetes de la red que nos interese atacar, en nuestro caso hemos seleccionado &quot;WLAN_DF&quot;, cuyo canal es el &lt;strong&gt;2&lt;/strong&gt; y cuyo &lt;strong&gt;BSSID&lt;/strong&gt; es 00:23:F8:A0:C4:A2:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# airodump-ng -c 2 -w paquetes --bssid 00:23:F8:A0:C4:A2 wlan0&lt;/pre&gt;
En este punto solo queda esperar a recolectar de unos 20000 a 40000 paquetes, dependerá del uso de la red.
&lt;h3&gt;Opcional, inyección de paquetes&lt;/h3&gt;
Solo si nuestro driver para la tarjeta de red admite inyección de paquetes, podemos aumentar de forma considerable la velocidad de recolección de paquetes utilizando la herramienta aireplay-ng de la suite de Aircrack, alguno de los métodos son los siguientes:
&lt;pre class=&quot;bash&quot;&gt;# aireplay-ng -1 0 -a 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 -e WLAN_DF wlan0
# aireplay-ng -3 -b 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 wlan0&lt;/pre&gt;
&lt;h3&gt;Obtener la clave de red&lt;/h3&gt;
Una vez obtenidos paquetes suficientes (de 20000 a 40000 normalmente) utilizaremos aircrack-ng para descifrar la contraseña.&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt; # aircrack-ng paquetes-01.cap&lt;/pre&gt;','content_en'=>'The first step is to &lt;a href=&quot;http://www.aircrack-ng.org/doku.php?id=downloads&amp;amp;DokuWiki=d66620079141170d5df90612b298008d&quot;&gt;download&lt;/a&gt; the Aicrack-ng suite.&lt;br /&gt;&lt;br /&gt;In order to decrypt the WEP key we have to follow the next simple steps:&lt;br /&gt;&lt;br /&gt;First, change your hardware address (MAC):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# ifconfig wlan0 down
# ifconfig wlan0 hw ether 00:11:22:33:44:55&lt;/pre&gt;
Now, start package monitoring in the wifi interface (for ex: wlan0), for it, we have to use airmon-ng tool:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# airmon-ng start wlan0&lt;/pre&gt;
At this point we need the data necessary to attack the interested network, we will obtain it with:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# airodump-ng wlan0&lt;/pre&gt;
It will prompt something like this:&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/bbdd5069a2c63a3aabf9b2ad26df7d528c53c542.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;This step is only to get the information to attack the net. From all the networks, probably the best choose will be the one with the less power (PWR column). Once we have chosen one of those, we have to remember the blue data, the &lt;strong&gt;BSSID&lt;/strong&gt; (MAC address of the Access point), &lt;strong&gt;PWR&lt;/strong&gt; (Power of the signal), &lt;strong&gt;CH&lt;/strong&gt; (Channel of the network), &lt;strong&gt;ENC&lt;/strong&gt; and &lt;strong&gt;CIPHER&lt;/strong&gt; (Network security type) and &lt;strong&gt;ESSID&lt;/strong&gt; (Access Point name).&lt;br /&gt;&lt;br /&gt;Once we have all the data needed to crack the wifi we can start sniffing packages of the interested network. In our case we have selected &quot;WLAN_DF&quot;, in channel 2 with BSSID 00:23:F8:A0:C4:A2:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# airodump-ng -c 2 -w packages --bssid 00:23:F8:A0:C4:A2 wlan0&lt;/pre&gt;
At this point we only have to wait to collect about 20000 - 40000 packages, it depends from the network use.&lt;br /&gt;
&lt;h3&gt;Optional, package injection&lt;/h3&gt;
If our wifi driver supports package injection we can increase the speed of package collection using the aireplay-ng tool. The use of it is:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# aireplay-ng -1 0 -a 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 -e WLAN_DF wlan0
# aireplay-ng -3 -b 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 wlan0&lt;/pre&gt;
&lt;h3&gt;Getting the network key&lt;/h3&gt;
Once recollected a good amount of packages (20000 - 40000) we can try to decrypt the key with the final tool, aircrack-ng:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt; # aircrack-ng paquetes-01.cap&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-04-17 11:48:11','updated_at'=>'2013-08-24 07:27:33','visits'=>'2366','via_url'=>'','download_url'=>'http://www.aircrack-ng.org/doku.php?id=downloads&DokuWiki=d66620079141170d5df90612b298008d','url'=>'','info_url'=>'','published_at'=>'2010-04-17','is_published'=>'1','updated_note'=>''),
  array('id'=>'38','title_es'=>'Buscar ficheros en Linux','title_en'=>'Find files in Linux','slug_es'=>'buscar-ficheros-en-linux','slug_en'=>'find-files-in-linux','description_es'=>'Como buscar ficheros en nuestro sistema Linux con el comando "find"','description_en'=>'How to find files in our Linux system with the "find" command','content_es'=>'Buscar ficheros en nuestro sistema Linux no puede ser mas fácil. Utilizando el comando &quot;find&quot; podemos encontrar cualquier coincidencia con un cierto patrón especificado. Así si queremos buscar un fichero con nombre &quot;FICHERO&quot; en la carpeta actual de trabajo utilizaremos el siguiente comando en la consola:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ find -name FICHERO&lt;/pre&gt;
También es posible utilizar expresiones tipo glob (expresiones regulares) para encontrar patrones coincidentes:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ find -name *.pdf&lt;/pre&gt;
La búsqueda es recursiva, esto es, buscará también dentro de las subcarpetas que se encuentren dentro del directorio de trabajo, asi pues, para buscar dentro de todo el disco duro (y sin problema de permisos):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# find / -name FICHERO&lt;/pre&gt;','content_en'=>'Find files in our Linux system can\'t be as easy as using the &quot;find&quot; command. Using it we can find any matching expression inserted in the command line. If we want to find a file named &quot;FILE&quot; in the current work directory, we can write the next statement:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ find -name FILE&lt;/pre&gt;
Also we can use glob type expressions (regular expressions) like:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ find -name *.pdf&lt;/pre&gt;
The search is recursive, it will search into all directories under the current work directory. If we want to search into all the file system without permission restrictions we must use:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# find / -name FILE&lt;/pre&gt;
&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-05-04 05:38:16','updated_at'=>'2013-08-24 20:09:20','visits'=>'1105','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-05-04','is_published'=>'1','updated_note'=>''),
  array('id'=>'39','title_es'=>'Enviar un email con Symfony y Swift Mailer','title_en'=>'Send and Email with Symfony and Swift Mailer','slug_es'=>'enviar-un-email-con-symfony-y-swift-mailer','slug_en'=>'send-and-email-with-symfony-and-swift-mailer','description_es'=>'Como enviar un email desde una acción con Symfony 1.4 o 1.3','description_en'=>'How to send an email from an action with Symfony 1.4 or 1.3','content_es'=>'&lt;strong&gt;Symfony 1.4 &lt;/strong&gt;o &lt;strong&gt;1.3&lt;/strong&gt; esta integrado con &lt;a href=&quot;http://swiftmailer.org/&quot;&gt;Swift Mailer&lt;/a&gt;, podemos enviar un email desde cualquier acción de la siguiente forma:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;//Creamos el email
$mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

//Creamos el mensaje
$message = Swift_Message::newInstance(\'Asunto\')
  -&amp;gt;setFrom(array(\'usuario@prueba.com\' =&amp;gt; \'Nombre usuario\'))
  -&amp;gt;setTo(array(\'destinatario@prueba.com\' =&amp;gt; \'Nombre destinatario\'))
  -&amp;gt;setBody(\'Contenido del email\')
;

//Enviamos el email
$mailer-&amp;gt;send($message);&lt;/pre&gt;','content_en'=>'&lt;strong&gt;Symfony 1.4&lt;/strong&gt; or &lt;strong&gt;1.3&lt;/strong&gt; comes integrated with &lt;a href=&quot;http://swiftmailer.org/&quot;&gt;Swift Mailer&lt;/a&gt;, we can send an email from every action with the next code:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;//Mail creation
$mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

//Message creation
$message = Swift_Message::newInstance(\'Subject\')
  -&amp;gt;setFrom(array(\'user@test.com\' =&amp;gt; \'Username\'))
  -&amp;gt;setTo(array(\'to@test.com\' =&amp;gt; \'Receiver name\'))
  -&amp;gt;setBody(\'Email content\')
;

//Send the email
$mailer-&amp;gt;send($message);&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-05-05 18:45:01','updated_at'=>'2013-08-24 17:02:10','visits'=>'2986','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-05-06','is_published'=>'1','updated_note'=>''),
  array('id'=>'40','title_es'=>'Integrar GeSHi con aplicaciones PHP','title_en'=>'Integrate GeSHi with PHP applications','slug_es'=>'integrar-geshi-con-aplicaciones-php','slug_en'=>'integrate-geshi-with-php-applications','description_es'=>'Como integrar el popular resaltador de sintaxis GeSHi en aplicaciones PHP','description_en'=>'How to integrate the popular GeSHi syntax highlighter with PHP applications','content_es'=>'GeSHi (&lt;strong&gt;GE&lt;/strong&gt;neric &lt;strong&gt;S&lt;/strong&gt;yntax &lt;strong&gt;HI&lt;/strong&gt;ghlighter) es una popular librería PHP para resaltar la sintaxis (colorearla) de múltiples lenguajes de programación y marcado. Hay diversas formas de integrarlo con nuestra aplicación PHP, una de las formas mediante la cual se puede integrar de forma automática es haciendo uso de &lt;strong&gt;expresiones regulares&lt;/strong&gt;.&lt;br /&gt;&lt;br /&gt;Dado que la ejecución de GeSHi y el uso de expresiones regulares es extremadamente lenta, es muy recomendable utilizar sistemas de caché en el lado del servidor para optimizar el rendimiento (escapa al objetivo de este artículo).&lt;br /&gt;&lt;br /&gt;Un posible ejemplo de como integrar GeSHi (habiendolo &lt;a href=&quot;http://sourceforge.net/projects/geshi/files/&quot;&gt;descargado&lt;/a&gt; previamente) con nuestra aplicación PHP es:&lt;br /&gt;&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;require_once \'geshi/geshi.php\';
/**
 * Reemplazar códigos encontrandos por su correspondiente html procesado
 * @param array $matchs coincidencias
 * @return string código de reemplazo
 */
function replace_code ($matchs)
{
  trim(htmlspecialchars_decode($matchs[2]));
  $geshi = new GeSHi($source, $matchs[1]);
  $geshi-&amp;gt;set_header_type(GESHI_HEADER_NONE);
  $geshi-&amp;gt;enable_classes();
  return  \'&amp;lt;div class=&quot;code&quot;&amp;gt;\' . $geshi-&amp;gt;parse_code().\'&amp;lt;/div&amp;gt;\';
}
/**
 * Procesar contenido enriquecido
 * @param string $content contenido sin procesar
 * @return string contenido procesado
 */
function process_content ($content)
{
  //Reemplazamos los pre
  $content = preg_replace_callback(
    \'/&amp;lt;pre\\s+class\\s*=\\s*[&quot;\\\'](.*?)[&quot;\\\']&amp;gt;(.*?)&amp;lt;\\/pre&amp;gt;/s\',
    \'replace_code\',
    $content
  );
  //Eliminamos saltos de línea (html limpio)
  return str_replace(array(&quot;\\n&quot;, &quot;\\r&quot;), \'\', $content);
}

$content = \'Esto es código PHP: &amp;lt;pre class=&quot;php&quot;&amp;gt;&amp;amp;lt;?php echo &quot;hola&quot; ?&amp;amp;gt;&amp;lt;/pre&amp;gt;\';
echo process_content($content);
?&amp;gt;
&lt;/pre&gt;
Básicamente hacemos uso de una función para buscar las expresiones de código dentro de nuestro contenido (función &lt;strong&gt;process_content&lt;/strong&gt;) y una función de reemplazo para dicho código utilizando GeSHi (función &lt;strong&gt;replace_code&lt;/strong&gt;).&lt;br /&gt;','content_en'=>'GeSHi (&lt;strong&gt;GE&lt;/strong&gt;neric &lt;strong&gt;S&lt;/strong&gt;yntax &lt;strong&gt;HI&lt;/strong&gt;ghlighter) is a popular PHP library for syntax highlighting for multiple programming/markup languages. There are multiple forms for integrate it with our PHP application, one of these is using regular expressions.&lt;br /&gt;&lt;br /&gt;Warning: GeSHi consumes high processing time, be careful. You can use a cache layer system in order to reduce it (is not the target of the article).&lt;br /&gt;&lt;br /&gt;One posible election for integrate GeSHi (previously &lt;a href=&quot;http://sourceforge.net/projects/geshi/files/&quot;&gt;downloaded&lt;/a&gt;) in our PHP application is:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;require_once \'geshi/geshi.php\';
/**
 * Replace all founded codes with processed html
 * @param array $matchs matches
 * @return string replace code
 */
function replace_code ($matchs)
{
  trim(htmlspecialchars_decode($matchs[2]));
  $geshi = new GeSHi($source, $matchs[1]);
  $geshi-&amp;gt;set_header_type(GESHI_HEADER_NONE);
  $geshi-&amp;gt;enable_classes();
  return  \'&amp;lt;div class=&quot;code&quot;&amp;gt;\' . $geshi-&amp;gt;parse_code().\'&amp;lt;/div&amp;gt;\';
}
/**
 * Process rich content
 * @param string $content non processed content
 * @return string processed content
 */
function process_content ($content)
{
  //Replace all the &amp;lt;pre&amp;gt; tags
  $content = preg_replace_callback(
    \'/&amp;lt;pre\\s+class\\s*=\\s*[&quot;\\\'](.*?)[&quot;\\\']&amp;gt;(.*?)&amp;lt;\\/pre&amp;gt;/s\',
    \'replace_code\',
    $content
  );
  //Delete all new lines (tiny code)
  return str_replace(array(&quot;\\n&quot;, &quot;\\r&quot;), \'\', $content);
}

$content = \'This is PHP code: &amp;lt;pre class=&quot;php&quot;&amp;gt;&amp;amp;lt;?php echo &quot;hello&quot; ?&amp;amp;gt;&amp;lt;/pre&amp;gt;\';
echo process_content($content);
?&amp;gt;
&lt;/pre&gt;
First we use the &quot;process_content&quot; function for searching all the &amp;lt;pre&amp;gt; tags and after that, we use the &quot;replace_code&quot; for replacing all the previous matchs with new proccessed HTML ones (GeSHi code).&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-05-17 07:10:44','updated_at'=>'2013-08-24 20:39:28','visits'=>'1696','via_url'=>'','download_url'=>'http://sourceforge.net/projects/geshi/files/','url'=>'http://qbnz.com/highlighter/','info_url'=>'http://qbnz.com/highlighter/','published_at'=>'2010-05-24','is_published'=>'1','updated_note'=>''),
  array('id'=>'41','title_es'=>'Conectar con "eduroam" desde Linux','title_en'=>'Connect to "eduroam" under Linux','slug_es'=>'conectar-con-eduroam-desde-linux','slug_en'=>'connect-to-eduroam-under-linux','description_es'=>'Como conectarse con la red wireless "eduroam" desde Linux (Ubuntu)','description_en'=>'How to connect to "eduroam" wireless net under Linux (Ubuntu)','content_es'=>'&lt;strong&gt;Eduroam&lt;/strong&gt; es una iniciativa de TERENA que facilita la movilidad de los investigadores y los estudiantes europeos, ofreciendo conectividad \'wifi\' en sus desplazamientos al resto de instituciones que estén adheridas. De esta manera, los usuarios de las instituciones que participan en Eduroam tienen acceso en Internet a través de las redes sin hilos del resto de instituciones participantes [&lt;a href=&quot;http://www.xtec.cat/eduroam/cast/&quot;&gt;fuente&lt;/a&gt;].&lt;br /&gt;&lt;br /&gt;Para configurar la conexión desde Linux (en este tutorial, desde Ubuntu 10.04) necesitaremos tener instalado Network Manager (instalado por defecto en todas las distribuciones Ubuntu) y seguir unos sencillos pasos.&lt;br /&gt;&lt;br /&gt;Abrimos &quot;Conexiones de red&quot;.&lt;br /&gt;&lt;br /&gt;O podemos introducir en consola &quot;nm-connection-editor&quot; (Ubuntu 10.04) o network-manager (Ubuntu &amp;lt; 10.04)&lt;br /&gt;&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/652ed52a6a7543ca570d14f40677d79d860ebb6d.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;Seleccionamos la pestaña &quot;Inalámbrica&quot; y pulsamos sobre el botón &quot;Añadir&quot;.&lt;br /&gt;&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/124771290049d4113bff098405ba460dd6842bef.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;En la pestaña &quot;Inalámbrica&quot; insertamos en campo SSID el valor &quot;&lt;strong&gt;eduroam&lt;/strong&gt;&quot;.&lt;br /&gt;&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/41739eebb8dcb6e2f4b54bbea05914f8de2fd84c.png&quot; alt=&quot;&quot; width=&quot;495&quot; height=&quot;512&quot; /&gt;&lt;br /&gt;En la pestaña &quot;&lt;strong&gt;Seguridad inalámbrica&lt;/strong&gt;&quot;, en &quot;&lt;strong&gt;Seguridad&lt;/strong&gt;&quot; seleccionamos &quot;&lt;strong&gt;WPA2 enterprise&lt;/strong&gt;&quot;, en &quot;&lt;strong&gt;Autenticación&lt;/strong&gt;&quot; seleccionamos &quot;&lt;strong&gt;TLS a través de tunel&lt;/strong&gt;&quot;, en &quot;&lt;strong&gt;Identidad anónima&lt;/strong&gt;&quot; no insertamos nada, en &quot;&lt;strong&gt;Certificado CA&lt;/strong&gt;&quot; ninguno, &quot;&lt;strong&gt;Autenticación interna&lt;/strong&gt;&quot; seleccionamos &quot;&lt;strong&gt;PAP&lt;/strong&gt;&quot; y en &quot;&lt;strong&gt;Usuario&lt;/strong&gt;&quot; y &quot;&lt;strong&gt;Contraseña&lt;/strong&gt;&quot;, los habituales para acceder a los servicios de tu universidad (normalmente alumno@universidad.com).&lt;br /&gt;&lt;br /&gt;En este punto y habiendonos conectado previamente ya podemos acceder a la red a través de &quot;eduroam&quot;.&lt;br /&gt;','content_en'=>'&lt;strong&gt;eduroam&lt;/strong&gt; (Education Roaming) is a secure international roaming  service for users in Higher Education. The European eduroam  confederation (a confederation of autonomous roaming services) is based  on a set of defined organisational and technical requirements that each  member of the confederation must agree to (by signing the eduroam policy  GN2-07-328) and follow [&lt;a href=&quot;http://en.wikipedia.org/wiki/Eduroam&quot;&gt;source&lt;/a&gt;].&lt;br /&gt;&lt;br /&gt;For configure the conexion under a Linux environment (in this tutorial, under Ubuntu 10.04) we need to have insalled Network Manager (installed by default in all Ubuntu distros) and follow a simple steps.&lt;br /&gt;&lt;br /&gt;Open &quot;Network connections&quot;.&lt;br /&gt;&lt;br /&gt;Or we can type in console &quot;nm-connection-editor&quot; (Ubuntu 10.04) or network-manager (Ubuntu &amp;lt;  10.04).&lt;br /&gt;&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/652ed52a6a7543ca570d14f40677d79d860ebb6d.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;Select the tab &quot;&lt;strong&gt;Wireless&lt;/strong&gt;&quot; and press the &quot;Add&quot; button.&lt;br /&gt;&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/124771290049d4113bff098405ba460dd6842bef.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;In the &quot;&lt;strong&gt;Wireless&lt;/strong&gt;&quot; tab we have to insert in SSID field &quot;eduroam&quot;.&lt;br /&gt;&lt;br /&gt;&lt;img src=&quot;/uploads/images/full/41739eebb8dcb6e2f4b54bbea05914f8de2fd84c.png&quot; alt=&quot;&quot; width=&quot;495&quot; height=&quot;512&quot; /&gt;&lt;br /&gt;In the &quot;&lt;strong&gt;Wireless security&lt;/strong&gt;&quot;, into &quot;&lt;strong&gt;Security&lt;/strong&gt;&quot; we have to select &quot;&lt;strong&gt;WPA2 enterpris&lt;/strong&gt;e&quot;, in &quot;&lt;strong&gt;Authentication&lt;/strong&gt;&quot; &quot;&lt;strong&gt;TLS through tunnel&lt;/strong&gt;&quot;, in &quot;&lt;strong&gt;Anonymous identity&lt;/strong&gt;&quot; nothing, in &quot;&lt;strong&gt;CA certificate&lt;/strong&gt;&quot; nothing, in &quot;&lt;strong&gt;Internal authentication&lt;/strong&gt;&quot; we have to select &quot;&lt;strong&gt;PAP&lt;/strong&gt;&quot; and in &quot;&lt;strong&gt;User&lt;/strong&gt;&quot; and &quot;&lt;strong&gt;Password&lt;/strong&gt;&quot; fields the usual authentication data for access your career system (normally user@university.com).&lt;br /&gt;&lt;br /&gt;At this point we may be connected.&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>'012da2e6286b22b1390f1912e1015b8c493b7a75.gif','created_at'=>'2010-05-24 03:28:11','updated_at'=>'2013-08-24 17:10:54','visits'=>'1832','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-05-24','is_published'=>'1','updated_note'=>''),
  array('id'=>'42','title_es'=>'Construir un analizador sintáctico con JavaCC','title_en'=>'Build a syntax analyzer or parser with JavaCC','slug_es'=>'construir-un-analizador-sintactico-con-javacc','slug_en'=>'build-a-syntax-analyzer-or-parser-with-javacc','description_es'=>'Como construir un analizador sintáctico con JavaCC','description_en'=>'How to build a syntax analyzer with JavaCC','content_es'=>'Para construir un analizador sintáctico debemos tener previamente preparado el analizador léxico. Asegurate de haber leído primero &lt;a href=&quot;/articulo/construir-un-analizador-lexico-con-javacc&quot;&gt;como crear un analizador léxico con JavaCC&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;El funcionamiento es sencillo, el &lt;strong&gt;analizador léxico&lt;/strong&gt; lee y envía los tokens (unidad mínima con significado de un determinado lenguaje) al &lt;strong&gt;analizador sintáctico&lt;/strong&gt; para que éste determine la validez de su composición según una determinada gramática.&lt;br /&gt;&lt;br /&gt;De nuevo &lt;strong&gt;JavaCC&lt;/strong&gt; nos facilita las herramientas para poder construir dicho analizador sintáctico (también conocido como &lt;strong&gt;parser&lt;/strong&gt;). JavaCC permite combinar el analizador léxico y analizador sintáctico en el mismo código (un mismo módulo).&lt;br /&gt;&lt;br /&gt;Para el analizador léxico necesitabamos un conjunto de reglas para determinar y diferenciar los tokens del lenguaje. Ahora para el analizador sintáctico necesitamos una gramática que reconozca la estructura del lenguaje.&lt;br /&gt;&lt;br /&gt;Definición del lenguaje, gramática&lt;br /&gt;Suponemos que nuestro sencillo lenguaje es definido mediante la siguiente gramática en &lt;a href=&quot;http://es.wikipedia.org/wiki/Notaci%C3%B3n_de_Backus-Naur&quot;&gt;notación BNF&lt;/a&gt;:&lt;br /&gt;
&lt;pre&gt;&amp;lt;inicio&amp;gt;       ::= &amp;lt;subprogramas&amp;gt; &amp;lt;sentencias&amp;gt; &amp;lt;END&amp;gt;
&amp;lt;subprogramas&amp;gt; ::= &amp;lt;subprograma&amp;gt; &amp;lt;subprogramas&amp;gt; | &amp;lt;lambda&amp;gt;
&amp;lt;subprograma&amp;gt;  ::= &amp;lt;SUB&amp;gt; &amp;lt;ID&amp;gt; &amp;lt;subprograma1&amp;gt; &amp;lt;END&amp;gt; &amp;lt;SUB&amp;gt;
&amp;lt;subprograma1&amp;gt; ::= &quot;(&quot; &amp;lt;argumentos&amp;gt; &quot;)&quot; &amp;lt;subprograma2&amp;gt; | &amp;lt;subprograma2&amp;gt;
&amp;lt;subprograma2&amp;gt; ::= &amp;lt;declaracion&amp;gt; &amp;lt;subprograma2&amp;gt; | &amp;lt;sentencia&amp;gt; &amp;lt;subprograma2&amp;gt; | &amp;lt;lambda&amp;gt;
&amp;lt;declaracion&amp;gt;  ::= &amp;lt;STATIC&amp;gt; &amp;lt;ID&amp;gt;
&amp;lt;argumentos&amp;gt;   ::= &amp;lt;ID&amp;gt; &amp;lt;argumentos1&amp;gt;
&amp;lt;argumentos1&amp;gt;  ::= &quot;,&quot; &amp;lt;argumentos&amp;gt; | &amp;lt;lambda&amp;gt;
&amp;lt;sentencias&amp;gt;   ::= &amp;lt;sentencia&amp;gt; &amp;lt;sentencias&amp;gt; | &amp;lt;lambda&amp;gt;
&amp;lt;sentencia&amp;gt;    ::= &amp;lt;INPUT&amp;gt; &amp;lt;ID&amp;gt;&lt;/pre&gt;
&lt;strong&gt;Observación:&lt;/strong&gt; Únicamente figuran sentencias de tipo &quot;input identificador&quot;, no hay soporte para estructuras de control de flujo (if, then, else, case, etc.) ni composiciones aritméticas o de cadena para poder realizar el analizador sintáctico de la forma mas sencilla posible.','content_en'=>'','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-05-27 19:03:22','updated_at'=>'2011-10-19 21:59:33','visits'=>'0','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-05-28','is_published'=>'0','updated_note'=>''),
  array('id'=>'43','title_es'=>'Instalar Java (Sun) en Ubuntu','title_en'=>'Install Java (Sun)  in Ubuntu','slug_es'=>'instalar-java-sun-en-ubuntu','slug_en'=>'install-java-sun-in-ubuntu','description_es'=>'Como instalar y ejecutar la versión oficial Java de Sun Microsystems en Ubuntu','description_en'=>'How to install and execute the official Java version of Sun Microsystems in Ubuntu','content_es'=>'En una nueva instalación de Ubuntu, la versión de Java instalada no es la de &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;strong&gt;Sun Microsystems&lt;/strong&gt;&lt;/span&gt; &lt;strong&gt;Oracle&lt;/strong&gt; sino una &quot;libre&quot; (Openjdk). Aunque pueda ejecutar de forma correcta muchas aplicaciones, puede que no funcionen correctamente algunos applets o que falten o den fallos algunas librerías (swing, awt, etc.)...&lt;br /&gt;&lt;br /&gt;Para instalar y activar la versión de Sun Microsystems, primero se debe descargar el &lt;strong&gt;JRE&lt;/strong&gt; (Java Runtime Environment) si simplemente se quieren ejecutar los programas java o el &lt;strong&gt;JDK&lt;/strong&gt; (Java Development Kit) si eres un desarrollador interesado en disfrutar de las librerías que Java proporciona.&lt;br /&gt;
&lt;h3&gt;Si tienes Ubuntu 10.10&lt;/h3&gt;
Si tienes Ubuntu 10.10 debes primero añadir y activar el repositorio partner de esta versión. &lt;strong&gt;Centro de software &amp;gt; Editar &amp;gt; Fuentes de software&lt;/strong&gt; y si no la tienes añadida añades (Añadir) y &quot;deb http://archive.canonical.com/ubuntu maverick partner&quot; y la activas.&lt;br /&gt;
&lt;h3&gt;Instalar Java&lt;/h3&gt;
Desde Ubuntu puedes descargarlas e instalarlas de forma muy sencilla mediante:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# aptitude install sun-java6-jre sun-java6-plugin&lt;/pre&gt;
o la versión para desarrolladores:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# aptitude install sun-java6-jdk sun-java6-plugin&lt;/pre&gt;
Una vez instalados, debemos especificar las aplicaciones Java se ejecuten en la máquina virtual de &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;strong&gt;Sun&lt;/strong&gt;&lt;/span&gt; &lt;strong&gt;Oracle&lt;/strong&gt;.&lt;br /&gt;&lt;br /&gt;Para ver las posibles alternativas:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# update-alternatives --list java
&lt;/pre&gt;
Debemos fijarnos en que alternativa elegir. Para la versión de &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;strong&gt;Sun&lt;/strong&gt;&lt;/span&gt; &lt;strong&gt;Oracle&lt;/strong&gt; elegiremos &quot;java6-sun&quot;:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# update-alternatives --config java
&lt;/pre&gt;
Ahora debes seleccionar la opción correcta (aquella en la que figurará java-6-sun).&lt;br /&gt;&lt;br /&gt;Para verificar que todo ha seguido según lo esperado comprobamos la versión de Java:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# java -version&lt;/pre&gt;','content_en'=>'In a new Ubuntu installation (in this case Ubuntu 10.10), the Java version may not be of &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;strong&gt;Sun Microsystems&lt;/strong&gt;&lt;/span&gt; (&lt;strong&gt;Oracle&lt;/strong&gt;) (probably will be Openjdk). Sometimes, that non-official version, can\'t execute some applets or comes without a library or simply will not execute same as Sun version...&lt;br /&gt;&lt;br /&gt;To install and activate the Sun Microsystems version, at first, you have to download the JRE (Java Runtime Environment) if you only want to execute Java programs or the JDK (Java Development Kit) if you are a programmer and you probably will need a library.&lt;br /&gt;
&lt;h3&gt;If you have Ubuntu 10.10&lt;/h3&gt;
If you have Ubuntu 10.10 you must add and activate the partner repository first. &lt;strong&gt;Software center &amp;gt; Edit &amp;gt; Software sources&lt;/strong&gt; and there add (if you dont have it) and activate &quot;deb http://archive.canonical.com/ubuntu maverick partner&quot;.&lt;br /&gt;
&lt;h3&gt;Install Java&lt;/h3&gt;
In Ubuntu you can download and install it through a simple step:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# aptitude install sun-java6-jre sun-java6-plugin&lt;/pre&gt;
or the developers version:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# aptitude install sun-java6-jdk sun-java6-plugin&lt;/pre&gt;
Once installed, we have to indicate which virtual machine will execute Java programs.&lt;br /&gt;&lt;br /&gt;For view the list of all aternatives:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# update-alternatives --list java
&lt;/pre&gt;
If you want to choose &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;strong&gt;Sun&lt;/strong&gt;&lt;/span&gt; &lt;strong&gt;Oracle&lt;/strong&gt; one:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# update-alternatives --config java
&lt;/pre&gt;
Now you must select the &quot;java-6-sun&quot; option and enter.&lt;br /&gt;&lt;br /&gt;Verify the currently version with:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# java -version&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>'a026cb1472e785d99bdc7589361a50098b22d168.jpg','created_at'=>'2010-06-01 20:00:40','updated_at'=>'2013-08-23 12:50:33','visits'=>'1479','via_url'=>'http://www.wereveryware.com/2010/10/instalar-java-en-ubuntu-1010.html','download_url'=>'','url'=>'','info_url'=>'http://help.ubuntu.com/community/Java','published_at'=>'2010-10-25','is_published'=>'1','updated_note'=>''),
  array('id'=>'44','title_es'=>'Autoload con Namespaces en PHP','title_en'=>'Autoload with Namespaces with PHP','slug_es'=>'autoload-con-namespaces-en-php','slug_en'=>'autoload-with-namespaces-with-php','description_es'=>'Como configurar Autoload con Namespaces en PHP','description_en'=>'How to configure Autoload with Namespaces in PHP','content_es'=>'Fichero 1&lt;br /&gt;
&lt;pre&gt;// /Foo/Bundle.class.php

namespace Foo;
class Bundle
{
  public function __toString()
  {
    return \'Foo\\Bundle::__toString\';
  }
}
&lt;/pre&gt;
&lt;br /&gt;Fichero 1&lt;br /&gt;
&lt;pre&gt;// /Foo/Bundle.class.php

namespace Foo2;
class Bundle
{
  public function __toString()
  {
    return $foo . \' Foo2\\Bundle::__toString\';
  }
  public function externalLoad()
  {
    $foo = new \\Foo\\Bundle();
    echo $foo;
  }
}
&lt;/pre&gt;
Fichero 2&lt;br /&gt;
&lt;pre&gt;//Autoload
// /autoload.php

function __autoload ($className)
{
  $className = str_replace(\'\\\\\', \'/\', $className);
  include dirname(__FILE__) . \'/\' . $className . \'.class.php\';
}
&lt;/pre&gt;
Fichero 3&lt;br /&gt;
&lt;pre&gt;//Example
// /example.php

include \'autoload.php\';

$foo = new \\Foo\\Bundle();
echo $foo;

$foo2 = new \\Foo2\\Bundle();
echo $foo2;

$foo2-&amp;gt;externalLoad();
&lt;/pre&gt;
&lt;br /&gt;','content_en'=>'dfgh','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-06-23 07:37:28','updated_at'=>'2011-10-19 22:01:14','visits'=>'0','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-06-23','is_published'=>'0','updated_note'=>''),
  array('id'=>'45','title_es'=>'Compartir ficheros en red con Linux y NFS','title_en'=>'Share files over a network with Linux and NFS','slug_es'=>'compartir-ficheros-en-red-con-linux-y-nfs','slug_en'=>'share-files-over-a-network-with-linux-and-nfs','description_es'=>'Compartir ficheros en red mediante el protocolo NFS en Linux','description_en'=>'Share files through NFS protocol under Linux','content_es'=>'Una forma sencilla de compartir ficheros en red entre máquinas Linux es utilizando el protocolo &lt;strong&gt;NFS&lt;/strong&gt; (Network File System).&lt;br /&gt; &lt;br /&gt; Únicamente necesitas saber las direcciones IP de los equipos e instalar el según corresponda el servidor y/o cliente NFS.&lt;br /&gt; &lt;br /&gt; Como cualquier sistema cliente-servidor, un computador se comportará como el servidor de ficheros (sirve el/los ficheros en red para quien decida conectarse a el/ellos) y el resto se comportará como cliente de este sistema (quien quiera recibir dichos ficheros).&lt;br /&gt;
&lt;h3&gt;Servidor de ficheros:&lt;/h3&gt;
El &lt;strong&gt;ordenador A&lt;/strong&gt; con dirección IP &lt;strong&gt;192.168.1.4&lt;/strong&gt; desea compartir la carpeta &quot;&lt;strong&gt;/home/usuario/Público&lt;/strong&gt;&quot; en red para que cualquiera pueda leer y escribir en ella.&lt;br /&gt; &lt;br /&gt; El procedimiento para compartir la carpeta en red es: &lt;br /&gt;&lt;br /&gt;Instalar el servidor NFS en el ordenador A:
&lt;pre class=&quot;bash&quot;&gt;# apt-get install nfs-kernel-server portmap&lt;/pre&gt;
Configurar que carpetas compartir en A para que sean accesibles en red. Añadimos la siguiente línea al fichero &quot;&lt;strong&gt;/etc/exports&lt;/strong&gt;&quot; (Indicando las carpetas que deseamos compartir y los permisos, uno por línea):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;/home/usuario/Público  192.168.1.4/255.255.255.0(rw,sync,subtree_check)&lt;/pre&gt;
Iniciar la configuración NFS:
&lt;pre class=&quot;bash&quot;&gt;# /etc/init.d/nfs-kernel-server restart&lt;/pre&gt;
&lt;h3&gt;Cliente de servidor de ficheros:&lt;/h3&gt;
Ahora queremos que el &lt;strong&gt;ordenador B&lt;/strong&gt; se conecte mediante la red a los ficheros compartidos por A y monte un sistema de ficheros en su directorio local &quot;&lt;strong&gt;/home/usuario2/PúblicoB&lt;/strong&gt;&quot; (En la máquina B existe el directorio donde montar la unidad de red).&lt;br /&gt;&lt;br /&gt; Instalar el cliente de NFS y configurarlo:
&lt;pre class=&quot;bash&quot;&gt;# apt-get install nfs-common&lt;/pre&gt;
Montar la unidad remota en el directorio local:
&lt;pre class=&quot;bash&quot;&gt;# mount -t nfs 192.168.1.4:/home/usuario/Público /home/usuario2/PúblicoB&lt;/pre&gt;
Si queremos configurar para que se monte al inicio del sistema, tendremos que añadir la siguiente línea al fichero &quot;&lt;strong&gt;/etc/fstab&lt;/strong&gt;&quot;:
&lt;pre class=&quot;bash&quot;&gt;192.168.1.4:/home/usuario/Público  /home/usuario2/PúblicoB  nfs  defaults 0 0&lt;/pre&gt;','content_en'=>'An easy way to share files trough a network between Linux machines is using the &lt;strong&gt;NFS&lt;/strong&gt; (Network File System) protocol.&lt;br /&gt;&lt;br /&gt; You only need to know the IP address of the network computers and to install the NFS server/client into each computer.&lt;br /&gt;&lt;br /&gt; Like others server-client systems, one computer will be the server (which will share the files) and the others will be the clients (whose will connect to the shared files.&lt;br /&gt;
&lt;h3&gt;Files server:&lt;/h3&gt;
The &lt;strong&gt;A computer&lt;/strong&gt; with the IP address &lt;strong&gt;192.168.1.4&lt;/strong&gt; want to share the folder &quot;&lt;strong&gt;/home/user/Public&lt;/strong&gt;&quot; over the network for everyone that want to connect.&lt;br /&gt;&lt;br /&gt;The procedure to share the folder is:&lt;br /&gt;&lt;br /&gt;Install the NFS server in the A computer:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# apt-get install nfs-kernel-server portmap&lt;/pre&gt;
Configure the folders in A that will be shared through the network. Add the next line to the &quot;&lt;strong&gt;/etc/exports&lt;/strong&gt;&quot; file (shared folders with permissions, one per line):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;/home/user/Public  192.168.1.4/255.255.255.0(rw,sync,subtree_check)&lt;/pre&gt;
Start  NFS configuration:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# /etc/init.d/nfs-kernel-server restart&lt;/pre&gt;
&lt;h3&gt;Client for the file server:&lt;/h3&gt;
Now we want connect the &lt;strong&gt;B computer&lt;/strong&gt; to the shared folder and mount it under the local folder &quot;&lt;strong&gt;/home/user2/PublicB&lt;/strong&gt;&quot; (In the B machine the folder must be previously created).&lt;br /&gt;&lt;br /&gt;Install the NFS client:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# apt-get install nfs-common&lt;/pre&gt;
Mount the remote shared folder into the local machine:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;# mount -t nfs 192.168.1.4:/home/user/Public /home/user2/PublicB&lt;/pre&gt;
&lt;br /&gt;If we want to add it permanently into the init mount table, add the next line into the &quot;&lt;strong&gt;/etc/fstab&lt;/strong&gt;&quot; file:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;192.168.1.4:/home/user/Public  /home/user2/PublicB  nfs  defaults 0 0&lt;/pre&gt;
&lt;br /&gt;&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-09-04 07:33:30','updated_at'=>'2013-08-24 18:00:21','visits'=>'1340','via_url'=>'','download_url'=>'http://nfs.sourceforge.net/','url'=>'','info_url'=>'http://nfs.sourceforge.net/','published_at'=>'2010-09-04','is_published'=>'1','updated_note'=>''),
  array('id'=>'46','title_es'=>'Incrustar imágenes, css y javascript en HTML','title_en'=>'Embed images, css and javascript in HTML','slug_es'=>'incrustar-imagenes-css-y-javascript-en-html','slug_en'=>'embed-images-css-and-javascript-in-html','description_es'=>'Usando la URI de tipo "data" en la ruta de imágenes, css y javascript podemos incrustarlos en código HTML ','description_en'=>'Using the "data" URI in the source path of images, css and javascript we can embed it into HTML code','content_es'=>'El formato de la ruta a imágenes, CSS y javascript no tiene porque ser externo. Utilizando el tipo &quot;&lt;strong&gt;data&lt;/strong&gt;&quot; podemos incrustar el elemento directamente en el código HTML. Un ejemplo de esto es: &lt;br /&gt;
&lt;pre class=&quot;html&quot;&gt;&amp;lt;img alt=&quot;Imagen incrustada&quot; src=&quot;data:image/png;base64,iVBORw0KGg&amp;lt;div&amp;gt;oAAAANSUhEUgAAADIA...&quot; /&amp;gt;&lt;/pre&gt;
O CSS:
&lt;pre class=&quot;css&quot;&gt;div.image {
  width:100px;
  height:100px;
  background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIA...);
}&lt;/pre&gt;
La única complicación de este método es que los datos se han de codifificar en &quot;&lt;strong&gt;base64&lt;/strong&gt;&quot;. Una solución cómoda para este mismo ejemplo en &lt;strong&gt;PHP&lt;/strong&gt; es:
&lt;pre class=&quot;html&quot;&gt;&amp;lt;img alt=&quot;Imagen incrustada&quot; src=&quot;data:image/jpeg;base64,&amp;lt;?php echo base64_encode(file_get_contents(\'imagen.jpg\'))?&amp;gt;&quot;/&amp;gt;&lt;/pre&gt;
También puedes utilizar alguna de las &lt;a href=&quot;http://www.greywyvern.com/code/php/binary2base64&quot;&gt;herramientas online&lt;/a&gt; disponibles para éste proposito. &lt;br /&gt;&lt;br /&gt; Cuando se crea un documento HTML, sabemos que la estructura perdurará en el tiempo, pero ¿y los objetos externos?. Cuando no es posible garantizar su existencia a veces es conveniente incrustarlos para que perduren.','content_en'=>'The format of the source path of CSS, javascript and images may not be external. Using the &quot;&lt;strong&gt;data&lt;/strong&gt;&quot; source type we can embed the element into the HTML document. An example of it:
&lt;pre class=&quot;html&quot;&gt;&amp;lt;img alt=&quot;Embeded image&quot; src=&quot;data:image/png;base64,iVBORw0KGg&amp;lt;div&amp;gt;oAAAANSUhEUgAAADIA...&quot; /&amp;gt;&lt;/pre&gt;
Or CSS:
&lt;pre class=&quot;css&quot;&gt;div.image {
  width:100px;
  height:100px;
  background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIA...);
}&lt;/pre&gt;
The complication of this method is to get the &quot;&lt;strong&gt;base64&lt;/strong&gt;&quot; encoded content of the object. A simply way to get it is using &lt;strong&gt;PHP&lt;/strong&gt;:
&lt;pre class=&quot;html&quot;&gt;&amp;lt;img alt=&quot;Embeded image&quot; src=&quot;data:image/jpeg;base64,&amp;lt;?php echo base64_encode(file_get_contents(\'image.jpg\'))?&amp;gt;&quot;/&amp;gt;&lt;/pre&gt;
Also you can use &lt;a href=&quot;http://www.greywyvern.com/code/php/binary2base64&quot;&gt;one of the many online tools&lt;/a&gt; for this target. &lt;br /&gt;&lt;br /&gt; When you create a HTML document, the structure will not disappear, but what will happen with the external objects?&lt;br /&gt;&lt;br /&gt; This is an easy method to secure the content of the objects into the document forever.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-09-04 07:34:46','updated_at'=>'2013-08-23 19:34:21','visits'=>'1616','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-09-05','is_published'=>'1','updated_note'=>''),
  array('id'=>'47','title_es'=>'Reescalado líquido en Gimp','title_en'=>'Liquid rescale in Gimp','slug_es'=>'reescalado-liquido-en-gimp','slug_en'=>'liquid-rescale-in-gimp','description_es'=>'En que consiste y como instalar el plugin para realizar reescalados líquidos en Gimp','description_en'=>'What is and what does the liquid rescale in Gimp','content_es'=>'','content_en'=>'','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-09-22 15:09:06','updated_at'=>'2011-10-19 23:47:25','visits'=>'0','via_url'=>'','download_url'=>'http://liquidrescale.wikidot.com/','url'=>'http://liquidrescale.wikidot.com/','info_url'=>'','published_at'=>'2010-09-22','is_published'=>'0','updated_note'=>''),
  array('id'=>'48','title_es'=>'Operaciones masivas sobre imágenes en Ubuntu','title_en'=>'Massive operations over images under Ubuntu','slug_es'=>'operaciones-masivas-sobre-imagenes-en-ubuntu','slug_en'=>'massive-operations-over-images-under-ubuntu','description_es'=>'Gracias a ImageMagick y la línea de comandos podemos ejecutar operaciones sobre imágenes de forma masiva','description_en'=>'Thanks to ImageMagick and the command console we can execute operations over massive amount of images ','content_es'=>'&lt;a href=&quot;http://www.imagemagick.org/&quot;&gt;ImageMagick&lt;/a&gt; es una colección de librerías para editar, convertir, componer, guardar imágenes en otros formatos (más de 100), transformar, rotar, escalar, ajustar el color, aplicar efectos y muchas cosas...&lt;br /&gt;&lt;br /&gt; Esta disponible para múltiples plataformas: &lt;a href=&quot;http://www.imagemagick.org/script/binary-releases.php#windows&quot;&gt;Windows&lt;/a&gt;, &lt;a href=&quot;http://www.imagemagick.org/script/binary-releases.php#unix&quot;&gt;Linux&lt;/a&gt; y Mac. &lt;br /&gt; Su utilidad radica en poder realizar operaciones sobre imágenes de una forma cómoda y limpia a través de la línea de comandos. Gracias a que admite expresiones regulares podemos operar sobre múltiples imágenes con una única instrucción.&lt;br /&gt;&lt;br /&gt; Es muy útil, por ejemplo, reducir la calidad de imagen al 80% de todas las imágenes JPG de un cierto directorio para reducir su peso:
&lt;pre class=&quot;bash&quot;&gt;mogrify -quality 80 *.jpg&lt;/pre&gt;
O reescalarlas todas a una determinada resolución:
&lt;pre class=&quot;bash&quot;&gt;mogrify -resize 800x600 *.jpg&lt;/pre&gt;','content_en'=>'&lt;a href=&quot;http://www.imagemagick.org/&quot;&gt;ImageMagick&lt;/a&gt; is a library collection for edit, convert, compound, save images in other formats (greater than 100) and much more...&lt;br /&gt;&lt;br /&gt;Available for multiple platforms: &lt;a href=&quot;http://www.imagemagick.org/script/binary-releases.php#windows&quot;&gt;Windows&lt;/a&gt;, &lt;a href=&quot;http://www.imagemagick.org/script/binary-releases.php#unix&quot;&gt;Linux&lt;/a&gt; and Mac. &lt;br /&gt;Is a very useful tool, you can operate over multiple images with only one instruction. For example, if we want to reduce the quality of al the JPG files in a directory to 80% we only have to enter:
&lt;pre class=&quot;bash&quot;&gt;mogrify -quality 80 *.jpg&lt;/pre&gt;
Also, if we want to resize all to a maximum resolution of 800x600:
&lt;pre class=&quot;bash&quot;&gt;mogrify -resize 800x600 *.jpg&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-09-28 13:22:46','updated_at'=>'2013-08-22 22:02:25','visits'=>'1194','via_url'=>'http://www.hanantek.com/node/56','download_url'=>'','url'=>'http://www.imagemagick.org/','info_url'=>'http://www.imagemagick.org/script/command-line-tools.php','published_at'=>'2010-09-28','is_published'=>'1','updated_note'=>''),
  array('id'=>'53','title_es'=>'Instalación de librerías OpenGL/Glut en Ubuntu','title_en'=>'Installing OpenGL/Glut libraries in Ubuntu','slug_es'=>'instalacion-de-librerias-opengl-glut-en-ubuntu','slug_en'=>'installing-opengl-glut-libraries-in-ubuntu','description_es'=>'Pasos para instalar, enlazar y ejecutar programas OpenGL/Glut en Ubuntu','description_en'=>'Steps to install, link and run OpenGL/Glut programs in Ubuntu','content_es'=>'El primer paso es instalar las librerías de desarollo para OpenGL/Glut en Ubuntu:
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get install freeglut3 freeglut3-dev&lt;/pre&gt;
Para versiones modernas de Ubuntu (&amp;gt;= 11.10) es necesario instalar un paquete extra debido a que el linker no enlaza correctamente
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get install binutils-gold&lt;/pre&gt;
Creamos un fichero de test (test.c):
&lt;pre class=&quot;c&quot;&gt;#include &amp;lt;GL/glut.h&amp;gt;

//Función de dibujado
void dibujar(void)
{
  //Color de fondo
  glClearColor(0,1,0,1);
  glClear(GL_COLOR_BUFFER_BIT );
  //Ordenar dibujado
  glFlush();
}

//Ejecución principal
int main(int argc, char **argv)
{
  glutInit(&amp;amp;argc, argv);
  //Buffer simple
  glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB );
  glutInitWindowPosition(50,25);
  glutInitWindowSize(500,250);
  glutCreateWindow(&quot;Ventana verde&quot;);
  //Llamada a la función de dibujado
  glutDisplayFunc(dibujar);
  glutMainLoop();
  return 0;
}
&lt;/pre&gt;
Compilamos el fichero. Debemos enlazar las librerias OpenGL/Glut:
&lt;pre class=&quot;bash&quot;&gt;gcc -lGL -lglut test.c -o test&lt;/pre&gt;','content_en'=>'The first step is to install the development libraries of OpenGL/Glut in Ubuntu:
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get install freeglut3 freeglut3-dev&lt;/pre&gt;
For newer versions of Ubuntu (&amp;gt;= 11.10) you have to install another package because the linker does\'t link anymore.
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get install binutils-gold&lt;/pre&gt;
Create a test file (test.c):
&lt;pre class=&quot;c&quot;&gt;#include &amp;lt;GL/glut.h&amp;gt;

//Drawing funciton
void draw(void)
{
  //Background color
  glClearColor(0,1,0,1);
  glClear(GL_COLOR_BUFFER_BIT );
  //Draw order
  glFlush();
}

//Main program
int main(int argc, char **argv)
{
  glutInit(&amp;amp;argc, argv);
  //Simple buffer
  glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB );
  glutInitWindowPosition(50,25);
  glutInitWindowSize(500,250);
  glutCreateWindow(&quot;Green window&quot;);
  //Call to the drawing function
  glutDisplayFunc(draw);
  glutMainLoop();
  return 0;
}
&lt;/pre&gt;
Compile the file linking the OpenGL/Glut libraries:
&lt;pre class=&quot;bash&quot;&gt;gcc -lGL -lglut test.c -o test&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-10-04 07:45:08','updated_at'=>'2013-08-24 20:28:42','visits'=>'2290','via_url'=>'http://ubuntuforums.org/showthread.php?t=1108737','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-10-04','is_published'=>'1','updated_note'=>''),
  array('id'=>'54','title_es'=>'API Tuenti en PHP liberada','title_en'=>'PHP Tuenti API released','slug_es'=>'api-tuenti-en-php-liberada','slug_en'=>'php-tuenti-api-released','description_es'=>'Publicada la primera versión del API PHP para Tuenti ','description_en'=>'Released the first version of the PHP Tuenti API','content_es'=>'Después de una semana de desarrollo, me decido a lanzar la primera versión &lt;strong&gt;estable&lt;/strong&gt;, &lt;strong&gt;documentada&lt;/strong&gt; y sobre todo &lt;strong&gt;libre&lt;/strong&gt; de la interfaz PHP para conectar con la API cerrada de Tuenti.&lt;br /&gt;&lt;br /&gt; Puedes descargarte e informarte sobre dicha versión desde la &lt;a href=&quot;/proyecto/tuenti-api&quot;&gt;página del proyecto dedicada que he creado para ello&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;Desconozco el motivo por el cual Tuenti se niega a lanzar un API oficial libre a los desarrolladores. Su silencio y negativa a lanzar una API pública me han obligado a crear mi propia interfaz PHP para interactuar directamente con Tuenti usando el API destinado a dispositivos como el iPhone.&lt;br /&gt;&lt;br /&gt;Gracias a una popular técnica de hacking &quot;&lt;a href=&quot;/articulo/interceptar-trafico-de-red-con-dsniff&quot;&gt;man in the middle&lt;/a&gt;&quot; entre mi iPhone y mi router, un analizador de paquetes TCP/IP como Wireshark y por supuesto unos cuantos y deliciosos cafés he conseguido mi objetivo: averiguar el formato de comunicación (JSON) y procedimientos remotos para la obtención de datos. He de reconocer el magnifico trabajo de algún que otro &lt;a href=&quot;http://scromega.net/7-accediendo-a-la-api-cerrada-de-tuenti.html&quot;&gt;curioso&lt;/a&gt; que averiguó la encriptación de contraseña en el proceso de login y que sin duda me ha resuelto de algún que otro quebradero de cabeza.','content_en'=>'After an intensive week of development I\'m glad to announce the first release of an &lt;strong&gt;stable&lt;/strong&gt;, &lt;strong&gt;documented&lt;/strong&gt; and &lt;strong&gt;free&lt;/strong&gt; interface for connecting with the closed Tuenti API.&lt;br /&gt;&lt;br /&gt;You can download and read more about the project in &lt;a href=&quot;/project/tuenti-api&quot;&gt;the dedicated page that I have created for it&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;I don\'t know why Tuenti have never released a open solution for the developers community. For this reason I\'ve developed a full PHP API Interface based on the smartphones apps.&lt;br /&gt;&lt;br /&gt;Thanks to the popular hacking technic &quot;&lt;a href=&quot;/article/intercepting-net-traffic-with-dsniff&quot;&gt;man in the middle&lt;/a&gt;&quot; between my iPhone and my router and a helpful protocol analyzer tool (Wireshark) I finally discovered the communication protocol (through JSON) between server and app.&lt;br /&gt;&lt;br /&gt;I must mention the awesome work of some &lt;a href=&quot;http://scromega.net/7-accediendo-a-la-api-cerrada-de-tuenti.html&quot;&gt;curious&lt;/a&gt; that got the crypt algorithm for the login authentication request.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-10-23 16:12:44','updated_at'=>'2013-08-23 21:34:28','visits'=>'1791','via_url'=>'','download_url'=>'http://www.kiwwito.com/proyecto/tuenti-api','url'=>'http://www.kiwwito.com/proyecto/tuenti-api','info_url'=>'','published_at'=>'2010-11-11','is_published'=>'1','updated_note'=>''),
  array('id'=>'56','title_es'=>'Descargar álbumes y fotos de tu Tuenti con PHP','title_en'=>'Download your Tuenti albums and photos with PHP','slug_es'=>'descargar-albumes-y-fotos-de-tu-tuenti-con-php','slug_en'=>'download-your-tuenti-albums-and-photos-with-php','description_es'=>'Como descargar todos tus los álbumes y fotos de Tuenti con el API no oficial de Tuenti y PHP','description_en'=>'How to download all of your Tuenti photos and albums with the non official Tuenti API and PHP','content_es'=>'Por supuesto el primer paso será &lt;a href=&quot;/proyecto/tuenti-api/descargas&quot;&gt;descargar el API no oficial de Tuenti&lt;/a&gt; y &lt;a href=&quot;/proyecto/tuenti-api/leeme&quot;&gt;asegurarnos de que funciona correctamente&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;El script de descarga no puede ser mas sencillo (incluido en los ejemplos del API):&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;include \'/PATH/TO/TUENTI-API/Core/autoloader.php\';

//Script configuration, change to yours in order to login correctly
define (\'TUENTI_USERNAME\', \'user@example.com\');
define (\'TUENTI_PASSWORD\', \'password\');
define (\'PHOTOS_PER_PAGE\', 20);
define (\'DOWNLOAD_PATH\', dirname(__FILE__) . \'/Albums/\');
define (\'EVER_OVERWRITE\', false);

try
{
  $tapi = new Kiwwito\\TuentiAPI\\Bundle (TUENTI_USERNAME, TUENTI_PASSWORD);

  //Create photos album
  if (!file_exists(DOWNLOAD_PATH))
  {
    mkdir (DOWNLOAD_PATH);
  }

  //Save albums loop
  foreach ($tapi-&amp;gt;getAlbums() as $album)
  {
    //Create album folder (if not exists)
    if (!file_exists(DOWNLOAD_PATH . $album-&amp;gt;getName()))
    {
      mkdir (DOWNLOAD_PATH . $album-&amp;gt;getName());
    }

    echo \'Size (\' . $album-&amp;gt;getName() . \'): \' . $album-&amp;gt;getSize() . &quot;\\n&quot;;
    //Save loop
    $j = 1;
    for ($i = 0; $i &amp;lt; $album-&amp;gt;getSize(); $i = $i+PHOTOS_PER_PAGE)
    {
      echo \'Page \' . floor($i/PHOTOS_PER_PAGE) . \', photos \' . $i . &quot;\\n&quot;;
      foreach ($album-&amp;gt;getPhotos(floor($i/PHOTOS_PER_PAGE)) as $photo)
      {
        $savePath = DOWNLOAD_PATH . $album-&amp;gt;getName() . \'/\' . basename($photo-&amp;gt;getPhotoUrl600());

        //Only save if the file not exist
        if (EVER_OVERWRITE || !file_exists($savePath))
        {
          file_put_contents($savePath, file_get_contents($photo-&amp;gt;getPhotoUrl600()));
          echo \'Saved: \' . basename($photo-&amp;gt;getPhotoUrl600()) . \' (\' . $j . \') [\' . $savePath .\']\' . &quot;\\n&quot;;
        }

        $j++;
      }
    }
  }
}
catch (Exception $e)
{
  echo \'An error have ocurred during execution: \' . $e-&amp;gt;getMessage();
}&lt;/pre&gt;
Se han definido unas constantes en la cabecera para que la configuración del script sea mas sencilla. El API nos permite visualizar fotos de 20 en 20, es por eso que el recorrido es por páginas (utilización del método &lt;code&gt;floor()&lt;/code&gt;).&lt;br /&gt;','content_en'=>'The first step must be &lt;a href=&quot;/project/tuenti-api/downloads&quot;&gt;download the non official Tuenti API&lt;/a&gt; and &lt;a href=&quot;/project/tuenti-api/readme&quot;&gt;make sure that all was correct&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;The download script is very simple (included into the examples of the API):&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;include \'/PATH/TO/TUENTI-API/Core/autoloader.php\';

//Script configuration, change to yours in order to login correctly
define (\'TUENTI_USERNAME\', \'user@example.com\');
define (\'TUENTI_PASSWORD\', \'password\');
define (\'PHOTOS_PER_PAGE\', 20);
define (\'DOWNLOAD_PATH\', dirname(__FILE__) . \'/Albums/\');
define (\'EVER_OVERWRITE\', false);

try
{
  $tapi = new Kiwwito\\TuentiAPI\\Bundle (TUENTI_USERNAME, TUENTI_PASSWORD);

  //Create photos album
  if (!file_exists(DOWNLOAD_PATH))
  {
    mkdir (DOWNLOAD_PATH);
  }

  //Save albums loop
  foreach ($tapi-&amp;gt;getAlbums() as $album)
  {
    //Create album folder (if not exists)
    if (!file_exists(DOWNLOAD_PATH . $album-&amp;gt;getName()))
    {
      mkdir (DOWNLOAD_PATH . $album-&amp;gt;getName());
    }

    echo \'Size (\' . $album-&amp;gt;getName() . \'): \' . $album-&amp;gt;getSize() . &quot;\\n&quot;;
    //Save loop
    $j = 1;
    for ($i = 0; $i &amp;lt; $album-&amp;gt;getSize(); $i = $i+PHOTOS_PER_PAGE)
    {
      echo \'Page \' . floor($i/PHOTOS_PER_PAGE) . \', photos \' . $i . &quot;\\n&quot;;
      foreach ($album-&amp;gt;getPhotos(floor($i/PHOTOS_PER_PAGE)) as $photo)
      {
        $savePath = DOWNLOAD_PATH . $album-&amp;gt;getName() . \'/\' . basename($photo-&amp;gt;getPhotoUrl600());

        //Only save if the file not exist
        if (EVER_OVERWRITE || !file_exists($savePath))
        {
          file_put_contents($savePath, file_get_contents($photo-&amp;gt;getPhotoUrl600()));
          echo \'Saved: \' . basename($photo-&amp;gt;getPhotoUrl600()) . \' (\' . $j . \') [\' . $savePath .\']\' . &quot;\\n&quot;;
        }

        $j++;
      }
    }
  }
}
catch (Exception $e)
{
  echo \'An error have ocurred during execution: \' . $e-&amp;gt;getMessage();
}&lt;/pre&gt;
There was defined some constants in the head of the file in order to configure more easily the script. The API gives us the photos 20 by 20, that is the reason why we use the method &lt;code&gt;floor()&lt;/code&gt;.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-11-15 03:32:37','updated_at'=>'2013-08-24 19:43:38','visits'=>'3786','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'http://www.kiwwito.com/project/tuenti-api','published_at'=>'2010-11-15','is_published'=>'1','updated_note'=>''),
  array('id'=>'57','title_es'=>'Colaboración entre Kiwwito y TwentySpy','title_en'=>'Colaboration between Kiwwito and TwentySPY','slug_es'=>'colaboracion-entre-kiwwito-y-twentyspy','slug_en'=>'colaboration-between-kiwwito-and-twentyspy','description_es'=>'Kiwwito contribuye a la mejora en el protocolo de comunicación entre TwentySpy y Tuenti basado en la tecnología de Kiwwito TuentiAPI','description_en'=>'Kiwwito colaborates with TwentySpy and enhaces the comunication protocol with Tuenti through Kiwwito TuentiAPI technology','content_es'=>'&lt;div&gt;TwentySpy ha contactado conmigo en relación con la reciente publicación de mi API de Tuenti en PHP y oficialmente anuncio el comienzo de la transferencia de conocimiento (sin ánimo de lucro) por parte de Kiwwito a TwentySpy en pro de mejorar el protocolo de comunicación entre TwentySpy y Tuenti.&lt;/div&gt;
&lt;div&gt;El objetivo es que TwentySpy utilice la misma tecnología que en el API de Tuenti para comunicarse con Tuenti de forma efectiva.&lt;/div&gt;
&lt;div&gt;¿Que significa esto?&lt;/div&gt;
&lt;div&gt;TwentySpy, y en concreto el usuario que utiliza esta aplicación, podrá interactuar mucho mas rápido con Tuenti mejorando enormemente la experiencia de usuario.&lt;/div&gt;
&lt;div&gt;Probablemente sea una de las múltiples mejoras pensada para el próximo y explosivo lanzamiento de la aplicación en su versión 3.0.0.&lt;/div&gt;','content_en'=>'','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-11-19 12:49:07','updated_at'=>'2010-11-19 13:02:37','visits'=>'0','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-11-19','is_published'=>'0','updated_note'=>''),
  array('id'=>'58','title_es'=>'md5 en Java','title_en'=>'md5 in Java','slug_es'=>'md5-en-java','slug_en'=>'md5-in-java','description_es'=>'Escribe tu propia clase Java para calcular md5 en unas pocas líneas de código','description_en'=>'Write your own md5 crypter class with a few Java code lines','content_es'=>'&lt;pre class=&quot;java&quot;&gt;import java.io.FileInputStream;
import java.io.UnsupportedEncodingException;
import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

public class MD5 {
  public static String getMD5(String input) {
    try {
      MessageDigest md = MessageDigest.getInstance(&quot;MD5&quot;);
      byte[] messageDigest = md.digest(input.getBytes());
      BigInteger number = new BigInteger(1, messageDigest);
      String hashtext = number.toString(16);
      while (hashtext.length() &amp;lt; 32) {
          hashtext = &quot;0&quot; + hashtext;
      }
      return hashtext;
    }
    catch (NoSuchAlgorithmException e) {
        throw new RuntimeException(e);
    }
  }
  public static void main(String[] args) throws NoSuchAlgorithmException {
      System.out.println(getMD5(&quot;test&quot;));
  }
}&lt;/pre&gt;','content_en'=>'&lt;pre class=&quot;java&quot;&gt;import java.io.FileInputStream;
import java.io.UnsupportedEncodingException;
import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

public class MD5 {
  public static String getMD5(String input) {
    try {
      MessageDigest md = MessageDigest.getInstance(&quot;MD5&quot;);
      byte[] messageDigest = md.digest(input.getBytes());
      BigInteger number = new BigInteger(1, messageDigest);
      String hashtext = number.toString(16);
      while (hashtext.length() &amp;lt; 32) {
          hashtext = &quot;0&quot; + hashtext;
      }
      return hashtext;
    }
    catch (NoSuchAlgorithmException e) {
        throw new RuntimeException(e);
    }
  }
  public static void main(String[] args) throws NoSuchAlgorithmException {
      System.out.println(getMD5(&quot;test&quot;));
  }
}&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-11-23 20:38:05','updated_at'=>'2013-08-24 14:51:46','visits'=>'1220','via_url'=>'http://www.asjava.com/core-java/java-md5-example/','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2010-11-24','is_published'=>'1','updated_note'=>''),
  array('id'=>'59','title_es'=>'Instalar Wacom Bamboo Fun CTH-661 en  Ubuntu 10.10','title_en'=>'Install Wacom Bamboo Fun CTH-661 in Ubuntu 10.10','slug_es'=>'instalar-wacom-bamboo-fun-cth-661-en-ubuntu-10-10','slug_en'=>'install-wacom-bamboo-fun-cth-661-in-ubuntu-10-10','description_es'=>'Instalar Wacom Bamboo Fun en Ubuntu 10.10 Maverik Merkaat','description_en'=>'Install Wacom Bamboo Fun in Ubuntu 10.10 Maverick Merkaat','content_es'=>'Por problemas con el driver de &lt;a href=&quot;http://linuxwacom.sourceforge.net/&quot;&gt;Wacom para Linux&lt;/a&gt;, algunas tabletas modernas como el modelo &lt;strong&gt;Bamboo Fun (CTH-661)&lt;/strong&gt; no funcionan correctamente en &lt;strong&gt;Ubuntu 10.10 Maverick Merkaat&lt;/strong&gt;.&lt;br /&gt;&lt;br /&gt;Gracias a &lt;a href=&quot;https://launchpad.net/~irie&quot;&gt;Irie Shinsuke&lt;/a&gt; podemos instalarlo de una forma cómoda y rápida, solo tenemos que ir al termina (&lt;strong&gt;Aplicaciones &amp;gt; Accesorios &amp;gt; Terminal&lt;/strong&gt;) e introducir los siguientes comandos:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo add-apt-repository ppa:irie/wacom
sudo apt-get update
sudo apt-get install xserver-xorg-input-wacom
sudo apt-get install wacom-dkms&lt;/pre&gt;
¡Reiniciamos y listo!&lt;br /&gt;','content_en'=>'For problems with the &lt;a href=&quot;http://linuxwacom.sourceforge.net/&quot;&gt;Wacom driver for Linux&lt;/a&gt; some of Wacom tablets like the &lt;strong&gt;Bamboo Fun (CTH-661)&lt;/strong&gt; model does not function correctly under Ubuntu 10.10 Maverik Merkaat.&lt;br /&gt;&lt;br /&gt;Thanks to &lt;a href=&quot;https://launchpad.net/~irie&quot;&gt;Irie Shinsuke&lt;/a&gt; we can install the drivers through simple steps. We only have to enter the next commands into the Terminal (&lt;strong&gt;Applications &amp;gt; Accessories &amp;gt; Terminal&lt;/strong&gt;):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo add-apt-repository ppa:irie/wacom
sudo apt-get update
sudo apt-get install xserver-xorg-input-wacom
sudo apt-get install wacom-dkms&lt;/pre&gt;
Reboot and have fun!&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2010-12-28 13:43:45','updated_at'=>'2013-08-23 23:10:27','visits'=>'1413','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'https://launchpad.net/~irie/+archive/wacom','published_at'=>'2011-01-12','is_published'=>'1','updated_note'=>''),
  array('id'=>'60','title_es'=>'La Sexta y su particular visión de lo legítimo','title_en'=>'La Sexta and their vision of what is legitimate','slug_es'=>'la-sexta-y-su-particular-vision-de-lo-legitimo','slug_en'=>'la-sexta-and-their-vision-of-what-is-legitimate','description_es'=>'La ley Sinde ha llegado antes de tiempo… será verdad que La Sexta se mueve...','description_en'=>'The Sinde law has come early... it\'s true that La Sexta is moving...','content_es'=>'&lt;div style=&quot;font-size:10px; border:1px solid #900; padding:4px;color:#900; &quot;&gt;Nota: Kiwwito.com ha cedido éste espacio para que Syrus Akbary pueda expresar su opinión mas allá de los 140 carácteres de un tweet.&lt;/div&gt;
Ironías de la vida...&lt;br /&gt; Hoy, a primera hora de la mañana, han contactado conmigo a través de mi página web &lt;a href=&quot;http://www.medinalia.com&quot;&gt;medinalia.com&lt;/a&gt; con el siguiente mensaje:&lt;br /&gt;
&lt;p style=&quot;display: block; font-family:monospace; margin:8px;&quot;&gt;D. Syrus Akbary Nieto&lt;br /&gt;&lt;br /&gt; En Madrid a 4 de febrero de 2011&lt;br /&gt;&lt;br /&gt;Muy Sr. Mío,&lt;br /&gt;&lt;br /&gt;Me dirijo a Usted, en nombre y representación de GESTORA DE INVERSIONES AUDIOVISUALES LA SEXTA S.A., (en adelante La Sexta), en relación con el uso ilegítimo, que viene haciendo a través de la página web de su titularidad, www.medinalia.com, de contenidos sobre los que mi mandante ostenta todos los derechos de explotación, en exclusiva, a través de este medio, sin que en ningún caso haya sido autorizado para ello por mi representada.&lt;br /&gt;&lt;br /&gt;Es más, no sólo hace uso, a través de dicha página web de las referidas imágenes de titularidad de mi mandante sin autorización previa sino que además, acompaña dichas imágenes con el símbolo de La Sexta, el cual, como es obvio, esta sujeto a derechos de propiedad industrial y cuyo uso tampoco ha sido autorizado por La Sexta, verdadero titular de dichos derechos.&lt;br /&gt; En virtud de lo expuesto, por medio de la presente le insto a que en el plazo máximo de tres (3) días desde la recepción del presente documento, retire todo el contenido que actualmente nutre de forma fraudulenta la página web, http://www.medinalia.com se abstenga de utilizar en el futuro cualquier otra imagen, de titularidad de mi mandante, sujeta a derechos de propiedad intelectual y/o industrial sin autorización previa y cualquier otro signo que pueda producir riesgo de confusión en los usuarios. Lo contrario, obligará a esta parte a emprender cuantas acciones legales se estimen oportunas.&lt;br /&gt;&lt;br /&gt;Atentamente,&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;María Jesús Rodrigo&lt;br /&gt;Asesoría Jurídica LASEXTA&lt;/p&gt;
Lo más curioso del email es que no me han facilitado ninguna dirección de contacto para poder aclarar el asunto.&lt;br /&gt; ¿No os parece &lt;strong&gt;irónico&lt;/strong&gt; que la misma compañía que &lt;a href=&quot;http://www.notishow.com/actualidad/se08/ac230908-lasexta-telecinco.htm&quot;&gt;plantó cara a telecinco&lt;/a&gt; (y con toda su razón) &lt;strong&gt;utilice ahora las mismas armas de su oponente&lt;/strong&gt; para atacar una web solo por utilizar su logo?&lt;br /&gt; Si... creo que la ley sinde ha llegado antes de tiempo… será verdad que La Sexta se mueve','content_en'=>'&lt;div style=&quot;font-size:10px; border:1px solid #900; padding:4px;color:#900; &quot;&gt;Note: Kiwwito.com had offered Syrus Akbary this space to express his opinion beyond the 140 characters of a tweet.&lt;/div&gt;
Ironies of life...&lt;br /&gt; Today, people from La Sexta have contacted me through my website &lt;a href=&quot;http://www.medinalia.com&quot;&gt;medinalia.com&lt;/a&gt; with the following message:&lt;br /&gt;
&lt;p style=&quot;display: block; font-family:monospace; margin:8px;&quot;&gt;D. Syrus Akbary Nieto&lt;br /&gt;&lt;br /&gt; En Madrid a 4 de febrero de 2011&lt;br /&gt;&lt;br /&gt;Muy Sr. Mío,&lt;br /&gt;&lt;br /&gt;Me dirijo a Usted, en nombre y representación de GESTORA DE INVERSIONES AUDIOVISUALES LA SEXTA S.A., (en adelante La Sexta), en relación con el uso ilegítimo, que viene haciendo a través de la página web de su titularidad, www.medinalia.com, de contenidos sobre los que mi mandante ostenta todos los derechos de explotación, en exclusiva, a través de este medio, sin que en ningún caso haya sido autorizado para ello por mi representada.&lt;br /&gt;&lt;br /&gt;Es más, no sólo hace uso, a través de dicha página web de las referidas imágenes de titularidad de mi mandante sin autorización previa sino que además, acompaña dichas imágenes con el símbolo de La Sexta, el cual, como es obvio, esta sujeto a derechos de propiedad industrial y cuyo uso tampoco ha sido autorizado por La Sexta, verdadero titular de dichos derechos.&lt;br /&gt; En virtud de lo expuesto, por medio de la presente le insto a que en el plazo máximo de tres (3) días desde la recepción del presente documento, retire todo el contenido que actualmente nutre de forma fraudulenta la página web, http://www.medinalia.com se abstenga de utilizar en el futuro cualquier otra imagen, de titularidad de mi mandante, sujeta a derechos de propiedad intelectual y/o industrial sin autorización previa y cualquier otro signo que pueda producir riesgo de confusión en los usuarios. Lo contrario, obligará a esta parte a emprender cuantas acciones legales se estimen oportunas.&lt;br /&gt;&lt;br /&gt;Atentamente,&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;María Jesús Rodrigo&lt;br /&gt;Asesoría Jurídica LASEXTA&lt;/p&gt;
The most anoying thing is that they have not provided any contact address in order to clarify the matter.&lt;br /&gt; Isn\'t ironic that the same company &lt;a href=&quot;http://www.notishow.com/actualidad/se08/ac230908-lasexta-telecinco.htm&quot;&gt;that stood up to telecinco&lt;/a&gt; now &lt;strong&gt;use the same weapons of his opponent&lt;/strong&gt; to attack a website just for using their logo?&lt;br /&gt; The sinde law has come early... it\'s true that La Sexta moves.','short_url_es'=>'','short_url_en'=>'','image'=>'5eb51eb9f064633c7735503438ae654a985764a4.jpg','created_at'=>'2011-02-04 15:03:39','updated_at'=>'2013-08-23 21:10:47','visits'=>'2173','via_url'=>'','download_url'=>'','url'=>'http://www.medinalia.com/play/La_Sexta/14814','info_url'=>'','published_at'=>'2011-02-04','is_published'=>'1','updated_note'=>''),
  array('id'=>'61','title_es'=>'Instalar PEAR desde un fichero PHAR','title_en'=>'Install PEAR with a PHAR file','slug_es'=>'instalar-pear-desde-un-fichero-phar','slug_en'=>'install-pear-with-a-phar-file','description_es'=>'Cómo instalar PEAR desde un cómodo paquete PHP (PHAR)','description_en'=>'How to install PEAR with a single package (PHAR file)','content_es'=>'Instalar PEAR desde la consola puede resultar a veces un poco tedioso. Una forma sencilla de instalar PEAR desde la consola es descargando el paquete PHAR oficial y ejecutando su contenido. &lt;br /&gt;&lt;br /&gt;Desde la consola podemos descargarlo y ejecutarlo con las siguientes instrucciones:
&lt;pre class=&quot;bash&quot;&gt;$ wget http://pear.php.net/go-pear.phar
$ php go-pear.phar&lt;/pre&gt;
Si tu sistema es Mac OS X, necesitarás ejecutar el paquete PHAR de PEAR con la opción de detección unicode en PHP desactivada:
&lt;pre class=&quot;bash&quot;&gt;$ wget http://pear.php.net/go-pear.phar
$ php -d detect_unicode=0 go-pear.phar
&lt;/pre&gt;','content_en'=>'Sometimes, installing PEAR through the console is not easy. A simple form to do it is to install through the command line downloading the PHAR package and executing it. &lt;br /&gt;&lt;br /&gt;From the console you can download and after execute it:
&lt;pre class=&quot;bash&quot;&gt;$ wget http://pear.php.net/go-pear.phar
$ php go-pear.phar&lt;/pre&gt;
If your system is a Mac OS X, you have to disable the unicode detection in PHP execution:
&lt;pre class=&quot;bash&quot;&gt;$ wget http://pear.php.net/go-pear.phar
$ php -d detect_unicode=0 go-pear.phar&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-04-05 14:15:44','updated_at'=>'2011-05-23 19:33:09','visits'=>'0','via_url'=>'http://clickontyler.com/blog/2008/01/how-to-install-pear-in-mac-os-x-leopard/','download_url'=>'http://pear.php.net/manual/en/installation.getting.php','url'=>'http://pear.php.net/manual/en/installation.getting.php','info_url'=>'http://pear.php.net/manual/en/installation.getting.php','published_at'=>'2011-04-05','is_published'=>'0','updated_note'=>''),
  array('id'=>'62','title_es'=>'Función PHP para validar DNI/NIE español','title_en'=>'PHP function for spanish DNI validation','slug_es'=>'funcion-php-para-validar-dni-nie-espanol','slug_en'=>'php-function-for-spanish-dni-validation','description_es'=>'Función PHP que comprueba si una cadena de texto es un DNI/NIE español válido','description_en'=>'PHP function which checks if a given string was a valid spanish DNI/NIE','content_es'=>'Función PHP que comprueba si una cadena de texto es un DNI/NIE español válida:
&lt;pre class=&quot;php&quot;&gt;
/**
 * Función que comprueba si una cadena dada es un DNI/NIE válida
 *
 * @param string $cadena
 * @return boolean
 */
function es_DNI_NIE_valido ($cadena)
{
    //Comprobamos longitud
    if (strlen($cadena) != 9) return false;

    //Posibles valores para la letra final
    $valoresLetra = array(
        0 =&amp;gt; \'T\', 1 =&amp;gt; \'R\', 2 =&amp;gt; \'W\', 3 =&amp;gt; \'A\', 4 =&amp;gt; \'G\', 5 =&amp;gt; \'M\',
        6 =&amp;gt; \'Y\', 7 =&amp;gt; \'F\', 8 =&amp;gt; \'P\', 9 =&amp;gt; \'D\', 10 =&amp;gt; \'X\', 11 =&amp;gt; \'B\',
        12 =&amp;gt; \'N\', 13 =&amp;gt; \'J\', 14 =&amp;gt; \'Z\', 15 =&amp;gt; \'S\', 16 =&amp;gt; \'Q\', 17 =&amp;gt; \'V\',
        18 =&amp;gt; \'H\', 19 =&amp;gt; \'L\', 20 =&amp;gt; \'C\', 21 =&amp;gt; \'K\',22 =&amp;gt; \'E\'
    );

    //Comprobar si es un DNI
    if (preg_match(\'/^[0-9]{8}[A-Z]$/i\', $cadena))
    {
        //Comprobar letra
        if (strtoupper($cadena[strlen($cadena) - 1]) !=
            $valoresLetra[((int) substr($cadena, 0, strlen($cadena) - 1)) % 23])
            return false;

        //Todo fue bien
        return true;
    }
    //Comprobar si es un NIE
    else if (preg_match(\'/^[XYZ][0-9]{7}[A-Z]$/i\', $cadena))
    {
        //Comprobar letra
        if (strtoupper($cadena[strlen($cadena) - 1]) !=
            $valoresLetra[((int) substr($cadena, 1, strlen($cadena) - 2)) % 23])
            return false;

        //Todo fue bien
        return true;
    }

    //Cadena no válida
    return false;
}&lt;/pre&gt;','content_en'=>'PHP function which checks if a given string was a valid spanish DNI/NIE:
&lt;pre class=&quot;php&quot;&gt;
/**
 * Function which checks if a string is a valid spanish DNI/NIE
 *
 * @param string $string
 * @return boolean
 */
function is_valid_DNI_NIE ($string)
{
    //Check length
    if (strlen($string) != 9) return false;

    //Possible values for the final letter
    $letterValues = array(
        0 =&amp;gt; \'T\', 1 =&amp;gt; \'R\', 2 =&amp;gt; \'W\', 3 =&amp;gt; \'A\', 4 =&amp;gt; \'G\', 5 =&amp;gt; \'M\',
        6 =&amp;gt; \'Y\', 7 =&amp;gt; \'F\', 8 =&amp;gt; \'P\', 9 =&amp;gt; \'D\', 10 =&amp;gt; \'X\', 11 =&amp;gt; \'B\',
        12 =&amp;gt; \'N\', 13 =&amp;gt; \'J\', 14 =&amp;gt; \'Z\', 15 =&amp;gt; \'S\', 16 =&amp;gt; \'Q\', 17 =&amp;gt; \'V\',
        18 =&amp;gt; \'H\', 19 =&amp;gt; \'L\', 20 =&amp;gt; \'C\', 21 =&amp;gt; \'K\',22 =&amp;gt; \'E\'
    );

    //Check if is a DNI
    if (preg_match(\'/^[0-9]{8}[A-Z]$/i\', $string))
    {
        //Check letter
        if (strtoupper($string[strlen($string) - 1]) !=
            $letterValues[((int) substr($string, 0, strlen($string) - 1)) % 23])
            return false;

        //All was ok
        return true;
    }
    //Check if is a NIE
    else if (preg_match(\'/^[XYZ][0-9]{7}[A-Z]$/i\', $string))
    {
        //Comprobar letra
        if (strtoupper($string[strlen($string) - 1]) !=
            $letterValues[((int) substr($string, 1, strlen($string) - 2)) % 23])
            return false;

        //All was ok
        return true;
    }

    //Non valid string
    return false;
}&lt;/pre&gt;
&lt;/div&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-04-29 13:39:39','updated_at'=>'2013-08-24 15:06:50','visits'=>'1950','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-05-14','is_published'=>'1','updated_note'=>''),
  array('id'=>'63','title_es'=>'Configurar VPN FI UPM in Ubuntu','title_en'=>'Configure FI UPM VPN in Ubuntu','slug_es'=>'configurar-vpn-fi-upm-in-ubuntu','slug_en'=>'configure-fi-upm-vpn-in-ubuntu','description_es'=>'Como configurar','description_en'=>'asdf','content_es'=>'&lt;span style=&quot;color: #333333; font-family: \'Lucida Grande\', \'Trebuchet MS\', Verdana, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18px;&quot;&gt;1. Instalar todos los paquetes para network manager de VPN&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;sudo apt-get install network-manager-vpnc network-manager-pptp network-manager-openvpn&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;2. Reiniciar el network manager&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;sudo /etc/init.d/network-manager restart&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;3. Añadir una conexión Cisco Compatible VNP (vpnc), pongo la configuración que tengo yo, el Group name para los profesores si quieren utilizarlo será distinto, creo que tendrán que pedirlo al CCFI, pero la esencia general de la configuración está aqui:&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;General:&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Gateway: otilio.fi.upm.es&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Group name: ipsfalum&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;User password: &amp;lt;contraseña&amp;gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Group password: fia9472&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Optional:&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;User name: &amp;lt;matricula con letra&amp;gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Domain: CCFI&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Encryption Method: Secure&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;NAT traversal: NAT-T&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;4. Conectar.&lt;/span&gt;','content_en'=>'&lt;span style=&quot;color: #333333; font-family: \'Lucida Grande\', \'Trebuchet MS\', Verdana, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18px;&quot;&gt;1. Instalar todos los paquetes para network manager de VPN&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;sudo apt-get install network-manager-vpnc network-manager-pptp network-manager-openvpn&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;2. Reiniciar el network manager&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;sudo /etc/init.d/network-manager restart&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;3. Añadir una conexión Cisco Compatible VNP (vpnc), pongo la configuración que tengo yo, el Group name para los profesores si quieren utilizarlo será distinto, creo que tendrán que pedirlo al CCFI, pero la esencia general de la configuración está aqui:&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;General:&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Gateway: otilio.fi.upm.es&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Group name: ipsfalum&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;User password: &amp;lt;contraseña&amp;gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Group password: fia9472&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Optional:&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;User name: &amp;lt;matricula con letra&amp;gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Domain: CCFI&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;Encryption Method: Secure&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;NAT traversal: NAT-T&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;&lt;br style=&quot;padding: 0px; margin: 0px;&quot; /&gt;4. Conectar.&lt;/span&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-06-05 12:36:41','updated_at'=>'2011-06-05 12:36:41','visits'=>'0','via_url'=>'http://foro.da.fi.upm.es/viewtopic.php?f=2&t=237','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-06-05','is_published'=>'0','updated_note'=>''),
  array('id'=>'64','title_es'=>'Problema con SQLite para el profiler de Symfony2','title_en'=>'Problem with SQLite lib for the Symfony2 profiler','slug_es'=>'problema-con-sqlite-para-el-profiler-de-symfony2','slug_en'=>'problem-with-sqlite-lib-for-the-symfony2-profiler','description_es'=>'You need to enable either the SQLite or PDO_SQLite extension for the profiler to run properly.','description_en'=>'You need to enable either the SQLite or PDO_SQLite extension for the profiler to run properly.','content_es'=>'Si estas intentando ejecutar Symfony 2 y te lanza la siguiente excepción:&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;You need to enable either the SQLite or PDO_SQLite extension for the profiler to run properly.&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;Significa que no tienes instalada la librería de SQLite. Si te encuentras bajo una distribución Linux, (pe: Ubuntu) puedes instalar la librería fácilmente mediante:&lt;br /&gt;','content_en'=>'','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-08-02 16:44:52','updated_at'=>'2011-10-19 23:31:42','visits'=>'0','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-08-02','is_published'=>'0','updated_note'=>''),
  array('id'=>'65','title_es'=>'Reconfigurar Apache para utilizar vhosts de Plesk','title_en'=>'Reconfigure Apache to use Plesk vhosts','slug_es'=>'reconfigurar-apache-para-utilizar-vhosts-de-plesk','slug_en'=>'reconfigure-apache-to-use-plesk-vhosts','description_es'=>'Como reconfigurar el servidor Apache para que utilice la configuración Plesk','description_en'=>'How to reconfigure Apache server for Plesk vhosts configuration','content_es'=>'Algunas veces la configuración Apache se restablece o borra cuando realizamos una actualización mayor a Plesk.&lt;br /&gt;Para reconfigurar nuestro servidor Apache de una forma cómoda solo tenemos que ejecutar el siguiente comando desde la consola:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;/usr/local/psa/admin/sbin/httpdmng --reconfigure-all&lt;/pre&gt;','content_en'=>'Sometimes the Apache configuration for the virtual hosts magically disappear when you update to a major version of Plesk.&lt;br /&gt;An easy way to restore it is to reconfigure Apache through the command-line running the next command:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;/usr/local/psa/admin/sbin/httpdmng --reconfigure-all&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-08-12 19:25:07','updated_at'=>'2013-08-24 18:30:57','visits'=>'883','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-08-12','is_published'=>'1','updated_note'=>''),
  array('id'=>'66','title_es'=>'Añadir funciones a Twig en Symfony 2','title_en'=>'Extending Twig in Symfony 2, add custom functions','slug_es'=>'anadir-funciones-a-twig-en-symfony-2','slug_en'=>'extending-twig-in-symfony-2-add-custom-functions','description_es'=>'Como añadir funciones a Twig en Symfony 2','description_en'=>'How to add functions to Twig in Symfony 2','content_es'=>'Muchas veces en la plantilla necesitamos funciones específicas que no vienen incluidas en el framework. En Symfony 1 teníamos los helpers, pero en Symfony 2 la vía que nos queda es la de extender la funcionalidad básica de Twig.&lt;br /&gt;&lt;br /&gt;En primer lugar debemos conectar nuestra futura extensión Twig con el Contenedor de Inyección de Dependencias de nuestro Bundle. Si no tenemos configuración para el contenedor deberemos crear el fichero.&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/MyBundle/DependencyInjection/MyBundleExtension.php

namespace Test\\MyBundle\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\Config\\FileLocator;

class TestMyBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.\'/../Resources/config\'));
        $loader-&amp;gt;load(\'twig.xml\');
    }

    public function getAlias()
    {
        return \'test_my_bundle\';
    }
}&lt;/pre&gt;
Debemos configurar correctamente que clase de servicio pretendemos ofrecer, que parámetros pasar a nuestra extensión y como ha de estar conectado al núcleo (fichero Test/MyBundle/Resources/config/twig.xml):&lt;br /&gt;
&lt;pre class=&quot;xml&quot;&gt;&amp;lt;?xml version=&quot;1.0&quot; ?&amp;gt;

&amp;lt;container xmlns=&quot;http://symfony.com/schema/dic/services&quot;
    xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
    xsi:schemaLocation=&quot;http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd&quot;&amp;gt;

    &amp;lt;services&amp;gt;
        &amp;lt;service id=&quot;twig.extension.ka.blog&quot; class=&quot;Test\\MyBundle\\Twig\\Extension\\BlogExtension&quot; public=&quot;false&quot;&amp;gt;
            &amp;lt;tag name=&quot;twig.extension&quot; /&amp;gt;
        &amp;lt;/service&amp;gt;
    &amp;lt;/services&amp;gt;
&amp;lt;/container&amp;gt;&lt;/pre&gt;
Ahora solo tenemos que extender Twig, esto lo haremos creando una simple extensión que por ejemplo añade una función que transforma una cadena de tiempo en un timestampable de Unix:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/MyBundle/Twig/Extension/MyBundleExtension.php

namespace Test\\MyBundle\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\KernelInterface;

class MyBundleExtension extends \\Twig_Extension
{
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            \'totime\' =&amp;gt; new \\Twig_Function_Method($this, \'toTime\')
        );
    }

    /**
     * Converts a string to time
     *
     * @param string $string
     * @return int
     */
    public function toTime ($string)
    {
        return strtotime($string);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return \'my_bundle\';
    }
}&lt;/pre&gt;
Eso es todo, ahora para utilizar nuestra nueva función en las plantillas Twig solo tenemos que invocar la función totime():&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ totime(strtime) }}&lt;/pre&gt;','content_en'=>'Sometimes we need to add some custom functions to the view. In Symfony 1 we have the helpers, in Symfony 2 we must extend Twig in order to add it.&lt;br /&gt;&lt;br /&gt;At first, we have to connect our future Twig extension to the Dependency Injection Container in our Bundle. If we don\'t got any config file we have to create it.&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/MyBundle/DependencyInjection/MyBundleExtension.php

namespace Test\\MyBundle\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\Config\\FileLocator;

class TestMyBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.\'/../Resources/config\'));
        $loader-&amp;gt;load(\'twig.xml\');
    }

    public function getAlias()
    {
        return \'test_my_bundle\';
    }
}&lt;/pre&gt;
At this point we have to configure what kind of service we will offer, the parameters that it will require and how is going to be connected to the kernel (file Test/MyBundle/Resources/config/twig.xml):&lt;br /&gt;
&lt;pre class=&quot;xml&quot;&gt;&amp;lt;?xml version=&quot;1.0&quot; ?&amp;gt;

&amp;lt;container xmlns=&quot;http://symfony.com/schema/dic/services&quot;
    xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
    xsi:schemaLocation=&quot;http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd&quot;&amp;gt;

    &amp;lt;services&amp;gt;
        &amp;lt;service id=&quot;twig.extension.ka.blog&quot; class=&quot;Test\\MyBundle\\Twig\\Extension\\BlogExtension&quot; public=&quot;false&quot;&amp;gt;
            &amp;lt;tag name=&quot;twig.extension&quot; /&amp;gt;
        &amp;lt;/service&amp;gt;
    &amp;lt;/services&amp;gt;
&amp;lt;/container&amp;gt;&lt;/pre&gt;
Once done, the last step is to extend Twig with an Extension. In this case we will add a simple function that transforms a string into a Unix timpestamp:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/MyBundle/Twig/Extension/MyBundleExtension.php

namespace Test\\MyBundle\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\KernelInterface;

class MyBundleExtension extends \\Twig_Extension
{
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            \'totime\' =&amp;gt; new \\Twig_Function_Method($this, \'toTime\')
        );
    }

    /**
     * Converts a string to time
     *
     * @param string $string
     * @return int
     */
    public function toTime ($string)
    {
        return strtotime($string);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return \'my_bundle\';
    }
}&lt;/pre&gt;
Thats all! To use it under your templates you only have to enter:&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ totime(strtime) }}&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-08-15 09:54:06','updated_at'=>'2013-08-24 20:50:04','visits'=>'3104','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-08-15','is_published'=>'1','updated_note'=>''),
  array('id'=>'67','title_es'=>'Añadir librerias de terceros a Symfony 2','title_en'=>'Add third party libraries to Symfony 2','slug_es'=>'anadir-librerias-de-terceros-a-symfony-2','slug_en'=>'add-third-party-libraries-to-symfony-2','description_es'=>'Como añadir librerías de terceros sin a nuestro proyecto Symfony 2','description_en'=>'How to add third party libraries to our Symfony 2 project','content_es'=>'Añadir librerías creadas directamente en la versión 5.3.+ de PHP en Symfony formateadas con namespaces es trivial, pero ¿y si queremos añadir una librería antigua sin namespaces?&lt;br /&gt;&lt;br /&gt;Por ejemplo, para añadir una librería como GeSHi cuyo formato es anterior a la versión 5.3.+ de PHP y que no sigue a rajatabla los estándares, necesitaremos hacer un pequeño truco.&lt;br /&gt;&lt;br /&gt;Como manda el estándar, cualquier librería externa ha de alojarse en nuestra carpeta /vendor. Para forzar a que &lt;a href=&quot;http://qbnz.com/highlighter/&quot; target=&quot;_blank&quot;&gt;GeSHi&lt;/a&gt; se cargue con el estandar &lt;a href=&quot;http://groups.google.com/group/php-standards/web/psr-0-final-proposal?pli=1&quot; target=&quot;_blank&quot;&gt;PSR-0&lt;/a&gt; (estándar autoloader de Symfony 2) deberemos crear la siguiente estructura de directorios:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;/vendor/geshi/lib/Geshi/src&lt;/pre&gt;
Y almacenar en src directamente la librería GeSHi.&lt;br /&gt;&lt;br /&gt;Ahora haremos una clase especial para el autoloader que extenderá directamente de nuestra librería principal geshi.php:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# vendor/geshi/lib/Geshi/Geshi.php

require_once __DIR__.\'/src/geshi.php\';

class Geshi_Geshi extends GeSHi {
}&lt;/pre&gt;
Ahora podemos incluir de forma sencilla GeSHi en nuestro autoloader&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# app/autoload.php

$loader-&amp;gt;registerPrefixes(array(
    \'Geshi_\' =&amp;gt; __DIR__.\'/../vendor/geshi/lib\',
));
&lt;/pre&gt;
E incluirlo en cualquier clase de nuestro proyecto donde nos haga falta:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;$geshi = new \\Geshi_Geshi ();&lt;/pre&gt;','content_en'=>'Adding libraries that follows the PHP 5.3.+ with namespaces is trivial, but how we can add an old PHP library without namespaces?&lt;br /&gt;&lt;br /&gt;For example, if we want to add a library like &lt;a href=&quot;http://qbnz.com/highlighter/&quot; target=&quot;_blank&quot;&gt;GeSHi&lt;/a&gt; which haves an old style format (lower than 5.3.+), not follows the standards and it not have namespaces, we have to do a little trick.&lt;br /&gt;&lt;br /&gt;As the Symfony 2 standard says, we have to store all the external libraries into the /vendor folder. In order to force GeSHi to load like the &lt;a href=&quot;http://groups.google.com/group/php-standards/web/psr-0-final-proposal?pli=1&quot; target=&quot;_blank&quot;&gt;PSR-0&lt;/a&gt; standard (fact standard for autoloading in Symfony 2) we must create the following directory structure:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;/vendor/geshi/lib/Geshi/src&lt;/pre&gt;
And store there the GeSHi lib.&lt;br /&gt;&lt;br /&gt;Now we have to make an special class to load GeSHi (class which inherits from real GeSHi class):&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# vendor/geshi/lib/Geshi/Geshi.php

require_once __DIR__.\'/src/geshi.php\';

class Geshi_Geshi extends GeSHi {
}&lt;/pre&gt;
Now we can add safety the GeSHi lib to the autoloader:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# app/autoload.php

$loader-&amp;gt;registerPrefixes(array(
    \'Geshi_\' =&amp;gt; __DIR__.\'/../vendor/geshi/lib\',
));&lt;/pre&gt;
Finally we can use it everywhere in our Symfony 2 project:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;$geshi = new \\Geshi_Geshi ();&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-08-16 00:22:06','updated_at'=>'2013-08-24 20:52:47','visits'=>'3802','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-08-16','is_published'=>'1','updated_note'=>''),
  array('id'=>'68','title_es'=>'Fixtures en Symfony 2','title_en'=>'Fixtures in Symfony 2','slug_es'=>'fixtures-en-symfony-2','slug_en'=>'fixtures-in-symfony-2','description_es'=>'Como crear fixtures en nuestro proyecto Symfony 2','description_en'=>'How to create fixtures in our Symfony 2 project','content_es'=>'Los fixtures son una configuración de datos para nuestro proyecto Symfony 2, una buena forma de precargar información en nuestra base de datos de forma semi-automática. Es habitual que en el transcurso del desarrollo de una aplicación se restablezcan una y otra vez la información contenida en nuestra base de datos, la utilidad del mecanismo de los fixtures es la reinserción bajo demanda de los datos necesarios para la correcta ejecución de esta (pej: usuarios).&lt;br /&gt;&lt;br /&gt;Para instalar el sistema de fixtures de Doctrine 2, debemos añadir las siguientes líneas al fichero &quot;deps&quot;:&lt;br /&gt;
&lt;pre class=&quot;ini&quot;&gt;[doctrine-fixtures]
    git=http://github.com/doctrine/data-fixtures.git

[DoctrineFixturesBundle]
    git=http://github.com/symfony/DoctrineFixturesBundle.git
    target=/bundles/Symfony/Bundle/DoctrineFixturesBundle
&lt;/pre&gt;
E instalarlo por consola:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ bin/vendors install
&lt;/pre&gt;
Activamos el bundle en el app/autoload.php:
&lt;pre class=&quot;php&quot;&gt;$loader-&amp;gt;registerNamespaces(array(
    // ...
    \'Doctrine\\\\Common\\\\DataFixtures\' =&amp;gt; __DIR__.\'/../vendor/doctrine-fixtures/lib\',
    \'Doctrine\\\\Common\' =&amp;gt; __DIR__.\'/../vendor/doctrine-common/lib\',
    // ...
));&lt;/pre&gt;
Y en el app/AppKernel.php:
&lt;pre class=&quot;php&quot;&gt;public function registerBundles()
{
    $bundles = array(
        // ...
        new Symfony\\Bundle\\DoctrineFixturesBundle\\DoctrineFixturesBundle(),
        // ...
    );
    // ...
}
&lt;/pre&gt;
Por lo general crearemos un fichero de carga por cada entidad del modelo, así pues, un fixture de ejemplo para la carga de usuarios de prueba en el sistema podría ser:
&lt;pre class=&quot;php&quot;&gt;# Test/MyBundle/DataFixtures/ORM/LoadUserData.php

namespace Test\\MyBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;

use Test\\MyBundle\\Entity\\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Main method for fixtures insertion
     *
     * @param Doctrine\\Manager $manager
     */
    public function load($manager)
    {
        //Save the user
        $user = new User();
        $user-&amp;gt;setUsername(\'admin\');
        $user-&amp;gt;setPassword(\'admin\');
        $user-&amp;gt;setLastLogin(new \\DateTime(\'now\'));
        $user-&amp;gt;setCreatedAt(new \\DateTime(\'now\'));
        $user-&amp;gt;setUpdatedAt(new \\DateTime(\'now\'));
        $user-&amp;gt;setIsActive(true);
        $user-&amp;gt;setRoleName(User::ROLE_SUPER_ADMIN);
        $manager-&amp;gt;persist($user);
        $manager-&amp;gt;flush();

        //Associate a reference for other fixtures
        $this-&amp;gt;addReference(\'user-admin\', $user);
    }

    /**
     * Get the order of this execution
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}&lt;/pre&gt;
La carga de datos en la base de datos se produce bajo demanda, es necesario ejecutar la siguiente tarea:
&lt;pre class=&quot;bash&quot;&gt;$ php app/console doctrine:fixtures:load&lt;/pre&gt;','content_en'=>'The fixtures is a data configuration for our Symfony 2 project, is a simple but a powerful way to load into the database default or required information for the correct execution of the application. Often, in the development phase, the model changes or even dropped, as the recovery comes tedious the fixtures can save us hours of manual SQL insertions.&lt;br /&gt;&lt;br /&gt;To install a Doctrine 2 fixtures system in our Symfony 2 app, we have to add the next lines to the &quot;deps&quot; file.&lt;br /&gt;
&lt;pre class=&quot;ini&quot;&gt;[doctrine-fixtures]
    git=http://github.com/doctrine/data-fixtures.git

[DoctrineFixturesBundle]
    git=http://github.com/symfony/DoctrineFixturesBundle.git
    target=/bundles/Symfony/Bundle/DoctrineFixturesBundle&lt;/pre&gt;
Installation:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ bin/vendors install&lt;/pre&gt;
We have to activate it in the app/autoload.php:
&lt;pre class=&quot;php&quot;&gt;$loader-&amp;gt;registerNamespaces(array(
    // ...
    \'Doctrine\\\\Common\\\\DataFixtures\' =&amp;gt; __DIR__.\'/../vendor/doctrine-fixtures/lib\',
    \'Doctrine\\\\Common\' =&amp;gt; __DIR__.\'/../vendor/doctrine-common/lib\',
    // ...
));&lt;/pre&gt;
And in the app/AppKernel.php:
&lt;pre class=&quot;php&quot;&gt;public function registerBundles()
{
    $bundles = array(
        // ...
        new Symfony\\Bundle\\DoctrineFixturesBundle\\DoctrineFixturesBundle(),
        // ...
    );
    // ...
}&lt;/pre&gt;
Generally, we also have to create a fixture file per entity defined in the model. We can create a fixture to load the default admin users of our app:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/MyBundle/DataFixtures/ORM/LoadUserData.php

namespace Test\\MyBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;

use Test\\MyBundle\\Entity\\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Main method for fixtures insertion
     *
     * @param Doctrine\\Manager $manager
     */
    public function load($manager)
    {
        //Save the user
        $user = new User();
        $user-&amp;gt;setUsername(\'admin\');
        $user-&amp;gt;setPassword(\'admin\');
        $user-&amp;gt;setLastLogin(new \\DateTime(\'now\'));
        $user-&amp;gt;setCreatedAt(new \\DateTime(\'now\'));
        $user-&amp;gt;setUpdatedAt(new \\DateTime(\'now\'));
        $user-&amp;gt;setIsActive(true);
        $user-&amp;gt;setRoleName(User::ROLE_SUPER_ADMIN);
        $manager-&amp;gt;persist($user);
        $manager-&amp;gt;flush();

        //Associate a reference for other fixtures
        $this-&amp;gt;addReference(\'user-admin\', $user);
    }

    /**
     * Get the order of this execution
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}&lt;/pre&gt;
Finally, in order to load the fixtures configuration, we have to execute the next command:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ php app/console doctrine:fixtures:load&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-08-20 00:01:36','updated_at'=>'2013-08-23 16:40:45','visits'=>'1521','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'http://symfony.com/doc/2.0/cookbook/doctrine/doctrine_fixtures.html','published_at'=>'2011-08-20','is_published'=>'1','updated_note'=>''),
  array('id'=>'69','title_es'=>'Problema "Unable to write cache file" en Symfony 2','title_en'=>'"Unable to write cache file" problem in Symfony 2','slug_es'=>'problema-unable-to-write-cache-file-en-symfony-2','slug_en'=>'unable-to-write-cache-file-problem-in-symfony-2','description_es'=>'Como configurar permisos de escritura correctos para los directorios cache/ y logs/ en Symfony 2','description_en'=>'How to configure right write permissions for the cache/ and logs/ directories in Symfony 2','content_es'=>'Un problema habitual en un proyecto Symfony es que los directorios &quot;app/cache&quot; y &quot;app/logs&quot; deben tener permisos de escritura tanto para el usuario del servidor web como para el de la línea de comandos. En un sistema UNIX, si el usuario web es diferente al de la línea de comandos puedes ejecutar los siguientes comandos para configurar tu proyecto correctamente. Cambia &quot;www-data&quot; por el usuario del servidor web y &quot;yourname&quot; por el nombre de usuario de línea de comandos.&lt;br /&gt;
&lt;h3&gt;1. Usar ACL en un sistema que soporta chmod +a&lt;/h3&gt;
Muchos sistemas permiten el uso del comando &quot;chmod +a&quot;. Intentalo primero, si falla prueba con el paso siguiente:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;rm -rf app/cache/*
rm -rf app/logs/*

sudo chmod +a &quot;www-data allow delete,write,append,file_inherit,directory_inherit&quot; app/cache app/logs
sudo chmod +a &quot;yourname allow delete,write,append,file_inherit,directory_inherit&quot; app/cache app/logs
&lt;/pre&gt;
&lt;h3&gt;2. Usar ACL en un sistema que no soporta chmod +a&lt;/h3&gt;
Algunos sistemas no soportan &quot;chmod +a&quot;, pero si una utilidad llamada &quot;settfacl&quot;. En primer lugar debes &lt;a href=&quot;https://help.ubuntu.com/community/FilePermissions#ACLs&quot;&gt;habilitar ACL&lt;/a&gt; en tu partición e instalar posteriormente &quot;setfacl&quot;. Los comandos a ejecutar son:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo setfacl -R -m u:www-data:rwx -m u:yourname:rwx app/cache app/logs
sudo setfacl -dR -m u:www-data:rwx -m u:yourname:rwx app/cache app/logs
&lt;/pre&gt;
&lt;h3&gt;3. Sin ACL&lt;/h3&gt;
Si no tienes tienes permisos para modificar el ACL de los directorios puedes incluir el comando &quot;umask&quot; en la cabecera de los ficheros &quot;app/console&quot;, &quot;web/app.php&quot; y &quot;web/app_dev.php&quot;:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;umask(0002); // This will let the permissions be 0775

// or

umask(0000); // This will let the permissions be 0777&lt;/pre&gt;','content_en'=>'One common issue in Symfony 2 projects is that the &quot;app/cache&quot; and &quot;app/logs&quot; directories must be writable both by the web server and the command line user. On a UNIX system, if your web server user is different from your command line user, you can run the following commands just once in your project to ensure that permissions will be setup properly. Change &quot;www-data&quot; to the web server user and &quot;yourname&quot; to your command line user.&lt;br /&gt;
&lt;h3&gt;1. Using ACL on a system that supports chmod +a&lt;/h3&gt;
Many systems allow you to use the &quot;chmod +a&quot; command. Try this first, and if you get an error - try the next method:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;rm -rf app/cache/*
rm -rf app/logs/*

sudo chmod +a &quot;www-data allow delete,write,append,file_inherit,directory_inherit&quot; app/cache app/logs
sudo chmod +a &quot;yourname allow delete,write,append,file_inherit,directory_inherit&quot; app/cache app/logs
&lt;/pre&gt;
&lt;h3&gt;2. Using Acl on a system that does not support chmod +a&lt;/h3&gt;
Some systems don\'t support &quot;chmod +a&quot;, but do support another utility called &quot;setfacl&quot;. You may need to &lt;a href=&quot;https://help.ubuntu.com/community/FilePermissions#ACLs&quot;&gt;enable ACL support&lt;/a&gt; on your partition and install &quot;setfacl &quot;before using it (as is the case with Ubuntu), like so:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo setfacl -R -m u:www-data:rwx -m u:yourname:rwx app/cache app/logs
sudo setfacl -dR -m u:www-data:rwx -m u:yourname:rwx app/cache app/logs
&lt;/pre&gt;
&lt;h3&gt;3. Without using ACL&lt;/h3&gt;
If you don\'t have access to changing the ACL of the directories, you will need to change the &quot;umask&quot; so that the cache and log directories will be group-writable or world-writable (depending if the web server user and the command line user are in the same group or not). To achieve this, put the following line at the beginning of the &quot;app/console&quot;, &quot;web/app.php&quot; and &quot;web/app_dev.php&quot; files:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;umask(0002); // This will let the permissions be 0775

// or

umask(0000); // This will let the permissions be 0777&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-09-06 20:56:08','updated_at'=>'2013-08-23 21:10:48','visits'=>'2213','via_url'=>'http://symfony.com/doc/current/book/installation.html','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-09-06','is_published'=>'1','updated_note'=>''),
  array('id'=>'70','title_es'=>'Sluggable, Timestampable, etc. en Symfony 2','title_en'=>'Sluggable, Timestampable, etc. in Symfony 2','slug_es'=>'sluggable-timestampable-etc-en-symfony-2','slug_en'=>'sluggable-timestampable-etc-in-symfony-2','description_es'=>'Comportamientos Doctrine 2 en Symfony 2: Sluggable, Translatable, Timestampable, Loggable y Tree','description_en'=>'Doctrine 2 behaviours under Symfony 2: Sluggable, Translatable, Timestampable, Loggable and Tree','content_es'=>'En Symfony 2, podemos incluir estos útiles comportamientos a nuestro modelo mediante extensiones. Un bundle en particular, &lt;a href=&quot;https://github.com/stof/StofDoctrineExtensionsBundle&quot;&gt;DoctrineExtensionsBundle&lt;/a&gt;, nos ofrece todos ellos: &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md&quot;&gt;Sluggable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md&quot;&gt;Translatable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md&quot;&gt;Timestampable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md&quot;&gt;Loggable&lt;/a&gt; y &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md&quot;&gt;Tree&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;A grandes rasgos, las extensiones antes mencionadas permiten entre otras cosas definir cadenas de texto amigables ideales para las URL (Sluggable), soporte a la i18n en la base de datos (Translatable), versionado de entidades y tracking de cambios sobre estas (Loggable), autorelleno de campos de creación y actualización (Timestampable), y estructura nativa de árbol en la base de datos (Tree).&lt;br /&gt;
&lt;h3&gt;Instalación&lt;/h3&gt;
Primero debemos instalar las extensiones para doctrine y el bundle de integración. Añadimos las siguientes líneas a nuestro fichero &quot;deps&quot;:&lt;br /&gt;
&lt;pre class=&quot;ini&quot;&gt;[gedmo-doctrine-extensions]
    git=git://github.com/l3pp4rd/DoctrineExtensions.git

[DoctrineExtensionsBundle]
    git=git://github.com/stof/StofDoctrineExtensionsBundle.git
    target=/bundles/Stof/DoctrineExtensionsBundle
&lt;/pre&gt;
Instalamos&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ bin/vendors install
&lt;/pre&gt;
Incorporamos las siguientes líneas al app/autoload.php&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;$loader-&amp;gt;registerNamespaces(array(
    // ...
    \'Stof\'  =&amp;gt; __DIR__.\'/../vendor/bundles\',
    \'Gedmo\' =&amp;gt; __DIR__.\'/../vendor/gedmo-doctrine-extensions/lib\',
    // ...
));
&lt;/pre&gt;
Incorporamos el siguiente bundle al app/AppKernel.php&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;public function registerBundles()
{
    return array(
        // ...
        new Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle(),
        // ...
    );
}
&lt;/pre&gt;
Configuramos el app/config/config.yml (donde activaremos los listeners que necesitamos, mas información en &lt;a href=&quot;https://github.com/stof/StofDoctrineExtensionsBundle/blob/master/Resources/doc/index.rst&quot;&gt;StofDoctrineExtensions&lt;/a&gt;)&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;#...
doctrine:
    orm:
        auto_mapping: true

stof_doctrine_extensions:
    orm:
        default:
            sluggable: true
#...
&lt;/pre&gt;
No nos olvidemos de limpiar la cache&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ php app/console cache:clear&lt;/pre&gt;
&lt;h3&gt;Ejemplo de uso&lt;/h3&gt;
Una entidad de ejemplo con los comportamientos Sluggable y Timestampable podría ser:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;
namespace Entity;

use Gedmo\\Mapping\\Annotation as Gedmo;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Table(name=&quot;article&quot;)
 * @ORM\\Entity
 */
class Article
{
    /**
     * @ORM\\Id
     * @ORM\\GeneratedValue
     * @ORM\\Column(type=&quot;integer&quot;)
     */
    private $id;

    /**
     * @ORM\\Column(length=64)
     */
    private $title;

    /**
     * @Gedmo\\Slug(fields={&quot;title&quot;})
     * @ORM\\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @var datetime $created
     *
     * @Gedmo\\Timestampable(on=&quot;create&quot;)
     * @ORM\\Column(type=&quot;date&quot;)
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\\Column(type=&quot;datetime&quot;)
     * @Gedmo\\Timestampable(on=&quot;update&quot;)
     */
    private $updated;

    public function getId()
    {
        return $this-&amp;gt;id;
    }

    public function setTitle($title)
    {
        $this-&amp;gt;title = $title;
    }

    public function getTitle()
    {
        return $this-&amp;gt;title;
    }

    public function getSlug()
    {
        return $this-&amp;gt;slug;
    }

    public function getCreated()
    {
        return $this-&amp;gt;created;
    }

    public function getUpdated()
    {
        return $this-&amp;gt;updated;
    }
}&lt;/pre&gt;
Puedes obtener mas ejemplos e información en los enlaces: &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md&quot;&gt;Sluggable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md&quot;&gt;Translatable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md&quot;&gt;Timestampable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md&quot;&gt;Loggable&lt;/a&gt; y &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md&quot;&gt;Tree&lt;/a&gt;.','content_en'=>'In Symfony 2, we can attach this useful behaviours to our model through doctrine extensions. One bundle, &lt;a href=&quot;https://github.com/stof/StofDoctrineExtensionsBundle&quot;&gt;DoctrineExtensionsBundle&lt;/a&gt;, offers a lot of them: &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md&quot;&gt;Sluggable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md&quot;&gt;Translatable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md&quot;&gt;Timestampable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md&quot;&gt;Loggable&lt;/a&gt; y &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md&quot;&gt;Tree&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;The above extensions allow, among other things, to transform usual strings into friendly ones, great for URLs (Sluggable), database i18n support (Translatable), entities tracking and versioning (Loggable), create and update datetime autofill fields (Timestampable) and native database tree structure (Tree).&lt;br /&gt;
&lt;h3&gt;Installation&lt;/h3&gt;
At first, we have to install Doctrine extensions and its Symfony Bundle integration. Add the next lines to the &quot;deps&quot; file:&lt;br /&gt;
&lt;pre class=&quot;ini&quot;&gt;[gedmo-doctrine-extensions]
    git=git://github.com/l3pp4rd/DoctrineExtensions.git

[DoctrineExtensionsBundle]
    git=git://github.com/stof/StofDoctrineExtensionsBundle.git
    target=/bundles/Stof/DoctrineExtensionsBundle
&lt;/pre&gt;
Install&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ bin/vendors install
&lt;/pre&gt;
Add the next lines to the app/autoload.php file:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;$loader-&amp;gt;registerNamespaces(array(
    // ...
    \'Stof\'  =&amp;gt; __DIR__.\'/../vendor/bundles\',
    \'Gedmo\' =&amp;gt; __DIR__.\'/../vendor/gedmo-doctrine-extensions/lib\',
    // ...
));
&lt;/pre&gt;
And the following bundle to app/AppKernel.php:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;public function registerBundles()
{
    return array(
        // ...
        new Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle(),
        // ...
    );
}
&lt;/pre&gt;
Once done, configure it at app/config/config.yml (add the listeners, more info and options at &lt;a href=&quot;https://github.com/stof/StofDoctrineExtensionsBundle/blob/master/Resources/doc/index.rst&quot;&gt;StofDoctrineExtensions&lt;/a&gt;)&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;#...
doctrine:
    orm:
        auto_mapping: true

stof_doctrine_extensions:
    orm:
        default:
            sluggable: true
#...
&lt;/pre&gt;
Do not forget to clear the cache&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;$ php app/console cache:clear&lt;/pre&gt;
&lt;h3&gt;Usage example&lt;/h3&gt;
One example entity with the Sluggable and Timestampable behaviours activated could be:&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;
namespace Entity;

use Gedmo\\Mapping\\Annotation as Gedmo;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Table(name=&quot;article&quot;)
 * @ORM\\Entity
 */
class Article
{
    /**
     * @ORM\\Id
     * @ORM\\GeneratedValue
     * @ORM\\Column(type=&quot;integer&quot;)
     */
    private $id;

    /**
     * @ORM\\Column(length=64)
     */
    private $title;

    /**
     * @Gedmo\\Slug(fields={&quot;title&quot;})
     * @ORM\\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @var datetime $created
     *
     * @Gedmo\\Timestampable(on=&quot;create&quot;)
     * @ORM\\Column(type=&quot;date&quot;)
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\\Column(type=&quot;datetime&quot;)
     * @Gedmo\\Timestampable(on=&quot;update&quot;)
     */
    private $updated;

    public function getId()
    {
        return $this-&amp;gt;id;
    }

    public function setTitle($title)
    {
        $this-&amp;gt;title = $title;
    }

    public function getTitle()
    {
        return $this-&amp;gt;title;
    }

    public function getSlug()
    {
        return $this-&amp;gt;slug;
    }

    public function getCreated()
    {
        return $this-&amp;gt;created;
    }

    public function getUpdated()
    {
        return $this-&amp;gt;updated;
    }
}&lt;/pre&gt;
You can get more examples and info going to the next links: &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md&quot;&gt;Sluggable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md&quot;&gt;Translatable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md&quot;&gt;Timestampable&lt;/a&gt;, &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md&quot;&gt;Loggable&lt;/a&gt; and &lt;a href=&quot;https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md&quot;&gt;Tree&lt;/a&gt;.','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-09-25 15:27:47','updated_at'=>'2013-08-24 17:22:22','visits'=>'1494','via_url'=>'http://symfony.com/doc/2.0/cookbook/doctrine/common_extensions.html','download_url'=>'','url'=>'','info_url'=>'https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md','published_at'=>'2011-09-28','is_published'=>'1','updated_note'=>''),
  array('id'=>'71','title_es'=>'i18n en las extensiones de Twig y Symfony 2','title_en'=>'i18n in Twig extensions with Symfony 2','slug_es'=>'i18n-en-las-extensiones-de-twig-y-symfony-2','slug_en'=>'i18n-in-twig-extensions-with-symfony-2','description_es'=>'Añadir internacionalización a nuestras extensiones Twig en Symfony 2','description_en'=>'Add internationalization to Twig extensions in Symfony 2','content_es'=>'En primer lugar debemos conectar nuestra extensión Twig con el servicio de traducción. Debemos configurar el contenedor de inyección de dependencias para que lo haga.&lt;br /&gt;&lt;br /&gt;Preparamos al inyector de dependencias para que cargue la configuración de un fichero XML&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/DemoBundle/DependencyInjection/TestDemoExtension.php

namespace Test\\DemoBundle\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\Config\\FileLocator;

class TestDemoExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.\'/../Resources/config\'));
        $loader-&amp;gt;load(\'twig.xml\');
    }

    public function getAlias()
    {
        return \'test_demo\';
    }
}
&lt;/pre&gt;
Configuramos la conexión entre nuestra extensión Twig y el servicio de traducción (creamos el fichero de configuración Test/DemoBundle/Resources/config/twig.xml)&lt;br /&gt;
&lt;pre class=&quot;xml&quot;&gt;&amp;lt;?xml version=&quot;1.0&quot; ?&amp;gt;
&amp;lt;container xmlns=&quot;http://symfony.com/schema/dic/services&quot;
    xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
    xsi:schemaLocation=&quot;http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd&quot;&amp;gt;

    &amp;lt;services&amp;gt;
        &amp;lt;service id=&quot;twig.extension.test.demo&quot; class=&quot;Test\\DemoBundle\\Twig\\Extension\\DemoExtension&quot; public=&quot;false&quot;&amp;gt;
            &amp;lt;tag name=&quot;twig.extension&quot; /&amp;gt;
            &amp;lt;argument type=&quot;service&quot; id=&quot;translator&quot; /&amp;gt;
        &amp;lt;/service&amp;gt;
    &amp;lt;/services&amp;gt;
&amp;lt;/container&amp;gt;
&lt;/pre&gt;
Creamos la extensión de Twig contando con el servicio de traducción como parámetro en el constructor de clase (que será introducido por el inyector de dependencias)&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/DemoBundle/Twig/Extension/DemoExtension.php

namespace Test\\DemoBundle\\Twig\\Extension;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DemoExtension extends \\Twig_Extension
{
    protected $translator;

    /**
     * Constructor method
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this-&amp;gt;translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            \'translate\' =&amp;gt; new \\Twig_Function_Method($this, \'translate\')
        );
    }

    /**
     * Dummy function, translates a text
     *
     * @return string
     */
    public function translate ($text)
    {
        return $this-&amp;gt;translator-&amp;gt;trans($text);
    }
}
&lt;/pre&gt;
¡Y eso es todo! Ahora podemos utilizar nuestra nueva función de traducción en cualquier plantilla del Bundle DemoBundle&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ translate(\'text\') }}
&lt;/pre&gt;
No te olvides de activar la i18n en app/config/config.yml&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;framework:
    translator:      { fallback: %locale% }&lt;/pre&gt;','content_en'=>'First of all we have to connect our Twig extension with the translation service. We have to configure the dependency injection container to do that.&lt;br /&gt;&lt;br /&gt;Prepare the dependency injection container to load the configuration from an XML file&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/DemoBundle/DependencyInjection/TestDemoExtension.php

namespace Test\\DemoBundle\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\Config\\FileLocator;

class TestDemoExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.\'/../Resources/config\'));
        $loader-&amp;gt;load(\'twig.xml\');
    }

    public function getAlias()
    {
        return \'test_demo\';
    }
}
&lt;/pre&gt;
Connect the Twig extension engine with the translator service (create an XML config file Test/DemoBundle/Resources/config/twig.xml)&lt;br /&gt;
&lt;pre class=&quot;xml&quot;&gt;&amp;lt;?xml version=&quot;1.0&quot; ?&amp;gt;
&amp;lt;container xmlns=&quot;http://symfony.com/schema/dic/services&quot;
    xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
    xsi:schemaLocation=&quot;http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd&quot;&amp;gt;

    &amp;lt;services&amp;gt;
        &amp;lt;service id=&quot;twig.extension.test.demo&quot; class=&quot;Test\\DemoBundle\\Twig\\Extension\\DemoExtension&quot; public=&quot;false&quot;&amp;gt;
            &amp;lt;tag name=&quot;twig.extension&quot; /&amp;gt;
            &amp;lt;argument type=&quot;service&quot; id=&quot;translator&quot; /&amp;gt;
        &amp;lt;/service&amp;gt;
    &amp;lt;/services&amp;gt;
&amp;lt;/container&amp;gt;
&lt;/pre&gt;
Build the Twig extension with the translator as a parameter&lt;br /&gt;
&lt;pre class=&quot;php&quot;&gt;# Test/DemoBundle/Twig/Extension/DemoExtension.php

namespace Test\\DemoBundle\\Twig\\Extension;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DemoExtension extends \\Twig_Extension
{
    protected $translator;

    /**
     * Constructor method
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this-&amp;gt;translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            \'translate\' =&amp;gt; new \\Twig_Function_Method($this, \'translate\')
        );
    }

    /**
     * Dummy function, translates a text
     *
     * @return string
     */
    public function translate ($text)
    {
        return $this-&amp;gt;translator-&amp;gt;trans($text);
    }
}
&lt;/pre&gt;
And thats all! We can use our new i18n method into all of our DemoBundle Twig templates&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ translate(\'text\') }}
&lt;/pre&gt;
Do not forget to activate the i18n in the app/config/config.yml&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;framework:
    translator:      { fallback: %locale% }&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-10-02 12:02:19','updated_at'=>'2013-08-24 07:43:11','visits'=>'7718','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-10-02','is_published'=>'1','updated_note'=>''),
  array('id'=>'72','title_es'=>'Instalar Google Chrome en Ubuntu 11.10','title_en'=>'Install Google Chrome on Ubuntu 11.10','slug_es'=>'instalar-google-chrome-en-ubuntu-11-10','slug_en'=>'install-google-chrome-on-ubuntu-11-10','description_es'=>'Cómo instalar Google Chrome en Ubuntu 11.10','description_en'=>'How to install Google Chrome on Ubuntu 11.10 ','content_es'=>'Algunas de las librerías que se incluían por defecto en la distribución de Ubuntu 11.04 ya no figuran en la nueva 11.10  (Oneiric Ocelot). Si tratas de instalar de forma manual el .deb de Chrome para Ubuntu te dirá que no puedes abrir el fichero. El problema real es que faltan librerías fundamentales para su ejecución (dependencias no resueltas).&lt;br /&gt;&lt;br /&gt;Una vez &lt;a href=&quot;http://www.google.com/chrome/eula.html&quot;&gt;descargado el paquete&lt;/a&gt; hay que instalarlo de forma manual a través de la terminal mediante el siguiente comando (importante, sustituir &quot;file_name&quot; por el nombre del fichero):&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo dpkg -i file_name.deb&lt;/pre&gt;
El problema es que no se podrá debido al fallo de dependencias no instaladas, para solucionarlo:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get -f install&lt;/pre&gt;
Eso es todo.&lt;br /&gt;','content_en'=>'Some libs was were included in previous versions of Ubuntu, on the new release 11.10 (Oneiric Ocelot) are missing. If you try to install the Google Chrome .deb package for Ubuntu it may raise an error. The real problem are the not installed dependencies.&lt;br /&gt;&lt;br /&gt;Once &lt;a href=&quot;http://www.google.com/chrome/eula.html&quot;&gt;downloaded&lt;/a&gt;, you have to install them manually through the next command:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo dpkg -i file_name.deb&lt;/pre&gt;
At this point you will see an error, don\'t worry, once again is a dependency problem. In order to solve it:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get -f install&lt;/pre&gt;
&lt;br /&gt;&lt;br /&gt;Thats all! Enjoy!&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-10-18 09:47:37','updated_at'=>'2013-08-24 07:43:09','visits'=>'1347','via_url'=>'http://blog.sudobits.com/2011/09/04/how-to-install-google-chrome-on-ubuntu-11-10/','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-10-18','is_published'=>'1','updated_note'=>''),
  array('id'=>'73','title_es'=>'Enviar un email con Symfony tarea','title_en'=>'asdf','slug_es'=>'enviar-un-email-con-symfony-tarea','slug_en'=>'asdf','description_es'=>'asdf','description_en'=>'asdf','content_es'=>'&lt;div&gt;//Send the file&lt;/div&gt;
&lt;div&gt;$configuration = ProjectConfiguration::getApplicationConfiguration(\'backend\', \'prod\', true);&lt;/div&gt;
&lt;div&gt;sfContext::createInstance($configuration);&lt;/div&gt;
&lt;div&gt;$transport = Swift_SmtpTransport::newInstance(\'smtp.gmail.com\', 465, \'ssl\')&lt;/div&gt;
&lt;div&gt;-&amp;gt;setUsername(\'no-responder@zwipit.com\')&lt;/div&gt;
&lt;div&gt;-&amp;gt;setPassword(\'ZWIPIT_2011\');&lt;/div&gt;
&lt;div&gt;$mailer = Swift_Mailer::newInstance($transport);&lt;/div&gt;
&lt;div&gt;$message = Swift_Message::newInstance()&lt;/div&gt;
&lt;div&gt;-&amp;gt;setFrom(\'no-respond@zwipit.com\')&lt;/div&gt;
&lt;div&gt;-&amp;gt;addTo(sfConfig::get(\'app_report_emails\'))&lt;/div&gt;
&lt;div&gt;-&amp;gt;setSubject(\'ECI facturation\')&lt;/div&gt;
&lt;div&gt;-&amp;gt;setBody(\'ECI Facturation file\')&lt;/div&gt;
&lt;div&gt;-&amp;gt;attach(Swift_Attachment::fromPath($filePath))&lt;/div&gt;
&lt;div&gt;;&lt;/div&gt;
&lt;div&gt;// send the message&lt;/div&gt;
&lt;div&gt;$mailer-&amp;gt;send($message);&lt;/div&gt;','content_en'=>'','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-11-02 12:43:27','updated_at'=>'2011-11-02 12:43:27','visits'=>'0','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-11-02','is_published'=>'0','updated_note'=>''),
  array('id'=>'74','title_es'=>'Hacer público servidor MySQL en Linux','title_en'=>'Make public MySQL server under Linux','slug_es'=>'hacer-publico-servidor-mysql-en-linux','slug_en'=>'make-public-mysql-server-under-linux','description_es'=>'Como hacer público tu servidor MySQL en la red','description_en'=>'How to make public your MySQL server over the Network','content_es'=>'Por seguridad, al instalar el servidor MySQL bajo una distribución Linux (Ubuntu, CentOS, etc.) únicamente se habilita en nuestro local (loopback). Si queremos habilitar nuestro servidor de forma pública a la red debemos habilitar el puerto y configurar correctamente el servidor.&lt;br /&gt;&lt;br /&gt;Para ello solo debemos editar el fichero &quot;/etc/my.conf&quot; y añadir/modificar las siguientes líneas del fichero:&lt;br /&gt;
&lt;pre class=&quot;ini&quot;&gt;[mysqld]
port = 3306
bind-address = 10.10.0.1
# skip-networking&lt;/pre&gt;
No olvideis reiniciar el demonio:
&lt;pre class=&quot;bash&quot;&gt;sudo /etc/init.d/mysqld restart&lt;/pre&gt;','content_en'=>'For security reasons when you install into your Linux distro (Ubuntu, CentOS, etc.) a MySQL server, it was only accessible by the loopback or local environment. If you want to access through the network to it you have to configure it.&lt;br /&gt;&lt;br /&gt;We have to edit your &quot;/etc/my.conf&quot; and add/edit the next lines:&lt;br /&gt;
&lt;pre class=&quot;ini&quot;&gt;[mysqld]
port = 3306
bind-address = 10.10.0.1
# skip-networking&lt;/pre&gt;
Don\'t forget to restart the daemon:
&lt;pre class=&quot;bash&quot;&gt;sudo /etc/init.d/mysqld restart&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-11-04 00:48:22','updated_at'=>'2013-08-24 18:58:17','visits'=>'904','via_url'=>'http://kb.parallels.com/1134','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-12-03','is_published'=>'1','updated_note'=>''),
  array('id'=>'75','title_es'=>'Minificar ficheros CSS y JS con Assetic y Symfony2','title_en'=>'Minify CSS and JS files with Assetic and Symfony2','slug_es'=>'minificar-ficheros-css-y-js-con-assetic-y-symfony2','slug_en'=>'minify-css-and-js-files-with-assetic-and-symfony2','description_es'=>'Como unificar y minificar ficheros CSS y JS con Assetic y Symfony2','description_en'=>'How to unify and minify CSS and JS files with Assetic and Symfony2','content_es'=>'Unificar todos nuestros CSS o JS en ficheros únicos y además minificarlos optimiza el rendimiento de la página.&lt;br /&gt;&lt;br /&gt;Gracias a Assetic, bundle preinstalado por defecto en la distribución estándar de Symfony2, podemos hacerlo on-the-fly en entorno de desarrollo. También genera los ficheros adecuados para producción.&lt;br /&gt;&lt;br /&gt;En primer lugar deberemos &lt;a href=&quot;http://yuilibrary.com/download/yuicompressor/&quot; target=&quot;_blank&quot;&gt;descargar el compresor YUI&lt;/a&gt;, descomprimirlo y copiar el &quot;yuicompressor-*.jar&quot; en la carpeta &quot;app/Resources/java/&quot;.&lt;br /&gt;&lt;br /&gt;Conectamos Assetic con el compresor (fichero config.yml):&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;assetic:
    filters:
        yui_css:
            jar: &quot;%kernel.root_dir%/Resources/java/yuicompressor.jar&quot;
        yui_js:
            jar: &quot;%kernel.root_dir%/Resources/java/yuicompressor.jar&quot;&lt;/pre&gt;
Ya podemos minificar y unificar nuestros assets CSS y JS. La forma de hacerlo es introduciendo en nuestro template Twig de nuestro layout base (por ejemplo) el siguiente código:&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ "{%" }} stylesheets filter=\'?yui_css\' output=\'css/compiled-main.css\'
    \'@MyBundle/Resources/public/css/*\'
%}&lt;/pre&gt;
Assetic compilará todos los ficheros CSS de nuestro bundle en un único fichero CSS minificado.&lt;br /&gt;&lt;br /&gt;En el entorno de desarrollo se generará este fichero por cada vez que se haga una petición a la página. Para el entorno de producción deberemos generar este fichero con el siguiente comando:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;php app/console assetic:dump --env=dev --no-debug&lt;/pre&gt;','content_en'=>'Unify all our CSS and JS stuff into unique minified files improves significantly your application performance.&lt;br /&gt;&lt;br /&gt;Thanks to the Assetic Symfony2 bundle you can do it on the fly.&lt;br /&gt;&lt;br /&gt;First, &lt;a href=&quot;http://yuilibrary.com/download/yuicompressor/&quot; target=&quot;_blank&quot;&gt;download the YUI compressor&lt;/a&gt;, unzip it and move the &quot;yuicompressor-*.jar&quot; to the &quot;app/Resources/java&quot; folder.&lt;br /&gt;&lt;br /&gt;Connect Assetic with the compressor (config.yml file):&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;assetic:
    filters:
        yui_css:
            jar: &quot;%kernel.root_dir%/Resources/java/yuicompressor.jar&quot;
        yui_js:
            jar: &quot;%kernel.root_dir%/Resources/java/yuicompressor.jar&quot;&lt;/pre&gt;
Now we can minify and unify our CSS and JS files. The way to do it is inserting into our base Twig layout (for example) the next code:&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ "{%" }} stylesheets filter=\'?yui_css\' output=\'css/compiled-main.css\'
    \'@MyBundle/Resources/public/css/*\'
%}&lt;/pre&gt;
Assetic will compile all of the CSS files of our bundle into a minified and unified one.&lt;br /&gt;&lt;br /&gt;In development environment the process will generate the file for every request. For production environment you have to generate the file manually through the next command:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;php app/console assetic:dump --env=dev --no-debug&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-12-04 20:52:55','updated_at'=>'2013-08-24 20:35:59','visits'=>'1056','via_url'=>'http://symfony.com/doc/2.0/cookbook/assetic/yuicompressor.html','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2011-12-04','is_published'=>'1','updated_note'=>''),
  array('id'=>'76','title_es'=>'LESS CSS con Assetic y Symfony 2','title_en'=>'LESS CSS with Assetic and Symfony 2','slug_es'=>'less-css-con-assetic-y-symfony-2','slug_en'=>'less-css-with-assetic-and-symfony-2','description_es'=>'Añade filtro LESS para tus CSS con Assetic y Symfony 2','description_en'=>'Add a LESS filter for your CSS files with Assetic and Symfony 2','content_es'=>'&lt;a href=&quot;http://lesscss.org/&quot; target=&quot;_blank&quot;&gt;LESS&lt;/a&gt; añade a CSS comportamiento dinámico añadiendo variables, mixins, operaciones y funciones.&lt;br /&gt;&lt;br /&gt;Para el filtro LESS en nuestra configuración para Assetic, debemos tener instalado primero &lt;a href=&quot;http://nodejs.org/&quot; target=&quot;_blank&quot;&gt;node.js&lt;/a&gt;, el gestor de paquetes npm y la librería LESS.&lt;br /&gt;
&lt;h3&gt;Instalar LESS, node.js y npm en Ubuntu&lt;/h3&gt;
En Ubuntu puedes instalarlo todo de una manera cómoda desde la terminal:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get install nodejs-dev nodejs npm
&lt;/pre&gt;
Instalar la liberaría LESS para node:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;npm install less
&lt;/pre&gt;
&lt;h3&gt;Configurar Assetic para utilizar LESS&lt;/h3&gt;
En Ubuntu, la biblioteca LESS se habrá instalado en una carpeta oculta en nuestro home. De no ser así, habrá que localizarla correctamente para su funcionamiento con Assetic. Para configurarlo, añadir la siguiente línea a nuestro &quot;app/config/config.yml&quot;.&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;assetic:
    filters:
        less:
            node: /usr/bin/node
            node_paths: [/home/USER/.node_libraries]&lt;/pre&gt;
Donde &quot;USER&quot; será nuestro usuario.&lt;br /&gt;
&lt;h3&gt;Uso&lt;/h3&gt;
Para integrarlo con nuestra aplicación solo tendremos que añadir las siguientes líneas a nuestro documento base:&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ "{%" }} stylesheets filter=\'less\' output=\'css/compiled-main.css\'
    \'@MyBundle/Resources/public/less/*\'
%}
   &amp;lt;link href=&quot;{{ asset_url }}&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot; media=&quot;all&quot; /&amp;gt;
{{ "{%" }} endstylesheets %}&lt;/pre&gt;
Combinará todos los ficheros LESS que cuelguen de la carpeta less de nuestro Bundle en un único fichero CSS &quot;compiled-main.css&quot;.&lt;br /&gt;&lt;br /&gt;En el entorno de desarrollo se generarán los ficheros de forma dinámica por cada petición, para el entorno de producción hay que generarlos de forma manual:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;php app/console assetic:dump --env=dev --no-debug&lt;/pre&gt;
Este filtro se puede combinar con cualquier otro, como por ejemplo &lt;a href=&quot;/articulo/minificar-ficheros-css-y-js-con-assetic-y-symfony2&quot; target=&quot;_blank&quot;&gt;el filtro de compresión YUI para Assetic&lt;/a&gt;.&lt;br /&gt;','content_en'=>'&lt;a href=&quot;http://lesscss.org/&quot; target=&quot;_blank&quot;&gt;LESS&lt;/a&gt; extends CSS with dynamic behavior such as variables, mixins, operations and functions.&lt;br /&gt;&lt;br /&gt;For the LESS Assetic filter we need to have installed first &lt;a href=&quot;http://nodejs.org/&quot; target=&quot;_blank&quot;&gt;node.js&lt;/a&gt;, the npm package manager and the LESS library.&lt;br /&gt;
&lt;h3&gt;Installing LESS, node.js and npm for Ubuntu&lt;/h3&gt;
Under Ubuntu you can install all of those in an easy way through the terminal:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;sudo apt-get install nodejs-dev nodejs npm
&lt;/pre&gt;
Install the LESS library:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;npm install less
&lt;/pre&gt;
&lt;h3&gt;Configuring the LESS filter in Assetic&lt;/h3&gt;
In Ubuntu the LESS library may be installed into a hidden directory called &quot;.node_libraries&quot; under your home. If not you have to know where is it before Assetic integration. To configure Assetic for the less filter, open the &quot;app/config/config.yml&quot; and add the next lines:&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;assetic:
    filters:
        less:
            node: /usr/bin/node
            node_paths: [/home/USER/.node_libraries]&lt;/pre&gt;
Where &quot;USER&quot; is our user.&lt;br /&gt;
&lt;h3&gt;Usage&lt;/h3&gt;
To use it, add the following lines to the main base layout file:&lt;br /&gt;
&lt;pre class=&quot;jinja&quot;&gt;{{ "{%" }} stylesheets filter=\'less\' output=\'css/compiled-main.css\'
    \'@MyBundle/Resources/public/less/*\'
%}
   &amp;lt;link href=&quot;{{ asset_url }}&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot; media=&quot;all&quot; /&amp;gt;
{{ "{%" }} endstylesheets %}&lt;/pre&gt;
That will combine all the LESS files that where under the &quot;less&quot; directory of your Bundle into a one CSS &quot;compiled-main.css&quot;.&lt;br /&gt;&lt;br /&gt;On development environment all the files will be generated for every request. For production environment you have to generate them manually:&lt;br /&gt;
&lt;pre class=&quot;bash&quot;&gt;php app/console assetic:dump --env=dev --no-debug&lt;/pre&gt;
You can use this filter with other powerful filters like the&lt;a href=&quot;/article/minify-css-and-js-files-with-assetic-and-symfony2&quot; target=&quot;_blank&quot;&gt;YUI compressor filter for Assetic&lt;/a&gt;.&lt;br /&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2011-12-05 11:05:36','updated_at'=>'2013-08-24 15:59:01','visits'=>'1224','via_url'=>'http://www.dobervich.com/2011/05/10/less-css-assetic-configuration-in-a-symfony2-project/','download_url'=>'','url'=>'','info_url'=>'http://lesscss.org/','published_at'=>'2011-12-05','is_published'=>'1','updated_note'=>''),
  array('id'=>'77','title_es'=>'Git y los branches','title_en'=>'Git and the branches','slug_es'=>'git-y-los-branches','slug_en'=>'git-and-the-branches','description_es'=>'asdf','description_en'=>'asdf','content_es'=>'http://elweb.co/uncategorized/como-uso-git-todos-los-dias/','content_en'=>'','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2012-01-09 18:11:24','updated_at'=>'2012-01-09 18:12:07','visits'=>'0','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'http://elweb.co/uncategorized/como-uso-git-todos-los-dias/','published_at'=>'2012-01-09','is_published'=>'0','updated_note'=>''),
  array('id'=>'78','title_es'=>'Importar certificados .crt a .pfx','title_en'=>'Convert .crt to .pfx certificates','slug_es'=>'importar-certificados-crt-a-pfx','slug_en'=>'convert-crt-to-pfx-certificates','description_es'=>'Como importar certificados .crt a .pfx','description_en'=>'How to import .crt to .pfx certificaes','content_es'=>'asDasfasdfasdasd','content_en'=>'A .crt is a sum of certificates&lt;br /&gt;openssl pkcs12 -in com.example.crt -export -out com.example.pfx','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2012-04-01 18:11:50','updated_at'=>'2012-04-01 18:17:40','visits'=>'0','via_url'=>'http://stackoverflow.com/questions/808669/convert-a-cert-pem-certificate-to-a-pfx-certificate','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2012-04-01','is_published'=>'0','updated_note'=>''),
  array('id'=>'79','title_es'=>'Configuración host Linux Nginx Symfony 2','title_en'=>'Nginx Symfony 2 Linux host configuration','slug_es'=>'configuracion-host-linux-nginx-symfony-2','slug_en'=>'nginx-symfony-2-linux-host-configuration','description_es'=>'Configuración host Nginx para Symfony 2 en Linux','description_en'=>'Nginx Symfony 2 host configuration for Linux','content_es'=>'Suponiendo que el nombre del servidor será &quot;example.local&quot; y la raiz del proyecto Symfony 2 esta localizado en &quot;/var/www/vhosts/example.local/&quot; la configuración para Nginx será:&lt;br /&gt;
&lt;pre class=&quot;nginx&quot;&gt;server {
  listen 80;

  server_name example.local;

  root /var/www/vhosts/example.local/web;

  error_log /var/log/nginx/example.local.error.log;
  access_log /var/log/nginx/example.local.access.log;

  # strip app.php/ prefix if it is present
  rewrite ^/app\\.php/?(.*)$ /$1 permanent;

  location / {
    index app.php;
    try_files $uri @rewriteapp;
  }

  location @rewriteapp {
    rewrite ^(.*)$ /app.php/$1 last;
  }

  # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
  location ~ ^/(app|app_dev)\\.php(/|$) {
    fastcgi_pass   unix:/var/run/php5-fpm.sock;
    fastcgi_split_path_info ^(.+\\.php)(/.*)$;
    include fastcgi_params;
    fastcgi_param  SCRIPT_FILENAME    $document_root$fastcgi_script_name;
    fastcgi_param  HTTPS              off;
  }
}&lt;/pre&gt;','content_en'=>'If the server name is going to be &quot;example.local&quot; and the root of the Symfony 2 project is at &quot;/var/www/vhosts/example.local/&quot; the Nginx configuration should be:&lt;br /&gt;
&lt;pre class=&quot;nginx&quot;&gt;server {
  listen 80;

  server_name example.local;

  root /var/www/vhosts/example.local/web;

  error_log /var/log/nginx/example.local.error.log;
  access_log /var/log/nginx/example.local.access.log;

  # strip app.php/ prefix if it is present
  rewrite ^/app\\.php/?(.*)$ /$1 permanent;

  location / {
    index app.php;
    try_files $uri @rewriteapp;
  }

  location @rewriteapp {
    rewrite ^(.*)$ /app.php/$1 last;
  }

  # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
  location ~ ^/(app|app_dev)\\.php(/|$) {
    fastcgi_pass   unix:/var/run/php5-fpm.sock;
    fastcgi_split_path_info ^(.+\\.php)(/.*)$;
    include fastcgi_params;
    fastcgi_param  SCRIPT_FILENAME    $document_root$fastcgi_script_name;
    fastcgi_param  HTTPS              off;
  }
}&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2012-11-27 00:04:15','updated_at'=>'2013-08-24 20:36:39','visits'=>'545','via_url'=>'','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2012-11-27','is_published'=>'1','updated_note'=>''),
  array('id'=>'80','title_es'=>'Ruta de redirección Symfony 2','title_en'=>'Symfony 2 route redirection','slug_es'=>'ruta-de-redireccion-symfony-2','slug_en'=>'symfony-2-route-redirection','description_es'=>'Ruta de redirección para router de Symfony 2','description_en'=>'Redirect route for Symfony 2 router','content_es'=>'Redireccionar de una ruta a otra con un status code de 301&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;route:
    pattern: /
    defaults: { _controller: FrameworkBundle:Redirect:redirect, route: redirect_to, permanent: true }

redirect_to:
    pattern: /redirect
    defaults: { _controller: Bundle:Controller:action }&lt;/pre&gt;
Cuando el usuario vaya a la raiz será redireccionado a /redirect','content_en'=>'Redirect from a route to another with a 301 status code is as easy as&lt;br /&gt;
&lt;pre class=&quot;yaml&quot;&gt;route:
    pattern: /
    defaults: { _controller: FrameworkBundle:Redirect:redirect, route: redirect_to, permanent: true }

redirect_to:
    pattern: /redirect
    defaults: { _controller: Bundle:Controller:action }&lt;/pre&gt;
That means, when you enter root you\'ll be redirected to /redirect','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2012-12-03 01:15:58','updated_at'=>'2013-08-24 07:43:00','visits'=>'351','via_url'=>'http://stackoverflow.com/questions/8529038/redirect-301-one-route-to-another-from-routing-yml-in-symfony2','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2012-12-03','is_published'=>'1','updated_note'=>''),
  array('id'=>'81','title_es'=>'Obtener número de likes, shares y +1 con PHP','title_en'=>'Getting counts for likes, shares and +1 with PHP ','slug_es'=>'obtener-numero-de-likes-shares-y-1-con-php','slug_en'=>'getting-counts-for-likes-shares-and-1-with-php','description_es'=>'Obtener número de likes de Facebook, shares de Twitter y +1 de Google a través de APIs y PHP','description_en'=>'Getting count for Facebook likes, Twitter shares, Google +1 with PHP and APIs','content_es'=>'&lt;pre class=&quot;php&quot;&gt;function get_tweets($url) {
    $json_string = file_get_contents(\'http://urls.api.twitter.com/1/urls/count.json?url=\'.$url);
    $json = json_decode($json_string, true);

    return intval($json[\'count\']);
}

function get_likes($url) {
    $json_string = file_get_contents(\'http://graph.facebook.com/?ids=\'.$url);
    $json = json_decode($json_string, true);

    return intval($json[$url][\'shares\']);
}

function get_plusones($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, &quot;https://clients6.google.com/rpc&quot;);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, \'[{&quot;method&quot;:&quot;pos.plusones.get&quot;,&quot;id&quot;:&quot;p&quot;,&quot;params&quot;:{&quot;nolog&quot;:true,&quot;id&quot;:&quot;\' . $url . \'&quot;,&quot;source&quot;:&quot;widget&quot;,&quot;userId&quot;:&quot;@viewer&quot;,&quot;groupId&quot;:&quot;@self&quot;},&quot;jsonrpc&quot;:&quot;2.0&quot;,&quot;key&quot;:&quot;p&quot;,&quot;apiVersion&quot;:&quot;v1&quot;}]\');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(\'Content-type: application/json\'));
    $curl_results = curl_exec ($curl);
    curl_close ($curl);

    $json = json_decode($curl_results, true);

    return intval($json[0][\'result\'][\'metadata\'][\'globalCounts\'][\'count\']);
}&lt;/pre&gt;','content_en'=>'&lt;pre class=&quot;php&quot;&gt;function get_tweets($url) {
    $json_string = file_get_contents(\'http://urls.api.twitter.com/1/urls/count.json?url=\'.$url);
    $json = json_decode($json_string, true);

    return intval($json[\'count\']);
}

function get_likes($url) {
    $json_string = file_get_contents(\'http://graph.facebook.com/?ids=\'.$url);
    $json = json_decode($json_string, true);

    return intval($json[$url][\'shares\']);
}

function get_plusones($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, &quot;https://clients6.google.com/rpc&quot;);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, \'[{&quot;method&quot;:&quot;pos.plusones.get&quot;,&quot;id&quot;:&quot;p&quot;,&quot;params&quot;:{&quot;nolog&quot;:true,&quot;id&quot;:&quot;\' . $url . \'&quot;,&quot;source&quot;:&quot;widget&quot;,&quot;userId&quot;:&quot;@viewer&quot;,&quot;groupId&quot;:&quot;@self&quot;},&quot;jsonrpc&quot;:&quot;2.0&quot;,&quot;key&quot;:&quot;p&quot;,&quot;apiVersion&quot;:&quot;v1&quot;}]\');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(\'Content-type: application/json\'));
    $curl_results = curl_exec ($curl);
    curl_close ($curl);

    $json = json_decode($curl_results, true);

    return intval($json[0][\'result\'][\'metadata\'][\'globalCounts\'][\'count\']);
}&lt;/pre&gt;','short_url_es'=>'','short_url_en'=>'','image'=>NULL,'created_at'=>'2012-12-09 14:18:27','updated_at'=>'2013-08-24 18:24:37','visits'=>'473','via_url'=>'http://johndyer.name/getting-counts-for-twitter-links-facebook-likesshares-and-google-1-plusones-in-c-or-php/','download_url'=>'','url'=>'','info_url'=>'','published_at'=>'2012-12-09','is_published'=>'1','updated_note'=>'')
);
