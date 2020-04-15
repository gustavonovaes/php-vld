<?php

function interpolation($foo = 'foo', $bar = 'bar')
{
  echo "Foo: ${foo} Bar: ${bar}\n";
}

function concatenation($foo = 'foo', $bar = 'bar')
{
  echo "Foo: " . $foo . " Bar: " . $bar . "\n";
}

interpolation();
concatenation();
