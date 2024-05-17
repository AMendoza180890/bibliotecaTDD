<?php
function myException($exception) {
    echo "<b>Exception:</b> ", $exception->getMessage();
}

throw new Exception("Una excepcion no fue capturada!");

set_exception_handler("myException");
?>