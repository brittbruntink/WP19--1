function title1() {
    document.title = 'Webprogramming (LIX019P05) - Index'; // New title for index.html
}

function title2() {
    document.title = 'Webprogramming (LIX019P05) - Second'; // New title for second.html
}

document.getElementsByClassName("nav-item")[0].style.color = "red";

function newArticle() {
    var x = document.createElement("ARTICLE"); // new article
    x.setAttribute("id", "myArticle");
    document.body.appendChild(x);

    var heading = document.createElement("H1");
    var txt1 = document.createTextNode("Heading in Article");
    heading.appendChild(txt1);
    document.getElementById("myArticle").appendChild(heading);

    var para = document.createElement("P");
    var txt2 = document.createTextNode("Paragraph in article.");
    para.appendChild(txt2);
    document.getElementById("myArticle").appendChild(para);

}

function linkGoogle() {
    var link = document.getElementById("Google");
    window.open("http://www.google.com/");

}

function arrayObject() {
    var array = {
        week1: "Assignment 1",
        week2: "No Lecture",
        week3: "Assignment 2",
        week4: "-",
        week5: "Assignment 3",
        week6: "-",
        week7: "Guest Lecture"
    };

}

function column() {
    document.getElementById("column").className = "col-md-8";
}

function myFunction() {
    var div = document.createElement("div");
    div.className = "col-md-4";
    div.style.height = "800px";
    div.style.color = "white";
    div.style.backgroundColor = "black";
    div.style.float = "right";
    div.innerHTML = "Sidebar";
    document.getElementById("main").appendChild(div);
}



