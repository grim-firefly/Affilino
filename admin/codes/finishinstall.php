<?php

$dirname = "../install";
array_map('unlink', glob("$dirname/*.*"));
header("location:../")
?>