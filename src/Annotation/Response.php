<?php

namespace Fc9\Blueprint\Annotation;

/**
 * @Annotation
 */
class Response
{
    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $contentType = 'application/json';

    /**
     * @var mixed
     */
    public $body;

    /**
     * @var array
     */
    public $headers = [];

    /**
     * @var array<Fc9\Blueprint\Annotation\Attribute>
     */
    public $attributes;
}
