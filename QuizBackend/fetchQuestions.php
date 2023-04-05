<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12608164";
$password = "eDcWvKrJUv";
$dbname = "sql12608164";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query("SELECT * FROM cyber_security_questions");
$questions = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $question = array(
            "question" => $row["question"],
            "a" => $row["option_a"],
            "b" => $row["option_b"],
            "c" => $row["option_c"],
            "d" => $row["option_d"],
            "correct" => $row["correct_option"]
        );
        array_push($questions, $question);
    }
}
$json = json_encode($questions);
$file = fopen("questions.json", "w");
fwrite($file, $json);
fclose($file);
$conn->close();
header('Location:./quiz.php');
