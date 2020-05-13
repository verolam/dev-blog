
// Target elt selector
function $(selector) {
return document.querySelector(selector);
}




//Display date on top-left

let d = new Date();
$("#date").innerHTML = d.toLocaleString(); 


// Target button "btn-quote"
let arrQuote =  [
  {
    author : "Oscar Wilde",
    text: "The only difference between the saint and the sinner is that every saint has a past, and every sinner has a future."
  },
  {
    author : "Oscar Wilde",
    text   : "Woman begins by resisting a man's advances and ends by blocking his retreat."
  },
  {
    author : "Oscar Wilde",
    text: "No man is rich enough to buy back his past."
  },
  {
    author : "Confucius",
    text   : "Life is really simple, but we insist on making it complicated."
  },
  {
    author : "Oscar Wilde",
    text: "The truth is rarely pure and never simple."
  },
  {
    author : "Oscar Wilde",
    text   : "Never love anyone who treats you like you're ordinary."
  },
  {
    author : "Oscar Wilde",
    text   : "When the gods wish to punish us, they answer our prayers."
  },
  {
    author : "Oscar Wilde",
    text   : "Experience is simply the name we give our mistakes."
  }

];

let i = 0;

$("#btn-quote").addEventListener('click', function() {
  
  let length = arrQuote.length;
  if (i == length) {
     i = 0;
  }  

  $("#citation").innerHTML = arrQuote[i].text;
  $("#author").innerHTML = arrQuote[i].author;
  i +=1;
 

}) 

// Target button "subscribe" to get mail

  
$('#button').addEventListener("click", function() {
  
let mail = $('#subscribe').innerHTML ; 
alert('request registered');  
$('#subscribe').innerHTML = "";

}
);

// // Target button "btn-bg" to change background color

// $('#btn-bg').addEventListener("click", function() {

  
// $('#btn-bg').style.backgroundColor = "#ccc";

// }
// );
