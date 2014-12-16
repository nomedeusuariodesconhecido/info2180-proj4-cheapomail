/*
THE UNIVERSITY OF THE WEST INDIES                 File Name: .../info2180project4-cheapo_mail/login.js
FACULTY OF SCIENCE & TECHNOLOGY                   Created by: 620064203
DEPARTMENT OF COMPUTING                           Created on: 01/12/2014
INFO2180 - Dynamic Web Development I
Project 4 - "Cheapo Mail"
*/


//Change LOGIN button colour when pressed

Event.observe(window, "load", changeButtonFace);


function changeButtonFace()
{
    var button = document.getElementById("submit_button");

    document.eventListener("click", changeButton);
    
    function changeButton()
    {
        button.style.color = "yellow";
    }
    
    
}

