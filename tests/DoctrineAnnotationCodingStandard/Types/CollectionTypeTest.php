<?php declare(strict_types = 1);

namespace DoctrineAnnotationCodingStandardTests\Types;

use DoctrineAnnotationCodingStandard\Types\CollectionType;
use DoctrineAnnotationCodingStandard\Types\IntegerType;
use DoctrineAnnotationCodingStandard\Types\ObjectType;
use DoctrineAnnotationCodingStandard\Types\UnqualifiedObjectType;
use PHPUnit\Framework\TestCase;

class CollectionTypeTest extends TestCase
{
    public function testQualificationWithUnqualifiableItemType()
    {
        $type = new CollectionType(new IntegerType());
        $this->assertSame($type, $type->qualify(null, []));
    }

    public function testQualification()
    {
        $type = new CollectionType(new UnqualifiedObjectType('DateTime'));
        $this->assertEquals(new CollectionType(new ObjectType(\DateTime::class)), $type->qualify(null, []));
    }
}
