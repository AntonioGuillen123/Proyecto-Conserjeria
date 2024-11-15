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

    public function findById() {
        $query = $this->connection->connection->query("SELECT * FROM {$this->table} WHERE id = {$this->id}");
        $results = $query->fetchAll();

        $roomIssued = $results[0];

        return new RoomIssued($roomIssued['id'], $roomIssued['room'], $roomIssued['issue'], $roomIssued['datetime']);
    }

    public function destroy(){
        $query = $this->connection->connection->query("DELETE FROM {$this->table} WHERE id = {$this->id}");
    }

    public function save(){
        $query = $this->connection->connection->query("INSERT INTO {$this->table} (room, issue) VALUES ('{$this->room}', '{$this->issue}')");
    }
}