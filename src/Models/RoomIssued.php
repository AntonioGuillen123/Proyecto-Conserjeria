<?php

namespace App\Models;

use App\Connection;

class RoomIssued
{

    public ?int $id;
    public string $room;
    public string $issue;
    public ?string $datetime;

    public $connection;
    public $table = 'roomissued';

    public function __construct($id = null, $room = '', $issue = '', $datetime = null)
    {
        $this->id = $id;
        $this->room = $room;
        $this->issue = $issue;
        $this->datetime = $datetime;

        if (!$this->connection) {
            $this->connection = new Connection();
        }
    }

    public function getAll()
    {
        $query = $this->connection->connection->query("SELECT * FROM {$this->table}");
        $results = $query->fetchAll();

        $roomsIssued = [];

        foreach ($results as $item) {
            $roomIssued = new RoomIssued($item['id'], $item['room'], $item['issue'], $item['datetime']);

            array_push($roomsIssued, $roomIssued);
        }

        return $roomsIssued;
    }
}
