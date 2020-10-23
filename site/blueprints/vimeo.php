<?php if(!defined('KIRBY')) exit ?>

title: Vimeo
pages: false
files:
  sortable: true
  fields:
    tile:
        label: Hidden
        type: checkbox
fields:
  title:
    label: Titulo
    type:  text
  author:
    label: Autor
  vimeonumber:
    label: Vimeo (numero)
    type:  text
  creditos:
    label: Descripcion
    type:  textarea
  text:
    label: Texto
    type:  textarea
  description:
    label: Descripción (Facebook)
    type:  textarea
  featured:
    label: Featured
    type: checkbox