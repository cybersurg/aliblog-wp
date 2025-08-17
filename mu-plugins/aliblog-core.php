<?php
/**
 * Plugin Name: AliBlog Core
 * Description: Shortcodes & helpers (loads automatically).
 */

add_shortcode('ali_featured_tools', function(){
  ob_start(); ?>
  <div class="grid gap-4">
    <div class="p-4 rounded-xl border">
      <h4 class="font-semibold">Weekly Cybersecurity Poll</h4>
      <p class="text-sm opacity-80">Vote & see results instantly.</p>
      <div id="poll-root"></div>
      <script>
        (function(){
          const root=document.getElementById('poll-root');
          if(!root) return;
          const key='ali_poll_v1';
          const opts=['Phishing','Weak Passwords','Shadow IT','Outdated Software'];
          let votes=JSON.parse(localStorage.getItem(key+'_data')||JSON.stringify(opts.map(()=>0)));
          const voted=localStorage.getItem(key);
          function render(){
            root.innerHTML='';
            if(voted){
              const total=votes.reduce((a,b)=>a+b,0)||1;
              opts.forEach((o,i)=>{
                const pct=Math.round((votes[i]/total)*100);
                const row=document.createElement('div');
                row.className='my-2';
                row.innerHTML=`<div class="flex justify-between text-sm"><span>${o}</span><span>${pct}%</span></div>
                  <div class="h-2 rounded bg-gray-200"><div class="h-2 rounded" style="width:${pct}%"></div></div>`;
                root.appendChild(row);
              });
            } else {
              opts.forEach((o,i)=>{
                const btn=document.createElement('button');
                btn.className='btn border mr-2 mb-2';
                btn.textContent=o;
                btn.onclick=()=>{ votes[i]++; localStorage.setItem(key,'1'); localStorage.setItem(key+'_data', JSON.stringify(votes)); location.reload(); };
                root.appendChild(btn);
              });
            }
          }
          render();
        })();
      </script>
    </div>

    <div class="p-4 rounded-xl border">
      <h4 class="font-semibold">Password Strength Checker</h4>
      <input type="password" class="border rounded-lg px-3 py-2 w-full mt-2" id="pwd">
      <div id="score" class="text-sm mt-2"></div>
      <script>
        (function(){
          const i=document.getElementById('pwd'); const s=document.getElementById('score');
          if(!i) return;
          i.addEventListener('input', ()=>{
            const v=i.value;
            const len=v.length>=12, mix=/[a-z]/.test(v)&&/[A-Z]/.test(v), num=/\\d/.test(v), sym=/[^A-Za-z0-9]/.test(v);
            const total=[len,mix,num,sym].filter(Boolean).length;
            s.textContent=['Very Weak','Weak','Medium','Strong','Very Strong'][total];
          });
        })();
      </script>
    </div>
  </div>
  <?php return ob_get_clean();
});
