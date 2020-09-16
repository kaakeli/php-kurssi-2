<?php

class Person
{
    /** @var string Person's name */
    private string $name;

    /** @var int Person's age. Defaults to 30. */
    private int $age = 30;

    /**
     * Create a new person object ("olio" in Finnish)
     *
     * @param string   $name Person's name
     * @param int|null $age  (optional) Person's age.
     */
    public function __construct(string $name, ?int $age = null)
    {
        // Set name as property value via setter.
        $this->setName($name);

        // If age is passed, set it via setter.
        if($age !== null)
        {
            $this->setAge($age);
        }
    }

    /**
     * Returns person's name.
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets person's name and returns current object.
     *
     * @param string $name
     *
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Returns person's age.
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Sets person's age and returns current object.
     *
     * @param int $age
     *
     * @return Person
     */
    public function setAge(int $age): Person
    {
        $this->age = $age;
        return $this;
    }
}
