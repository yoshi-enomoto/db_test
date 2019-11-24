<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlyController extends Controller
{
    public function __invoke()
    {
     return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:30pt; text-align:right; color:#eee;
  margin:-15px 0px 0px 0px; }
</style>
</head>
<body>
  <h1>Single Action</h1>
  <p>これは、シングルアクションコントローラのアクションです。</p>
</body>
</html>
EOF;
    }

    // routeでgetに対応するアクションをコントローラーのみで書いた場合、シングルアクションとなり、『__invoke()』アクションが有効となる。
    public function index()
    {
     return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:30pt; text-align:right; color:#eee;
  margin:-15px 0px 0px 0px; }
</style>
</head>
<body>
  <h1>表示されないはず</h1>
  <p>__invokeによって、シングルアクションコントローラになっている為、『__invoke()』以外のアクションは出てこない</p>
</body>
</html>
EOF;
    }
}
