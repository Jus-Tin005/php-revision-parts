<?php
    namespace Html;

    class Table {
        public $title = "";
        public $numRow = 0;
        public function message(){
            echo "<p>{$this->title} has {$this->numRow} rows.</p>";
        }
    }

    class Row extends Table {
        public $title = "";
        public $numRow = 0;
        public function message(){
            echo "<p>{$this->title} has {$this->numRow} rows.</p>";
        }
    }

    $table = new Table();
    $table = new Row();
    $table->title = "My table";
    $table->numRow = 10;

    # My table has 10 rows.









        # Namespaces are declared at the beginning of a file using the namespace keyword
        # A namespace declaration must be the first thing in the PHP file

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $table->message();
        ?>
</body>
</html>