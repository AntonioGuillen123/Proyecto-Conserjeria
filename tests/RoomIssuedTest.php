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

    public function test_ifGetRoomWorkCorrectly()
    {
        // given - Actores de la película
        $roomIssued = new RoomIssued(null, 'Room test 1', 'Issue test 1', 'Area test 1', null);

        // when - Rodaje de la película
        $resultGetRoom = $roomIssued->getRoom();

        // then - Crítica de la película
        $this->assertEquals('Room test 1', $resultGetRoom);
    }

    public function test_ifGetIssueWorkCorrectly()
    {
        // given - Actores de la película
        $roomIssued = new RoomIssued(null, 'Room test 1', 'Issue test 1', 'Area test 1', null);

        // when - Rodaje de la película
        $resultGetIssue = $roomIssued->getIssue();

        // then - Crítica de la película
        $this->assertEquals('Issue test 1', $resultGetIssue);
    }

    public function test_ifSetRoomWorkCorrectly()
    {
        // given - Actores de la película
        $roomIssued = new RoomIssued(null, 'Room test 1', 'Issue test 1', 'Area test 1', null);
        $newRoomData = 'Room test change';

        // when - Rodaje de la película
        $roomIssued->setRoom($newRoomData);
        $roomChanged = $roomIssued->getRoom();

        // then - Crítica de la película
        $this->assertEquals('Room test change', $roomChanged);
    }

    public function test_ifSetIssueWorkCorrectly()
    {
        // given - Actores de la película
        $roomIssued = new RoomIssued(null, 'Room test 1', 'Issue test 1', 'Area test 1', null);
        $newIssueData = 'Issue test change';

        // when - Rodaje de la película
        $roomIssued->setIssue($newIssueData);
        $issueChanged = $roomIssued->getIssue();

        // then - Crítica de la película
        $this->assertEquals('Issue test change', $issueChanged);
    }
}
