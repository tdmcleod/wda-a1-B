<?php

<<<<<<< HEAD:utilities.php
function connect() {

    $connection = mysql_connect('yallara.cs.rmit.edu.au:59443', 'td_mcleod', 'blowfish1') or die("Could not connect");
    return $connection;
}

function get_regions() {
    $conn = connect();

    mysql_select_db('winestore',$conn);
    $sql = "SELECT * FROM region";
    $res = mysql_query($sql,$conn);
    while($row = mysql_fetch_array($res)) {
        echo "<option value='";
        if ($row['region_name'] == 'All') {
            echo '';
        } else {
            echo $row['region_name'];
        }

        echo "'>" . $row['region_name'] . "</option>";
    }

    mysql_close($conn);
}

function get_variety() {
    $conn = connect();

    mysql_select_db('winestore',$conn);
    $sql = "SELECT * FROM grape_variety";
    $res = mysql_query($sql,$conn);
    while($row = mysql_fetch_array($res)) {
        echo "<option value='" . $row['variety'] . "'>" . $row['variety'] . "</option>";
    }
    
    mysql_close($conn);
}

function get_years() {

    $conn = connect();

    
    mysql_select_db('winestore',$conn);
    $sql = "SELECT MAX(year) as max_yr FROM wine";
    $res=mysql_query($sql,$conn);  
    $val = mysql_fetch_array($res);


    $max = $val['max_yr'];

    $sql = "SELECT MIN(year) as min_yr FROM wine";
    $res=mysql_query($sql,$conn);  
    $val = mysql_fetch_array($res);
    $min=$val['min_yr'];

    for ($i = $min; $i <= $max; $i++) {

        echo "<option value\"$i\" >$i</option>";
    }
    mysql_close($conn);
}

=======

function connect(){
    
    $pdo = new PDO("mysql:host=yallara.cs.rmit.edu.au;dbname=winestore;port=59443", "td_mcleod", "blowfish1") or die("Could not connect");
    return $pdo;
}



function get_regions(){
    $conn = connect();
    
    $sql = "SELECT * FROM region";
    
    foreach($conn->query($sql) as $row){
        echo "<option value='";
        if($row['region_name']=='All'){
            echo '';
        }
        else{
          echo $row['region_name']; 
        }
        
        echo "'>".$row['region_name']."</option>";
    }
    
    
}

function get_variety(){
    $conn = connect();
    
    $sql = "SELECT * FROM grape_variety";
    foreach ($conn->query($sql) as $row){
       echo "<option value='".$row['variety'] ."'>".$row['variety']."</option>"; 
    }
    
}

function get_years(){
    
    $conn = connect();
    
    $sql = "SELECT MAX(year) FROM wine";
    $val= $conn->query($sql)->fetch();
    
    
    $max = $val[0];
    
    $sql = "SELECT MIN(year) FROM wine";
    $val = $conn->query($sql)->fetch();
    
    $min = $val[0];
    
    for($i=$min;$i<=$max;$i++){
        
        echo "<option value\"$i\" >$i</option>";
         
    }
    
}


>>>>>>> f99bb5666cb79fdb87b3f44d12f3137756066918:utilities.php
?>
