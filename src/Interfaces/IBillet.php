<?php

namespace App\Interfaces;

use App\Models\Bank;

interface IBillet
{
    public function getBank(): Bank;
}