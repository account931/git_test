<?php
$elasticResults = array(
    "results" => array(
	    array('_meta' => array('engine' => 'myEngine') ),
		array('_meta' => array('engine' => 'myEngine2') ),
	)
);

//echo $elasticResults['result'];
//var_dump($elasticResults['results']);
echo $elasticResults['results'][0]['_meta']['engine'];  //'myEngine'
//echo "<p> On Master </p>";
echo "<p> feature/new</p>";

//changes from main branch

//header ("Content-Type: text/html; charset=utf-8");
//echo "<!DOCTYPE html><html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'><!--[if lt IE 9]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]--><style>html{height:100%;font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;font-size:10px;-webkit-tap-highlight-color:transparent}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body{height:100%;margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,h3,input{font-family:inherit}h3{font-weight:500;line-height:1.1;color:inherit;margin-top:0;margin-bottom:20px;font-size:24px}.authform{width:300px;background-color:#e1e5ec;padding:25px 27px;margin: 0 auto;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px}</style><title>Добро пожаловать!</title></head><body style='text-align: center'><table style='width:100%;height:100%;border:none'><tbody><tr><td style='padding: 20px'><div class='authform'><h3>Добро пожаловать!</h3><div style='margin-bottom: 18px'>Open Server Panel работает ;-)</div><a href='https://ospanel.io/docs/' id='link' style='color: #4D5662'>Руководство пользователя</a></td></tr></tbody></table></body></html>";


/*
 #Git pull (from Slave remote git) while being on some branch (i.e feature/new) does not pull changes from branch Main (on Master remote git), only changes on feature/new
 # Switch branches switches changes in code 
 */
?>
