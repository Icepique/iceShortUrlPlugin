<?php

require 'plugins/iceShortUrlPlugin/lib/model/om/BaseiceModelShortUrl.php';


/**
 * Skeleton subclass for representing a row from the 'short_url' table.
 *
 * @package    propel.generator.plugins.iceShortUrlPlugin.lib.model
 */
class iceModelShortUrl extends BaseiceModelShortUrl
{
  public function postSave(PropelPDO $con = null)
  {
    parent::postSave($con);

    if (null === $this->getHash())
    {
      $this->setHash(iceModelShortUrlPeer::getHashFromId($this->getId()));
      $this->save();
    }
  }

  public function __toString()
  {
    return 'http://'. sfConfig::get('app_domain') .'/'. $this->getHash();
  }
}
