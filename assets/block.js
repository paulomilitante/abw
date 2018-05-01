var password = "10062018";


(function promptPass() {

  var psw = prompt("Enter Password:");

  while (psw != password) {
    alert("Incorrect Password");
    return promptPass();
  }

}());


alert('WELCOME');