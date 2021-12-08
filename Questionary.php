<?php
    require_once "models/Question.php";
    require_once "models/QuestionModel.php";
    require_once "utils/ConnectionDB.php";
    require_once "fragments/head.php";
    require_once "fragments/nav.php";

    
    $questionModel = new QuestionModel();
    
    $questions = $questionModel->getAll();

    if(isset($_POST["test"]) && $_POST["test"] == 1){
        $result = array();
        $countSuccess = 0;

        foreach($questions as $id => $question){
            if(strcmp($_POST[$id], $question->getSolution())===0){
                $result[$id]=1;
                $countSuccess++;
            }
            else{
                $result[$id]="The answer is: <strong>".$question->getSolution()."</strong>, and you put: <strong>".$_POST["test"]."</strong>";
            }
        }
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
                    <div class="card-header bg-danger text-light">Resolve the test</div>
                    <div class="card-body text-dark">
                        <?php 
                            if(isset($result)){
                                echo '<div class="alert alert-success" role="alert">';
                                    echo "Your mark is: <strong>".$countSuccess." / ".count($questions)."</strong>";
                                echo '</div>';
                            }
                        ?>
                        <form  method="POST">
                            <?php 
                                foreach ($questions as $question){
                                    echo '<label class="form-label" for="questionUser[]">';
                                        echo '<div><strong>'.$question->getStatement().'</strong><br> a) '.$question->getAnswerA().'<br> b) '.$question->getAnswerB().'<br> c) '.$question->getAnswerC().'<br> d) '.$question->getAnswerD().'</div>';
                                    echo '</label>';
                                    echo '<input class="form-control mb-3" type="text" name="'.$question->getId().'" id="questionUser" required>';

                                    if(isset($result)){
                                        if($result[$question->getId()] === 1){
                                            echo '<div class="alert alert-success" role="alert">';
                                                echo "The answer is: <strong>".$question->getSolution()."</strong>";
                                            echo '</div>';
                                        }
                                        else{
                                            echo '<div class="alert alert-danger" role="alert">';
                                                echo $result[$question->getId()];
                                            echo '</div>';
                                        }
                                    }
                                    echo "<hr>";
                                }
                            ?>
                            <input class="form-control" type="text" name="test" id="test" value = "1" hidden readonly>
                            <button type="submit" class="btn btn-danger btn-block mt-3 mb-3"><strong>View your results</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>