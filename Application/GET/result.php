<?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name = isset($_GET['username']) ? $_GET['username'] : 'N/A';
            $club = isset($_GET['option']) ? $_GET['option'] : 'N/A';
            $date = isset($_GET['date']) ? $_GET['date'] : 'N/A';

            $skills = isset($_GET['skill']) ? $_GET['skill'] : array();

            echo "Name: $name<br>";
            echo "Club: $club<br>";
            echo "Date: $date<br>";

            if (isset($_GET['skill'])) {
                $skills = $_GET['skill'];
                foreach ($skills as $skill) {
                    echo "Skill: $skill<br>";
                }
            } else {
                echo "No skills selected.";
            }
            
        }
?>