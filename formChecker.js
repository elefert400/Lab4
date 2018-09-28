function formCheck()
{
    //alert("Entered forCheck")
    console.log("working")
    var getsThru = true;
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var bread = document.getElementById("02");
    var banana = document.getElementById("01");
    var soda = document.getElementById("03");
    var free = document.getElementById("free");
    var express = document.getElementById("express");
    var instant = document.getElementById("instant");
    
    if(username.value.length == 0|| password.value.length == 0 || bread.value < 0 || banana.value < 0 || soda.value < 0 || (document.getElementById("free").checked == false && document.getElementById("express").checked == false && document.getElementById("instant").checked == false))
        {
            console.log("Checked empty fields")
            alert("You need to enter an option for all fields!")
            return false;
        }
    //alert("MAde it out of the if");
    //alert("made it to else");

    if(username.value.search("@") == -1)
        {
            alert("You need to enter a valid email address!");
            return false;;
        }
    return true;

}