---
title: 'Como creé el botón para compartir en Twitter'
media_order: twitter.png
color: '#1da1f2'
logoColor: white
date: '17-12-2014 15:58'
taxonomy:
    tag:
        - web
        - 'redes sociales'
        - desarrollo
---


> En este artículo quisiera explicar como creé el botón que he añadido al final de cada entrada para compartir en Twitter.

La forma más sencilla de poner un botón para compartir en Twitter es mediante un simple enlace con parámetros, que no te asusten los parámetros, es más fácil de lo que piensas. se trata de poner un enlace como el siguiente:

    <a href="http://twitter.com/share?text=Texto que quieras que aparezca&url=http://urldemiweb.es">Tuiteame ;)</a>

Como puedes ver al final de esta entrada, el botón de Twitter no es un texto, sino una imagen con el logo del pajarito. Aprovechando que ya estoy usando *Font Awesome* en mi web, utilicé la etiqueta`<i class="fa fa-fw fa-twitter"></i>` y le añadí el siguiente estilo por CSS:

    display: inline-block;
    width: 2em;
    height: 2em;
    font-size: 1.5em;
    line-height: 2;
    background: #55acee;
    color: #fff;
    border-radius: 50%;

Para poder personalizar el enlace para cada entrada, puse el link en la plantilla del blog y cambié los parámetros por las variables de cada entrada, uso *PicoCMS* para gestionar el blog, así que el enlace me quedaría así:

    <a href="http://twitter.com/share?text={{ meta.title }}, leido en: &url=http://tomascornelles.com/blog/{{ page.url}}" target="blank"><i class="fa fa-fw fa-twitter"></i></a>

Además, como utilizo el título de la entrada como URL, me queda bastante larga como para enviarla por Twitter, además que el título sería redundante, de manera que hice un sencillo acortador de URLs. Por un lado creé un archivo links.ini donde pongo la correspondencia de URLs:

    2014/11/25	= 2014-11-25-se-puede-ser-desarrollador-con-un-chromebook
    2014/12/11	= 2014-12-11-inquisicion-digital

Por otro lado en el index.php de mi home añadí un breve código para escuchar la variable *"l"*:

    <?php 
    $links = parse_ini_file('links.ini');

    if(isset($_GET['l']) && array_key_exists($_GET['l'], $links)){
        header('Location: /blog/' . $links[$_GET['l']]);
    }
    ?>

De esta forma los links que apunten a http://tomascornelles.com/l=2014/11/25 redeirigirán a http://tomascornelles.com/blog/2014-11-25-se-puede-ser-desarrollador-con-un-chromebook por ejemplo. De esta forma he logrado un link para publicar mi contenido en Twitter, sin gasttar demasiados caracteres.

**¿Te atreves a probarlo?**