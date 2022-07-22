var inpone = document.getElementById("inp1");
var inptwo = document.getElementById("inp2");
var form = document.getElementById("form")[0];
var valdation = 0;


function validate(event){
    event.preventDefault();

    if(inpone.value==''){
        inpone.nextElementSibling.innerHTML = "This fieled required"
        inpone.nextElementSibling.style.color = "red"
        validation ++;
    }

    else{
        inpone.nextElementSibling.innerHTML ="well"
        inpone.nextElementSibling.style.color="green"
        inpone.style.borderColor="green"
    }
}