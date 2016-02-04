<?php
namespace KissPHP;

class Request
{
  public $post;

  public $get;

  public $url;

  public $method;

  public $cookie;

  public $session;

  public $referer = null;

  public function __construct()
  {
    $this->post = (object)$_POST;
    $this->get = (object)$_GET;
    $this->url = $_SERVER['REQUEST_URI'];
    $this->method = $_SERVER['REQUEST_METHOD'];
    $this->cookie = $_COOKIE;
    if (isset($_SERVER['HTTP_REFERER'])) {
      $this->referer = $_SERVER['HTTP_REFERER'];
    }
  }
}