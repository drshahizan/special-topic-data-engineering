<?php

namespace Psalm\Type\Atomic;

/**
 * Denotes the `trait-string` type, used to describe a string representing a valid PHP trait.
 */
class TTraitString extends TString
{
    public function getKey(bool $include_extra = true): string
    {
        return 'trait-string';
    }

    public function __toString(): string
    {
        return $this->getKey();
    }

    public function getId(bool $nested = false): string
    {
        return $this->getKey();
    }

    /**
     * @param  array<lowercase-string, string> $aliased_classes
     */
    public function toPhpString(
        ?string $namespace,
        array $aliased_classes,
        ?string $this_class,
        int $php_major_version,
        int $php_minor_version
    ): ?string {
        return 'string';
    }

    /**
     * @param  array<lowercase-string, string> $aliased_classes
     *
     */
    public function toNamespacedString(
        ?string $namespace,
        array $aliased_classes,
        ?string $this_class,
        bool $use_phpdoc_format
    ): string {
        return 'trait-string';
    }

    public function canBeFullyExpressedInPhp(int $php_major_version, int $php_minor_version): bool
    {
        return false;
    }
}
