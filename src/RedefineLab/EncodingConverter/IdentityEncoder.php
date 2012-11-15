<?php

namespace RedefineLab\EncodingConverter;

class IdentityEncoder implements EncodingConverterInterface
{
    public function fromUtf($string)
    {
        return $string;
    }

    public function toUtf($string)
    {
        return $string;
    }

}
