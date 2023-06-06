<?php

declare(strict_types=1);

namespace Sentry\SentryBundle\Tests;

use Composer\InstalledVersions;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\ResultStatement;
use PHPUnit\Framework\TestCase;

abstract class DoctrineTestCase extends TestCase
{
    protected static function isDoctrineDBALInstalled(): bool
    {
        return InstalledVersions::isInstalled('doctrine/dbal');
    }

    protected static function isDoctrineDBALVersion2Installed(): bool
    {
        return self::isDoctrineDBALInstalled()
            && version_compare(InstalledVersions::getVersion('doctrine/dbal') ?? '0', '3.0', '<');
    }

    protected static function isDoctrineDBALVersion3Installed(): bool
    {
        return self::isDoctrineDBALInstalled()
            && version_compare(InstalledVersions::getVersion('doctrine/dbal') ?? '0', '3.0', '>=');
    }

    protected static function isDoctrineDBALVersion3Point2Installed(): bool
    {
        return self::isDoctrineDBALInstalled()
            && version_compare(InstalledVersions::getVersion('doctrine/dbal') ?? '0', '3.2', '>=');
    }

    protected static function isDoctrineBundlePackageInstalled(): bool
    {
        return InstalledVersions::isInstalled('doctrine/doctrine-bundle');
    }
}
