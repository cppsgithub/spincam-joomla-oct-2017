<?php
    $curl_handle=curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://spincam3.net/index.php?option=com_akeeba&view=Backup&key=QIxymFaXAX3MJq1JMJgc8lm5nSJRTwxY');
    curl_setopt($curl_handle,CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($curl_handle,CURLOPT_MAXREDIRS, 10000);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER, 1);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    if (empty($buffer))
        echo "Sorry, the backup didn't work.";
    else
        echo $buffer;
?>
  