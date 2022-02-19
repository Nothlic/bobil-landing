/**
 * Theme: Unikit - Responsive Bootstrap 5 Admin Dashboard
 * Author: Mannatthemes
 * Datatables Js
 */
const dataTable = new simpleDatatables.DataTable("#datatable", {
  searchable: true,
  fixedHeight: false,
});

document.querySelector("button.pdf").addEventListener("click", () => {
  dataTable.export({
    type: "pdf",
    download: true,
  });
});

document.querySelector("button.excel").addEventListener("click", () => {
  dataTable.export({
    type: "excel",
    download: true,
  });
});

document.querySelector("button.print").addEventListener("click", () => {
  dataTable.export({
    type: "print",
    download: true,
  });
});

// document.querySelector("button.csv").addEventListener("click", () => {
//   dataTable.export({
//     type: "csv",
//     download: true,
//     lineDelimiter: "\n\n",
//     columnDelimiter: ";",
//   });
// });
