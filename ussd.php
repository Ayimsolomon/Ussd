<?php
// Start the session
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
// Get the user's input
$userInput = $_POST['text'];

// Initialize the response
$response = "";

// Main USSD menu logic
switch ($userInput) {
    case "1":
        $response = "CON Farmer Menu:\n1. Register New Farmer\n2. Check My ID\n3. Add Crops/Markets\n4. Crops in Stock\n5. Crops Sold\n6. Farmer's Contact";
        break;
    case "1*1":
        // Logic to register a new farmer
        $response = "CON Enter your details to register as a new farmer.";
        break;
    case "1*2":
        // Logic to check farmer's ID
        $response = "CON Your farmer ID is: 123456";
        break;
    case "1*3":
        // Logic to add crops/markets
        $response = "CON Enter crop details:\nCrop Name, Quantity Available, Crop Price per kg";
        break;
        // Add more cases for other farmer options

    case "2":
        $response = "CON Buyer Menu:\n1. Register as Buyer\n2. Buyer ID\n3. Buyers by Location\n4. Available Crops/Markets\n5. Orders\n6. Buyer's Contact";
        break;
    case "2*1":
        // Logic to register as a buyer
        $response = "CON Enter your details to register as a buyer.";
        break;
    case "2*2":
        // Logic to get buyer's ID
        $response = "CON Your buyer ID is: 789012";
        break;
    case "2*3":
        // Logic to find buyers by location
        $response = "CON Enter your location to find buyers nearby.";
        break;
        // Add more cases for other buyer options

    default:
        $response = "CON Invalid input. Please try again.";
}

// Output the response in USSD format
echo $response;
