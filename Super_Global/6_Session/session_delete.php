<?php

    session_start();
    session_unset();                // Step 1: Clear session variables
    session_destroy();              // Step 2: Delete the session file

    echo "session is destroy";
    



    // Sudho session_unset(); run korle
            // Temp folder a session file er vitor data/value/variable delete korbe but file still thakbe
            // After running this, you’ll notice the session file (e.g. in C:\xampp\tmp) becomes 0 KB.
            

    // Sudho session_destroy(); run korle
            // Temp folder a session file delete hobe (in C:\xampp\tmp)
            // but session memory te still thakbe checked by -> {{{  echo "<pre>"; print_r($_SESSION);  }}}
    

// After all this session cookie still remains in the browser(client) unless you remove it manually. (it don't carry session value, it carry session ID)

setcookie(session_name(), '', time() - 3600, '/'); // for delete cookie as well (if need in future)

?>