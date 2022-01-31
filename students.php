<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="side.css">

  <title>students</title>
</head>

<body>   
  <div class="container-fluid">
         <div  class="row">
              <div class="bg col-2 p-0" id="sidebar">  
                <?php include("sidebar.php");  ?>
               </div>
            
              <div class=" px-1 col-10">
                   <?php
                    include ("header.php");
                    ?>
                    
                      <div class="col-12 main-content-toolbar d-flex pb-2 justify-content-between align-items-center border-bottom-light ">
                                    <h1 class="h5 fw-bold mt-3" style="margin-right: 10% ">Students List</h1>
                                    <div class="toolbar-left-part d-flex" style="margin-top: 15px;">
                                      <img src="images/ic-sort.svg">
                                        <button class="sort ic ic-sort btn btn-sort"></button>
                                        <button class="btn btn-info btn-add-students"><a href="add.php" style="float: right; font-size: 18px;">
                                        ADD NEW STUDENT</button></a>
                                    </div>
                      </div>
                      <div class="row my-0">
                          <div class=" table-responsive-sm table-responsive-md justify-content-end" style="width:100%,margin-left:10px;">
                  
                                    <table class="table bg-white table table-striped table-hover">
                                        <thead>
                                            <tr class="bg_table text-table ">                                                                                  
                                                  <th scope="row" ></th>
                                                  <th class="th-sm">Name</th>
                                                  <th class="th-sm">Email</th>
                                                  <th class="th-sm">phone</th>
                                                  <th class="th-sm">email number</th>
                                                  <th class="th-sm">Date d'admission</th>
                                                  <th class="th-sm"></th>
                                                  <th class="th-sm"></th>


                           </div>
                                            </tr>
                                        </thead>                                         
                                         <tbody class="font-weight-400">               

                                          <?php
                                                $data = file_get_contents('student.json');
                                                $students = json_decode($data,true);
                                                $students = array_reverse($students);
                                                foreach($students as $student){
                                                    echo '<tr>
                                                            <td>'.$student['img'].'</td>
                                                            <td>'.$student['Name'].'</td>
                                                            <td>'.$student['Email'].'</td>
                                                            <td>'.$student['phone'].'</td>
                                                            <td>'.$student['email number'].'</td>
                                                            <td>'.$student['Date dadmission'].'</td>
                                                         

                                                            <td>
                                                                <a href="edit.php"><img src="images/ic-edit.svg"></a>
                                                                <a href=""><img src="images/ic-delete.svg"></a>
                                                            </td>
                                                    </tr>';
                                                }

                                            ?>
                                         </tbody>
                                     </table>                        
                          </div>
                       </div>   
              </div>
          </div>
  </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
         
    <script>
      var el = document.getElementById("navbar");
      var toggleButton = document.getElementById("menu-btn");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };
  </script>
  
</body>
</html><