<?php

//add_comment.php

// $connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$error = '';
$comment_content = '';

// if(empty($_POST["comment_content"]))
// {
//  $error .= '<p class="text-danger">Comment is required</p>';
// }
// else
// {
//  $comment_content = $_POST["comment_content"];
// }

// if($error == '')
// {
 $query = "
 INSERT INTO comments 
 (parent_comment_id, content, comment_sender_name) 
 VALUES (:parent_comment_id, :comment, :id_account)
 ";
 $stmt = $conn->prepare($query);
 $stmt->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':id_account' => $comment_name
  )
 );
//  $error = '<label class="text-success">Comment Added</label>';
// }

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>