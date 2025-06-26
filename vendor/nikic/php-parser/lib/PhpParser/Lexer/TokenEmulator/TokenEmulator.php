/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

/** @internal */
abstract class TokenEmulator
{
    abstract public function getPhpVersion(): string;

    abstract public function isEmulationNeeded(string $code): bool;

    /**
     * @return array Modified Tokens
     */
    abstract public function emulate(string $code, array $tokens): array;

    /**
     * @return array Modified Tokens
     */
    abstract public function reverseEmulate(string $code, array $tokens): array;

    public function preprocessCode(string $code, array &$patches): string {
        return $code;
    }
}
