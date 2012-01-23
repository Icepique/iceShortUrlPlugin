<?php

class iceShortUrlModuleActions extends IceActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $short_url = $this->getRoute()->getObject();
    $short_url->setViewCount($short_url->getViewCount()+1);
    $short_url->save();

    $hit = new iceModelShortUrlHit();
    $hit->setShortUrlId($short_url->getId());
    $hit->setSessionId(session_id());
    $hit->setIpAddress(IceStatic::getUserIpAddress());
    $hit->setReferrer($_SERVER['HTTP_REFERER']);
    $hit->setIsMobile(preg_match('(IEMobile|Windows CE|NetFront|PlayStation|PLAYSTATION|like Mac OS X|MIDP|UP\.Browser|Symbian|Nintendo|Android)', $_SERVER['HTTP_USER_AGENT']));
    $hit->save();

    // The code "301" is interpreted as "moved permanently".
    return $this->redirect($short_url->getUrl(), 301);
  }

  public function executeCreate(sfRequest $request)
  {
    $domain = $request->getParameter('domain');
    $url = $request->getParameter('url');

    $short_url = iceModelShortUrlPeer::createShortUrl($url);

    $this->renderText(sprintf('http://%s/%s', $domain, $short_url->getHash()));

    return sfView::NONE;
  }

  protected function sendEmail($to, $subject, $body)
  {
    return true;
  }
}

