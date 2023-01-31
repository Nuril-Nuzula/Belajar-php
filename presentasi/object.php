<?php
class tumbuhan {
    // properties
    public $name;
    public $type;

    // Methods
    function set_name($name) {
        $this->name = $name;
      }
    function get_name() {
        return $this->name;
    }
}

$bambu = new tumbuhan();
$cemara = new tumbuhan();
?>