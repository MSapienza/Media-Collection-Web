function viewMedia(collectionType)
{
     //this function takes in the user's selection
     //then, creates XMLHTTP variables to send to PHP file
     //the PHP file runs a dynamic query based on user input
     //then, the results are returned to this.responseText
     
     var xhttp;
     
     if (collectionType == "") 
     {
          document.getElementById("returnCollection").innerHTML = "";
          return;
     }
     xhttp = new XMLHttpRequest();

     xhttp.onreadystatechange = function() 
     {
          if (this.readyState == 4 && this.status == 200)
          {
               document.getElementById("returnCollection").innerHTML = this.responseText;
          }
     };

     xhttp.open("GET", "viewData.php?q="+collectionType, true);
     xhttp.send();
}

function addMedia()
{
    
}