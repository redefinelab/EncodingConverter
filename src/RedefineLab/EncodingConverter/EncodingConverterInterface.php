<?php

namespace RedefineLab\EncodingConverter;

interface EncodingConverterInterface
{

    public function toUtf($string);

    public function fromUtf($string);
}
