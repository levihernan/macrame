<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: 
    template:
        - texto
        - texto+img
        - imagenes
        - imagengigante
        - vimeo
files:
  sortable: true
  fields:
    title:
      label: Titulo
      type: text
    author:
      label: Autor
      type: text
    link:
      label: Link
      type: text
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large