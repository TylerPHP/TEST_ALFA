<?php

class a
{
    const TYPE = 'A Class';

    public function getType()
    {
        echo 'This is class: ' . get_class($this) . ', type ' . static::TYPE;
    }
}

class b extends a
{
    const TYPE = 'B Class';
}

$a = new a();
$b = new b();
$a->getType();
$b->getType();