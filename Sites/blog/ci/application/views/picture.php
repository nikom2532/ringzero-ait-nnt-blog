<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Picture</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter! with MSSQL SERVER</h1>

	<div id="body">
			<div class="row"><a href="welcome">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;float: left;">
			PRD NEWS
		</p></a>
		<a href="rawnews">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			ข่าวดิบ
		</p>
		</a>
		<a href="PublishNews">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			ข่าวเผยแพร่

		</p>
		</a>
		<a href="NewsType">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			หมวดหมู่ข่าวหลักและข่าวย่อย

		</p>
		</a><a href="Otherfile">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			ไฟล์อื่นๆของข่าว
		</p>
		</a>
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			Picture
		</p>
		<a href="video">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			Video
		</p></a>
		<a href="voice">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			Voice
		</p></a>
		<a href="alluser">
		<p style="border-radius: 5px;padding: 5px;background-color:#EDEDED;width: 15%;text-align:center;margin-left: 10px;float: left;border: 1px solid #dcdcdc;">
			User Last 20
		</p></a>
	</div>
	<div class="row">
		
<?php
		//Start to count News's rows
		echo '<br><br><br><br><br><br><h1 style="color:red;">'.$title.'</h1>';
		$ii =1;
		foreach($news as $news_item):
			$old_url = $news_item->url;
			$news_url = str_replace('http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=', 'http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=', $old_url);
			
?>
		<div class="odd">
			
			<p class="col-2" style="width: 80%;float: left; ">
<?php
			
					echo $ii.'). '.$news_item->NT01_NewsID.' ชื่อไฟล์ :'.$news_item->NT11_PicID; 
					echo '<br><img scr="'.$news_url.'" alt="'.$news_item->NT11_PicName.'" style="width:150px;height:150px;" align="left" hspace="10px">'.$news_item->NT11_PicName; 
					echo '<br>'.$news_item->url;
?>					
			</p>
		</div>
		
<?php
		$ii++;
		endforeach;
		//End Count News's Row 
?>

		<p><?php //echo $links; ?></p>
	
</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>