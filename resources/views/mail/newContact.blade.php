
<?php
// echo "<pre>";
// print_r($salary);exit();
  $message = isset($mail['content']) ? $mail['content'] : '';
    if(isset($contact))
    {
        $data = [
            'name'=>$contact->name,
            'phone'=>$contact->phone,
            'email'=>$contact->email,
            'content'=>$contact->content,
        ];
        
    }
    foreach ($data as $key => $value) {
       $message = str_replace('{{'.$key.'}}', $value, $message);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
<body>
{!!$message!!}
</body>
</html>
