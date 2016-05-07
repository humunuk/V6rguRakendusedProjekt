<?php

/**
 * Class Zoo
 *
 * Made by Siim Kallari & Jorma Rebane during pair programming
 * 07.05.2016
 */

class Zoo {

    private $connection;
    private $tableName;

    public function __construct($tableName) {
        $this->tableName = $tableName;
        $dsn = 'mysql:dbname=test;host=127.0.0.1';
        $user = "test";
        $pass = "t3st3r123";
        try {
            $this->connection = new PDO($dsn, $user, $pass);
            $this->connection->setAttribute(PDO::FETCH_ASSOC, true);
        } catch (Exception $e) {
            echo "No connection to database: " . $e->getMessage();
        }
    }

    public function display($pagename) {
        $actions = ['login'   => function() { $this->actionLogin();   },
                    'logout'  => function() { $this->actionLogout();  },
                    'animals' => function() { $this->actionAnimals(); },
                    'add'     => function() { $this->actionAdd();     }
        ];
        if (array_key_exists($pagename, $actions)) {
            call_user_func($actions[$pagename]);
        }
        else { // page "default"
            include_once('views/v2rav.html');

        }
    }

    private function actionLogin() {
        include_once('views/login.html');
    }

    private function actionLogout() {
        $_SESSION = [];
        session_destroy();
        header("Location: ?");
    }

    private function actionAnimals() {
        $cages = [];
        $query = "SELECT * FROM $this->tableName ORDER BY puur ASC;";
        $result = $this->connection->query($query);
        include_once('views/puurid.php');
    }

    private function actionAdd() {
        // siia on vaja funktsionaalsust (13. nädalal)

        include_once('views/loomavorm.html');
    }

    public function upload($name) {
        $allowedExts  = ["jpg", "jpeg", "gif", "png"];
        $allowedTypes = ["image/gif", "image/jpeg", "image/png", "image/pjpeg"];
        $extension = end(explode(".", $_FILES[$name]["name"]));

        if (in_array($_FILES[$name]["type"], $allowedTypes)
            && ($_FILES[$name]["size"] < 100000)
            && in_array($extension, $allowedExts)
        ) {
            // fail õiget tüüpi ja suurusega
            if ($_FILES[$name]["error"] > 0) {
                $_SESSION['notices'][] = "Return Code: " . $_FILES[$name]["error"];

                return "";
            } else {
                // vigu ei ole
                if (file_exists("pildid/" . $_FILES[$name]["name"])) {
                    // fail olemas ära uuesti lae, tagasta failinimi
                    $_SESSION['notices'][] = $_FILES[$name]["name"] . " juba eksisteerib. ";

                    return "pildid/" . $_FILES[$name]["name"];
                } else {
                    // kõik ok, aseta pilt
                    move_uploaded_file($_FILES[$name]["tmp_name"], "pildid/" . $_FILES[$name]["name"]);

                    return "pildid/" . $_FILES[$name]["name"];
                }
            }
        } else {
            return "";
        }
    }
}

