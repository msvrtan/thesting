<?php

declare(strict_types=1);
/**
 * This is used by phpstan-doctrine extension to enforce rules.
 */
require dirname(__DIR__).'/vendor/autoload.php';
$kernel = new \App\Kernel('dev', false);
$kernel->boot();

if (null === $kernel->getContainer()) {
    throw new \RuntimeException('Can not get Container from Kernel');
}

return $kernel->getContainer()->get('doctrine')->getManager();
