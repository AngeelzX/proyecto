
const email = document.getElementById("editemail");
const pass = document.getElementById("editpass");
const btnL = document.getElementById("btn");



btnL.addEventListener("click", function(e) {
    console.log(email.value) 

    cloudDB.collection("users").add({
      first: "Ada",
      last: "Lovelace",
      born: 1815
  })
  .then((docRef) => {
    console.log("Document written with ID: ", docRef.id);
})
.catch((error) => {
    console.error("Error adding document: ", error);
});
    
    
});








  
