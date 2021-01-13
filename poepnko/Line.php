<?php
namespace poepnko;
Class Line{
    public function line ($a,$b){

        if(0 === $a) {
            throw new PopenkoException("Equation doesn`t exist");
        }
        \poepnko\MyLog::log("This is line equation");
        return $this->x=-$b/$a;
    }

    protected $x;
}
?>