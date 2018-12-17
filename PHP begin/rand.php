<?php

function randPassword(){
    return substr(md5(time()), 0, 6);
}

echo randPassword();