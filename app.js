const searchInput = document.querySelector(".form-control");
var searchList = document.createElement("ul");
searchList.className="list-group";
document.querySelector("main").insertBefore(searchList,document.querySelector("main").firstChild);
const searchResults = document.querySelector(".list-group");
searchInput.addEventListener("keyup", search);
function add(obj){
    const li = document.createElement('li');
    li.className = "list-group-item";
    searchResults.style.position="absolute";
    searchResults.style.zIndex = "1";
    searchResults.style.width="92.5%";
    const link = document.createElement('a');
    link.innerHTML = `Name : ${obj.field} <br> Type : ${obj.type} <br>Website : <a href="${obj.website}">Go there </a> <br>`;
    li.appendChild(link);
    searchResults.appendChild(li);    
}
function search(e) {
    searchResults.innerHTML = "";
    const searchValue = e.target.value.toLowerCase();
    if(searchValue !== ""){
        data.forEach(function(item){
            if(item.field.toLowerCase().indexOf(searchValue)!== -1){
                add(item);                       
            }
        })
    }
    e.preventDefault();
}
