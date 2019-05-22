<?php

final class usermodel{
    private $_userid=null;
    private $_password=null;
}

public function setuserid($userid){
    $this->_userid=$userid;
    return $this;
}
public function setpassword($password){
    $this->_password=$password;
    return $this;
}
public function getuserid(){
    return $this->_userid;
}
public function getpassword(){
    return $this->_password;
}