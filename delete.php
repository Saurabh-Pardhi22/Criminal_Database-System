<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'links.php'; ?>

    <style>
        *{ margin:0 ; padding :0; box-sizing: border-box;font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;}
        .main-div{
            width: 100%; height:100vh;
            display: flex;
            flex-direction:column;
            justify-content:center;
            align-items: center;
        }
        .center-div{
            width: 90%;
            height : 80vh;
            background : -webkit-linear-gradient(left,#5DADE2,#00c6ff);
            padding: 20px 0 0 0;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,03);
            border-radius:10px;

        }
        h1{
            font-size: 18px;
            color: #000;
            text-align: center;
            margin-top: -20px;
            margin-bottom:20px;
        }
        table{
            border-collapse:collapse;
            background-color: #fff;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,03);
            border-radius: 10px;
            margin:auto;


        }
        th,td{
            border:1px solid #f2f2f2;
            padding: 8px 30px;
            text-align:center;
            color:grey;
        }
        th{
            text-transform: uppercase;
            font-weight:500;

        }
        td{
            font-size:13px; }

        .email-style{
            font-size: 14px;
            color: grey;
            display: inline-block;
            background: #f2f2f2;
            -webkit-border-radius:2px;
            -moz-border-radius:2px;
            border-radius: 2px;
            line-height:30px;
            padding: 0 14px;
        }
        .post-class{
            text-transform: uppercase;
        }
        .fa-edit{ color: #63c76a;}
        .fa-trash{ color: #ff0000;}
        a{
            text-decoration:none;
            display: flex;
            justify-content: center;
        }
        *{
		margin:0px;
		padding:0px;
		box-sizing: border-box;
	}
	body{
		font-family: sans-serif;
		padding-top: 150px;
		background: lightblue;
        background-image: url('istockphoto-1194077069-612x612.jpg');
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            margin-top: 40px;
	}
	.main{
		margin: auto;
		width: 50%;
	}
	.main input,button{
		width:75%;
		border:2px solid white;
		border-right:0px;
		font-size: 18px;
		padding:12px;
		background-color: transparent;
		color:black;
	}
	.main input:hover{
		opacity: .8;
	}
	.main button{
		width:25%;
		background-color: green;
		color:blue;
		transition: all 0.3s;
		float: right;
		border-left:0px;
	}
	.main button:hover{
        color:red;
		opacity: .8;
	}  
        
    </style>
   
</head>
<body>
        <div class="main">
        <form action="search1.php" method="post" autocomplete="off" >
		<input type="text" name="get_id" placeholder="Enter the name...">
		<button name="search_by_id" >SEARCH</button>
        </form>
	
	</div>