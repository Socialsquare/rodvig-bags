<?php if(!defined('KIRBY')) exit ?>

title: Image Title Text
preview: parent
deletable: false
pages: false
files:
  fields:
    caption:
      label: Caption
      type: text
      required: true
    description:
      label: Description
      type: textarea
      required: true
  sortable: true
  type: image
