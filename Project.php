<?php

class Project {
    private $name;
    private $tasks;

    public function __construct($name) {
        $this->name = $name;
        $this->tasks = [];
    }

    public function __destruct() {
        echo "Проект '{$this->name}' был завершен.\n";
    }

    public function addTask($task) {
        $this->tasks[] = $task;
        echo "Задача '{$task->getTitle()}' добавлена в проект '{$this->name}'.\n";
    }

    public function __toString() {
        $taskCount = count($this->tasks);
        return "Проект: {$this->name}, Количество задач: {$taskCount}\n";
    }
}

?>