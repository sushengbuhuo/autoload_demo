<?php
// GitHub Webhook Secret.
// GitHub��Ŀ Settings/Webhooks �е� Secret
$secret = "token";

// Path to your respostory on your server.
// e.g. "/var/www/respostory"
// ��Ŀ��ַ
$path = "/usr/share/nginx/html/autoload_demo/";

// Headers deliveried from GitHub
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];

if ($signature) {
    $hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
    if (strcmp($signature, $hash) == 0) {
        echo shell_exec("cd {$path} && /usr/bin/git reset --hard origin/master && /usr/bin/git clean -f && /usr/bin/git pull 2>&1");
        exit();
    }
}
//https://laravel-china.org/articles/21832?#reply77056
http_response_code(404);