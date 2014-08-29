<?php

namespace Ferrari\DateRecursive\Rule;

interface Rule
{
    public function test($date);
}