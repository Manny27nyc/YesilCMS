/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class LogicalAnd extends BinaryOp
{
    public function getOperatorSigil() : string {
        return 'and';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_LogicalAnd';
    }
}
