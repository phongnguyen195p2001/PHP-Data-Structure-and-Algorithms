<?php

class Queue {
    private $queue = [];

    public function display() {
        for($i = 0; $i < count($this->queue); $i++) {
            echo $this->queue[$i].',';
        }
    }

    public function isQueueEmpty() {
        return empty($this->queue);
    }

    public function peek() {
        return current($this->queue);
    }

    public function pushMethod($x) {
        return array_push($this->queue, $x);
    }

    public function popMethod() {
        return array_pop($this->queue);
    }

    public function shiftMethod() {
        return array_shift($this->queue);
    }

    public function unshiftMethod($x) {
        return array_unshift($this->queue, $x);
    }
}