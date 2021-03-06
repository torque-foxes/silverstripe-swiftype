<?php

namespace Ichaber\SSSwiftype\Tests\Fake;

use Ichaber\SSSwiftype\Extensions\SwiftypeMetaTagContentExtension;
use Ichaber\SSSwiftype\Tests\Extensions\SwiftypeMetaTagContentExtensionTest;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Dev\TestOnly;

/**
 * Class SwiftypeSiteTree
 *
 * @package Ichaber\SSSwiftype\Tests\Fake
 * @mixin SwiftypeMetaTagContentExtension
 */
class SwiftypeSiteTree extends SiteTree implements TestOnly
{
    /**
     * @var array
     */
    private static $extensions = [
        SwiftypeMetaTagContentExtension::class,
    ];

    /**
     * This needs to be set in your test.
     *
     * @var array
     * @see SwiftypeMetaTagContentExtensionTest::testMetaTagOutput() for an example
     */
    private static $swiftype_meta_tag_classes = [];
}
