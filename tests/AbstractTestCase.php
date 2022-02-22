<?php

declare(strict_types=1);

/*
 * This file is part of Cachet Badger.
 *
 * (c) apilayer GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Badger;

use CachetHQ\Badger\BadgerServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @author James Brooks <james@alt-three.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @return string
     */
    protected function getServiceProviderClass()
    {
        return BadgerServiceProvider::class;
    }
}
