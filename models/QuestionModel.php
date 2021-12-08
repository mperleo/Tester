<?php
class QuestionModel
{
    public function getbyId($id){
        $conn = ConnectionBD::getCon();

        $result = $conn->query("SELECT * FROM test_questions WHERE id=".$id);
        $registro = $result->fetch_assoc();

        $result->free();
        if ($conn) $conn->close();

        return new Question($registro["id_questionary"], $registro["statement"],$registro["answerA"],$registro["answerB"],$registro["answerC"],$registro["answerD"],$registro["solution"], $registro["id"]);
    }

    public function getAll(){
        $conn = ConnectionBD::getCon();

        $result = $conn->query("SELECT * FROM test_questions ");
        
        $temp = $result->fetch_assoc();
        do{ 
            
            
            if($temp!== null){
                $questions[$temp["id"]]= new Question($temp["id_questionary"], $temp["statement"],$temp["answerA"],$temp["answerB"],$temp["answerC"],$temp["answerD"],$temp["solution"], $temp["id"]);
            }
            
            $temp = $result->fetch_assoc(); 
        }while ($temp !== null);

        $result->free();
        if ($conn) $conn->close();

        return $questions;
    }

    public function create($question){
        
        $conn = ConnectionBD::getCon();

        $stmt = $conn->prepare("INSERT INTO test_questions(id_questionary, statement, answerA, answerB, answerC, answerD, solution) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $question->getIdQuestionary(), $question->getStatement(), $question->getAnswerA(), $question->getAnswerB(), $question->getAnswerC(), $question->getAnswerD(), $question->getSolution());
        $result= $stmt->execute();

        $stmt->close();
        if ($conn) $conn->close();
    }

    
    public function update($question){
        $conn = ConnectionBD::getCon();

        $stmt = $conn->prepare("UPDATE test_questions SET (id_questionary, statement, answerA, answerB, answerC, answerC, answerD, solution) VALUES (?, ?, ?, ?, ?, ?, ?) WHERE id=?");
        $stmt->bind_param("sssssssi", $question->getIdQuestionary(), $question->getStatement(), $question->getAnswerA(), $question->getAnswerB(), $question->getAnswerC(), $question->getAnswerD(), $question->getSolution(), $question->getId());
        $result= $stmt->execute();

        $stmt->close();
        if ($conn) $conn->close();
    }

    public function delete($id){
        $conn = ConnectionBD::getCon();

        $stmt = $conn->prepare("DELETE FROM test_questions WHERE id=?");
        $stmt->bind_param("i", $id);
        $result= $stmt->execute();

        $stmt->close();
        if ($conn) $conn->close();
    }
}
?>