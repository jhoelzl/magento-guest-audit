<?php
/**
 * Magento Guest Audit
 *
 * PHP version 5
 * 
 * @author    Steve Robbins <steven.j.robbins@gmail.com>
 * @license   http://creativecommons.org/licenses/by/4.0/
 * @link      https://github.com/steverobbins/magento-guest-audit
 */

namespace MGA\Tests\Mga\Check;

use MGA\Check\UnreachablePath;
use PHPUnit_Framework_TestCase;

/**
 * Test parsing the sitemap out of a robots.txt file
 */
class UnreachablePathTest extends PHPUnit_Framework_TestCase
{
    /**
     * All urls should always be more
     */
    public function testGetAllPaths()
    {
        $unreachablePath = new UnreachablePath;
        $defaultPaths = $unreachablePath->getPaths();
        $allPaths = $unreachablePath->getPaths(true);

        $this->assertGreaterThan($defaultPaths, $allPaths);
        $this->assertContains($defaultPaths[0], $allPaths);
    }
}
