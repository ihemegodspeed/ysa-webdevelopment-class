   const typed = document.getElementById('typed');
    const phrases = [
      'Bro Egu Jared  ',
      ' Class Instructor '
    ];
    let idx = 0; let c = 0; let forward = true; let current = '';
    function tick(){
      const full = phrases[idx];
      if(forward){ current = full.slice(0, c+1); c++; if(c===full.length){forward=false; setTimeout(tick,1200); return}} else { current = full.slice(0, c-1); c--; if(c===0){forward=true; idx=(idx+1)%phrases.length;}}
      typed.textContent = current;
      setTimeout(tick, forward?80:24);
    }
    setTimeout(tick,500);