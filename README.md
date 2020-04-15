# php-vld


## Try

```sh
git clone https://github.com/gustavonovaes/php-vld.git
cd php-vld
./php-vld concatenation_vs_interpolation.php
```

#### Function "interpolation" opcodes 
```
function name:  interpolation
number of ops:  9
compiled vars:  !0 = $foo, !1 = $bar
line     #* E I O op                           fetch          ext  return  operands
-------------------------------------------------------------------------------------
   3     0  E >   RECV_INIT                                        !0      'foo'
         1        RECV_INIT                                        !1      'bar'
   5     2        ROPE_INIT                                     5  ~3      'Foo%3A+'
         3        ROPE_ADD                                      1  ~3      ~3, !0
         4        ROPE_ADD                                      2  ~3      ~3, '+Bar%3A+'
         5        ROPE_ADD                                      3  ~3      ~3, !1
         6        ROPE_END                                      4  ~2      ~3, '%0A'
         7        ECHO                                                     ~2
   6     8      > RETURN                                                   null
```

#### Function "concatenation" opcodes
```
function name:  concatenation
number of ops:  8
compiled vars:  !0 = $foo, !1 = $bar
line     #* E I O op                           fetch          ext  return  operands
-------------------------------------------------------------------------------------
   8     0  E >   RECV_INIT                                        !0      'foo'
         1        RECV_INIT                                        !1      'bar'
  10     2        CONCAT                                           ~2      'Foo%3A+', !0
         3        CONCAT                                           ~3      ~2, '+Bar%3A+'
         4        CONCAT                                           ~4      ~3, !1
         5        CONCAT                                           ~5      ~4, '%0A'
         6        ECHO                                                     ~5
  11     7      > RETURN                                                   null
```