<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Olivier Chauvel <olivier@generation-multiple.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Genemu\Bundle\FormBundle\Tests;

use Symfony\Bridge\Doctrine\Form\DoctrineOrmExtension;

use Genemu\Bundle\FormBundle\Form\Type;

/**
 * @author Olivier Chauvel <olivier@generation-multiple.com>
 */
class DoctrineOrmExtensionTest extends DoctrineOrmExtension
{
    protected function loadTypes()
    {
        return array_merge(parent::loadTypes(), array(
            new Type\JQueryAutocompleterType($this->registry)
        ));
    }
}