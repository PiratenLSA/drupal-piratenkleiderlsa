<?php

$address_items = field_get_items('node', $node, 'field_ort');

if (isset($address_items[0])) {
  $address = $address_items[0];

  print 'Ort:\n';

  if (!empty($address['organisation_name']))
    print $address['organisation_name'] . '\n';
  if (!empty($address['thoroughfare']))
    print $address['thoroughfare'] . '\n';
  if (!empty($address['premise']))
    print $address['premise'] . '\n';
  if (!empty($address['postal_code']) && !empty($address['locality']))
    print $address['postal_code'] . ' ' . $address['locality'];
}

$turnus_items = field_get_items('node', $node, 'field_turnus');
if (isset($turnus_items[0])) {
  print '\n\nTurnus: ' . $turnus_items[0]['value'];
}

$body_items = field_get_items('node', $node, 'field_body');
if (isset($body_items[0])) {
  print '\n\n' . $body_items[0]['value'];
}

$wiki_items = field_get_items('node', $node, 'field_wiki_url');
if (isset($wiki_items[0])) {
  print '\n\n' . $wiki_items[0]['display_url'];
}
