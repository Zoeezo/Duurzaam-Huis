const url = '../../get/userdata.php';

function getData() {
    let request = new XMLHttpRequest();

    request.onreadystatechange = () => {
        if(request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
            
            //let responseJSON = JSON.parse(request.responseText);
            //handleResponse(responseJSON);
        }
    }

    request.open('GET', url, true);
    request.send();
}

function handleResponse(responseJSON) {
    console.log(responseJSON)
}

function addData() {

}

getData();