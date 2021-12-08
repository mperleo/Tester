<?php
    require_once "models/Question.php";
    require_once "models/QuestionModel.php";
    require_once "utils/ConnectionDB.php";
    require_once "fragments/head.php";
    require_once "fragments/nav.php";

    if(isset($_POST["statement"])){
        $questionModel = new QuestionModel();
        $newQuestion = new Question(1, $_POST["statement"],$_POST["answerA"],$_POST["answerB"],$_POST["answerC"],$_POST["answerD"],$_POST["solution"]);
        
        $questionModel->create($newQuestion);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php head();?>
</head>
<body>
    <?php nav();?>
    
    <div class = "container-fluid mt-4">
        <div class="row row-cols-1 row-cols-md-1 g-4">
            <div class="col" id="direccion">
                <div class="card border border-danger mb-3">
                    <div class="card-header bg-danger text-light">Add a new question</div>
                    <div class="card-body text-dark">
                        <form method="POST">
                            <label class="form-label" for="statement">Statement:</label>
                            <input class="form-control" type="text" name="statement" id="statement" required>

                            <label class="form-label" for="answerA">Answer A:</label>
                            <input class="form-control" type="text" name="answerA" id="answerA" required>
                            <label class="form-label" for="answerB">Answer B:</label>
                            <input class="form-control" type="text" name="answerB" id="answerB" required>
                            <label class="form-label" for="answerC">Answer C:</label>
                            <input class="form-control" type="text" name="answerC" id="answerC" required>
                            <label class="form-label" for="answerD">Answer D:</label>
                            <input class="form-control" type="text" name="answerD" id="answerD" required>

                            <label class="form-label" for="solution">Solution:</label>
                            <input class="form-control" type="text" name="solution" id="solution" required>

                            <button type="submit" class="btn btn-danger btn-block mt-3 mb-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>