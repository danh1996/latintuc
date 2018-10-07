$('div.alert').delay(3000).slideUp();

function xacnhanxoa(message) {
    if (window.confirm(message)){
        return true;
    }
    else return false;
}