<?php
namespace Striide\DebugBundle\Testing;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * FunctionalTestCase
 */
abstract class FunctionalTestCase extends WebTestCase
{
  public function get($service)
  {
    $k = static::createKernel();
    $k->boot();
    return $k->getContainer()->get($service);
  }
}
