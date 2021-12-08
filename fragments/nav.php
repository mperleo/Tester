<?php
function nav(){
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-tabs border-bottom border-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-danger " href="index.php" style="font-family: 'Syne', sans-serif;"><strong>Tester!</strong></a>   
            <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Questionary.php">Do the test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Questions.php">See the questions</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="newQuestion.php">Add a question</a>
                </li>
            <!--
                <li class="nav-item">
                    <a class="nav-link" href="Questions.php">See all the tests</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Questions.php">Add a new test tests</a>
                </li>
            -->
            </ul>
            </div>
        </div>
    </nav>
<?php
}
?>