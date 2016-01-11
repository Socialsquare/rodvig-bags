<?php if(!defined('KIRBY')) exit ?>

title: Profiles
pages: false
deletable: false
files:
  fields:
    profile_name:
      label: Name
      type:  text
    profile_title:
      label: Title
      type:  text
    email:
      label: Email
      type:  text
    phone:
      label: Phone number
      type:  text
  type: image
  sortable: true

fields:
  title:
    label: title
    type: text
