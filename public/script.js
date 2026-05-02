function showSection(id) {
    const sections = document.querySelectorAll('.content');

    sections.forEach(sec => {
        sec.style.display = "none";
    });

    const target = document.getElementById(id);
    if (target) {
        target.style.display = "block";
    }
}

document.getElementById("logo").addEventListener("click", function () {
    
    
    document.getElementById("home").style.display = "Welcome to student Managment";

    
    document.getElementById("navButtons").style.display = "block";
});


function showSection(sectionId) {

    let sections = document.querySelectorAll(".content");

    sections.forEach(sec => {
        sec.style.display = "none";
    });

    document.getElementById(sectionId).style.display = "block";
}
