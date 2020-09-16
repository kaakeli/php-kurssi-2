<?php

class User
{
    /**
     * User name
     * @var string
     */
    public string $name;

    /**
     * User age
     * @var int
     */
    public int $age;

    /**
     * ExampleClass constructor that accepts name and age as arguments.
     *
     * @param string|null $name User name
     * @param int|null    $age  User age
     */
    public function __construct(?string $name = null, ?int $age = null)
    {
        // Set name if passed.
        if($name !== null)
        {
            $this->setName($name);
        }

        // Set age if passed.
        if($age !== null)
        {
            $this->setAge($age);
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     *
     * @return User
     */
    public function setAge(int $age): User
    {
        $this->age = $age;
        return $this;
    }


}

/*
 * Älä muokkaa koodia tästä eteenpäin!
 */

// Create object with name and age.
$mikkoObject = new User('Mikko', 18);

// Create empty object.
$saaraObject = new User();

// Set name and age.
$saaraObject->setName('Saara')
            ->setAge(22);

/*
 * Should print out:
 * Name: Mikko, age: 18<br>
 * Name: Saara, age: 22<br>
 */
printf("Name: %s, age: %d<br>\n", $mikkoObject->getName(), $mikkoObject->getAge());
printf("Name: %s, age: %d<br>\n", $saaraObject->getName(), $saaraObject->getAge());