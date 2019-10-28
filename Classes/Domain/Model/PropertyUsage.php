<?php

namespace Ifabrik\IfabRealestate\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/

/**
 * PropertyUsage
 */
class PropertyUsage extends AbstractEntity
{

    /**
     * The name of the usage:
     * For example:
     * Living
     * Business
     * Parking
     * Storage
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
