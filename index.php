<?php
include_once 'class/Patient.php';
include_once 'class/PriorityQueue.php';

$priorityQueue = new PriorityQueue();
try {
    $priorityQueue->enqueue("Smith", 5);
} catch (Exception $e) {
}
try {
    $priorityQueue->enqueue("Jones", 4);
} catch (Exception $e) {
}
try {
    $priorityQueue->enqueue("Fehrenbach", 6);
} catch (Exception $e) {
}
try {
    $priorityQueue->enqueue("Brown", 1);
} catch (Exception $e) {
}
try {
    $priorityQueue->enqueue("Ingram", 1);
} catch (Exception $e) {
}

echo "<pre>";
print_r($priorityQueue->readQueue(1));