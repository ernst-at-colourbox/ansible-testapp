Host:
<?php 
echo gethostname();
//phpinfo();
?>
<br>
Ansible was last executed by:
<?php
echo getenv("ansibleExecuter");
?>
