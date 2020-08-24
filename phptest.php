<!DOCTYPE html>

<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
    
	<link href="./video-js-7.3.0/video-js.css" rel="stylesheet">
	<script src="./video-js-7.3.0/video.min.js"></script>
</head>
<body>
    <h1>MySQL 접속해서 데이터 가져오기</h1>
    <?php 
    //mysql 접속 계정 정보 설정
    $mysql_host = 'db-4ndkp.pub-cdb.ntruss.com';
    $mysql_user = 'bumi';
    $mysql_password = 'qjagml1994!';
    $mysql_db = 'test';
    //connetc 설정(host,user,password)
    $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

    $query = "select * from entries";
    //db 연결
    $result = mysqli_query($conn,$query);
    
   
    echo "MySQL에서 가져온 데이터는 아래와 같습니다.<br/>";
    while($row = mysqli_fetch_array($result)){
        echo "번호: ".$row['name']."/ 이름: ".$row['url']."<br/>";
    }
    ?>



</body>
</html>
