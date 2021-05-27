<?php
class Enum {
    const ACTION = 10;
    const ADVENTURE = 10;
    const SPORTS = 10;
}

function invalidUid($username) {
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result = false;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }

    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $pwd) {
    $sql = "INSERT INTO users (usersEmail, usersUid, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=nones");
    exit();
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}

function getAllGames($conn) {
    if(isset($_GET["firstgame"]) || isset($_GET["secondgame"]) || isset($_GET["thirdgame"])) {
        $firstgame = $_GET["firstgame"];
        $secondgame = $_GET["secondgame"];
        $thirdgame = $_GET["thirdgame"];
    }
    $sql = "SELECT * FROM games WHERE gamesName != ? AND gamesName != ? AND gamesName != ?";
    $ret = array();
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../searchpage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sss", $firstgame, $secondgame, $thirdgame);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    while($ar = mysqli_fetch_assoc($resultData))
        {
            $ret[] = $ar;
        }
    mysqli_stmt_close($stmt);
    return $ret;
}

function getAllSortGames($tags, $trio, $conn) {
    $ret = array();
    $buf = array();
    foreach($trio as $el) {
        $buf[] = $el['gamesName'];
    }
    foreach($tags as $key=>$val) {
        $sql = "SELECT * FROM games,tagitems,tags WHERE tags.tag = ? AND games.gamesId = tagitems.gamesId AND tagitems.tagId = tags.tagId";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../searchpage.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $key);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        while($ar = mysqli_fetch_assoc($resultData))
            {
                if(!(in_array($ar['gamesName'], $buf))) {
                    $ret[] = $ar;
                    $buf[] = $ar['gamesName'];
                }
            }
    }
    mysqli_stmt_close($stmt);
    return $ret;
}

function compareWeight($tag1, $tag2) {
    switch($tag1) {
        case "Action":
            $w1 = ENUM::ACTION;
            break;
        case "Adventure":
            $w1 = ENUM::ADVENTURE;
            break;
        case "Sports":
            $w1 = ENUM::SPORTS;
            break;
        default:
            $w1 = 1;
    }

    switch($tag2) {
        case "Action":
            $w2 = ENUM::ACTION;
            break;
        case "Adventure":
            $w2 = ENUM::ADVENTURE;
            break;
        case "Sports":
            $w2 = ENUM::SPORTS;
            break;
        default:
            $w2 = 1;
    }
    return $w1 < $w2;
}

function get3Games($conn) {
    if(isset($_GET["firstgame"]) || isset($_GET["secondgame"]) || isset($_GET["thirdgame"])) {
        $firstgame = $_GET["firstgame"];
        $secondgame = $_GET["secondgame"];
        $thirdgame = $_GET["thirdgame"];
    }
    $sql = "SELECT * FROM games WHERE gamesName = ? OR gamesName = ? OR gamesName = ?";
    $ret = array();
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../searchpage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sss", $firstgame, $secondgame, $thirdgame);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    while($ar = mysqli_fetch_assoc($resultData))
        {
            $ret[] = $ar;
        }
    mysqli_stmt_close($stmt);
    return $ret;
}

function getGame($conn, $name) {
    $sql = "SELECT * FROM games WHERE gamesName = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../gameinfo.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $ret = mysqli_fetch_assoc($resultData);
    mysqli_stmt_close($stmt);
    return $ret;
}

function getTags($conn, $name) {
    $sql = "SELECT tags.tag FROM games,tagitems,tags WHERE games.gamesName = ? AND games.gamesId = tagitems.gamesId AND tagitems.tagId = tags.tagId";
    $ret = array();
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../gamesinfo.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    while($ar = mysqli_fetch_assoc($resultData))
        {
            $ret[] = $ar['tag'];
        }
    mysqli_stmt_close($stmt);
    return $ret;
}

function getAmazonLink($name) {
    $fname = str_replace(' ', '+', $name);
    return "https://www.amazon.com/s?k=".$fname.'';
}

function getG2ALink($name) {
    $fname = str_replace(' ', '%20', $name);
    return "https://www.g2a.com/search?query=".$fname.'';
}

function getSimTags($conn, $games) {
    $res=array();
    foreach($games as $el) {
        $tags = getTags($conn, $el['gamesName']);
        $res = array_merge($res, $tags);
    }
    return $res;
}

function limitDesc($text) {
    if (str_word_count($text, 0) > 60) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[60]) . '...';
    }
    return $text;
}