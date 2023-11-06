<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST['username']) ? $_POST['username'] : 'N/A';
            $club = isset($_POST['option']) ? $_POST['option'] : 'N/A';
            $date = isset($_POST['date']) ? $_POST['date'] : 'N/A';

            $skills = isset($_POST['skill']) ? $_POST['skill'] : array();

            echo "Name: $name<br>";
            echo "Club: $club<br>";
            echo "Date: $date<br>";

            if (isset($_POST['skill'])) {
                $skills = $_POST['skill'];
                foreach ($skills as $skill) {
                    echo "Skill: $skill<br>";
                }
            } else {
                echo "No skills selected.";
            }
            
        }
?>