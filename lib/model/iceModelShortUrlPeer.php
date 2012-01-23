<?php


require 'plugins/iceShortUrlPlugin/lib/model/om/BaseiceModelShortUrlPeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'short_url' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.iceShortUrlPlugin.lib.model
 */
class iceModelShortUrlPeer extends BaseiceModelShortUrlPeer
{
  const ALLOWED_CHARS = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  public static function createShortUrl($url, $is_public = true, $is_enabled = false)
  {
    $short_url = new iceModelShortUrl();
    $short_url->setUrl($url);
    $short_url->setUrlDecoded(urldecode($url));
    $short_url->setIsEnabled($is_enabled);
    $short_url->setIsPublic($is_public);
    $short_url->save();

    return $short_url;
  }

  /**
   * Finds an Advert object based on $parameters from the current route
   *
   * @param  array  $parameters
   *
   * @return Advert
   */
  public static function getObjectForRoute($parameters)
  {
    return iceModelShortUrlQuery::create()
           ->filterBy('Hash', iceModelShortUrlPeer::HASH ." = '". $parameters['hash'] ."' COLLATE utf8_bin", Criteria::CUSTOM)
           ->findOne();
  }

  public static function getHashFromId($id)
  {
    $chars = self::ALLOWED_CHARS;
    $hash = null;

    $length = strlen($chars);
    while($id > $length - 1)
    {
      $hash = $chars[fmod($id, $length)] . $hash;
      $id = floor( $id / $length );
    }

    // We are adding an extra "s" in the beginning
    return 's'. $chars[$id] . $hash;
  }

  public static function getIdFromHash($hash)
  {
    $chars = self::ALLOWED_CHARS;

    // We remove the extra "s" (if present) in the beginning of the hash
    $hash = substr($hash, 0, 1) == 's' ? substr($hash, 1) : $hash;

    $length = strlen($chars);
    $size = strlen($hash) - 1;
    $hash = str_split($hash);
    $id = strpos($chars, array_pop($hash));

    foreach($hash as $i => $char)
    {
      $id += strpos($chars, $char) * pow($length, $size - $i);
    }

    return $id;
  }
}
