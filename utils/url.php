<?php
function urlIs(string $value) : bool
{ 
    return $_SERVER['REQUEST_URI'] === $value;
}
