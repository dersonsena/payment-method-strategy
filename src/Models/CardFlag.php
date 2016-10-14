<?php

namespace App\Models;

use SplEnum;

class CardFlag extends SplEnum
{
    const MASTER = 1;
    const VISA = 2;
    const DINNERS = 3;
    const ELO = 4;
}