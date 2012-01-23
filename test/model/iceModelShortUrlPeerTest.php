<?php

require_once dirname(__FILE__).'/../../../../test/bootstrap/model.php';
require_once dirname(__FILE__).'/../../lib/model/iceModelShortUrlPeer.php';

$t = new lime_test(7, new lime_output_color());

$t->diag('::getHashFromId()');

  $hash = iceModelShortUrlPeer::getHashFromId(1000340);
  $t->is($hash, 's4cew', 'Checking with "1000340"');

  $hash = iceModelShortUrlPeer::getHashFromId(1020439);
  $t->is($hash, 's4hsH', 'Checking with "1020439"');

$t->diag('::getIdFromHash()');

  $id = iceModelShortUrlPeer::getIdFromHash('s4cew');
  $t->is($id, 1000340, 'Checking with "s4cew"');

  $id = iceModelShortUrlPeer::getIdFromHash('s4hsH');
  $t->is($id, 1020439, 'Checking with "s4hsH"');

$t->diag('::createShortUrl()');

  $short_url = iceModelShortUrlPeer::createShortUrl('http://www.google.com/maps?ie=UTF8&ll=37.0625,-95.677068&spn=36.042042,79.013672&t=h&z=4');
  $hash = $short_url->getHash();

  $t->isnt($hash, null, 'The hash should not be "null"');
  $t->isnt($hash, '0', 'The hash should not be "0"');
  $t->is(substr($hash, 0, 1), 's', 'The first char of the hash must be "s"');
