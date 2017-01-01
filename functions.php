<?php

include("config.php");

function update($field) {
    if ($field == "session" || $field == "school" || $field == "standard") {
        switch ($field) {
            case "session":
                $update_query = "UPDATE student SET Academic";
        }
    }
}

?>