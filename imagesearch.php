
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		
		body {
background: #D9D9D9;
font-family: Georgia, serif;
line-height: 1.2em;
}

#wrap{
	width: 1100px;
	height: auto;
}

#header{
	height:70px;
	width: 100%;
	background-color: #2874f0;
}

#header .logo a img{
	height: 70px;
	width: 120px;
	margin-left: 150px;
	float: left;
}

.search-container{
  width: 490px;
  display: block;
  margin: 0 auto;
}

input#search-bar{
  margin: 0 auto;
width: 100%;
height: 45px;
padding: 0px 20px;
font-size: 1rem;
border: 1px solid #D0CFCE;
outline: none;
position: relative;
top: 10px;
	right: 241px;
   }

.search-icon{
  position: relative;
  width: 75px;
  height: 75px;
  top: -50px;
  right: -215px;
}



.gallery{
	float: left;
padding: 90px;
    
padding-right: 87px;
padding-right: 0px;
left: 222px;
position: relative;
margin-top: 48px
	}

.wrapbox{
	position: relative;
width: 205px;
height: 335px;
background-color: #FFFFFF;
padding: 23px;
}

a {
	text-decoration: none;
	color: #000;
	position: relative;
	margin-top: 10px;
}

h2{
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	margin-left: 30px;
}
	
	</style>
</head>

<body>
	<div id="header">
		<div class="logo">
			<a href="#"><img src="images/flipkart.png"</a>	
	</div>
		
	<form class="search-container" method="post" >
    	<input type="text" id="search-bar" placeholder="What can I help you with today?" name="search">
    		<input type="submit" value="search" name="sub">
  	</form>
		
			
			
	</div>
		<?php
	
	function build_html($imgsrc,$title,$date,$name){
	
	echo '<div class="wrap">
			<div class="gallery">
				<div class="wrapbox"><a href="#"><img align="center"  style="margin-right: 30px" src="'.$imgsrc.'" width="200px" height="300px"></a>
				<a href="#" ><div class="title" align="center">'.$title.'</div></a>
				<a href="#" ><div class="name" align="center">'.$name.'</div></a>
				<div class="desc" align="center" style="color:#000">'.$date.'</div> 
				</div>
			</div>
		</div>';
	}
	
	$gallery=array(array("imgsrc"=>"images/fiction.jpg","title"=>"Loise Enrich","name"=>"future","date"=>"4/2/2010"),
				   array("imgsrc"=>"images/travel.jpg","title"=>"Celeste Brash","date"=>"3/1/2013","name"=>"future2"),
				   array("imgsrc"=>"images/end.jpg","title"=>"Stephen King","date"=>"7/10/2010","name"=>"future3"),
				  );
		if(isset($_POST['search']))
		{
			$found =0;
			foreach($gallery as $item)
				if($item['name']==$_POST['search'])
				{
			$imgsrc=$item['imgsrc'];
			$name=$item['name'];
			$title=$item['title'];
			$date=$item['date'];
			build_html($imgsrc,$name,$title,$date);
			$found=1;
				}
				   
			if(!$found)
			{
				echo "no data";
			}
				   }
				   
	?>		
			
</body>
</html>