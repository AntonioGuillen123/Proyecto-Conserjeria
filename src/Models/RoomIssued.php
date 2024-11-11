<?php

namespace App\Models;

use App\Connection;

class RoomIssued {

    public ?int $id;
    public string $room;
    public string $issue;
    public ?string $datetime;

    public $connection;

    public function __construct($id = null, $room = '', $issue='', $datetime=null)
    {
        $this->id = $id;
        $this->room = $room;
        $this->issue = $issue;
        $this->datetime = $datetime;

        if(!$this->connection){
            $this->connection = new Connection();
        }
    }
}