<?php include "admin_header.php" ?>





            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Question List
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>Type</th>                       
                        <th>Niveau</th>                       
                        <th>Question en Francais</th>
                        <th>Question en Arabe</th>
                        <th>Image</th>
                        <th>Reponse1</th>
                        <th>Reponse2</th>
                        <th>Reponse3</th>
                        <th>Reponse4</th>
                        <th>Reponse5</th>
                        <th>Nombre de reponses</th>
                        <th>Bonne reponse</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM questions1";
                            $load_questions_query = mysqli_query($connection,$query);

                            if (!$load_questions_query) {
                                die("QUERY FAILED". mysqli_error($connection));
                            }

                            while ($row = mysqli_fetch_array($load_questions_query)) {
                                $id = $row['id'];
                                $type = $row['type'];
                                $niveau = $row['niveau'];
                                $QuestF = $row['QuestF'];
                                $QuestA = $row['QuestA'];
                                $image = $row['image'];
                                $reponse1 = $row['reponse1'];
                                $reponse2 = $row['reponse2'];
                                $reponse3 = $row['reponse3'];
                                $reponse4 = $row['reponse4'];
                                $reponse5 = $row['reponse5'];
                                $nombre_reponses = $row['nombre_reponses'];
                                $BonneR = $row['BonneR'];
  


                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$type</td>";
                                echo "<td>$niveau</td>";
                                echo "<td>$QuestF</td>";
                                echo "<td>$QuestA</td>";
                                echo "<td><img class= 'img-responsive' src='../images/$image' alt=''></td>";
                                echo "<td>$reponse1</td>";
                                echo "<td>$reponse2</td>";
                                echo "<td>$reponse3</td>";
                                echo "<td>$reponse4</td>";
                                echo "<td>$reponse5</td>";
                                echo "<td>$nombre_reponses</td>";
                                echo "<td>$BonneR</td>";
                                echo "<td> <a href='edit_question.php?edit=$id'>Edit</a></td>";
                                echo "<td><a href='view_questions.php?delete=$id'>Delete</a></td>";
                                echo "</tr>";
                            }

                            if (isset($_GET['delete'])) {
                                $deleted_question_id = $_GET['delete'];

                                $delete_query = "DELETE FROM questions1 WHERE id = $deleted_question_id";
                                $deleted_question_query = mysqli_query($connection,$delete_query);

                                header('Location: view_questions.php');
                            }

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>