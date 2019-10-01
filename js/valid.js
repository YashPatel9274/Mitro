function loginadmin(obj)
{
    if(obj.adminid.value=="")
    {
        alert("PLEASE enter id");
        obj.adminid.focus();
        return false;
    }
	var i=obj.adminid.value;
    if(i.length!=12)
    {
        alert("PLEASE length=12");
        obj.adminid.focus();
        return false;
    }
    if(obj.adminpsswrd.value=="")
    {
        alert("PLEASE enter password");
        obj.adminpsswrd.focus();
        return false;
    }
    var p=obj.adminpsswrd.value;
    if((p.length<=5)||(p.length>=21))
    {
        alert("PLEASE length(6-20)");
        obj.adminpsswrd.focus();
        return false;
    }
    else 
	{

		return true;
	}

}
function validadmin(obj)
{
   if(obj.adminid.value=="")
    {
        alert("PLEASE enter id");
        obj.adminid.focus();
        return false;
    }
	var i=obj.adminid.value;
    if(i.length!=12)
    {
        alert("PLEASE length=12");
        obj.adminid.focus();
        return false;
    }
    if(obj.adminname.value=="")
    {
        alert("PLEASE enter name");
        obj.adminname.focus();
        return false;
    }
	var n=obj.adminname.value;
    if(n.length>=21)
    {
        alert("PLEASE lenght<20");
        obj.adminname.focus();
        return false;
    }
    if(obj.adminaddr.value=="")
    {
        alert("PLEASE enter address");
        obj.adminaddr.focus();
        return false;
    }
    var a=obj.adminaddr.value;
    if(a.length>=51)
    {
        alert("PLEASE length<50");
        obj.adminaddr.focus();
        return false;
    }
    if(obj.adminmob.value=="")
    {
        alert("PLEASE enter mobile");
        obj.adminmob.focus();
        return false;
    }
    var m=obj.adminmob.value;
    if(m.length!=10)
    {
        alert("PLEASE length=10");
        obj.adminmob.focus();
        return false;
    }
    if(obj.adminmail.value=="")
    {
        alert("PLEASE enter mail");
        obj.adminmail.focus();
        return false;
    }
    var ml=obj.adminmail.value;
    if((ml.length<=9)||(ml.length>=31))
    {
        alert("PLEASE length(9-30)");
        obj.adminmail.focus();
        return false;
    }
    if(obj.adminpsswrd.value=="")
    {
        alert("PLEASE enter password");
        obj.adminpsswrd.focus();
        return false;
    }
    var p=obj.adminpsswrd.value;
    if((p.length<=5)||(p.length>=21))
    {
        alert("PLEASE length(6-20)");
        obj.adminpsswrd.focus();
        return false;
    }
    else 
	{

		return true;
	}
	var emailAddressEntered = obj.adminmail.value;
	if ((emailAddressEntered.indexOf('@') < 1) || (emailAddressEntered.lastIndexOf('.') < (emailAddressEntered.indexOf('@') + 2)) || (emailAddressEntered.indexOf('\'') > -1) || (emailAddressEntered.indexOf('"') > -1) ) 
	{
		var msg;
		msg = "enter the valid email address..!"
		alert(msg);
		obj.adminmail.focus();
		return false;
	}
}
function validcust(obj)
{
    if(obj.custid.value=="")
    {
        alert("PLEASE enter id");
        obj.custid.focus();
        return false;
    }
	var i=obj.custid.value;
    if(i.length!=12)
    {
        alert("PLEASE length=12");
        obj.custid.focus();
        return false;
    }
	if(obj.custname.value=="")
    {
        alert("PLEASE enter name");
        obj.custname.focus();
        return false;
    }
	var n=obj.custname.value;
    if(n.length>=21)
    {
        alert("PLEASE length<20");
        obj.custname.focus();
        return false;
    }
	if(obj.custaddr.value=="")
    {
        alert("PLEASE enter address");
        obj.custaddr.focus();
        return false;
    }
	var a=obj.custaddr.value;
    if(a.length>=51)
    {
        alert("PLEASE length<50");
        obj.custaddr.focus();
        return false;
    }
	if(obj.custmob.value=="")
    {
        alert("PLEASE enter mobile");
        obj.custmob.focus();
        return false;
    }
	var m=obj.custmob.value;
    if(m.length!=10)
    {
        alert("PLEASE length=10");
        obj.custmob.focus();
        return false;
    }
	if(obj.custmail.value=="")
    {
        alert("PLEASE enter mail");
        obj.custmail.focus();
        return false;
    }
	var ml=obj.custmail.value;
        if((ml.length<=9)||(ml.length>=31))
    {
        alert("PLEASE length(10-30)");
        obj.custmail.focus();
        return false;
    }
	var emailAddressEntered = obj.custmail.value;
	if ((emailAddressEntered.indexOf('@') < 1) || (emailAddressEntered.lastIndexOf('.') < (emailAddressEntered.indexOf('@') + 2)) || (emailAddressEntered.indexOf('\'') > -1) || (emailAddressEntered.indexOf('"') > -1) ) 
	{
		var msg;
		msg = "enter the valid email address..!"
		alert(msg);
		obj.custmail.focus();
		return false;
	}
    else 
	{

		return true;
	}
}


function validbus(obj)
{
	if(obj.driverid.value=="")
    {
        alert("PLEASE enter id");
        obj.driverid.focus();
        return false;
    }
	var i=obj.driverid.value;
    if(i.length!=12)
    {
        alert("PLEASE length=12");
        obj.driverid.focus();
        return false;
    }
	if(obj.drivername.value=="")
    {
        alert("PLEASE enter name");
        obj.drivername.focus();
        return false;
    }
	var n=obj.drivername.value;
    if(n.length>=21)
    {
        alert("PLEASE length<20");
        obj.drivername.focus();
        return false;
    }
	if(obj.drivermob.value=="")
    {
        alert("PLEASE enter mobile");
        obj.drivermob.focus();
        return false;
    }
	var m=obj.drivermob.value;
    if(m.length!=10)
    {
        alert("PLEASE length=10");
        obj.drivermob.focus();
        return false;
    }
	if(obj.drivermail.value=="")
    {
        alert("PLEASE enter mail");
        obj.drivermail.focus();
        return false;
    }
	var ml=obj.drivermail.value;
    if((ml.length<=9)||(ml.length>=31))
    {
        alert("PLEASE length(10-30)");
        obj.drivermail.focus();
        return false;
    }
	var emailAddressEntered = obj.drivermail.value;
	if ((emailAddressEntered.indexOf('@') < 1) || (emailAddressEntered.lastIndexOf('.') < (emailAddressEntered.indexOf('@') + 2)) || (emailAddressEntered.indexOf('\'') > -1) || (emailAddressEntered.indexOf('"') > -1) ) 
	{
		var msg;
		msg = "enter the valid email address..!"
		alert(msg);
		obj.drivermail.focus();
		return false;
	}
	if(obj.driversalary.value=="")
    {
        alert("PLEASE enter salary");
        obj.driversalary.focus();
        return false;
    }
    if((obj.driversalary.value<=4999)||(obj.driversalary.value>=20001))
    {
        alert("PLEASE set salary(5000-20000)");
        obj.driversalary.focus();
        return false;
    }
    if(obj.busid.value=="")
    {
        alert("PLEASE enter id");
        obj.busid.focus();
        return false;
    }
	var i=obj.busid.value;
    if((i.length!=10))
    {
        alert("PLEASE length=10");
        obj.busid.focus();
        return false;
    }
	if(obj.busfrom.value=="")
    {
        alert("PLEASE enter start from");
        obj.busfrom.focus();
        return false;
    }
	var f=obj.busfrom.value;
    if(f.length>=15)
    {
        alert("PLEASE length<15");
        obj.busfrom.focus();
        return false;
    }
	if(obj.busto.value=="")
    {
        alert("PLEASE enter end stop");
        obj.busto.focus();
        return false;
    }
	var t=obj.busto.value;
    if(t.length>=15)
    {
        alert("PLEASE length<15");
        obj.busto.focus();
        return false;
    }
	if(obj.timestart.value=="")
    {
        alert("PLEASE enter time");
        obj.timestart.focus();
        return false;
    }
	if(obj.bustype[0].checked==false && obj.bustype[1].checked==false && obj.bustype[2].checked==false && obj.bustype[3].checked==false)
    {
        alert("PLEASE enter type");
        obj.bustype[0].focus();
        return false;
    }
	if(obj.priceprst.value=="")
    {
        alert("PLEASE enter price per seat");
        obj.priceprst.focus();
        return false;
    }
    if((obj.priceprst.value<=299)||(obj.priceprst.value>=2001))
    {
        alert("PLEASE length(300-2000)");
        obj.priceprst.focus();
        return false;
    }
    else 
	{

		return true;
	}
}
function validroute(obj)
{
	if(obj.busfrom.value==0)
    {
        alert("PLEASE enter START RUN");
        obj.busfrom.focus();
        return false;
    }
	if(obj.busto.value==0)
    {
        alert("PLEASE enter end stop");
        obj.busto.focus();
        return false;
    }
	if(obj.date.value=="")
    {
        alert("PLEASE enter Date");
        obj.date.focus();
        return false;
    }

	if(obj.selbus.value==0)
    {
        alert("PLEASE Select Bus");
        obj.selbus.focus();
        return false;
    }
	if(obj.seats.value=="")
    {
        alert("PLEASE Select Seats");
        obj.seats.focus();
        return false;
    }		
	else
	{
		return true;
	}
}
function limitchar(e)
{
	var key,keychar;
	if(window.event)
		key=window.event.keyCode;
	else if(e)
		key=e.which;
	else
		return true;
		keychar=String.fromCharCode(key);
		keychar=keychar.toLowerCase();
		goods=goods.toLowerCase();
		if(goods.indexOf(keychar)!=-1)
		{
			goods="0123456789.";
			return true;
		}
		if(key==null || key==0 || key==8 || key==9 || key==13 || key==27)
		{
			goods="0123456789.";
			return true;
		}
		return false;
 }