(()=>{if(document.querySelector(".horas")){let a={categoria_id:"",dia:""};const r=document.querySelectorAll('[name="dia"]'),t=document.querySelector('[name="dia_id"]'),c=document.querySelector('[name="hora_id"]');function e(e){c.value="",t.value="",a[e.target.name]=e.target.value;const r=document.querySelector(".horas__hora--seleccionado");r&&r.classList.remove("horas__hora--seleccionado"),async function(){if(Object.values(a).includes(""))return;const e=`/api/eventos-horario?categoria_id=${a.categoria_id}&dia_id=${a.dia}`;if(console.log(e),e){const a=await fetch(e);!function({eventos:e}){const a=document.querySelectorAll("#horas li");if(a.forEach(e=>e.classList.add("horas__hora--none")),e){const r=e.map(e=>e.hora_id),t=document.querySelectorAll(".horas__hora--none");Array.from(t).map(e=>{e.removeEventListener("click",o)});const c=Array.from(a);c.filter(e=>!r.includes(e.dataset.horaId)).forEach(e=>{e.classList.remove("horas__hora--none")});document.querySelectorAll("#horas li:not(.horas__hora--none)").forEach(e=>{e.addEventListener("click",o)})}}(await a.json())}}()}function o(e){const o=document.querySelector(".horas__hora--seleccionado");o&&o.classList.remove("horas__hora--seleccionado"),e.target.classList.add("horas__hora--seleccionado"),c.value=e.target.dataset.horaId,t.value=document.querySelector('[name="dia"]:checked').value}document.querySelector('[name="categoria_id"]').addEventListener("change",e),r.forEach(o=>o.addEventListener("change",e))}})();
//# sourceMappingURL=evento.js.map
