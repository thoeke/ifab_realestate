<?php
namespace Ifabrik\IfabRealestate\Domain\Model;


/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * ContactAddress
 */
class ContactAddress extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
    protected $number = '';

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
     * Returns the number
     * 
     * @return string $number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the number
     * 
     * @param string $number
     * @return void
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
