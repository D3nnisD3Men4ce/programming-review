<?php

class Test extends Dbh
{
    public function getData()
    {
        $sql = "SELECT * FROM student_por";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['Mjob'] .  '<br>';
        }
    }
}