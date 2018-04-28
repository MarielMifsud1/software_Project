function wedding()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("wed").value;
    
    if(value1 == value2)
    {
           window.location.assign("./gallery.html");
    }
}