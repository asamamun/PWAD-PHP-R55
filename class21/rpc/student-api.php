<?php
$students = array(
    array(
        array(
            "name" => "John Smith",
            "age" => 18,
            "gender" => "Male",
            "field_of_study" => "Mathematics"
        ),
        array(
            "name" => "Emily Johnson",
            "age" => 17,
            "gender" => "Female",
            "field_of_study" => "English"
        )
    ),
    array(
        array(
            "name" => "Michael Williams",
            "age" => 19,
            "gender" => "Male",
            "field_of_study" => "Science"
        ),
        array(
            "name" => "Sophia Davis",
            "age" => 18,
            "gender" => "Female",
            "field_of_study" => "History"
        )
    ),
    array(
        array(
            "name" => "James Miller",
            "age" => 20,
            "gender" => "Male",
            "field_of_study" => "Computer Science"
        ),
        array(
            "name" => "Olivia Wilson",
            "age" => 19,
            "gender" => "Female",
            "field_of_study" => "Physics"
        )
    ),
    array(
        array(
            "name" => "Benjamin Anderson",
            "age" => 19,
            "gender" => "Male",
            "field_of_study" => "Economics"
        ),
        array(
            "name" => "Ava Martinez",
            "age" => 18,
            "gender" => "Female",
            "field_of_study" => "Chemistry"
        )
    ),
    array(
        array(
            "name" => "William Taylor",
            "age" => 19,
            "gender" => "Male",
            "field_of_study" => "Biology"
        ),
        array(
            "name" => "Mia Garcia",
            "age" => 18,
            "gender" => "Female",
            "field_of_study" => "Geography"
        )
    )
);
$colorsarray = array("red", "green", "blue", "yellow");
echo json_encode(["students"=>$students, "colors"=>$colorsarray]);
?>