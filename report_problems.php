<?php   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report your problem here</title>
</head>
<body>
    <h2>Report your Problem</h2>
    <form method = "POST" action = "process.php" enctype="multipart/form-data">
    <label for="Problem Category">Choose the category</label>
    <select name="problemcat" id="problemcat">
        <option value = "education">Education</option>
        <option value = "infrastructures">Infrastructures</option>
        <option value = "electricity">Electricity</option>
        <option value = "land use">Land Use</option>
        <option value = "health">Health</option>
        <option value = "water supply">Water Supply</option>
        <option value = "drainage">Drainage</option>  
        <option value = "culture and religion">Culture and Religion</option>
        <option value = "others">Others</option>      

    </select>
    <br><br>


     <textarea id="problem" name="problem" rows="4" cols="50">Explain your problem here</textarea>

     <input type="file" name="imageFile"><br><br>

     How much emergency is your problem?<br>

    <label for="emer">Emergency Status:</label>
        <select name="emer" id="emer">
        <option value="notemer">Not emergency</option> 
            <option value="emergency">High Emergency</option>
                     
        </select><br>

    <br><br>



    Which way you want to provide the address?<br>
    <input type="radio" name="locationOption" id="currentLocationOption" value="currentLocation" >
        <label for="currentLocationOption">Use Current Location</label><br>
        
        <input type="radio" name="locationOption" id="customLocationOption" value="customLocation">
        <label for="customLocationOption">Enter Custom Address:</label> 
        <input type="text" name="address" id="address"><br>



        <input type="" name="latitude" id="latitude">
        <input type="" name="longitude" id="longitude">
<br><br>

        <input type="submit" value="Submit">
</body>
</html>