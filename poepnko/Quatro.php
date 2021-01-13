<?php

namespace poepnko;

use core\EquationInterface;

Class Quatro extends Line implements EquationInterface
{
    protected function discrim($q, $w, $e)
    {

        $DIS = $w ** 2 - 4 * $q * $e;
        return $DIS;
    }

    public function solve($a, $b, $c)
    {

        $disc = $this->discrim($a, $b, $c);

        if (0 == $a) {
            return [$this->line($b, $c)];
        }
        \poepnko\MyLog::log("This is quatro equation");
        if ($disc > 0) {
            return $this->x = array(
                ((-$b) + $disc) / 2 * $a,
                ((-$b) - $disc) / 2 * $a
            );
        }

        if ($disc === 0) {
            return [$this->x =(-$b) / 2 * $a];
        }

        throw new PopenkoException("No roots");
    }

}

?>
