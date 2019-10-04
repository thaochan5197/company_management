<?php
$managers = [];

public function dequy($id)
{
    if ($id != 0) {
        $position = Position::findOrFail($id);
        if (!isset($position->manager)) {
            return $managers;
        }
        else {
            $manager = $position->manager;
            array_push($managers, $manager);
            $id = $position->manager->id;
            $this->dequy($id);

        }
    }
    return $managers;
}