function showDateTime() {
    const date = new Date();
    
    // Time
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();
    const timeString = `${hours}:${minutes}:${seconds}`;
  
    // Day and Date
    const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const day = days[date.getDay()];
    const dateString = `${day}, ${date.toDateString()}`;
  
    // Display time, day, and date
    document.getElementById('datetime').innerText = `${dateString} - ${timeString}`;
  }
  
  setInterval(showDateTime, 1000);
  

  