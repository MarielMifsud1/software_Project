
function validation2()
{
    
    var text1 = document.getElementById("txtName").value;
    var text2 = document.getElementById("txtSurname").value;
    var text3 = document.getElementById("txtEmail").value;
    var text4 = document.getElementById("options").value;
    var text5 = document.getElementById("date").value;
    var text6 = document.getElementById("time").value;
    var text7 = document.getElementById("address").value;
    
    if(text1 == "" || text2 == "" || text3 == "" || text4 == "..." || text5 == "" || text6 == "" || text7 == "" )
        {
            alert("Some fields where left empty");
        }
    
}