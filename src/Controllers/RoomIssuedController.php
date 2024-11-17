<?php

namespace App\Controllers;

use App\Models\RoomIssued;
use App\Core\View;

class RoomIssuedController {

    public function __construct() {
        if(isset($_GET["action"]) && ($_GET["action"] == "delete")) {
            $this->delete($_GET["id"]);
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST,$_GET["id"]);
            return;
        }


        $this->index();
    }

    public function index() {
        $call = new RoomIssued;
        $calls = $call->getAll();

        new View("RoomList", ["room" => $calls]);
    }

    public function delete($id) {
        $callDelete = new RoomIssued;
        $call = $callDelete->findById($id);

        $call->destroy();
        $this->index();
    }

    public function create() {
        new View("CreateRoom");
    }

    public function store(array $request) {
        $newCall = new RoomIssued(null, $request["room"], $request["issue"], $request["dateTime"]);
        $newCall->save();

        $this->index();
    }

    public function edit($id) {
        $callEdit = new RoomIssued;
        $call = $callEdit->findById($id);
        new View("EditRoom", ["room" => $call]);
    }

    public function update(array $request, $id) {
        $callUpdate = new RoomIssued;
        $call = $callUpdate->findById($id);
        $call->rename($request["room"], $request["issue"], $request["area"], $request["dateTime"]);
        $call->update();

        $this->index();
    }
}