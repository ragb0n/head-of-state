function countdown(time){
    var count=time;
    var counter=setInterval(timer, 1000);
  
    function timer()
    {
      count=count-1;
      if (count <= 0)
      {
        clearInterval(counter);
        window.location.reload();
      }

      var hours = Math.floor(count / 3600);
      var minutes = Math.floor((count / 60) % 60);
      var seconds = count % 60;

    document.getElementById("timer").innerHTML= hours + ":" + minutes + ":" + seconds; // watch for spelling
    }
  }