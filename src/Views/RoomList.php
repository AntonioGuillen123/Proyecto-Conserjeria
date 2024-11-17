<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>

    <main>
        <div class="button">
            <a class="reportIssue" href="?action=create"><button>Report Issue</button></a>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr class='listHeader'>
                    <th class='infoHeader'>Id</th>
                    <th class='infoHeader'>Date</th>
                    <th class='infoHeader'>Room</th>
                    <th class='infoHeader'>Issue</th>
                    <th class='infoHeader'>Area</th>
                    <th class='infoHeader'>Delete</th>
                    <th class='infoHeader'>Update</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($data["room"] as $room) {
                        echo "
                        <tr class='allBody'>
                            <td>{$room->getId()}</td>
                            <td>{$room->getDateTime()}</td>
                            <td>{$room->getRoom()}</td>
                            <td>{$room->getIssue()}</td>
                            <td>{$room->getArea()}</td>
                            <td class='infoBody'><a href='?action=delete&id={$room->getId()}'>❌</a></td>
                            <td class='infoBody'><a href='?action=edit&id={$room->getId()}'>✏️</a></td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>
