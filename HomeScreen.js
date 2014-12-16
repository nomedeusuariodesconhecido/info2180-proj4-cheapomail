/*
THE UNIVERSITY OF THE WEST INDIES                 File Name: .../info2180project4-cheapo_mail/homeScreen.js
FACULTY OF SCIENCE & TECHNOLOGY                   Created by: 620064203
DEPARTMENT OF COMPUTING                           Created on: 01/12/2014
INFO2180 - Dynamic Web Development I
Project 4 - "Cheapo Mail"
*/

//AJAX to display Username on login on Home Screen

Event.observe(window, "load", displayUserName);


var XMLHttpRequestObject = false;

function displayUserName()
{
    if (window.XMLHttpRequest)
    {
        XMLHttpRequestObject = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
        XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    getData("cheapoMail_login.php", "welcome_name");

}


function getData(dataSource, divID)
{
    if (XMLHttpRequestObject)
    {
        var obj = document.getElementById("divID");
        XMLHttpRequestObject.open("GET", dataSource);
        
        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
            {
                obj.innerHTML = XMLHttpRequestObject.ResponseText;    
            }
        }
    }
    XMLHttpRequestObject.send(null);
}








