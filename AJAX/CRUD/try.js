console.log("hello World! ");

let fatchBtn = document.getElementById('fatchBtn');
fatchBtn.addEventListener('click', buttonClickHandler);

function buttonClickHandler() {

    console.log("You have clicked the fatchBtn");
    // Instantiate on xhr object
    const xhr = new XMLHttpRequest();


    //Open the object
    xhr.open('GET', 'pradeep.txt', true);
    // xhr.open('GET', 'https://dummyjson.com/post', true);

    //What to do on progress (optional)
    xhr.onprogress = function () {
        console.log("On progress");
    }


    // What to do when response is ready
    xhr.onload = function () {
        if (this.status === 200) {
            console.log(this.responseText);
        }
        else {
            console.log("Some error occured");
        }
    }
    // send the request
    xhr.send();
}

let popBtn = document.getElementById('popBtn');

popBtn.addEventListener('click', popHandler);

function popHandler(){

}