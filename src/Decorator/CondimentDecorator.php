<?php

namespace DesignPatternsInPhp\Decorator;

abstract class CondimentDecorator extends Beverage
{
    public Beverage $beverage;
}