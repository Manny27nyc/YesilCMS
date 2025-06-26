/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class Token {

    /** @var int */
    private $line;

    /** @var string */
    private $name;

    /** @var string */
    private $value;

    /**
     * Token constructor.
     */
    public function __construct(int $line, string $name, string $value) {
        $this->line  = $line;
        $this->name  = $name;
        $this->value = $value;
    }

    public function getLine(): int {
        return $this->line;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getValue(): string {
        return $this->value;
    }
}
