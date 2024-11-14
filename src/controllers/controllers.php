<?php

namespace App\Controllers;

use App\Models\Call;
use App\Core\View;

class CallController {

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

        $this->index();
    }

    public function index() {
        $call = new Call;
        $calls = $call->all();

        new View("callList", ["call" => $calls]);
    }

    public function delete($id) {
        $callDelete = new Call;
        $call = $callDelete->findById($id);

        $call->destroy();
        $this->index();
    }

    public function create() {
        new View("createCall");
    }

    public function store(array $request) {
        $newCall = new Call(null, $request["room"], $request["issue"], $request["dateTime"]);
        $newCall->save();

        $this->index();
    }
}