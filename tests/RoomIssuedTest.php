<?php

namespace Tests;

use App\Models\RoomIssued;
use PHPUnit\Framework\TestCase;

class RoomIssuedTest extends TestCase
{

    public function testIfTestOk()
    {
        $this->assertEquals(1, 1);
    }

    public function test_ifGetRoomWorkCorrectly(){
        // given - Actores de la película
        $roomIssued = new RoomIssued(null, 'Room test 1', 'Issue test 1', 'Area test 1', null);

        // when - Rodaje de la película
        $resultGetRoom = $roomIssued->getRoom();

        // then - Crítica de la película
        $this->assertEquals('Room test 1', $resultGetRoom);
    }
}
