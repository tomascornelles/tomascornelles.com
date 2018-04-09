---
title: Contacto
form:
    name: contact
    fields:
        -
            name: name
            label: Nombre
            placeholder: 'Dime tu nombre'
            autocomplete: 'on'
            type: text
            validate:
                required: false
        -
            name: message
            label: Mensaje
            placeholder: 'Déjame un mensaje'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: 'Enviar <span class="tc-right"></span>'
            classes: button
    process:
        -
            email:
                subject: 'Contacto de {{ form.value.name|e }} desde tomascornelles.com'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Muchas gracias, estamos en contacto!!!'
---

### Déjame un mensaje 

Y si quieres que te contacte no olvides dejarme un email o Twitter. Los datos que se envían solo se usarán para gestionr la respuesta.


