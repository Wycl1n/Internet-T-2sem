function finishedTask() {
    let project = document.getElementById("project").value;
    let date = document.getElementById("date").value;
    let project_date = project + " " + date; 
    //alert(project_date);
    let result = localStorage.getItem(project_date);
    document.getElementById('res').innerHTML = result;
}

 function countProjects() {
    let manager = document.getElementById("managerProject").value;
    let managerCount = manager + "Count";
    //alert(managerCount)
    let result = localStorage.getItem(managerCount);
    document.getElementById('res').innerHTML = result;
}
function workers(){
    let manager = document.getElementById("managerWorkers").value;
    let managerWorkers = manager + " Workers";
    let result = localStorage.getItem(managerWorkers);  
    document.getElementById('res').innerHTML = result;
}
function clearLocalStorage(){
    localStorage.clear();
} 