---
title: Contact
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom: 
            - _hero-image
            - _contact
form:
    action: /contact
    name: my-nice-form
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            default: test

    buttons:
        -
            type: submit
            value: Submit

    process:
        -
            message: 'Thank you for your feedback!'
---

