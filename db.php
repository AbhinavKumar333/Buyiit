<?php
session_start();
function dbConnect(){
  return new mysqli("localhost","dbpro","Dbms@123","DB_db");
}
function dbDisconnect($conn){
  $conn->close();
}

function executeDB($sql){
  $c = dbConnect();
  $result = $c->query($sql);
  dbDisconnect($c);
  return $result;
}

function initDB(){
  $sql = "Create Table if not exists Items(
           Id int(3) Primary Key Auto_Increment,
           I_type varchar(100) NOT NULL,
           I_name varchar(30) NOT NULL,
           I_desc varchar(300),
           I_price decimal(9,2) NOT NULL,
           Image varchar(100) NOT NULL
           )";
  executeDB($sql);
  $sql = "create table if not exists users(
      id int(2) primary key Auto_Increment,
      name varchar(30) NOT NULL ,
      email varchar(200) NOT NULL ,
      password varchar(200) NOT NULL
      )";
      executeDB($sql);
  $sql = "create table if not exists cart(
    Uid int(5) NOT NULL,
    Pid int(5) NOT NULL,
    count int(10)
    )";
    executeDB($sql);
  $sql = "create table if not exists search(
    id int(3) primary key Auto_Increment,
    keyword varchar(333)
    )";
    executeDB($sql);
}

 ?>
