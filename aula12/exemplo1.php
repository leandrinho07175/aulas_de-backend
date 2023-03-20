<?php
echo "o valor é " . $_GET['var'] . "<br>";
for ($i=0; $i < 1001; $i++) {
    echo $_GET['var'] * $i . "<br>";
}
