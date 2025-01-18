<?php

class Task {
    private $title;
    private $description;
    private $status;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->status = "Не выполнено";
    }

    public function __destruct() {
        echo "Задача '{$this->title}' была удалена из памяти.\n";
    }

    public function __call($method, $arguments) {
        $prefix = substr($method, 0, 3);
        $property = lcfirst(substr($method, 3));

        if ($prefix === 'set' && property_exists($this, $property)) {
            $this->$property = $arguments[0];
            echo "Свойство '{$property}' изменено на '{$arguments[0]}'.\n";
        } elseif ($prefix === 'get' && property_exists($this, $property)) {
            return $this->$property;
        } else {
            echo "Метод '{$method}' не существует.\n";
        }
    }

    public function __toString() {
        return "Задача: {$this->title} — {$this->status}\n";
    }
}

?>