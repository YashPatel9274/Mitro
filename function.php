<?php
function getoptionlist($table,$id,$col,$sel=0)
{
	$sql="select * from $table;";
	$rs=mysql_query($sql) or die(mysql_error());	
	echo"<option value='0'>PLEASE SELECT</option>";
	
	while($data=mysql_fetch_assoc($rs))
	{
		if($data[$col]!=$a)
			echo"<option value='$data[$col]'>$data[$col]</option>";
		$a=$data[$col];
	}

}
function gettooptionlist($table,$id,$col,$sel=0)
{
	$sql="select * from $table;";
	$rs=mysql_query($sql) or die(mysql_error());	
	echo"<option value='0'>PLEASE SELECT</option>";
	
	while($data=mysql_fetch_assoc($rs))
	{
		if($id==$data['busfrom'])
		{
		if($data[$col]!=$a)
			echo"<option value='$data[$col]'>$data[$col]</option>";
		$a=$data[$col];
		}
	}

}

function getbuslist($from,$to,$date)
{$flag=0;
	    $sql="select * from route ;";
	$rs=mysql_query($sql) or die(mysql_error());	
		while($data=mysql_fetch_assoc($rs))
		{
			if($data['busfrom']==$from&&$data['busto']==$to&&$data['date']==$date)
			{
			echo"<option value='".$data['busid'].",".$data['busfrom'].",".$data['busto'].",".$data['timestart'].",".$data['bustype'].",".$data['priceprst'].",".$data['seat'].",".$data['date']."'>FROM PREVIOUS ROUTE:-|BusId:- ".$data['busid']." |BusType:- ".$data['bustype']." |TimeStart:-".$data['timestart']." |PricePerSeat:-".$data['priceprst']."|</option>";
		$flag=1;	}
		}
if($flag==0)
{
	  $sql="select * from bus;";
	  $rs=mysql_query($sql) or die(mysql_error());	
	  while($data=mysql_fetch_assoc($rs))
	  {
		  if($data['busto']==$to&&$data['busfrom']==$from&&$data['date']==0)
		  {
		  echo"<option value='".$data['busid'].",".$data['busfrom'].",".$data['busto'].",".$data['timestart'].",".$data['bustype'].",".$data['priceprst'].",".$data['seat'].",".$data['date']."'>FROM NEW BUS:- |BusId:-".$data['busid']." |BusType:- ".$data['bustype']." |TimeStart:- ".$data['timestart']." |PricePerSeat:- ".$data['priceprst']."|</option>";
		  }
	  }
}}