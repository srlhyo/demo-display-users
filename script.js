document.querySelector(".submit_details").addEventListener("click",function () {
    let user_name = document.querySelector(".user_name");
    let user_email = document.querySelector(".user_email");
    UN = user_name.value;
    UE = user_email.value;
    let new_li = document.createElement('li');
    new_li.innerText = UN;
    document.querySelector(".result").appendChild(new_li);
})

// this is js code to add name, email to display user but it is not working properly do you know about it!!