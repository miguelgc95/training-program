<?php

class Main extends Controller
{

    public array $days = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
    public $weekTable = array();

    public function __construct()
    {
        parent::__construct();
        foreach ($this->days as $day) {
            $this->weekTable[$day] = $this->requestDayTraining($day);
        }
    }

    public function render()
    {
        $this->view->render("main/index");
    }

    public function requestDayTraining($day)
    {
        $this->model->getDayTraining($day);
    }
}
