<!doctype html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/styles.css" />
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script>
<<<<<<< HEAD:header.php
                function validate_form(){
                    var frm = document.forms["wine_form"];
                    var valid = true;
  
                    console.log(frm.elements);
                    if(frm.elements["max_price"].value !="" && frm.elements["min_price"].value && frm.elements["max_price"].value < frm.elements["min_price"]){
                        alert("Please enter a maximum price greater than the minimum price");
                        valid = false;
                    }
                    
                    if(frm.elements["year_max"].value < frm.elements["year_min"].value){
                        alert("Please enter a maximum year greater than the minimum year");
                        valid=false;
                    }
                    
                    
                    return valid;
                    
                }
                
                
                
=======
>>>>>>> f99bb5666cb79fdb87b3f44d12f3137756066918:header.php
                function findme(){
                    navigator.geolocation.getCurrentPosition(doit,broken,{enableHighAccuracy:true});

                }
                
                function broken(){
                    
                }
                
                function doit(position){
                    var map_div = document.getElementById("maps");
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;
                    var LatLng = new google.maps.LatLng(lat,lng);
                    
                    console.log(LatLng);
                    
                    var map_options = {
                        center:LatLng,
                        zoom:18,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
   
                    };
                    
                    var map = new google.maps.Map(map_div,map_options);
                    
                    var marker_options = {
                        
                        position:LatLng,
                        map:map,
                        title:'RMIT'
                        
                    };
                    
                    
                    var marker = new google.maps.Marker(marker_options);
                }
                
                
            </script>
        
    </head>
    
    <body>
        
        <div class="container-all">
            <div class="header-container">
                <div class="header-inner">
                 
                    <div class="header-left">
                        <a href="index.php" style="text-decoration: none;color: #666;">The Winestore</a>
                    </div>
                    
                    <div class="header-right">
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
         
            
        
        
        
   
    

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
