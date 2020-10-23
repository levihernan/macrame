<?php if(!defined('KIRBY')) exit ?>

title: Imagenes
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
  text:
    label: Creditos
    type:  textarea
  body:
    label: Texto
    type: textarea
  description:
    label: Descripción (Facebook)
    type:  textarea
  featured:
    label: Featured
    type: checkbox
  vimeonumber:
    label: Vimeo (numero)
    type:  text