<?php

function readFi() {
    $file = __DIR__ . '/../File/user.txt';
    $jsonData = file_get_contents($file);
    $userData = json_decode($jsonData, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        // Check if there was a JSON decoding error
        return array(); // Return an empty array to avoid errors in the loop.
    }

    return $userData;
}



/*
$userData = readFi();

if (!empty($userData)) {
    // Loop through the array and print user information
    foreach ($userData as $user) {
        echo "Username: " . $user['username'] . "\n";
        echo "Email: " . $user['email'] . "\n";
        echo "Password: " . $user['password'] . "\n";
        echo "Role: " . $user['role'] . "\n";
        echo "\n";
    }
}
*/



//data write finto file
function writeFi($user){
    $filename = __DIR__ . '/../File/user.txt';
  

    // Load existing data from the file if it exists
   
    
    if (file_exists($filename)) {
        $jsonData = file_get_contents($filename);
        $userData = json_decode($jsonData, true);
    } else {
        // If the file doesn't exist, initialize an empty array
        $userData = array();
    }
    

    $userData[] = $user;
    
    // Encode the combined data and write it back to the file
    $jsonData = json_encode($userData, JSON_PRETTY_PRINT);
    
   file_put_contents($filename, $jsonData);
  
    

}


/*
$user=array(

  
    'username'=>"sanny",
    'email'=>"manik@gmail.com",
    'password'=>"123",
    'role'=>"none"
    
    
);
writeFi($user);
*/

function updateRole($username, $newRole) {
    // Read the JSON data from the file and decode it into an array
    $file = __DIR__ . '/../File/user.txt';
    $users = readFi();
    $userFound = false;

    // Iterate through the users to find and update the role
    foreach ($users as $key => $user) {
        if ($user['username'] === $username) {
            $users[$key]['role'] = $newRole;
            $userFound = true;
            break;  // Exit the loop once the user is found and updated
        }
    }

    if ($userFound) {
    
        // Encode the updated data back to JSON
        $updatedData = json_encode($users, JSON_PRETTY_PRINT);
        // Save the updated data back to the file
        file_put_contents($file, $updatedData);
          
    }
    
}

// Usage example: Update the role for a user
//updateRole("sanny", "user");
//

function deleteByUsername($username) {
    $filename =__DIR__ . '/../File/user.txt';

    // Load existing data from the file if it exists
    if (file_exists($filename)) {
        $jsonData = file_get_contents($filename);
        $userData = json_decode($jsonData, true);
    } else {
        // If the file doesn't exist, initialize an empty array
        $userData = array();
    }

    // Find and remove the user with the specified username
    foreach ($userData as $key => $user) {
        if ($user['username'] === $username) {
            unset($userData[$key]);
        }
    }

    // Re-index the array to remove gaps created by unset
    $userData = array_values($userData);

    // Encode the modified data and write it back to the file
    $jsonData = json_encode($userData, JSON_PRETTY_PRINT);
    file_put_contents($filename, $jsonData);
}

// Usage example: delete a user by username
//deleteByUsername("sanny");





   
    

?>