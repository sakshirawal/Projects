var numberOfFaces = 5,
    numRounds = 0,
    theLeftSide = document.getElementById("leftSide"),
    theRightSide = document.getElementById("rightSide"),
    theBody = document.getElementsByTagName("body")[0];

function generateFaces() {
  var image, topPos, leftPos, leftSideImages;
  for (var i = 0; i < numberOfFaces; i++) {
    image = document.createElement("img");
    image.src = "https://www.dropbox.com/s/9v2t6j824xsgz44/smile.png?raw=1";
    topPos = Math.floor(Math.random() * 401);
    leftPos = Math.floor(Math.random() * 401);
    image.style.top = topPos + "px";
    image.style.left = leftPos + "px";
    theLeftSide.appendChild(image);
  }


  leftSideImages = theLeftSide.cloneNode(true);
  leftSideImages.removeChild(leftSideImages.lastElementChild);
  theRightSide.appendChild(leftSideImages);

 
  theLeftSide.lastChild.onclick =
    function addImages() {
      event.stopPropagation();
      numRounds += 1;
      numberOfFaces += 5;
    
      while (theLeftSide.firstChild) {
        theLeftSide.removeChild(theLeftSide.firstChild);
      }
      while (theRightSide.firstChild) {
        theRightSide.removeChild(theRightSide.firstChild);
      }
      generateFaces();
    }


  theBody.onclick =
    function gameOver() {
      alert("You didn't find the extra face.  Game over!\nYou found " + numRounds + " extra faces!");
      theBody.onclick = null;
      theLeftSide.lastChild.onclick = null;
    }
}

restart.onclick =
  function newGame(event) {
    event.stopPropagation();
    location.reload(true);
  }

