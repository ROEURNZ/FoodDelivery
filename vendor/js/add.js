
let he = document.querySelectorAll(".float-right");


function addTolist(name, price){
    console.log(name, price)
}


let add = document.querySelectorAll(".gold-members");
for (let i = 0; i < he.length; i++) {
    let btn = he[i].children[0];
    btn.addEventListener("click", (event) => {
        let name = event.target.parentElement.parentElement.children[1].children[1].children[0].textContent;
        let price = event.target.parentElement.parentElement.children[1].children[1].children[1].textContent;
        addTolist(name, price);
    })
};
alert("hello");