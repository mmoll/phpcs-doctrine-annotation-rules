<?php declare(strict_types = 1);

namespace DoctrineAnnotationCodingStandard\Types;

use DoctrineAnnotationCodingStandard\ImportClassMap;

class AnyObjectType implements Type
{
    /**
     * @param string|null $namespace
     * @param ImportClassMap $imports
     * @return string
     */
    public function toString(string $namespace = null, ImportClassMap $imports): string
    {
        return 'object';
    }
}
