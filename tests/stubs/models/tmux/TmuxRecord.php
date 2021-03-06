<?php

namespace tests\stubs\models\tmux;

use tests\stubs\base\Record;

/**
 * Represents
 *
 * @package tests\stubs\models\tmux
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class TmuxRecord extends Record {
    public $dummyRecord;
    public $id;

    public function getDummy() {
        return $this->dummyRecord;
    }

    public function getPrimaryKey($asBool = false) {
        return $this->id;
    }


    public function getListOfSelfRecords() {
        return [
            $this,
            $this,
            $this,
        ];
    }

    public function getListOfMixedValues() {
        return [
            $this,
            'value',
            1,
        ];
    }
}