Encountered issuse
mySQL and phpmyadmin both use 3306
Changed phpmyadmin to 3307 and setup the database password


$sql = "SELECT * FROM student_por";
        $stmt = $this->connect()->query($sql);

changed to

$sql = "SELECT * FROM project_sparta_practice.student_por";
        $stmt = $this->connect()->query($sql);