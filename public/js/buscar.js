function searchUser() {
    var input = document.getElementById("SearchUser");
    var filter = input.value.toLowerCase();
    var nodes = document.getElementsByClassName('targetUser');
    for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
            nodes[i].style.display = "";
        }else{
            nodes[i].style.display = "none";
        }
    }
}

function searchUserBan() {
    var input = document.getElementById("SearchUserBan");
    var filter = input.value.toLowerCase();
    var nodes = document.getElementsByClassName('targetUserBan');
    for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
            nodes[i].style.display = "";
        }else{
            nodes[i].style.display = "none";
        }
    }
}


