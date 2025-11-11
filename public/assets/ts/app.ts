//  UX Mejorada: confirmación de borrado + resaltar proveedores activos
console.log("✅ TypeScript cargado correctamente");

document.addEventListener("DOMContentLoaded", () => {
  // Confirmar antes de eliminar
  const deleteForms = document.querySelectorAll("form[action*='delete']");
  deleteForms.forEach(form => {
    form.addEventListener("submit", (e) => {
      const ok = confirm("¿Seguro que deseas eliminar este proveedor?");
      if (!ok) e.preventDefault();
    });
  });

  // Resaltar filas activas
  const rows = document.querySelectorAll("tbody tr");
  rows.forEach(row => {
    if (row.textContent?.includes("✅")) {
      row.classList.add("active-row");
    }
  });
});
