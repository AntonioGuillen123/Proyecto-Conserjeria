<?php

namespace App\Models;

use App\Connection;

class RoomIssued
{
    private ?int $id;
    private string $room;
    private string $issue;
    private string $area;
    private ?string $datetime;

    private $connection;
    private $table = 'roomissued';

    public function getId()
    {
        return $this->id;
    }

    public function getRoom()
    {
        return $this->room;
    }

    public function getIssue()
    {
        return $this->issue;
    }

    public function getArea(){
        return $this->area;
    }

    public function getDateTime()
    {
        return $this->datetime;
    }

    public function __construct($id = null, $room = '', $issue = '', $area = '', $datetime = null)
    {
        $this->id = $id;
        $this->room = $room;
        $this->issue = $issue;
        $this->area = $area;
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
            $roomIssued = new RoomIssued($item['id'], $item['room'], $item['issue'], $item['area'], $item['datetime']);

            array_push($roomsIssued, $roomIssued);
        }

        return $roomsIssued;
    }

    public function findById($id)
    {
        $query = $this->connection->connection->query("SELECT * FROM {$this->table} WHERE id = $id");
        $results = $query->fetchAll();

        $roomIssued = $results[0];

        return new RoomIssued($roomIssued['id'], $roomIssued['room'], $roomIssued['issue'], $roomIssued['area'], $roomIssued['datetime']);
    }

    public function destroy()
    {
        $this->connection->connection->query("DELETE FROM {$this->table} WHERE id = {$this->id}");
    }

    public function save()
    {
        $this->connection->connection->query("INSERT INTO {$this->table} (room, issue, area) VALUES ('{$this->room}', '{$this->issue}', '{$this->area}')");
    }

   
}