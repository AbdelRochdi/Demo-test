<?php include "admin_header.php" ?>
<?php 

if (isset($_POST['add_Question'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $niveau = $_POST['niveau'];
    $QuestF = $_POST['QuestF'];
    $QuestA = $_POST['QuestA'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $reponse1 = $_POST['reponse1'];
    $reponse2 = $_POST['reponse2'];
    $reponse3 = $_POST['reponse3'];
    $reponse4 = $_POST['reponse4'];
    $reponse5 = $_POST['reponse5'];
    $nombre_reponses = $_POST['nombre_reponses'];
    $BonneR = $_POST['BonneR'];

    move_uploaded_file($image_temp, "../images/$image");

    $id = mysqli_real_escape_string($connection,$id);
    $type = mysqli_real_escape_string($connection,$type);
    $niveau = mysqli_real_escape_string($connection,$niveau);
    $QuestF = mysqli_real_escape_string($connection,$QuestF);
    $QuestA = mysqli_real_escape_string($connection,$QuestA);
    $image = mysqli_real_escape_string($connection,$image);
    $reponse1 = mysqli_real_escape_string($connection,$reponse1);
    $reponse2 = mysqli_real_escape_string($connection,$reponse2);
    $reponse3 = mysqli_real_escape_string($connection,$reponse3);
    $reponse4 = mysqli_real_escape_string($connection,$reponse4);
    $reponse5 = mysqli_real_escape_string($connection,$reponse5);
    $nombre_reponses = mysqli_real_escape_string($connection,$nombre_reponses);
    $BonneR = mysqli_real_escape_string($connection,$BonneR);

    $query = "INSERT INTO questions1(id,type,niveau,QuestF,QuestA,image,reponse1,reponse2,reponse3,reponse4,reponse5,nombre_reponses,BonneR) VALUES ($id,$type,$niveau,'$QuestF','$QuestA','$image','$reponse1','$reponse2','$reponse3','$reponse4','$reponse5',$nombre_reponses,'$BonneR')";
    $add_question_query = mysqli_query($connection,$query);

    if (!$add_question_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
}

?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ajouter une Question
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_question.php" method="post" enctype="multipart/form-data">    
     
     
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type">
                    </div>

                    <div class="form-group">
                        <label for="niveau">Niveau</label>
                        <input type="text" class="form-control" name="niveau">
                    </div>
      
      
      
                    

                    
                    <div class="form-group">
                        <label for="QuestF">Question Francais</label>
                        <textarea class="form-control "name="QuestF" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="QuestA">Question Arabe</label>
                        <textarea class="form-control "name="QuestA" id="" cols="30" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file"  name="image">
                    </div>

                    <div class="form-group">
                        <label for="reponse1">Reponse 1</label>
                        <input type="text" class="form-control" name="reponse1">
                    </div>
                    <div class="form-group">
                        <label for="reponse2">Reponse 2</label>
                        <input type="text" class="form-control" name="reponse2">
                    </div>
                    <div class="form-group">
                        <label for="reponse3">Reponse 3</label>
                        <input type="text" class="form-control" name="reponse3">
                    </div>
                    <div class="form-group">
                        <label for="reponse4">Reponse 4</label>
                        <input type="text" class="form-control" name="reponse4">
                    </div>
                    <div class="form-group">
                        <label for="reponse5">Reponse 5</label>
                        <input type="text" class="form-control" name="reponse5">
                    </div>

                    <div class="form-group">
                        <label for="nombre_reponses">Nombre de reponses</label>
                        <input type="number" class="form-control" name="nombre_reponses">
                    </div>

                    <div class="form-group">
                    <label for="BonneR">Bonne Reponse</label>
                        <input type="text" class="form-control" name="BonneR">
                    </div>
                    
                    

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_Question" value="Add Question">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->

        

    <?php include "admin_footer.php" ?>