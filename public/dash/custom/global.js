



function formJsSumbit(form_selecter){
    let form = document.querySelector(form_selecter);
  
    if(!form)
        return;

    let {method,action} = form;

    form.onsubmit = function(event){
        event.preventDefault();
        let data = Array.from(new FormData(form));
        data = formArrayToJson(data);     
        APIFetch(action,{
            method,
            body: JSON.stringify(data)           
        },(res) => {
            return NotifyResult(res);
        })
    }    

}








async function APIFetch(endpoint, reqObject = {}, callback = () => { }) {
    let resp = await fetch(endpoint, {
      method: "POST",
      headers: {
        "Content-type": "application/json",
      },
      ...reqObject,
    });
    let res = await resp.json();
    callback(res);
}
  
function formArrayToJson(form_data) {
    var object = {}; 
    form_data.forEach(([ name, value ]) => {
        object[name] = value;
    });
    return object;
}

function NotifyResult({
    success = false,
    message = "Error Found Please Try Again",
    title = "Operation Result",
    }, cb = () => { }) {
        Swal.fire({
            title: title,
            text: message,
            icon: success ? "success" : "error",
        }).then(cb);
}
  
function NotifyError(message = "Error Found Please Try Again") {
    Swal.fire({
        title: "Error",
        text: message,
        icon: "error",
    });
}


async function showConfirmDialog(message, callback) {
    Swal.fire({
        title: "Êtes-vous sûr?",
        text: message || "êtes-vous sûr de vouloir supprimer ce blog.",
        icon: "warning",
        showCancelButton: true,
        // buttons: true,
        // dangerMode: true,
    }).then(({ isConfirmed }) => {
        if (isConfirmed) {
            callback();
        }
    });
}
  


/* todo */
// setActiveSidebarLink();
// function setActiveSidebarLink() {
//     var current = location.pathname;
//     $("#sidenav-collapse-main a.nav-link").each(function () {
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if ($this.attr("href") === current) {
//         $this.addClass("active");
//         }
//     });
// }
  