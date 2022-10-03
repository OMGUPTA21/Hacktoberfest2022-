<?php
include("classes/autoload.php");


if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
       if(isset($_POST['post_deactivate'])){
        $post = new Post();
            $result = $post->update_post_status('0',$_POST['id']);
       }

       if(isset($_POST['post_activate'])){
        $post = new Post();
        $result = $post->update_post_status('1',$_POST['id']);

        }
    }

 
$login = new Login();
$user_data = $login->check_login($_SESSION['mybook_userid']);

 $USER = $user_data;

 if($USER['about']){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style type="text/css">
        #blue_bar {

            height: 50px;
            background-color: #405d9b;
            color: #d9dfeb;

        }

        #search_box {

            width: 400px;
            height: 20px;
            border-radius: 5px;
            border: none;
            padding: 4px;
            font-size: 14px;
            background-image: url(search.png);
            background-repeat: no-repeat;
            background-position: right;

        }

        #textbox {

            width: 100%;
            height: 20px;
            border-radius: 5px;
            border: none;
            padding: 4px;
            font-size: 14px;
            border: solid thin grey;
            margin: 10px;

        }

        #profile_pic {

            width: 150px;
            margin-top: -300px;
            border-radius: 50%;
            border: solid 2px white;
        }

        #menu_buttons {

            width: 100px;
            display: inline-block;
            margin: 2px;
        }

        #friends_img {

            width: 75px;
            float: left;
            margin: 8px;

        }

        #friends_bar {

            background-color: white;
            min-height: 400px;
            margin-top: 20px;
            color: #aaa;
            padding: 8px;
        }

        #friends {

            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #405d9b;
        }

        textarea {

            width: 100%;
            border: none;
            font-family: tahoma;
            font-size: 14px;
            height: 60px;

        }

        #post_button {

            float: right;
            background-color: #405d9b;
            border: none;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius: 2px;
            width: 50px;
            min-width: 50px;
            cursor: pointer;
        }

        #post_bar {

            margin-top: 20px;
            background-color: white;
            padding: 10px;
        }

        #post {

            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container mt-5">
        <h4 class="display-5 mb-3">All Posts</h4>
        <div class="col-12 bd-content">
            <div class="bd-example" data-example-id="">
                <table class="display" id="example" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Likes</th>
                            <th>Comments</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
    $posts = new Post();
    $all_posts = $posts->get_all_posts();
   
         foreach ($all_posts as $key => $value) {
   ?>
                        <tr>
                            <th scope="row"><?php echo $key+1 ?></th>
                            <td><?php echo $value['post'] ?></td>
                            <td><?php echo $value['likes'] ?></td>
                            <td><?php echo $value['comments'] ?></td>
                            <td>
                                <?php echo date($value['date'], strtotime('Y-m-d h:i:s A')) ?>

                            </td>
                            <td>
                                <?php if($value['online'] == 1) { 
            echo '<span class="badge alert-success">Active</span>';
             }else{ 
                echo ' <span class="badge alert-danger">Deactivated</span>';
                 } ?>
                            </td>
                            <td><img src="<?php echo $value['image'] ?>" style="width: 50px;"></td>

                            <td>
                                <form method="POST">

                                    <input type="hidden" name="id" value=<?php echo $value['id'] ?> />
                                    <input type="hidden" name="online" value=<?php echo $value['online'] ?> />
                                    <?php if($value['online']){ ?>
                                    <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Deactivate" class="btn" name="post_deactivate"></i><i
                                            class="fa fa-ban text-danger"></i></button>
                                    <?php }else{ ?>
                                    <button type="submit" class="btn" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Activate" name="post_activate"><i
                                            class="fa fa-check text-success"></i></button>
                                    <?php } ?>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>

</html>

<?php }else{
    header('Location: login.php');
} ?>