<?php

class C {

    public function printSomething() {
        echo "Sometimes what I think about is you!";
    }

    public static function checkCalls () {
        //self::printSomething();
        $cObj = new C();
        $cObj->printSomething();

    }
}


C::checkCalls();

