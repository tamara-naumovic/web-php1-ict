// nav ispis f-ja
function printNavigation(data){
    let html = '';
    for(let linkElement of data){
        html += `<li class="stavka"><a class="link" href="${linkElement.href}">${linkElement.textLink}</a></li>`;
    }
    $("#nav").html(html);
}


$.ajax({
    url:"obradameni.php",
    type:"post",
    success:function(data) {
        console.log("odgovor sa servera");
        console.log(data); 
        printNavigation(JSON.parse(data));       
        
        
     }
    
})