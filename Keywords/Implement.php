<?php

interface Machine {
    public function activate();
    public function deactivate();
    public function isActive();
}

class Kettle implements Machine {
    private $isOn = false;

    public function activate() {
        $this->isOn = true;
    }

    public function deactivate() {
        $this->isOn = false;
    }

    public function isActive() {
        return $this->isOn;
    }
}

$machine = new Kettle();

$machine->activate();
if($machine->isActive()) {
    echo "The machine is on";
} else {
    echo "The machine is off";
}

echo "<br>";
$machine->deactivate();
if($machine->isActive()) {
    echo "The machine is on";
} else {
    echo "The machine is off";
}