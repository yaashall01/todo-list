<?php
require_once 'models/TaskModel.php';

class TaskController {
    private $model;

    public function __construct() {
        $this->model = new TaskModel();
    }

    public function addTask($task) {
        $this->model->addTask($task);
    }

    public function getTasks() {
        return $this->model->getTasks();
    }
}
