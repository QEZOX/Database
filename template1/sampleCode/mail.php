<?php
$to = "takalifmadrese@gmail.com";
$subject = "موضوع ایمیل";
$message = "متنی که در ایمیل، نمایش داده خواهد شد";
$from = "name_2@example.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "ایمیل ارسال شد";
?>