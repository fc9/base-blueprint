<?php

namespace Fc9\Blueprint\Annotation;

/**
 * @Annotation
 */
class Transaction
{
    /**
     * @array<Request|Response>
     */
    public $value;
}
