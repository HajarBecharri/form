<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;


 class firstController {
   
  public function bonjour():Response {

    return new Response ("bonjour symfony");
  }



 }


?>