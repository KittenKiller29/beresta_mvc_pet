function sendData(){
	let xml=new XMLHttpRequest();
	xml.open('POST','auth/startSession');
	xml.setRequestHeader('Content-Type', 'application/json');
	xml.onreadystatechange = function(){
		if (xml.readyState !== 4 || xml.status !== 200) {
   			return;
  		}
  		if(xml.responseText==1){
  			location.reload();
  		}
	}
	var userdata=[document.getElementById("inp1").value,document.getElementById("inp2").value];
	alert(userdata);
	xml.send(JSON.stringify(userdata));
}
let prevUrl = undefined;
setInterval(() => {
  const currUrl = window.location.href;
  if (currUrl != prevUrl) {
    // URL changed
    prevUrl = currUrl;
    //location.reload();
  }
}, 60);
window.onpopstate = function(event) {
  location.reload();
};
btn1.onclick=sendData;