<?php

namespace PhpCourse;

/**
 * Abstract class for animals.
 * @package PhpCourse
 */
abstract class AbstractAnimal
{
    // All possible diets.
    protected const DIET_CARNIVORE = 'Carnivore';
    protected const DIET_HERBIVORE = 'Herbivore';
    protected const DIET_OMNIVORE  = 'Omnivore';

    /**
     * Animal specie
     * @var string
     */
    protected string $specie;

    /**
     * Animal's calling name
     * @var string
     */
    private string $name;

    /**
     * Diet
     * @var string
     */
    protected string $diet;

    /**
     * AbstractAnimal constructor.
     *
     * @param string $name Calling name of the animal.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns animal's diet. The diet must be one of the DIET_ constants.
     * Because this method is abstract the extending class MUST override it.
     * @return string
     */
    abstract protected function diet(): string;

    /**
     * Convert class values to readable string if the class is printed.
     *
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            "Specie: %s<br>\nName: %s<br>\nDiet: %s<br>\n",
            $this->specie,
            $this->name,
            $this->diet()
        );
    }
}