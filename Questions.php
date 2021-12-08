<?php
    require_once "models/Question.php";
    require_once "models/QuestionModel.php";
    require_once "utils/ConnectionDB.php";
    require_once "fragments/head.php";
    require_once "fragments/nav.php";

    
    $questionModel = new QuestionModel();
    
    $questions = $questionModel->getAll();

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
                    <div class="card-header bg-danger text-light">Queestions:</div>
                    <div class="card-body text-dark">
                        <?php 
                            foreach ($questions as $question){
                                echo '<label class="form-label" for="questionUser[]">';
                                    echo '<div><strong>'.$question->getStatement().'</strong><br> a) '.$question->getAnswerA().'<br> b) '.$question->getAnswerB().'<br> c) '.$question->getAnswerC().'<br> d) '.$question->getAnswerD().'</div>';
                                    echo '<div><strong>Solution: '.$question->getSolution().'</strong></div>';
                                echo '</label>';
                                echo "<hr>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>