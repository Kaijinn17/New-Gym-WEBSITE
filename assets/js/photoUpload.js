const btnSendPhoto = document.querySelector("#send_photo");
const inputFile = document.getElementById('file');
const infoUpload = document.querySelector("#infoUpload");
const profilePhoto = document.querySelector("#profile_photo");
if (btnSendPhoto) {
    btnSendPhoto.addEventListener("click", evt => {
        evt.preventDefault();
        inputFile.click();
        const verifyInputFile = setInterval(async () => {
            if (inputFile.value != '') {
                clearInterval(verifyInputFile);
                const formData = new FormData();
                formData.append('profile_image', inputFile.files[0]);
                const options = {
                    method: 'POST',
                    body: formData,
                };
                const response = await fetch('./src/uploadImage.php', options);
                const responseData = await response.json();
                if (responseData.success) {
                    infoUpload.innerHTML = `<div class="alert alert-success" role="alert">${responseData.message}</div>`;
                    profilePhoto.src = responseData.path;
                    btnSendPhoto.style.display='show';
                    inputFile.style.display='show';
                } else {
                    infoUpload.innerHTML = `<div class="alert alert-danger" role="alert">${responseData.message}</div>`;
                }
                inputFile.value = '';
                setTimeout(() => {
                    infoUpload.innerHTML = ``;
                }, 14000);
            }
        }, 1000);
    });
}