/**
 * Theme: Unikit - Responsive Bootstrap 5 Admin Dashboard
 * Author: Mannatthemes
 * Dropzone Js
 */

const addDynamicFile = function (className, title) {
  const buttonClass = document.querySelector(className);
  const countClass = document.querySelectorAll(`.input-${title}`).length;
  const dom = `
  <div class="col-md-2">
      <div class="file-wrapper">
              <div class="file-input file-${title}">
                  <i class="fas fa-file icon icon-${title}"></i>
                  <i class="fa fa-trash image-delete-icon" onclick="{handleDeleteDynamic('.file-${title}','.preview-${title}','.icon-${title}',${countClass})}"></i>
              </div>
          <input type="file" class="input-file input-${title}" id="image-${title}" name="${title}[${countClass}]" accept="image/*" onchange="{handleChangeDynamic('.input-${title}','.file-${title}','.icon-${title}','preview-${title}',${countClass},'#image-${title}','${title}')}" multiple />
    </div>
  </div>
  `;
  buttonClass.innerHTML += dom;
};

const handleDeleteDynamic = function (
  fileInput,
  previewContent,
  iconClass,
  id,
  inputId,
  name
) {
  const fileWrapper = document.querySelectorAll(fileInput);
  const parent = document.querySelectorAll(previewContent);
  const icon = document.querySelectorAll(iconClass);
  const input = document.querySelectorAll(inputId);
  fileWrapper[id].classList.remove("is-file");
  icon[id].style.display = "block";
  parent[id].remove();
  input[id].setAttribute("name", `${name}[-1]`);
};

const handleChangeDynamic = function (
  classId,
  fileInput,
  icon,
  previewClass,
  id,
  inputId,
  name
) {
  const fileUploader = document.querySelectorAll(classId);
  const getFile = fileUploader[id].files;
  const input = document.querySelectorAll(inputId);
  console.log(input);
  console.log(inputId);
  input[id].setAttribute("name", `${name}[${id}]`);

  if (getFile.length !== 0) {
    const uploadedFile = getFile[0];
    readFileDynamic(uploadedFile, fileInput, icon, previewClass, id);
  }
};

const readFileDynamic = function (
  uploadedFile,
  fileInput,
  iconClass,
  preview,
  id
) {
  if (uploadedFile) {
    const reader = new FileReader();
    reader.onload = function () {
      const parent = document.querySelectorAll(fileInput);
      const icon = document.querySelectorAll(iconClass);
      parent[id].classList.add("is-file");
      icon[id].style.display = "none";
      // document.querySelector("input").style.pointerEvents = "none";
      parent[id].style.border = "1px solid";
      parent[
        id
      ].innerHTML += `<img class="preview-content ${preview}" src=${reader.result} />`;
    };
    console.log(uploadedFile);
    console.log(reader);
    reader.readAsDataURL(uploadedFile);
  }
};

const handleDelete = function (id) {
  const fileWrapper = document.querySelectorAll(".file-input");
  const parent = document.querySelectorAll(".preview-content");
  const icon = document.querySelectorAll(".icon");
  fileWrapper[id].classList.remove("is-file");
  icon[id].style.display = "block";
  parent[id].remove();
};

const handleChange = function (id) {
  const fileUploader = document.querySelectorAll("#image");
  const getFile = fileUploader[id].files;
  if (getFile.length !== 0) {
    const uploadedFile = getFile[0];
    readFile(uploadedFile, id);
  }
};

const readFile = function (uploadedFile, id) {
  if (uploadedFile) {
    const reader = new FileReader();
    reader.onload = function () {
      const parent = document.querySelectorAll(".file-input");
      const icon = document.querySelectorAll(".icon");
      parent[id].classList.add("is-file");
      icon[id].style.display = "none";
      // document.querySelector("input").style.pointerEvents = "none";
      parent[id].style.border = "1px solid";
      parent[
        id
      ].innerHTML += `<img class="preview-content" src=${reader.result} />`;
    };
    reader.readAsDataURL(uploadedFile);
  }
};

$(document).on("change", ".file_multi_video", function (evt) {
  var $source = $("#video_here");
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});

var uppy = Uppy.Core()
  .use(Uppy.Dashboard, {
    inline: true,
    target: "#drag-drop-area",
  })
  .use(Uppy.Tus, { endpoint: "https://google.com" });

uppy.on("complete", function (result) {
  console.log(
    "Upload complete! We’ve uploaded these files:",
    result.successful
  );
});
