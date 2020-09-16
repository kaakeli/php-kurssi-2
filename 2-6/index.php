<?php

class Distance
{
    /** @var float Kilometers */
    public float $kilometers;

    /**
     * Distance constructor.
     *
     * @param float $kilometers
     */
    public function __construct(float $kilometers)
    {
        $this->kilometers = $kilometers;
    }
}

foreach([100, 15.9, 0.3] as $km)
{
    $distance = new Distance($km);

    printf(
        "%skm = %sm = %s miles<br>\n",
        $distance->kilometers,
        $distance->inMeters(),
        $distance->inMiles()
    );
}