<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1 = 0;
    public $num2 = 0;
    public  string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate() {
        $a = (float)$this->num1;
        $b = (float)$this->num2;

        switch ($this->action) {
            case '+':
                return $this->result = $a + $b;

            case '-':
                return $this->result = $a - $b;

            case '*':
                return $this->result = $a * $b;

            case '/':
                return $this->result = $a / $b;

            case '%':
                return $this->result = $a / 100 * $b;
        }
    }

    public function updated($property) {
        if ($this->num1 == '' || $this->num2 == '') {
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
}
