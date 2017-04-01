<!DOCTYPE html>
<html>
  <body>
    
    <?php
       $is_tor_client = False;
       $client_ip=$_SERVER['REMOTE_ADDR'];
       echo 'Clients IP address: ' . $client_ip . '<br>';
       
       $myfile = fopen('ip_addresses', 'r') or die('Unable to open file!');
       while(!feof($myfile)) {
       $tor_ip = fgets($myfile);
       $tor_ip = trim($tor_ip);
       if ($client_ip == $tor_ip)
         $is_tor_client = True;
       }
       fclose($myfile);
       
       if ($is_tor_client){
         echo 'You are on the Tor network';
       }
       else {
         header('Location: index.html');
       }
       ?>
    
  </body>
</html>
