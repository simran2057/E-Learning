<?php
  // Accept a user ID and returns true if user is admin and false if otherwise
  function isAdmin($user_id) {
    global $conn;
    $sql = "SELECT * FROM users WHERE id=? AND role_id IS NOT NULL LIMIT 1";
    $user = getSingleRecord($sql, 'i', [$user_id]); // get single user from database
    if (!empty($user)) {
      return true;
    } else {
      return false;
    }
  }
  function loginById($user_id) {
    global $conn;
    $sql = "SELECT u.id, u.role_id, u.username, r.name as role FROM users u LEFT JOIN roles r ON u.role_id=r.id WHERE u.id=? LIMIT 1";
    $user = getSingleRecord($sql, 'i', [$user_id]);

    if (!empty($user)) {
      // put logged in user into session array
      $_SESSION['user'] = $user;
      $_SESSION['success_msg'] = "You are now logged in";
      // if user is admin, redirect to dashboard, otherwise to homepage
      if (isAdmin($user_id)) {
        $permissionsSql = "SELECT p.name as permission_name FROM permissions as p
                            JOIN permission_role as pr ON p.id=pr.permission_id
                            WHERE pr.role_id=?";
        $userPermissions = getMultipleRecords($permissionsSql, "i", [$user['role_id']]);
        $_SESSION['userPermissions'] = $userPermissions;
        header('location:  ../../dashboard.php');
      } else {
        header('location: ../../index.php');
      }
      exit(0);
    }
  }

// Accept a user object, validates user and return an array with the error messages
  function validateUser($user, $ignoreFields) {
  		global $conn;
      $errors = [];

      // required validation
  	  foreach ($user as $key => $value) {
        if (in_array($key, $ignoreFields)) {
          continue;
        }
  			if (empty($user[$key])) {
  				$errors[$key] = "This field is required";
  			}
  	  }
  		return $errors;
  }
