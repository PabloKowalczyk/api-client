<?php

declare(strict_types=1);

namespace GPlacesPhp\ApiClient\Tests\Unit\Client\PlaceDetails\AddressComponents;

use GPlacesPhp\ApiClient\Client\PlaceDetails\AddressComponents\Component;
use PHPUnit\Framework\TestCase;

final class ComponentTest extends TestCase
{
    /** @test */
    public function component_can_be_created_from_array(): void
    {
        $component = Component::fromArray(
            [
                'short_name' => 'PL',
                'long_name' => 'Poland',
                'types' => ['country', 'political'],
            ]
        );

        $this->assertSame('PL', $component->shortName());
        $this->assertSame('Poland', $component->longName());
        $this->assertSame(['country', 'political'], $component->types());
    }
}
