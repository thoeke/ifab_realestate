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
 * ContactAddress
 */
class ContactAddress extends AbstractEntity
{

    /**
     * The name of the street
     *
     * @var string
     */
    protected $street = '';

    /**
     * The number of the building
     *
     * @var string
     */
    protected $addressNumber = '';

    /**
     * The area in which the address is located.
     *
     * @var string
     */
    protected $area = '';

    /**
     * The ZIP code of the address
     *
     * @var string
     */
    protected $zip = '';

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the addressNumber
     *
     * @return string $addressNumber
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * Sets the addressNumber
     *
     * @param string $addressNumber
     * @return void
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;
    }

    /**
     * Returns the area
     *
     * @return string $area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets the area
     *
     * @param string $area
     * @return void
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }
}
