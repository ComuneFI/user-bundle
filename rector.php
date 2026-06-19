<?php

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withRootFiles()
    ->withPhpVersion(\PHP_VERSION_ID)
    ->withPaths([
        __DIR__ . '/Command',
        __DIR__ . '/Controller',
        __DIR__ . '/DependencyInjection',
        __DIR__ . '/Doctrine',
        __DIR__ . '/Event',
        __DIR__ . '/EventListener',
        __DIR__ . '/Form',
        __DIR__ . '/Mailer',
        __DIR__ . '/Model',
        __DIR__ . '/Resources',
        __DIR__ . '/Security',
        __DIR__ . '/Util',
        __DIR__ . '/Validator',
        __DIR__ . '/Tests',
    ])
    ->withTypeCoverageLevel(0)
    ->withSets([
        SymfonySetList::SYMFONY_64,
       // DoctrineSetList::DOCTRINE_30,  // ← MIGRATE A DOCTRINE 3.0!
    ])
    ->withPhpSets()
    ->withAttributesSets(        
        symfony: true,        
        doctrine: true,        
        phpunit: true    
    ); 