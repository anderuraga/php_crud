<?php session_start(); ?>
<?php include '../includes/cabecera.php' ?>
<?php include '../includes/navbar.php' ?>

<div class="bg-light p-5 rounded">
  <h1>Cookies</h1>


  <nav>
      <ul>
          <li><a href="#crear">Crear cookies</a></li>
          <li><a href="#modificar">Modificar cookies</a></li>
          <li><a href="#borrar">Borrar cookies</a></li>
          <li><a href="#utilizar">Utilizar cookies</a></li>
          <li><a href="#criticas">Críticas a las cookies</a></li>
        </ul>    
  </nav>


  <p>En esta lección se trata el manejo de las cookies. Las cookies (“galletas”, en inglés) son un mecanismo que utilizan los servidores web para guardar información en el ordenador del usuario y recuperarla cada vez que el navegador les pide una página. La información se guarda en el ordenador del usuario en forma de texto y está formada por parejas (nombre de la cookie y valor de la cookie). Esta información se utiliza para numerosos fines (autentificación, selección de preferencias, ítems seleccionados en un carrito de la compra, etc.), siempre con la intención de identificar al usuario y personalizar las páginas. En el manual de PHP se ofrece un <a href="https://www.php.net/manual/en/features.cookies.php">capítulo dedicado a las cookies</a>.</p>

  <section id="crear">
      <h2>Crear cookies</h2>

      <p>Las cookies se crean cuando el servidor se lo pide al navegador. Cuando el servidor envía una página al navegador, puede incluir en las cabeceras de la respuesta HTTP la petición de creación de una o varias cookies. El navegador crea la cookie, guardando no sólo el nombre y el valor de la cookie, sino el nombre del servidor (del dominio) que ha creado la cookie.</p>

      <p>En PHP, las cookies se crean mediante la función <a href="https://www.php.net/manual/en/function.setcookie.php">setcookie()</a>. Por ejemplo:</p>

      <pre><code class="language-php">        
        &lt;?php setcookie("nombre", "Pepito Conejo");  ?&gt;      
      </code></pre>    


      <p>Si se quiere guardar en una cookie una matriz de datos, es necesario crear cada elemento de la matriz en una cookie distinta. Por ejemplo:</p>

   
      <pre><code class="language-php">      
          &lt;?php
            setcookie("datos[nombre]", "Pepito");
            setcookie("datos[apellidos]", "Conejo");
          ?&gt;      
      </code></pre>  

      <p>Es muy importante que los nombres de las cookies no coincidan con los nombres de controles de los formularios, porque PHP incluye los valores de las cookies en la matriz $_REQUEST. Es decir, que si el nombre de una cookie coincide con el nombre de un control, en $_REQUEST sólo se guardará el valor de la cookie, no el del control.</p>

      <hr class="corta">

      <p>Hay que tener la precaución de utilizar la función setcookie() antes de empezar a escribir el contenido de la página, porque si no PHP producirá un aviso y no se creará la cookie. El motivo es que las cookies se crean mediante cabeceras de respuesta HTTP y las cabeceras se envían antes del texto de la página. Es decir, cuando PHP encuentra una instrucción que escribe texto, cierra automáticamente la cabecera; si a continuación PHP encuentra en el programa la función setcookie(), da un aviso porque ya se han enviado las cabeceras y no se crea la cookie. El ejemplo siguiente muestra código incorrecto, ya que utiliza la función setcookie() después de haber escrito texto, y el mensaje de aviso generado por PHP.</p>

      <div class="filaflex">
        <div class="codigo">
          <div class="code-toolbar"><pre class="language-php" tabindex="0"><code class="language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span><span class="token lf">
          </span><span class="token comment">//<span class="token space"> </span>Este<span class="token space"> </span>código<span class="token space"> </span>es<span class="token space"> </span>incorrecto,<span class="token space"> </span>la<span class="token space"> </span>cabecera<span class="token space"> </span>se<span class="token space"> </span>crea<span class="token space"> </span>después<span class="token space"> </span>de<span class="token space"> </span>crear<span class="token space"> </span>texto</span><span class="token lf">
          </span><span class="token function2 function2">print</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;p&gt;Hola&lt;/p&gt;\n"</span><span class="token punctuation">;</span><span class="token lf">
          </span><span class="token function">setcookie</span><span class="token punctuation">(</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">,</span><span class="token space"> </span><span class="token string double-quoted-string">"Pepito<span class="token space"> </span>Conejo"</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span class="token lf">
          </span><span class="token delimiter important">?&gt;</span></span></code>
          </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
        </div>
        <div class="resultado-codigo">
          <div class="code-toolbar"><pre class="language-html" tabindex="0"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Hola<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token lf">
          </span>Warning:<span class="token space"> </span>Cannot<span class="token space"> </span>modify<span class="token space"> </span>header<span class="token space"> </span>information<span class="token space"> </span>-<span class="token space"> </span>headers<span class="token lf">
          </span>already<span class="token space"> </span>sent<span class="token space"> </span>by<span class="token space"> </span>(output<span class="token space"> </span>started<span class="token space"> </span>at<span class="token space"> </span>prueba.php<span class="token space"> </span>on<span class="token lf">
          </span>line<span class="token space"> </span>3)<span class="token space"> </span>in<span class="token space"> </span>prueba.php<span class="token space"> </span>on<span class="token space"> </span>line<span class="token space"> </span>4</code>
          </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
        </div>
      </div>

      <p><strong>Nota</strong>: En algunos casos este código incorrecto puede no generar un aviso y la cookie puede crearse, dependiendo de la configuración de la directiva <a href="../otros/php-configuracion-1.html#output-buffering">output_buffering</a>.</p>

      <hr class="corta">

      <p>La creación de cookies tiene límites, pero cada navegador tiene un límite distinto. En muchas páginas web se puede leer que el límite por dominio suele ser de 20 cookies (si se hacen más, se borran las más antiguas), que el límite de tamaño del valor almacenado suele ser de 4096 bytes y que el límite del número total de cookies suele ser de 300 cookies, pero estos valores pueden ser distintos en versiones más recientes.</p>

      <hr class="corta">

      <p>La función setcookie() puede tener hasta siete argumentos: setcookie($nombre, $valor, $expiracion, $ruta, $dominio, $seguridad, $solohttp)</p>
      <dl>
        <dt>$nombre</dt>
        <dd>Establece el nombre de la cookie.</dd>

        <dt>$valor</dt>
        <dd>Establece el valor que guarda la cookie</dd>

        <dt>$expiracion</dt>
        <dd>Establece el momento en que se borrará la cookie, expresado como tiempo Unix. Por ello, normalmente se utiliza la función <a href="https://www.php.net/manual/en/function.time.php">time()</a> (que indica el momento actual como tiempo Unix) más la duración en segundos que queremos que tenga la cookie

          <div class="codigo">
            <div class="code-toolbar"><pre class="language-php" tabindex="0"><code class="language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span><span class="token lf">
            </span><span class="token function">setcookie</span><span class="token punctuation">(</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">,</span><span class="token space"> </span><span class="token string double-quoted-string">"Pepito<span class="token space"> </span>Conejo"</span><span class="token punctuation">,</span><span class="token space"> </span><span class="token function">time</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token space"> </span><span class="token operator">+</span><span class="token space"> </span><span class="token number">60</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span class="token space"> </span><span class="token space"> </span><span class="token comment">//<span class="token space"> </span>Esta<span class="token space"> </span>cookie<span class="token space"> </span>se<span class="token space"> </span>borrará<span class="token space"> </span>un<span class="token space"> </span>minuto<span class="token space"> </span>después<span class="token space"> </span>de<span class="token space"> </span>crearla.</span><span class="token lf">
            </span><span class="token delimiter important">?&gt;</span></span></code>
            </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
          </div>
          <p>Si no se establece la duración de la cookie al crearla, la cookie se borrará al cerrar el navegador.</p>
        </dd>

        <dt>$ruta</dt>
        <dd>Establece los directorios del dominio a los que se enviará posteriormente la cookie. Es decir, si el navegador solicita una página incluida en esta ruta, el navegador enviará la cookie en la petición, si no está incluida, no enviará el valor. Si se indica "/", se enviará a cualquier página del dominio, si no se indica nada, la ruta es la de la página que crea la cookie.</dd>

        <dt>$dominio</dt>
        <dd>Establece los subdominios del dominio a los que se enviará posteriormente la cookie (www.example.com, subdominio.example.com, etc.</dd>

        <dt>$seguridad</dt>
        <dd>Establece si solamente se envía bajo conexiones seguras (https) o no, según tome el valor <span class="php-con">true</span> o <span class="php-con">false</span>.</dd>

        <dt>$solohttp</dt>
        <dd>Establece si la cookie está accesible únicamente al servidor y no al navegador (mediante Javascript u otros lenguajes), según tome el valor <span class="php-con">true</span> o <span class="php-con">false</span>.</dd>
      </dl>
    </section>

    <section id="modificar">
      <h2>Modificar cookies</h2>

      <p>Para modificar una cookie ya existente, simplemente se debe volver a crear la cookie con el nuevo valor.</p>
    </section>

    <section id="borrar">
      <h2>Borrar cookies</h2>

      <p>Para borrar una cookie, simplemente se debe volver a crear la cookie con un tiempo de expiración anterior al presente.</p>

      <div class="codigo">
        <div class="code-toolbar"><pre class="language-php" tabindex="0"><code class="language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span><span class="token lf">
        </span><span class="token function">setcookie</span><span class="token punctuation">(</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">,</span><span class="token space"> </span><span class="token string double-quoted-string">"Pepito<span class="token space"> </span>Conejo"</span><span class="token punctuation">,</span><span class="token space"> </span><span class="token function">time</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token space"> </span><span class="token operator">-</span><span class="token space"> </span><span class="token number">60</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span class="token space"> </span><span class="token space"> </span><span class="token comment">//<span class="token space"> </span>Esta<span class="token space"> </span>cookie<span class="token space"> </span>se<span class="token space"> </span>borrará<span class="token space"> </span>inmediatamente.</span><span class="token lf">
        </span><span class="token delimiter important">?&gt;</span></span></code>
        </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
      </div>

      <p>Si solamente queremos borrar el valor almacenado en la cookie sin borrar la propia cookie, simplemente se debe volver a crear la cookie, sin indicarle el valor a almacenar:</p>

      <div class="codigo">
        <div class="code-toolbar"><pre class="language-php" tabindex="0"><code class="language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span><span class="token lf">
        </span><span class="token function">setcookie</span><span class="token punctuation">(</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span class="token space"> </span><span class="token space"> </span><span class="token comment">//<span class="token space"> </span>Esta<span class="token space"> </span>cookie<span class="token space"> </span>no<span class="token space"> </span>se<span class="token space"> </span>borra,<span class="token space"> </span>pero<span class="token space"> </span>no<span class="token space"> </span>guardará<span class="token space"> </span>ningún<span class="token space"> </span>valor.</span><span class="token lf">
        </span><span class="token delimiter important">?&gt;</span></span></code>
        </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
      </div>
    </section>

    <section id="utilizar">
      <h2>Utilizar cookies</h2>

      <p>Cuando el navegador solicita una página PHP a un servidor (un dominio) que ha guardado previamente cookies en ese ordenador, el navegador incluye en la cabecera de la petición HTTP todas las cookies (el nombre y el valor) creadas anteriormente por ese servidor.</p>

      <p>El programa PHP recibe los nombres y valores de las cookies y se guardan automáticamente en la matriz <a href="https://www.php.net/manual/en/reserved.variables.cookies.php">$_COOKIE</a>.
      </p>

      <p>El ejemplo siguiente saluda al usuario por su nombre si el nombre del usuario estaba guardado en una cookie.</p>

      <div class="codigo">
        <div class="code-toolbar"><pre class="language-php" tabindex="0"><code class="language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span><span class="token lf">
        </span><span class="token keyword">if</span><span class="token space"> </span><span class="token punctuation">(</span><span class="token function2 function2">isset</span><span class="token punctuation">(</span><span class="token global">$_COOKIE</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token space"> </span><span class="token punctuation">{</span><span class="token lf">
        </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token function2 function2">print</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;p&gt;Su<span class="token space"> </span>nombre<span class="token space"> </span>es<span class="token space"> </span><span class="token interpolation"><span class="token global">$_COOKIE</span><span class="token punctuation">[</span>nombre<span class="token punctuation">]</span></span>&lt;/p&gt;\n"</span><span class="token punctuation">;</span><span class="token lf">
        </span><span class="token punctuation">}</span><span class="token space"> </span><span class="token keyword">else</span><span class="token space"> </span><span class="token punctuation">{</span><span class="token lf">
        </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token function2 function2">print</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;p&gt;No<span class="token space"> </span>sé<span class="token space"> </span>su<span class="token space"> </span>nombre.&lt;/p&gt;\n"</span><span class="token punctuation">;</span><span class="token lf">
        </span><span class="token punctuation">}</span><span class="token lf">
        </span><span class="token delimiter important">?&gt;</span></span></code>
        </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
      </div>

      <p>En caso de que se haya guardado una matriz en forma de cookies, el ejemplo sería el siguiente:</p>

      <div class="codigo">
        <div class="code-toolbar"><pre class="language-php" tabindex="0"><code class="language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span><span class="token lf">
        </span><span class="token keyword">if</span><span class="token space"> </span><span class="token punctuation">(</span><span class="token function2 function2">isset</span><span class="token punctuation">(</span><span class="token global">$_COOKIE</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"datos"</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token space"> </span><span class="token operator">&amp;&amp;</span><span class="token space"> </span><span class="token function2 function2">isset</span><span class="token punctuation">(</span><span class="token global">$_COOKIE</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"datos"</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"apellidos"</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token space"> </span><span class="token punctuation">{</span><span class="token lf">
        </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token function2 function2">print</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;p&gt;Su<span class="token space"> </span>nombre<span class="token space"> </span>es<span class="token space"> </span>"</span><span class="token space"> </span><span class="token operator">.</span><span class="token space"> </span><span class="token global">$_COOKIE</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"datos"</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">]</span><span class="token space"> </span><span class="token operator">.</span><span class="token space"> </span><span class="token string double-quoted-string">"<span class="token space"> </span>"</span><span class="token space"> </span><span class="token operator">.</span><span class="token space"> </span><span class="token global">$_COOKIE</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"datos"</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"apellidos"</span><span class="token punctuation">]</span><span class="token space"> </span><span class="token operator">.</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;/p&gt;\n"</span><span class="token punctuation">;</span><span class="token lf">
        </span><span class="token punctuation">}</span><span class="token space"> </span><span class="token keyword">else</span><span class="token space"> </span><span class="token punctuation">{</span><span class="token lf">
        </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token function2 function2">print</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;p&gt;No<span class="token space"> </span>sé<span class="token space"> </span>su<span class="token space"> </span>nombre.&lt;/p&gt;\n"</span><span class="token punctuation">;</span><span class="token lf">
        </span><span class="token punctuation">}</span><span class="token lf">
        </span><span class="token delimiter important">?&gt;</span></span></code>
        </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
      </div>

      <hr class="corta">

      <p>Un detalle importante a tener en cuenta al trabajar con cookies es el orden en que se realiza el envío y la creación de cookies, así como su disponibilidad en $_COOKIES:</p>
      <ul>
        <li>cuando una página pide al navegador que cree una cookie, el valor de la cookie no está disponible en $_COOKIE en esa página.</li>
        <li>el valor de la cookie estará disponible en $_COOKIE en páginas posteriores, cuando el navegador las pida y envíe el valor de la cookie en la petición.</li>
      </ul>

      <p>Por ello, el siguiente programa no dará el mismo resultado cuando se ejecute por primera vez que las veces posteriores:</p>

      <div class="codigo">
        <div class="code-toolbar"><pre class="language-php" tabindex="0"><code class="language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span><span class="token lf">
          </span><span class="token function">setcookie</span><span class="token punctuation">(</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">,</span><span class="token space"> </span><span class="token string double-quoted-string">"Pepito<span class="token space"> </span>Conejo"</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span class="token lf">
          </span><span class="token lf">
          </span><span class="token keyword">if</span><span class="token space"> </span><span class="token punctuation">(</span><span class="token function2 function2">isset</span><span class="token punctuation">(</span><span class="token global">$_COOKIE</span><span class="token punctuation">[</span><span class="token string double-quoted-string">"nombre"</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token space"> </span><span class="token punctuation">{</span><span class="token lf">
          </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token function2 function2">print</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;p&gt;Su<span class="token space"> </span>nombre<span class="token space"> </span>es<span class="token space"> </span><span class="token interpolation"><span class="token global">$_COOKIE</span><span class="token punctuation">[</span>nombre<span class="token punctuation">]</span></span>&lt;/p&gt;\n"</span><span class="token punctuation">;</span><span class="token lf">
          </span><span class="token punctuation">}</span><span class="token space"> </span><span class="token keyword">else</span><span class="token space"> </span><span class="token punctuation">{</span><span class="token lf">
          </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token function2 function2">print</span><span class="token space"> </span><span class="token string double-quoted-string">"&lt;p&gt;No<span class="token space"> </span>sé<span class="token space"> </span>su<span class="token space"> </span>nombre.&lt;/p&gt;\n"</span><span class="token punctuation">;</span><span class="token lf">
          </span><span class="token punctuation">}</span><span class="token lf">
          </span><span class="token delimiter important">?&gt;</span></span></code>
          </pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copiar</span></button></div></div></div>
      </div>

      <p>La primera vez que se ejecuta este programa, ocurren las siguientes cosas en este orden:</p>
      <ul>
        <li>el navegador pide la página, pero no envía con la petición el valor de ninguna cookie, porque la cookie todavía no existe</li>
        <li>el servidor envía la página:
          <ul>
            <li>en la cabecera de respuesta, el servidor incluye la petición de creación de la cookie.</li>
            <li>en la página escribe "No sé su nombre" porque no ha recibido ninguna cookie del navegador.</li>
          </ul>
        </li>
      </ul>

      <p>La segunda vez (y las siguientes) que se ejecuta este programa, ocurren las siguientes cosas en este orden:</p>
      <ul>
        <li>el navegador pide la página y envía con la petición el valor de la cookie "nombre".</li>
        <li>el servidor envía la página:
          <ul>
            <li>en la cabecera de respuesta, el servidor incluye la petición de creación de la cookie (como es el mismo valor, la cookie se queda igual).</li>
            <li>en la página escribe "Su nombre es Pepito Conejo" porque ha recibido la cookie del navegador.</li>
          </ul>
        </li>
      </ul>
    </section>
  
  </div>

  <?php include '../includes/footer.php' ?>