<?php

// Ngăn xếp
class Stack{
    private $stack = [];

    public function display() {
        for($i = 0; $i < count($this->stack); $i++) {
            echo $this->stack[$i].',';
        }
    }

    public function pushMethod($x) {
        return array_push($this->stack, $x);
    }

    public function popMethod() {
        return array_pop($this->stack);
    }

    public function shiftMethod() {
        return array_shift($this->stack);
    }

    public function unshiftMethod($x) {
        return array_unshift($this->stack, $x);
    }
}