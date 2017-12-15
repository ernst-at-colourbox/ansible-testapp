<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html, body{
            height: 100%;
        }
        body.machine1{
            background: #11998e;  
            background: -webkit-linear-gradient(to right, #38ef7d, #11998e);  
            background: linear-gradient(to right, #38ef7d, #11998e); 
        }
        body.machine2{
            background: #fc4a1a;  
            background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);
            background: linear-gradient(to right, #f7b733, #fc4a1a);         
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100%;
        }
        div{
            text-align: center;
            font-size: 2rem;
            font-family: monospace;
            color: #FFF;
            text-transform: uppercase;
        }
        tr td{
            text-align: left;
        }
        tr td:first-child {
            text-align: right;
        }
    </style>
</head>
<body class="<?php echo gethostname(); ?>">
    <div>
    <table>
        <tr>
            <td>Host:</td>
            <td><?php echo gethostname();?></td>
        </tr>
        <tr>
            <td>Ansible was last executed by:</td>
            <td><?php echo getenv("ansibleExecuter");?></td>
    </table>
    </div>
</body>
</html>
