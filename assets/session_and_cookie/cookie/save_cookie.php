<?php

// setcookie("name","Khun Tun");

# sec - 3600 = 1 hour / after 1 hour,time expires. 
// setcookie("name","Khun Tun", time() + 3600);

# save path
setcookie("name","Khun Tun", time() + 3600, "/cookie/");
setcookie("theme","light"); 

# delete cookie

setcookie("name", "", time() -1);


echo "See my cookie data";

# Tips = Cookie  - Save in Web Browser / svae only text
#        Seession - Save in Web Server / save text, array and object