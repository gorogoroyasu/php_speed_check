<?php

for($i=0; $i<10; $i++) {
  echo $i.PHP_EOL;
  file_get_contents('https://yahoo.co.jp');
}

/*
1回目:
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

real	0m1.942s
user	0m0.070s
sys	0m0.040s

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

real	0m1.815s
user	0m0.100s
sys	0m0.010s

3回目:
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

real	0m1.940s
user	0m0.070s
sys	0m0.040s
*/

/*
参考記録: https://yahoo.co.jp

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

real	0m3.437s
user	0m0.200s
sys	0m0.000s


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

real	0m3.122s
user	0m0.150s
sys	0m0.060s

3回目:
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

real	0m3.093s
user	0m0.180s
sys	0m0.020s
*/
