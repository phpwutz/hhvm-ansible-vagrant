<?hh
// find errors logged to /var/log/hhvm/error.log

function f(int $num): int {
  return $num + 3;
}

echo f(123);
