<html>
    <head>
    <title>註冊會員</title>
    <meta charset="UTF-8">
    <script>
<?php
    if(isset($_POST["acct"])){
        if(strcmp($_POST["pass1"],$_POST["pass2"])){
            printf("alert('密碼不一致');");
        }  else{
            $filename="member.json";
            $newmember=true;
            $member=[];
            if(file_exists($filename)){
            $member=json_decode($all,true);
            foreach($member as $m){
                
            }
                
                
                
                
                /*
                $fp=fopen($filename,"r");
                while(($member=fgetcsv($fp,1000))!==FALSE){
                    if(0==strcmp($member[0],$_POST["acct"])){
                        printf("alert('會員已存在');");
                        $newmember=false;
                        break;
                    }
                }
                fclose($fp);
                */
            }
            if($newmember){
                //$member=json_decode(file_get_content($filename));
                array_push($member,[
                    "id"=>$_POST["acct"],
                    "name"=>$_POST["name"],
                    "pw"=>password_hash($_POST["pass1"],PASSWORD_DEFAULT)]);
                
                    var_dump($member);
                    $json=json_encode($member);
                    var_dump($json);

                file_put_contents($filename,json_encode($member));
                //printf("location.href='login.php';");

            }
        }
    }
?>
</script>
    </head>
    <body>
        <H1>註冊會員</H1>
        <form method="post">
            <p>帳　　號：<input type="text" name="acct" placehlder="登入後的帳號"></p>
            <p>顯示密碼：<input type="text" name="name" placehlder="登入後的帳號"></p>
            <p>密　　碼：<input type="password" name="pass1" placehlder="登入後的帳號"></p>
            <p>確認密碼：<input type="password" name="pass2" placehlder="登入後的帳號"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>