
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1>Add new student</h1>
            <form action="" method="POST">
            <input type="image" placeholder="img" name="image">
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="phoone" placeholder="phone" name="phone">
                <input type="phone" placeholder="email number" name="email number">
                <input type="date" placeholder="date" name="Date dadmission">
                <input type="image" placeholder="img" name="image">
                <input type="image" placeholder="img" name="image">


                <input type="submit" value="save">
            </form>
        </body>
        </html>

        <?php
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['email number'])
            && isset($_POST['Date dadmission'])){
                $student = [
                    "img" =>$_POST['img'],
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "phone" => $_POST['phone'],
                    "email number" => $_POST['email number'],
                    "Date dadmission" => $_POST['Date dadmission'], 
                    "icon1" => $_POST['icon1'],          
                    "icon2" => $_POST['icon2'],          


                ];
                $data = file_get_contents('student.json');
                $student= json_decode($data,true);
                array_push($students,$student);
                $data = json_encode($students , JSON_PRETTY_PRINT);
                file_put_contents('student.json', $data);
                echo "
                    <script>
                    window.location.href = 'students.php';
                    </script>
                ";
            }
        ?>