<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright concept & creation by ifabrik.de, Leipzig
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * PropertyType
 */
class PropertyType extends AbstractEntity
{

    /**
     * The name of the exact property type. For example:
     * Room type
     * Parking type
     * Apartment type
     *
     * @var string
     */
    protected $name = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
