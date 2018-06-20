<?php

for ($i=0; $i<10; $i++) {
  echo $i.PHP_EOL;
  go(function() {
    $http = new \Swoole\Coroutine\Http\Client('www.yahoo.co.jp', 443);
    $ret = $http->get('/');
  });
}

/*
1回目
0
1
2
3
4
5
6
7
8
9

real	0m0.413s
user	0m0.020s
sys	0m0.010s

2回目:
0
1
2
3
4
5
6
7
8
9

real	0m0.242s
user	0m0.020s
sys	0m0.010s

3回目
0
1
2
3
4
5
6
7
8
9

real	0m0.226s
user	0m0.000s
sys	0m0.030s
*/
