<?php

class Exceptional
{

}

try
{
    Exceptional::trying();
} catch(RuntimeException $e)
{
    printf("Kohdattiin poikkeus: %s<br>\n", $e->getMessage());
}