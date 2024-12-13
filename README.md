# Ostad Module-5 Assignment

## Task : 
1. Create a get route called /my-profile with a required parameter id, which will connect to a controller named ProfileController. This ProfileController should have only one public method called index. The index method will receive the $id as a route parameter. Inside the index method declare two variables called $name and set the value “Donald Trump” and the $age value will be “75”. The values of both variables must be in double quotation. Then make a $data variable to store the $id as well as the declared variables $name and $age as an associative array. The name of the keys will be the same.

2. Make a cookie; name as access_token, value as 123-XYZ, minutes as 1, path as ‘/’, domain as $_SERVER[‘SERVER_NAME’], secure as false and httpOnly as true. Return this data as response with status-code 200 and cookie.
