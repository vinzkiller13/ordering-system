function uploadFile(name) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "upload.php");
    xhr.upload.addEventListener("progress", ({ loaded, total }) => {
        let fileLoaded = Math.floor((loaded / total) * 100);
        let fileTotal = Math.floor(total / 1000);
        let fileSize;
        (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB";
        let progressHTML = `<li class="row">
                                <i class="fa-solid fa-image" style="color: #9abffe;"></i>
                                <div class="content">
                                    <div class="details">
                                        <span class="name">${name} * Uploading</span>
                                        <span class="percent">${fileLoaded}%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress" style="width:${fileLoaded}%"></div>
                                    </div>
                                </div>
                            </li>`;
        if (loaded == total) {
            progressArea.innerHTML = progressHTML;
            let uploadedHTML = `<li class="row">
                                 <div class="content">
                                     <i class="fa-solid fa-image" style="color: #9abffe;"></i>
                                     <div class="details">
                                         <span class="name">${name} * Uploaded</span>
                                         <span class="size">${fileSize}</span>
                                     </div>
                                 </div>
                                 <i class="fa-solid fa-check" style="color: #9abffe;"></i>
                             </li>`;
            uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
        }
    });
}
