<?php

namespace RedefineLab\EncodingConverter;

class InternalEncodingConverter implements EncodingConverterInterface {
     public function fromUtf($string)
     {
         return mb_convert_encoding($string, mb_internal_encoding(), 'UTF-8');
     }

     public function toUtf($string)
     {
         return mb_convert_encoding($string, 'UTF-8', mb_internal_encoding());
     }


}