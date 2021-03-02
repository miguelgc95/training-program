<?php

class Main extends Controller
{

    public array $days = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");

    public function __construct()
    {
        parent::__construct();

    }

    public function render()
    {
        $this->view->render("main/index");
    }

    public function requestDayTraining($day)
    {
        return $this->model->getDayTraining($day);
    }
}
