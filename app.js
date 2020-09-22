// -------------post job section radio----------------------
// function payment()
// {
//     var pays=document.getElementById("fixed");
//     pays.innerText=document.write(" <input  type=radio>Under $250 <br>"+ "<input  type=radio>$250 to $500 <br>"+"<input type=radio>$500 to $1000 <br>"+"<input type=radio>$1000 to $5000 <br>")

// }

//<!-- Enter your skills skill -->
var skills=document.getElementById("skills")
var listSkills=document.getElementById("listSkills")
function mySkill(){
    // create li element
    var li=document.createElement("li") 
    var liText=document.createTextNode(skills.value)
    li.appendChild(liText)
    //create delete button 
    var delSkills=document.createElement("button")
    var delText=document.createTextNode("delete")
    delSkills.setAttribute("onclick","deleteSkill(this)")
    delSkills.appendChild(delText)
    
    li.appendChild(delSkills)
    listSkills.appendChild(li)
    skills.value=""
}
function deleteSkill(e){
 e.parentNode.remove()
}

// //

// function myprof(){
//     var mselect=document.createElement("select");
//     var tselect=document.createvalueNode("Ayesha");
//     mselect.appendChild(tselect);
//     var asdf=document.getElementById("asdf")
//     asdf.appendChild(mselect)
// }
//-----------------create h2
// var service_desc=document.getElementById("service-desc")
// function myservices(){
//     var h2=document.createElement("h2")
//     var h2Text=document.createTextNode("Service Description")
//     h2.appendChild(h2Text)
//     var textarea=document.createElement("textarea")
//     var textareaText=document.createTextNode("Briefly Describe Your Gig")
//     textarea.appendChild(textareaText)
//     var button=document.createElement("button")
//     var btnText=document.createTextNode("Button")
//     button.appendChild(btnText)
    
//     service_desc.appendChild(h2)
//     service_desc.appendChild(textarea)
//     service_desc.appendChild(button)

// }

// Briefly Describe Your Gig