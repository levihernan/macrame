<?php if(!defined('KIRBY')) exit ?>

title: Texto + img
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
    type:  text
  credit:
    label: Creditos
    type: textarea
  text:
    label: Texto
    type:  textarea
  description:
    label: Descripción (Facebook)
    type:  textarea
  featured:
    label: Featured
    type: checkbox