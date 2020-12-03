<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\OnlineStore;

use Slince\Shopify\Model\OnlineStore\Theme;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class ThemeManager extends GeneralCurdManager implements ThemeManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'themes';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'theme';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Theme::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}