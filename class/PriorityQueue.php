<?php
include_once 'Patient.php';

class PriorityQueue
{
    protected array $queue;
    protected $limit;

    public function __construct()
    {
        $this->queue = [];
    }

    public function enqueue($name, $priority)
    {
        $patient = new Patient();
        $patient->name = $name;
        $patient->code = $priority;
        if (!is_numeric($priority)) {
            throw new Exception("Numeric priority value expected!");
        }
        isset($this->queue[$priority]) || $this->queue[$priority] = [];
        array_push($this->queue[$priority], $patient);
        return $this;
    }

    public function dequeue($priority = null)
    {
        if ($priority === null) {
            reset($this->queue);
            $priority = key($this->queue);
        }
        if (is_numeric($priority) && isset($this->queue[$priority])) {
            $element = array_shift($this->queue[$priority]);

            if (empty($this->queue[$priority])) {
                unset($this->queue[$priority]);
            }
            return $element;
        }
        return null;
    }

    public function readQueue($priority = null)
    {
        if ($priority === null) {
            return $this->queue;
        } elseif (is_numeric($priority) && isset($this->queue[$priority])) {
            echo 'List of patients with priority ' . $priority . ': ';
            foreach ($this->queue[$priority] as $patient) {
                echo "$patient->name ";
            }
            die();
        }
        return 'There are no patient on the queue list!';
    }
}