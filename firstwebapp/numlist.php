<?php
abstract class AbsList {
    abstract public function startList(): void;
    abstract public function endList(): void;
}

class NumList extends AbsList {
    public function startList(): void {
        echo "<ol>\n";
    }

    public function endList(): void {
        echo "</ol>\n";
    }

    private $list = [];

    /**
    * @param array $list
    */
    public function __construct($list) {
        $this->list = $list;
    }

    public function show(): void {
        $this->startList();
        foreach ($this->list as $item) {
            echo "<li>$item</li>\n";
        }
        $this->endList();
    }

}
